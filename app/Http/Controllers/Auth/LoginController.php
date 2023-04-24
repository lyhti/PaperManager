<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logOut');
    }

    public function login(Request $request){
        $inputId = $request->input('email');
        $inputPwd = $request->input('password');
        $user = User::all();
        $userId = User::where('email', $request->email)->first();
        $validation = $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validation)) {
            //다른 세션 로그인시 다른세션 로그아웃
            Auth::logoutOtherDevices($inputPwd);
            Log::info("맞다");
            return "success";
        } else {
            foreach($user as $test){
                $pwdchk = Hash::check($request->password, $test->password);

                if ($userId) {
                    Log::info($test->email);
                    Log::info($pwdchk);
                    Log::info("이메일이 맞다");
                    return "falsePw";
                }

                if ($inputId != $test->email) {
                    Log::info($test->email);
                    Log::info($pwdchk);
                    Log::info("패스워드가 맞다");
                    return 'falseId';
                }
            }
            
        }
    }

    public function logOut(Request $request) {
        Auth::logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
