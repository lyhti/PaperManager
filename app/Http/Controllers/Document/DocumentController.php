<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DocumentController extends Controller{
    // 초기 문서 종류 가져오기
    public function index(Request $request) {
        $service = new DocumentTypeController();

        $docTypeList = $service->getDocType();

        $sessionEnt = Auth::user()->entrps_sn;                           // 업체번호

        $listCnt = base64_decode($request->input('listCnt'));                      // paginate 개수
        $startDate = base64_decode($request->input('startDate'));                  // 시작 날짜
        $endDate = base64_decode($request->input('endDate'));                      // 종료 날짜
        $docType = base64_decode($request->input('docType'));                      // 문서 종류
        $searchText = base64_decode($request->input('searchText'));                // 검색어

        // 시작 날짜 처음 조회 시, today - 30일
        if (!$request->input('startDate')) {
            $startDate = Carbon::now()->subMonths(1)->format('Y-m-d H:i:s');
        } else {
            $startDate = "$startDate 00:00:00";
        }

        // 종료 날짜 처음 조회 시, today
        if (!$request->input('endDate')) {
            $endDate = Carbon::now()->format('Y-m-d H:i:s');
        } else {
            $endDate = "$endDate 23:59:59";
        }

        $rtnData = Document::selectRaw(
            'document.document_sn, document.document_type_sn, dt.document_type_nm, dt.code_abbreviation,
                document.title, users.user_nm, document.tab_cnt, document.crt_dt, document.udt_dt',
        )
            ->leftjoin('document_type as dt', 'document.document_type_sn', '=', 'dt.document_type_sn')
            ->join('users', 'document.udt_user_sn', '=', 'users.user_sn')
            ->where('document.entrps_sn', $sessionEnt)
            ->where('document.use_yn', true)->whereBetween('document.udt_dt', [$startDate, $endDate]);

        // 초기 undefined 및 전체 선택이 아닐 시
        if ($docType && $docType != 'all') {
            $rtnData->where('dt.code_abbreviation', $docType);
        }

        // 검색어가 있으면
        if ($searchText) {
            $rtnData->where('document.title', 'like', "%$searchText%");
        }

        // 초기 undefined 값일 경우
        if (!$listCnt) {
            $listCnt = 10;
        }

        $rtnData = $rtnData->orderBy('document.document_sn', 'DESC')->paginate($listCnt);

        $num = $rtnData->total() - ($rtnData->currentPage() - 1) * ($rtnData->perPage());

        return view('document.list', compact('num','rtnData', 'docTypeList'));
    }
}
