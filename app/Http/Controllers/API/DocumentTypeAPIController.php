<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use App\Models\DocumentTypeEmploy;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class DocumentTypeAPIController extends Controller {
    // 업체별 문서 종류 가져오기
    public function getDocType(Request $request) {
        try {
            $entrpsSn = Auth::user()->entrps_sn;

            $rtn = DocumentType::joinTypeEmploy()->get();

            Log::info('Auth 업체번호 : '.$entrpsSn);
            Log::info('결과값 : '.$rtn);

            return $this->sendResponse($rtn, 'User retrieved successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    public function getCrntDocType(Request $request) {
        try {
            $entrpsSn = Auth::user()->entrps_sn;

            $rtn = DocumentType::joinTypeEmploy()->get();

            Log::info('Auth 업체번호 : '.$entrpsSn);
            Log::info('결과값 : '.$rtn);

            return $this->sendResponse($rtn, 'User retrieved successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
