<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\DocumentTypeEmploy;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class DocumentAPIController extends Controller {
    // 업체별 문서 종류 가져오기
    public function getDocList(Request $request) {
        try {
            $sessionEnt = Auth::user()->entrps_sn;          // 업체번호

            $searchWord = $request->input('search_word');
            $sDate = $request->input('start_date');
            $eDate = $request->input('end_date');
            $docType = $request->input('doc_type');
            $paginate = $request->input('paginate');

            $rtn = Document::selectRaw(
                'document.document_sn, document.document_type_sn, dt.document_type_nm, dt.code_abbreviation,
                document.title, users.user_nm, document.tab_cnt, document.crt_dt, document.udt_dt',
            )
                ->leftjoin('document_type as dt', 'document.document_type_sn', '=', 'dt.document_type_sn')
                ->join('users', 'document.udt_user_sn', '=', 'users.user_sn')
                ->where('document.entrps_sn', $sessionEnt)
                ->where('document.use_yn', true)->whereBetween('document.udt_dt', [$sDate, $eDate]);

            if ($docType && $docType != 'all') {
                $rtn->where('dt.code_abbreviation', $docType);
            }

            if ($searchWord) {
                $rtn->where('document.title', 'like', "%$searchWord%");
            }

            $rtn = $rtn->orderBy('document.document_sn', 'DESC');

            return $this->sendResponse($rtn->paginate($paginate), 'User retrieved successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
