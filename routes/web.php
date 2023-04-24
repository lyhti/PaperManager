<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\Document\DocumentDataController;
use App\Http\Controllers\Document\DocumentTypeController;

Auth::routes();

Route::get('/', function () { return view('main'); });

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index'); //TODO:삭제예정

Route::get('ttestt', function () { return view('ttestt.ttestt'); });

Route::middleware('guest')->group(function () {
    Route::get('/login', function () { return view('auth.login'); })->name('login');
    Route::post('userLogin', [LoginController::class, 'login']);
    Route::get('createApiToken', [RegisterController::class, 'createApiToken']); //TODO:삭제예정

    // 회원가입
    Route::group(['prefix' => 'register'], function() {
        Route::get('/', function () { return redirect('register/category'); });
        Route::get('category', function () { return view('auth.register.register'); });
        Route::get('searchEntrps', [RegisterController::class, 'searchEntrps']);
        Route::post('getJoin', [RegisterController::class, 'getJoin']);
        Route::get('searchBrno', [RegisterController::class, 'searchBrno']);
        Route::get('searchEmail', [RegisterController::class, 'searchEmail']);
        Route::post('saveRegister', [RegisterController::class, 'saveRegister']);
    });
});

//로그인 유저 권한
Route::middleware('auth')->group(function () {
    Route::post('logOut', [LoginController::class, 'logOut']);
    Route::get('ttestt2', function () { return view('ttestt.ttestt2'); });
    Route::get('ttestt3', function () { return view('ttestt.ttestt3'); });
    Route::get('/pdf_content', function () { return view('pdf.pdf_content'); });

    Route::get('{docType}/create', [\App\Http\Controllers\DocumentDataController::class, 'index']);
    Route::get('{docType}/getDoc', [\App\Http\Controllers\DocumentDataController::class, 'index']);         // DocumentData 조회
    Route::get('/getDocData', [\App\Http\Controllers\DocumentDataController::class, 'getDocData']);             // DocumentType 조회
    Route::post('/insert2', [\App\Http\Controllers\DocumentDataController::class, 'insertData']);               // 문서 insert (공통)   TODO: 수정필요 - 명칭
    Route::post('/update2', [\App\Http\Controllers\DocumentDataController::class, 'updateData']);               // 문서 update (공통)   TODO: 수정필요 - 명칭


    Route::get('/getDocType', [DocumentTypeController::class, 'getDocType']);           // DocumentType 조회
//    Route::get('{docTypeCd}/getDoc', [DocumentDataController::class, 'index']);         // DocumentData 조회
    Route::post('insert', [DocumentDataController::class, 'insertData']);               // 문서 insert (공통)   TODO: 수정필요 - 명칭
    Route::post('update', [DocumentDataController::class, 'updateData']);               // 문서 update (공통)   TODO: 수정필요 - 명칭

    Route::get('{docTypeCd}/insert',[DocumentDataController::class, 'index']);         // 문서 기본 frame 가져오기 TODO: 수정필요 - index, indexCreate? 하나의 함수로

    // 문서조회
    Route::group(['prefix' => 'document'], function() {
        Route::get('list/{page?}/{startDate?}/{endDate?}/{docType?}/{searchText?}', [DocumentController::class, 'index']);                       // 문서 조회 화면 → 문서 타입 가져오기
        Route::get('getDocList', [DocumentController::class, 'getDocList']);            // 문서 조회
        Route::get('documentPdf', [DocumentDataController::class, 'documentPdf']);      // 다중 pdf 출력
    });

    // 점검기록표
    Route::group(['prefix' => '25-8kv_girs'], function() {
        Route::get('get258kvGirs', [DocumentDataController::class, 'get258kvgirs']);          // 문서 frame 조회
    });

    // CT 2차회로 저항 측정 기록표
    Route::group(['prefix' => 'ct_scrmrs'], function() {
        Route::get('getCtscrmrs', [DocumentDataController::class, 'getctscrmrs']);      // 문서 frame 조회
    });

    // 개폐동작특성시험
    Route::group(['prefix' => 'cooct'], function() {
        Route::get('getCooct', [DocumentDataController::class, 'getcooct']);            // 문서 frame 조회
    });

    // 시공사진
    Route::group(['prefix' => 'construc'], function() {
        Route::get('getConstruc', [DocumentDataController::class, 'getconstruc']);      // 문서 frame 조회
        Route::get('insertTab',[DocumentDataController::class, 'insertTab']);          // 페이지(tab) 추가
    });
});
