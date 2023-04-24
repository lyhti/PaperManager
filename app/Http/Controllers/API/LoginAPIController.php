<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginAPIController extends Controller {
    // 로그인
    public function logIn(Request $request) {
        try {
            // 필수값 체크
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->messages()], 200);
            }

            $user = User::userId($request->input('email'));

            // 등록 된 email 있는지 확인
            if ($user->count() > 0) {
                $user = $user->first();

                if (!Auth::attempt($validator->validated()) || !Hash::check($request->input('password'), $user->password)) {
                    return response()->json(['success' => false, 'message' => 'Invalid Password']);
                }

                $token = $user->createToken($request->input('email'))->plainTextToken;
                $user->api_token = $token;
                $user->save();
                $user->refresh();

                return $this->sendResponse($user, 'User retrieved successfully');
            } else {
                return response()->json(['success' => false, 'message' => 'Invalid Email']);
            }
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    // API 토큰 발행
    public function getToken(Request $request) {
        try {
            $email = $request->input('email');

            $user = User::userId($email);

            if ($user->count() > 0) {
                $token = $user->value('api_token');

                return $this->sendResponse($token, 'User api_token get successfully');
            } else {
                return response()->json(['success' => false, 'message' => 'Invalid Email']);
            }
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }

    // 로그아웃
    public function logout(Request $request) {
        try {
            $userSn = $request->input('user_sn');

            Auth::logout();

            // 현재 요청을 인증하는 데 사용된 토큰 해지
            $request->user()->currentAccessToken()->delete();

            return $this->sendResponse($userSn, 'User logOut successfully');
        } catch (Exception $e){
            return $this->sendError($e->getMessage(), 200);
        }
    }
}
