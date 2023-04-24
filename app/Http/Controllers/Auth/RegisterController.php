<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DocumentType;
use App\Models\DocumentTypeEmploy;
use App\Models\Enterprise;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // 사업장 가입 여부 확인
    public function searchEntrps(Request $request) {
        $entrpsNm = $request->input('entrpsNm');
        $brno = $request->input('brno');

        if (!$entrpsNm && !$brno) {
            $rtnData = Enterprise::where(function ($query) use ($entrpsNm, $brno) {
                $query->nmLike($entrpsNm)->orWhere('brno', $brno);
            })->get();
        } else if (!$entrpsNm) {
            $rtnData = Enterprise::getBrno($brno)->get();
        } else {
            $rtnData = Enterprise::nmLike($entrpsNm)->get();
        }

        // 조회된 값이 없는 경우
        if (count($rtnData) < 1) {
            return 'false';
        } else {
            return view('auth.register.register_modal01', compact('rtnData'));
        }
    }

    // 회원가입 페이지
    public function getJoin(Request $request) {
        $entrpsSn = $request->input('entrps_sn');
        $division = $request->input('division');
        $docType = DocumentType::all();

        if ($entrpsSn) {
            $rtnData = Enterprise::find($entrpsSn);
        } else {
            $rtnData = new Collection();
        }

        return view('auth.register.register_table01', compact('rtnData', 'division', 'docType'));
    }

    // 사업자 번호 중복확인
    public function searchBrno(Request $request) {
        $brno = $request->input('brno');

        Log::info($brno);

        $rtnData = Enterprise::getBrno($brno)->get();

        if (count($rtnData) > 0) {
            return "false";
        } else {
            return "success";
        }
    }

    // 아이디(이메일) 중복확인
    public function searchEmail(Request $request) {
        $email = $request->input('email');

        $rtnData = User::userId($email)->get();

        if (count($rtnData) > 0) {
            return "false";
        } else {
            return "success";
        }
    }

    // 회원가입 저장
    public function saveRegister(Request $request) {
        try {
            // 가입 유형 사업자 vs. 담당자
            $division = $request->input('division');

            DB::transaction(function() use($request, $division) {
                $user = new User();
                $entrps = new Enterprise();

                // 사업자 회원가입
                if ($division == "business") {
                    $brno = $request->input('brno');
                    $brno = str_replace('-','',$brno);

                    $entrps->entrps_nm = $request->input('entrpsNm');
                    $entrps->brno = $brno;
                    $entrps->email = $request->input('entrpsEmail');
                    $entrps->rprsv_nm = $request->input('rprsvNm');
                    $entrps->tel_number = $request->input('telNum');
                    $entrps->fax_number = $request->input('faxNum');
                    $entrps->zip = $request->input('zip');
                    $entrps->address = $request->input('address');
                    // 상세주소 입력 시
                    if ($request->input('detail_address')) {
                        $entrps->detail_address = $request->input('detail_address');
                    }
                    $entrps->save();
                    $entrps->refresh();

                    $user->entrps_sn = $entrps->entrps_sn;
                    $user->approved = true;
                } else {    // 담당자 회원 가입
                    $user->entrps_sn = $request->input('entrpsSn');
                    // TODO: 추후 관리자 미승인전 담당자 이용불가.
//                $user->approved = false;
                }

                // 담당자 회원 가입
                $user->user_nm = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->phone_number = $request->input('phoneNum');
                $user->remember_token = Str::random(60);
                $user->save();
                $user->refresh();

                $token = $user->createToken($request->input('email'));
                $user->api_token = $token->plainTextToken;
                $user->crt_user_sn = $user->user_sn;
                $user->udt_user_sn = $user->user_sn;
                $user->save();
                $user->refresh();

                if ($division == "business") {
                    $entrps->crt_user_sn = $user->user_sn;
                    $entrps->udt_user_sn = $user->user_sn;
                    $entrps->save();
                    $entrps->refresh();

                    // 업체별 문서종류 작성
                    $selectDoc = json_decode($request->input('selectDoc'));

                    foreach ($selectDoc as $docTypeSn) {
                        $docTypeEmploy = new DocumentTypeEmploy();
                        $docTypeEmploy->entrps_sn = $entrps->entrps_sn;
                        $docTypeEmploy->document_type_sn = $docTypeSn;
                        $docTypeEmploy->crt_user_sn = $user->user_sn;
                        $docTypeEmploy->udt_user_sn = $user->user_sn;
                        $docTypeEmploy->save();
                        $docTypeEmploy->refresh();
                    }
                }
            });

            return $output = ['data' => $division, 'success' => true, 'msg' => '회원 가입 성공'];

        } catch (Exception $e) {
            Log::error($e->getMessage());
            $error = "File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage();
            return $output = ['data' => $error, 'success' => false, 'msg' => $e->getMessage()];
        }
    }

    // 임시 Api Token 값 생성.
    public function createApiToken(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        try {
            $user = User::userId($email)->whereNull('api_token');

            if ($user->count() > 0) {
                $user = $user->first();
                if (! $user || ! Hash::check($password, $user->password)) {
                    throw ValidationException::withMessages([
                        'email' => ['The provided credentials are incorrect.'],
                    ]);
                }

                $token = $user->createToken($email)->plainTextToken;
                $user->api_token = $token;
                $user->save();
                $user->refresh();

                return $output = ['data' => $token, 'success' => true, 'msg' => 'API-Token 생성 성공'];
            } else {
                return $output = ['data' => '없음', 'success' => false, 'msg' => '검색 유저 없음'];
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $error = "File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage();
            return $output = ['data' => $error, 'success' => false, 'msg' => $e->getMessage()];
        }
    }
}
