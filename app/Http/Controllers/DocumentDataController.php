<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentColumn;
use App\Models\DocumentData;
use App\Models\DocumentType;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DocumentDataController extends Controller {
    // 문서 종류별 view 조회
    public function index(Request $request, $docType) {
        $docSn = $request->input('docSn');

        if ($docSn) {
            $docSn = base64_decode($docSn);
        }

        $view = "$docType.$docType";

        /** DB document_type -> 점검기록표들의 code_abbreviation 수정 후 코드 변경 예정 */
        if ($docType == '25-8kv_girs') {
            $view = "inspection.$view";
        }

        return view("$view", compact('docSn', 'docType'));
    }

    // 문서 데이터 조회
    public function getDocData(Request $request) {
        $sessionEnt = Auth::user()->entrps_sn;
        $sessionUn = Auth::user()->user_sn;
        $rtn = new Collection();
        $pageCnt = 0;

        $docSn = $request->input('docSn');
        $docType = $request->input('docType');

        Log::info("docSn : $docSn");
        Log::info("docType : $docType");

        if ($docSn == '' || $docSn == null) {
            $rtnData = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value as data_value')
                ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
                ->where('dt.code_abbreviation', $docType)
                ->get();
        } else {
            $rtnData = Document::selectRaw('dc.document_column_value, dd.document_data_value as data_value')
                ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
                ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
                ->where('document.entrps_sn', $sessionEnt)
                ->where('document.document_sn', $docSn)
                ->get();
        }

        foreach ($rtnData as $row) {
            $rtn->put($row->document_column_value, $row->data_value);

            // 개폐동작특성시험 sub_title 갯수 만큼 페이지 생성을 위한 count 넣기.
            if ($docType == 'cooct') {
                if (strpos($row->document_column_value, 'sub_title') !== false) {
                    $pageCnt++;
                    $rtn->put('pageCnt', $pageCnt);
                }
            }
        }

        $view = "$docType.$docType";

        /** DB document_type -> 점검기록표들의 code_abbreviation 수정 후 코드 변경 예정 */
        if ($docType == '25-8kv_girs') {
            $view = "inspection.$view";
        }

        Log::info("view : $view");
        Log::info("rtn : $rtn");

        return view($view.'_table', compact('rtn'));
    }

    /** document insert */
    public function insertData(Request $request) {
        $docType = $request->input('docType');
        $service = new Controller();
        $sessionEsn = Auth::user()->entrps_sn;
        $sessionUsn = Auth::user()->user_sn;
        $docTypeSn = DocumentType::where('code_abbreviation', $docType)->first()->document_type_sn;

        try {
            DB::transaction(function () use ($sessionEsn, $sessionUsn, $request, $service, $docTypeSn) {
                $date = $request->input('chck_ymd');
                $subSttnNm = $request->input('sub_sttn_nm');
                $eqpNm = $request->input('eqp_nm');
                $title = $date.'_'.$subSttnNm.'S/S '.$eqpNm;

                /** Document insert start */
                $query = new Document();
                $query->document_type_sn = $docTypeSn;
                $query->entrps_sn = $sessionEsn;
                $query->title = $title;
                $query->version = 1;
                $query->crt_user_sn = $sessionUsn;
                $query->udt_user_sn = $sessionUsn;

                if ($request->input('tabs')) {
                    $query->tab_cnt = $request->input('tabs');
                }

                $query->save();
                $query->refresh();
                /** Document insert end */

                $docSn = $query->document_sn;

                /** DocumentData insert start */
                $docColList = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

                foreach ($docColList as $row) {
                    // 이미지 storage 저장
                    if ($request->hasFile($row->document_column_value)) {
                        $inFileNm = $request->file($row->document_column_value)->getClientOriginalName();       // 파일 확장자명 가져오기
                        $extension = explode('.', $inFileNm);
                        $extension = end($extension);
                        // 사진번호 (컬럼명 마지막 텍스트)
                        $num = explode('_', $row->document_column_value);
                        $num = end($num);
                        // file name 만들기 [업체번호_유저번호_문서번호_문서타입_날짜(년월일시분초)_사진번호.확장자명]
                        $fileName = $service->fileName($docSn, $docTypeSn, $num, 'png');

                        $query2 = new DocumentData();
                        $query2->document_sn = $query->document_sn;                 // CT 2차회로 저항 측정 기록표 컬럼명 sn 번호
                        $query2->document_column_sn = $row->document_column_sn;
                        $query2->crt_user_sn = $sessionUsn;
                        $query2->udt_user_sn = $sessionUsn;
                        $query2->document_data_value = $fileName;
                        $query2->save();
                        $query2->refresh();

                        Storage::putFileAs("public/uploads", $request->file($row->document_column_value), $fileName);           //이미지 Storage 저장
                    } else {
                        //이미지 외 데이터 저장
                        if ($request->input($row->document_column_value) != '') {
                            $query2 = new DocumentData();
                            $query2->document_sn = $query->document_sn;
                            $query2->document_column_sn = $row->document_column_sn;
                            $query2->document_data_value = $request->input($row->document_column_value);
                            $query2->crt_user_sn = $sessionUsn;
                            $query2->udt_user_sn = $sessionUsn;
                            $query2->save();
                            $query2->refresh();
                        }
                    }
                }
                /** DocumentData insert end */
            });

            return ['data' => $request, 'success' => true, 'msg' => ''];
        } catch (Exception $e) {
            $error = "File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage();
            Log::error('CT 2차회로 저항 측정 기록표 insert 에러 >>>>> ' . $error);
            return $output = ['data' => $error, 'success' => false, 'msg' => $e->getMessage()];
        }
    }

    /** document updateOrCreate */
    public function updateData(Request $request) {
        $docType = $request->input('docType');
        $sessionUsn = Auth::user()->user_sn;
        $service = new Controller();
        $docTypeSn = DocumentType::where('code_abbreviation', $docType)->first()->document_type_sn;

        try {
            DB::transaction(function () use ($sessionUsn, $request, $service, $docTypeSn) {
                $docSn = $request->input('docSn');

                /** Document update start */
                $query = Document::find($docSn);
                $date = $request->input('chck_ymd');
                $subSttnNm = $request->input('sub_sttn_nm');
                $eqpNm = $request->input('eqp_nm');
                $title = $date.'_'.$subSttnNm.'S/S '.$eqpNm;

                // 기존 title 과 새로운 title 다를 경우 update.
                if ($query->title != $title) {
                    $query->title = $title;
                    $query->udt_user_sn = $sessionUsn;
                    $query->save();
                    $query->refresh();
                }

                if ($request->input('tabs')) {
                    $tabs = $request->input('tabs');

                    if ($query->tab_cnt != $tabs) {
                        $query->tab_cnt = $tabs;
                        $query->udt_user_sn = $sessionUsn;
                        $query->save();
                        $query->refresh();
                    }
                }
                /** Document update end */

                /** DocumentData update start */
                $docColList = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

                foreach ($docColList as $row) {
                    if ($request->hasFile($row->document_column_value)) {
                        // 사진번호 (컬럼명 마지막 숫자)
                        $num = explode('_', $row->document_column_value);
                        $num = end($num);

                        // file name 만들기 [업체번호_유저번호_문서번호_문서타입_날짜(년월일시분초)_사진번호.확장자명]
                        $fileName = $service->fileName($docSn, $docTypeSn, $num, 'png');
                        $rtn = DocumentData::updateOrCreate(
                            [
                                'document_sn' => $docSn,
                                'document_column_sn' => $row->document_column_sn
                            ],
                            [
                                'document_data_value' => $fileName,
                                'udt_user_sn' => $sessionUsn
                            ]
                        );

                        //신규 생성인 경우 세션유저정보 저장
                        if ($rtn->wasRecentlyCreated) {
                            $rtn->crt_user_sn = $sessionUsn;
                            $rtn->save();
                        }
                        Storage::putFileAs("public/uploads", $request->file($row->document_column_value), $fileName);
                    } else {
                        if ($request->input($row->document_column_value)!='') {
                            $rtn = DocumentData::updateOrCreate(
                                [
                                    'document_sn' => $docSn,
                                    'document_column_sn' => $row->document_column_sn
                                ],
                                [
                                    'document_data_value' => $request->input($row->document_column_value),
                                    'udt_user_sn' => $sessionUsn
                                ]
                            );

                            //신규 생성인 경우 세션유저정보 저장
                            if ($rtn->wasRecentlyCreated) {
                                $rtn->crt_user_sn = $sessionUsn;
                                $rtn->save();
                            }
                        } else {
                            //기존에는 데이터가 있지만 삭제한 경우
                            $docData = DocumentData::where('document_sn', $docSn)->where('document_column_sn', $row->document_column_sn);
                            if ($docData->count() > 0) {
                                $docData->update([
                                    'udt_user_sn' => $sessionUsn,
                                    'del_dt' => now()
                                ]);
                            }
                        }
                    }
                }
                /** DocumentData update end */
            });

            return $output = ['data' => $request, 'success' => true, 'msg' => ''];
        } catch (Exception $e) {
            $error = "File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage();
            Log::error('시공사진 update 에러 >>>>> ' . $error);
            return $output = ['data' => $error, 'success' => false, 'msg' => $e->getMessage()];
        }
    }
}
