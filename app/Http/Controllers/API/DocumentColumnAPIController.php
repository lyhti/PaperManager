<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DocumentColumn;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class DocumentColumnAPIController extends Controller {
    // 업체별 문서 종류 가져오기
    public function getDocColList(Request $request) {
        try {
            $docType = $request->input('doc_type');

            $docTypeSn = DocumentType::docTypeSn($docType);

            $rtn = DocumentColumn::where('document_type_sn', $docTypeSn)->get();

            return $this->sendResponse($rtn, 'Get Document Column successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
