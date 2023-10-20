<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Document\DocumentTypeController;
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
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class DocumentDataController extends Controller {
    /** 다중 pdf 출력 */
    public function documentPdf(Request $request) {
        $docType = $request->input('docType');
        $functionNm = str_replace('-','',$docType);
        $functionNm = str_replace('_','',$functionNm);
        $function = 'get'.$functionNm;

        return $this->$function($request);
    }

    public function index(Request $request, $docType) {
        $crud = "crud-r";
        $docSn = $request->input('docSn');

        $dataVersion = 1;
        $viewVersion = 1;

        Log::info(sprintf("%s - line %d, DocumentDataController - index", __FILE__, __LINE__));
        Log::info($request);

        // document_sn 번호 유무
        if ($docSn) {
            $docSn = base64_decode($docSn);

            // decode 한 document_sn 번호가 숫자 이면
            if (is_numeric($docSn)) {
                $rtn = Document::join('document_type as dt', 'document.document_type_sn', '=', 'dt.document_type_sn')
                    ->where('document.document_sn', $docSn)
                    ->where('dt.code_abbreviation', $docType)
                    ->count();

                // 해당 document 가 없으면
                if ($rtn == 0) {
                    echo '<script>
                            alert("올바른 접근 방법이 아닙니다.");
                            history.back();
                        </script>';
                }
            } else {    // decode 한 document_sn 번호가 문자 이면 (임의 url 수정 / ex. getDoc?docSn=123)
                echo '<script>
                        alert("올바른 접근 방법이 아닙니다.");
                        history.back();
                    </script>';
            }
        } else {
            $crud = "crud-c";

            if($docType == 'work_sft_mtg_risk_asmt_edu_jrnl') {
                $result = DB::table('document_type')
                                ->select('document_type_sn', 'data_version', 'view_version')
                                ->where('code_abbreviation', $docType)
                                ->where('crnt', 1)
                                ->first();
                $dataVersion = $result->data_version;
                $viewVersion = $result->view_version;

                Log::info(sprintf("%s - line %d : %s", __FILE__, __LINE__, $docType.'.'.$docType.'_v_'.strval($viewVersion)));

                return view($docType.'.'.$docType.'_v_'.strval($viewVersion) , compact('crud', 'docSn', 'docType', 'dataVersion', 'viewVersion'));
            }
        }

        if($docType == 'work_sft_mtg_risk_asmt_edu_jrnl') {
            $result = DB::table('document_type')
                ->select('document_type_sn', 'data_version', 'view_version')
                ->where('code_abbreviation', $docType)
                ->where('crnt', 1)
                ->first();
            $dataVersion = $result->data_version;
            $viewVersion = $result->view_version;

            Log::info(sprintf("%s - line %d : %s", __FILE__, __LINE__, $docType.'.'.$docType.'_v_'.strval($viewVersion)));

            return view($docType.'.'.$docType.'_v_'.strval($viewVersion) , compact('crud', 'docSn', 'docType', 'dataVersion', 'viewVersion'));
        }

        return view($docType.'.'.$docType , compact('crud', 'docSn', 'docType'));
    }

    /** 시공사진 document 조회 */
    public function getconstruc(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }

            $tabcnt = Document::where('document_sn', $docSn)->value('tab_cnt');

            for ($i = 1; $i <= $tabcnt; $i++) {
                ${"data0".$i} = view('construc.construc_tables.construc_table0'.$i, compact('rtnData', 'docSn'))->render();
                array_push($rtnArray, ${"data0".$i});
            }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }

            $data = view('construc.construc_tables.construc_table01', compact('rtnData', 'docSn'))->render();
            array_push($rtnArray, $data);
        }

        return $rtnArray;
    }

    /** 시공사진 탭 추가 */
    public function insertTab(Request $request) {
        $docSn = $request->input('docSn');
        $crud = $request->input('crud');
        $tab = $request->input('tab');
        $rtnData = new Collection;

        return view('construc.construc_tables.construc_table0'.$tab, compact('rtnData', 'docSn', 'crud'));
    }

    /** 개폐동작특성시험 document 조회 */
    public function getcooct(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnData1 = new Collection();
        $rtnArray = [];

        // 개폐동작특성시험 sub_title 조회
        $rtn1 = DocumentColumn::selectRaw('document_column.document_column_nm, document_column.document_column_value')
            ->join('document_type as dt', 'document_column.document_type_sn','=','dt.document_type_sn')
            ->where('dt.code_abbreviation', 'cooct')
            ->get();

        foreach ($rtn1 as $row) {
            $rtnData1->put($row->document_column_value, $row->document_column_nm);
        }

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
                ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
                ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
                ->where('document.entrps_sn', Auth::user()->entrps_sn)
                ->where('document.document_sn', $docSn)
                ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
                ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
                ->where('dt.document_type_sn', $docTypeCd)
                ->get();

            foreach ($rtn as $row) {
                $rtnData->put($row->document_column_value, $row->document_column_default_value);
            }
        }

        $data01 = view('cooct.cooct_tables.cooct_table01', compact('rtnData', 'docSn', 'rtnData1'))->render();

        array_push($rtnArray, $data01);

        return $rtnArray;
    }

    /** 점검기록표 document 조회 */
    public function get258kvgirs(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }
        }

        $data01 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table01', compact('rtnData', 'docSn'))->render();
        $data02 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table02', compact('rtnData', 'docSn'))->render();
        $data03 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table03', compact('rtnData', 'docSn'))->render();
        $data04 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table04', compact('rtnData', 'docSn'))->render();
        $data05 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table05', compact('rtnData', 'docSn'))->render();
        $data06 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table06', compact('rtnData', 'docSn'))->render();
        $data07 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table07', compact('rtnData', 'docSn'))->render();
        $data08 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table08', compact('rtnData', 'docSn'))->render();
        $data09 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table09', compact('rtnData', 'docSn'))->render();
        $data10 = view('25-8kv_girs.25-8kv_girs_tables.25-8kv_girs_table10', compact('rtnData', 'docSn'))->render();

        array_push($rtnArray, $data01);
        array_push($rtnArray, $data02);
        array_push($rtnArray, $data03);
        array_push($rtnArray, $data04);
        array_push($rtnArray, $data05);
        array_push($rtnArray, $data06);
        array_push($rtnArray, $data07);
        array_push($rtnArray, $data08);
        array_push($rtnArray, $data09);
        array_push($rtnArray, $data10);

        return $rtnArray;
    }

    /** CT 2차회로 document 조회 */
    public function getctscrmrs(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            Log::info($rtn);
            Log::info("rtn");
            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }
        }

        $data = view('ct_scrmrs.ct_scrmrs_tables.ct_scrmrs_table01', compact('rtnData','docSn'))->render();

        array_push($rtnArray, $data);

        Log::info("rtnArray");
        Log::info($rtnArray);

        return $rtnArray;
    }


    /** 작업안전 체크리스트(S17 철구 조립 및 모선배선공사) document 조회 */
    public function getworksftchcklists17(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        Log::info('DocumentDataController::getworksftchcklists17 - docTypeCd');
        Log::info($docTypeCd);

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            Log::info($rtn);
            Log::info("rtn");
            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }
        }

        $data = view('work_sft_chck_list_s17.work_sft_chck_list_s17_tables.work_sft_chck_list_s17_table', compact('rtnData','docSn'))->render();

        array_push($rtnArray, $data);

        return $rtnArray;
    }


    /** 작업전후 안전회의 및 위험성평가 후 교육일지 document 조회 */
    public function getworksftmtgriskasmtedujrnl(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            Log::info($rtn);
            Log::info("rtn");
            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }
        }

        $data = view('work_sft_mtg_risk_asmt_edu_jrnl.work_sft_mtg_risk_asmt_edu_jrnl_tables.work_sft_mtg_risk_asmt_edu_jrnl_table', compact('rtnData','docSn'))->render();

        array_push($rtnArray, $data);

        return $rtnArray;
    }


    /** 중량물 취급 작업계획서 document 조회 */
    public function gethvymtrlhndlworkplan(Request $request) {
        Log::info("gethvymtrlhndlworkplan");

        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }
        } else {
            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.document_type_sn', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            Log::info($rtn);
            Log::info("rtn");
            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }
        }

        $data = view('hvy_mtrl_hndl_work_plan.hvy_mtrl_hndl_work_plan_tables.hvy_mtrl_hndl_work_plan_table', compact('rtnData','docSn'))->render();

        array_push($rtnArray, $data);

        return $rtnArray;
    }


    /** 위험성평가(송전-가공)-측량 document 조회 */
    public function getRskAsmsPwrtOvhdSrvy(Request $request) {
        $docSn = $request->input('docSn');
        $docTypeCd = $request->input('docTypeCd');
        $rtnData = new Collection();
        $rtnArray = [];

        Log::info(sprintf("%s - line %d, DocumentDataController - getRskAsmsPwrtOvhdSrvy", __FILE__, __LINE__));

        if ($docSn != null && $docSn != "") {
            $rtn = Document::selectRaw('dd.document_data_value, dc.document_column_value')
            ->join('document_data as dd', 'document.document_sn', '=', 'dd.document_sn')
            ->join('document_column as dc', 'dd.document_column_sn', '=', 'dc.document_column_sn')
            ->where('document.entrps_sn', Auth::user()->entrps_sn)
            ->where('document.document_sn', $docSn)
            ->wherenull('dd.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_data_value); }

            $tabcnt = Document::where('document_sn', $docSn)->value('tab_cnt');

            for ($i = 1; $i <= $tabcnt; $i++) {
                ${"data0".$i} = view('construc.construc_tables.construc_table0'.$i, compact('rtnData', 'docSn'))->render();
                array_push($rtnArray, ${"data0".$i});
            }
        } else {
            Log::info(sprintf("%s - line %d, DocumentDataController - getRskAsmsPwrtOvhdSrvy", __FILE__, __LINE__));

            $rtn = DocumentColumn::selectRaw('document_column.document_column_value, document_column.document_column_default_value')
            ->join('document_Type as dt', 'document_column.document_type_sn', '=', 'dt.document_type_sn')
            ->where('dt.code_abbreviation', $docTypeCd)
            ->wherenull('document_column.del_dt')
            ->get();

            foreach ($rtn as $row) { $rtnData->put($row->document_column_value, $row->document_column_default_value); }

            Log::info(sprintf("%s - line %d, DocumentDataController - getRskAsmsPwrtOvhdSrvy", __FILE__, __LINE__));

            $data01 = view('rsk_asmt_pwrt_ovhd_srvy.rsk_asmt_pwrt_ovhd_srvy_tables.rsk_asmt_pwrt_ovhd_srvy_table01', compact('rtnData', 'docSn'))->render();
            $data02 = view('rsk_asmt_pwrt_ovhd_srvy.rsk_asmt_pwrt_ovhd_srvy_tables.rsk_asmt_pwrt_ovhd_srvy_table02', compact('rtnData', 'docSn'))->render();
            $data03 = view('rsk_asmt_pwrt_ovhd_srvy.rsk_asmt_pwrt_ovhd_srvy_tables.rsk_asmt_pwrt_ovhd_srvy_table03', compact('rtnData', 'docSn'))->render();

            Log::info(sprintf("%s - line %d, DocumentDataController - getRskAsmsPwrtOvhdSrvy", __FILE__, __LINE__));

            array_push($rtnArray, $data01);
            array_push($rtnArray, $data02);
            array_push($rtnArray, $data03);

            Log::info(sprintf("%s - line %d, DocumentDataController - getRskAsmsPwrtOvhdSrvy", __FILE__, __LINE__));

        }

        return $rtnArray;
    }

    /** 위험성평가(송전-가공)-측량 탭 추가 */
    public function insertRskAsmtPwrtOvhdSrvyTab(Request $request) {
        $docSn = $request->input('docSn');
        $crud = $request->input('crud');
        $tab = $request->input('tab');
        $rtnData = new Collection;

        return view('rsk_asmt_pwrt_ovhd_srvy.rsk_asmt_pwrt_ovhd_srvy_tables.rsk_asmt_pwrt_ovhd_srvy_table0'.$tab, compact('rtnData', 'docSn', 'crud'));
    }

    /** document insert */
    public function insertData(Request $request) {
        Log::info('insertData');
        Log::info($request);

        $docTypeCd = $request->input('docTypeCd');
        $service = new Controller();
        $sessionEsn = Auth::user()->entrps_sn;
        $sessionUsn = Auth::user()->user_sn;
        $docTypeSn = DocumentType::where('code_abbreviation', $docTypeCd)->first()->document_type_sn;

        try {
            DB::transaction(function () use ($sessionEsn, $sessionUsn, $request, $service, $docTypeSn) {

                // CT 2차회로 저항 측정 기록표 doc_type_sn
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

                // CT 2차회로 저항 측정 기록표 컬럼명 List
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
        $docTypeCd = $request->input('docTypeCd');
        $sessionUsn = Auth::user()->user_sn;
        $service = new Controller();
        $docTypeSn = DocumentType::where('code_abbreviation', $docTypeCd)->first()->document_type_sn;

        Log::info("DocumentDateController::updateData");
        Log::info($request);


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
                // 시공사진 컬럼명 List
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
