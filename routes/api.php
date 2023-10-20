<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginAPIController;
use App\Http\Controllers\API\DocumentTypeAPIController;
use App\Http\Controllers\API\DocumentAPIController;
use App\Http\Controllers\API\DocumentDataAPIController;
use App\Http\Controllers\API\DocumentColumnAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('app')->group(function () {
    Route::post('logIn', [LoginAPIController::class, 'logIn']);
    Route::get('getToken', [LoginAPIController::class, 'getToken']);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('logOut', [LoginAPIController::class, 'logOut']);
        Route::get('getDocType', [DocumentTypeAPIController::class, 'getDocType']);
        Route::get('getCrntDocType', [DocumentTypeAPIController::class, 'getCrntDocType']);
        Route::get('getDocColList', [DocumentColumnAPIController::class, 'getDocColList']);
        Route::get('getCrntDocColList', [DocumentColumnAPIController::class, 'getCrntDocColList']);
        Route::get('getDocColListWithVersion', [DocumentColumnAPIController::class, 'getDocColListWithVersion']);
        Route::get('getDocList', [DocumentAPIController::class, 'getDocList']);
        Route::get('getDocData', [DocumentDataAPIController::class, 'getDocData']);
        Route::post('insertDocData', [DocumentDataAPIController::class, 'insertDocData']);
        Route::post('updateDocData', [DocumentDataAPIController::class, 'updateDocData']);
    });
});
