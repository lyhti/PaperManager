<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Utils\ResponseUtil;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {

    }

    /**
     * @param $result
     * @param $message
     * @return mixed
     */
    public function sendResponse($result, $message) {
        return Response::json(ResponseUtil::makeResponse($message, $result), 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
    JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $error
     * @param int $code
     * @return JsonResponse
     */
    public function sendError($error, $code = 200): JsonResponse {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function fileName($docSn, $docType, $num, $extension) {
        $CompanySn = Auth::user()->entrps_sn;
        $userSn = Auth::user()->user_sn;
        $date = Carbon::now()->format('YmdHisu');

        return $CompanySn.'_'.$userSn.'_'.$docSn.'_'.$docType.'_'.$date.'_'.$num.'.'.$extension;
    }

//    public function apiFileName($CompanySn, $userSn, $docSn, $docType, $num, $extension) {
//        $date = Carbon::now()->format('YmdHisu');
//
//        return $CompanySn.'_'.$userSn.'_'.$docSn.'_'.$docType.'_'.$date.'_'.$num.'.'.$extension;
//    }
}
