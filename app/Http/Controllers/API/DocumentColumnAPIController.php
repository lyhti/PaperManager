<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DocumentColumn;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class DocumentColumnAPIController extends Controller {
    // 업체별 문서 종류 가져오기
    public function getDocColList(Request $request) {
        Log::info('DocumentColumnAPIController - getDocColList');

        try {
            $docType = $request->input('doc_type');

            // if($docType == 'work_sft_mtg_risk_asmt_edu_jrnl') {
            //     Log::info(sprintf("%s - line %d - %s", __FILE__, __LINE__, $docType));
            //     Log::info($docType);
            //     Log::info($request->input('data_version'));
            //     Log::info($request->input('view_version'));
            //     $users = DB::table('users')->first();
            //     Log::info($users->user_sn);
            // } 

            $docTypeSn = DocumentType::docTypeSn($docType);

            $rtn = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

            return $this->sendResponse($rtn, 'Get Document Column successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    public function getCrntDocColList(Request $request) {
        Log::info('DocumentColumnAPIController - getCrntDocColList');

        try {
            $docType = $request->input('doc_type');

            // $docTypeSn = DocumentType::docTypeSn($docType);
            $docTypeSn = DB::table('document_type')
                        ->select('document_type_sn')
                        ->where('code_abbreviation', $docType)
                        ->where('crnt', 1)
                        ->first();

            $rtn = DocumentColumn::where('document_type_sn', $docTypeSn->document_type_sn)->get();

            Log::info(sprintf("%s - line %d - %d", __FILE__, __LINE__, $rtn->count()));

            if($rtn->count() > 0) {
                return $this->sendResponse($rtn, 'Get Document Column successfully');
            } else {
                return $this->sendError('No column data', 200);
            }
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
    
    public function getDocColListWithVersion(Request $request) {
        Log::info('DocumentColumnAPIController - getCrntDocColList');

        try {
            $docType = $request->input('doc_type');
            $dataVersion = $request->input('data_version');
            $viewVersion = $request->input('view_version');

            // $docTypeSn = DocumentType::docTypeSn($docType);
            $docTypeSn = DB::table('document_type')
                        ->select('document_type_sn')
                        ->where('code_abbreviation', $docType)
                        ->where('data_version', $dataVersion)
                        ->where('view_version', $viewVersion)
                        ->first();

            $rtn = DocumentColumn::where('document_type_sn', $docTypeSn->document_type_sn)->get();

            Log::info(sprintf("%s - line %d - %d", __FILE__, __LINE__, $rtn->count()));

            if($rtn->count() > 0) {
                return $this->sendResponse($rtn, 'Get Document Column successfully');
            } else {
                return $this->sendError('No column data', 200);
            }
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
