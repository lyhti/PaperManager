<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentColumn;
use App\Models\DocumentData;
use App\Models\DocumentType;
use App\Models\DocumentTypeEmploy;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Storage;

class DocumentDataAPIController extends Controller {
    /** 업체별 문서 종류 가져오기 */
    public function getDocData(Request $request) {
        try {
            $docSn = $request->input('doc_sn');

            $rtn = DocumentData::selectRaw(
                'document_data.document_data_sn, document_data.document_sn, document_data.document_data_value,
                document_data.crt_user_sn, document_data.crt_dt, document_data.udt_user_sn, document_data.udt_dt,
                dc.document_column_nm, dc.document_column_value'
            )
                ->leftjoin('document_column as dc', 'document_data.document_column_sn', '=', 'dc.document_column_sn')
                ->where('document_data.document_sn', $docSn)
                ->get();

            return $this->sendResponse($rtn, 'Get Construc Data successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    /** document insert */
    public function insertDocData(Request $request) {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);

        $service = new Controller();
        $sessionEnt = Auth::user()->entrps_sn;
        $sessionUsn = Auth::user()->user_sn;

        try {
            DB::transaction(function () use ($request, $service, $sessionEnt, $sessionUsn) {
                $docTypeSn = DocumentType::docTypeSn($request->input('doc_type'));

                $chckYmd = $request->input('chck_ymd');
                $subSttnNm = $request->input('sub_sttn_nm');
                $eqpNm = $request->input('eqp_nm');

                $docTitle = $chckYmd.'_'.$subSttnNm.'S/S '.$eqpNm;

                /** Document insert start */
                $query = new Document();
                $query->document_type_sn = $docTypeSn;
                $query->entrps_sn = $sessionEnt;
                $query->title = $docTitle;
                if ($request->input('tab_cnt')) {
                    $query->tab_cnt = $request->input('tab_cnt');
                }
                $query->crt_user_sn = $sessionUsn;
                $query->udt_user_sn = $sessionUsn;
                $query->save();
                $query->refresh();
                /** Document insert end */

                /** DocumentData insert start */
                $docColList = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

                foreach ($docColList as $row) {
                    if ($request->hasFile($row->document_column_value)) {
                        // 파일 확장자명 가져오기
                        $inFileNm = $request->file($row->document_column_value)->getClientOriginalName();
                        $extension = explode('.', $inFileNm);
                        $extension = end($extension);

                        // 사진번호 (컬럼명 마지막 숫자)
                        $num = explode('_', $row->document_column_value);
                        $num = end($num);

                        // file name 만들기 [업체번호_유저번호_문서번호_문서타입_날짜(년월일시분초)_사진번호.확장자명]
                        $fileName = $service->fileName($query->document_sn, $docTypeSn, $num, $extension);

                        $query2 = new DocumentData();
                        $query2->document_sn = $query->document_sn;
                        $query2->document_column_sn = $row->document_column_sn;
                        $query2->document_data_value = $fileName;
                        $query2->crt_user_sn = $sessionUsn;
                        $query2->udt_user_sn = $sessionUsn;
                        $query2->save();
                        $query2->refresh();

                        Storage::putFileAs("public/uploads", $request->file($row->document_column_value), $fileName);

                    } else {
                        if ($request->input($row->document_column_value) != '' && $request->input($row->document_column_value) != null) {
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
            return $this->sendResponse($request, 'Insert Document Data successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    /** document updateOrCreate */
    public function updateDocData(Request $request) {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);

        $service = new Controller();
        $sessionUsn = Auth::user()->user_sn;

        try {
            DB::transaction(function () use ($request, $service, $sessionUsn) {
                $docSn = $request->input('doc_sn');
                $docTypeSn = DocumentType::docTypeSn($request->input('doc_type'));

                $chckYmd = $request->input('chck_ymd');
                $subSttnNm = $request->input('sub_sttn_nm');
                $eqpNm = $request->input('eqp_nm');

                $docTitle = $chckYmd.'_'.$subSttnNm.'S/S '.$eqpNm;

                /** Document update start */
                $query = Document::find($docSn);

                if ($query->title != $docTitle) {
                    $query->title = $docTitle;
                }

                // tab_cnt 값이 있을 경우 (시공사진만 데이터 전달)
                if ($request->input('tab_cnt')) {
                    if ($query->tab_cnt != $request->input('tab_cnt')) {
                        $query->tab_cnt = $request->input('tab_cnt');
                    }
                }

                $query->udt_user_sn = $sessionUsn;
                $query->udt_dt = now();
                $query->save();
                $query->refresh();
                /** Document update end */

                /** DocumentData update start */
                $docColList = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

                foreach ($docColList as $row) {
                    if ($request->hasFile($row->document_column_value)) {
                        Log::info('파일 '.$row->document_column_nm.':'.$request->input($row->document_column_value));

                        // 파일 확장자명 가져오기
                        $inFileNm = $request->file($row->document_column_value)->getClientOriginalName();
                        $extension = explode('.', $inFileNm);
                        $extension = end($extension);

                        // 사진번호 (컬럼명 마지막 숫자)
                        $num = explode('_', $row->document_column_value);
                        $num = end($num);

                        // file name 만들기 [업체번호_유저번호_문서번호_문서타입_날짜(년월일시분초)_사진번호.확장자명]
                        $fileName = $service->fileName($query->document_sn, $docTypeSn, $num, $extension);

                        $rtn = DocumentData::updateOrCreate(
                            [
                                'document_sn' => $docSn,
                                'document_column_sn' => $row->document_column_sn,
                            ],
                            [
                                'document_data_value' => $fileName,
                                'udt_user_sn' => $sessionUsn,
                            ]
                        );

                        //신규 생성인 경우 세션유저정보 저장
                        if ($rtn->wasRecentlyCreated) {
                            $rtn->crt_user_sn = $sessionUsn;
                            $rtn->save();
                        }

                        Storage::putFileAs("public/uploads", $request->file($row->document_column_value), $fileName);

                    } else {
                        if ($request->input($row->document_column_value) != '' && $request->input($row->document_column_value) != null) {
                            Log::info('값 있음 : '.$request->input($row->document_column_value));

                            $rtn = DocumentData::updateOrCreate(
                                [
                                    'document_sn' => $docSn,
                                    'document_column_sn' => $row->document_column_sn,
                                ],
                                [
                                    'document_data_value' => $request->input($row->document_column_value),
                                    'udt_user_sn' => $sessionUsn,
                                ]
                            );

                            //신규 생성인 경우 세션유저정보 저장
                            if ($rtn->wasRecentlyCreated) {
                                $rtn->crt_user_sn = $sessionUsn;
                                $rtn->save();
                                $rtn->refresh();
                            }
                        } else {
                            // 데이터 삭제 시, 추후 다시 표시 되면 안되기 떄문에 del_dt update
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
                /** DocumentData insert end */
            });
            return $this->sendResponse($request, 'Update Document Data successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
