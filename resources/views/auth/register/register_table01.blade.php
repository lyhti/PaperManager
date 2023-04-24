@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('css/loader.css') !!}
    {!! Html::style('css/register.css') !!}
    {!! Html::style('bootstrap/select/css/bootstrap-select.min.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form id="reg-from" method="POST" onsubmit="return false;">
                        @csrf
                        <input type="hidden" id="division" name="division" value="{{ $division }}"/>
                        <div class="card-header">사 업 장 정 보</div>
                        <div class="card-body">
                            @if($rtnData->count() > 0)
                                <input type="hidden" name="entrpsSn" value="{{ $rtnData->entrps_sn }}"/>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">사업자번호</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="{{ $rtnData->brno_format }}" disabled/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">업체명</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value="{{ $rtnData->entrps_nm }}" disabled/>
                                    </div>
                                </div>
                            @else
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">사업자번호</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="brno" name="brno" maxlength="12" autofocus
                                               onkeydown="brnoRep(this)" onkeyup="brnoRep(this)" placeholder="하이픈(-) 없이 번호만 입력"
                                               oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*)\./g, '$1');"
                                               onchange="brnoChkVal();"/>
                                    </div>
                                    <div class="confirm-btn">
                                        <button type="button" class="btn btn-outline-secondary" onclick="brnoSrch();">중복확인</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">업체명</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="entrpsNm" name="entrpsNm"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">업체 대표자 이름</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="rprsvNm" name="rprsvNm"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">전화번호</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="telNum" name="telNum" maxlength="14"
                                               onkeydown="telRep(this)" onkeyup="telRep(this)" placeholder="하이픈(-) 없이 번호만 입력"
                                               oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*)\./g, '$1');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Fax번호</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="faxNum" name="faxNum" maxlength="14"
                                               onkeydown="telRep(this)" onkeyup="telRep(this)" placeholder="하이픈(-) 없이 번호만 입력"
                                               oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*)\./g, '$1');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">대표 이메일</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="entrpsEmail" name="entrpsEmail"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">주소</label>
                                    <div class="col-md-6 input-group">
                                        <input type="text" class="form-control" id="zip" name="zip" readonly placeholder="우편번호"/>
                                        <input type="text" class="form-control" id="address" name="address" readonly placeholder="기본주소"/>
                                        <button type="button" id="addr-search-btn" class="btn btn-outline-secondary" onclick="openAddrPop();">
                                            <img src="{{ asset('bootstrap/bootstrap-icons-1.10.2/search.svg') }}"/>
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">상세주소</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="detail_address" name="detail_address" placeholder="상세주소"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">문서선택</label>
                                    <div class="col-md-6">
                                        <select class="my-select selectpicker show-menu-arrow" data-live-search="true" data-width="100%" multiple>
                                            @if($docType->count() > 0)
                                                @foreach($docType as $row)
                                                    <option value="{{ $row-> document_type_sn }}">{{ $row-> document_type_nm }}</option>
                                                @endforeach
                                            @else
                                                <span>내 용 없 음</span>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="card-header">담 당 자 정 보</div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">담당자 이름</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" autofocus/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">아이디(이메일)</label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" id="email" name="email" onchange="emailChkVal();"/>
                                </div>
                                <div class="confirm-btn">
                                    <button type="button" class="btn btn-outline-secondary" onclick="emailSrch();">중복확인</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">비밀번호</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="password" name="password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">비밀번호 확인</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">휴대폰 번호</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phoneNum" maxlength="14"
                                           onkeydown="telRep(this)" onkeyup="telRep(this)" placeholder="하이픈(-) 없이 번호만 입력"
                                           oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*)\./g, '$1');"/>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-danger" onclick="history.back();">취    소</button>
                                    <button type="button" class="btn btn-primary" onclick="saveRegister();" style="float: right;">회원가입</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('bootstrap/select/js/bootstrap-select.min.js') !!}
    {!! Html::script('bootstrap/select/js/i18n/defaults-ko_KR.min.js') !!}
    {{-- 카카오 주소 api --}}
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
@endpush

@push('custom-scripts')
    <script>
        /***********************************************
         * Loader 선언 변수
         ***********************************************/
        var loader = `<div id="load_screen">` +
            `<div class="lds-spinner">` +
            `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
            `</div>`;

        /***********************************************
         * 변수 선언
         ***********************************************/
        let brnoCheck = false;          // 사업자번호 중복 체크 여부
        let emailCheck = false;         // 이메일 중복 체크 여부
        let division;
        let selectDocument = [];


        $(function() {
            division = $('#division').val();
            $('.my-select').selectpicker(); // select피커 작동

            $("#reg-from").validate({
                // 규칙
                rules : {
                    name : {
                        required : true,    // 필수 입력 여부
                        minlength : 1       // 최소 입력 글자수
                    },
                    entrpsNm : {
                        required : true,    // 필수 입력 여부
                        minlength : 1       // 최소 입력 글자수
                    },
                    rprsvNm : {
                        required : true,    // 필수 입력 여부
                        minlength : 1       // 최소 입력 글자수
                    },
                    entrpsEmail : {
                        required : true,
                        email: true         // email 형식
                    },
                    email : {
                        required : true,
                        email: true         // email 형식
                    },
                    password : {
                        required : true,
                        minlength : 6       // 최소 입력 글자수
                    },
                    passwordConfirm : {
                        required : true,
                        equalTo : '#password'
                    },
                    phoneNum : {
                        required : true,
                        minlength : 11       // 최소 입력 글자수
                    },
                    telNum : {
                        required : true,
                        minlength : 11       // 최소 입력 글자수
                    },
                    faxNum : {
                        required : true,
                        minlength : 11       // 최소 입력 글자수
                    },
                    brno : {
                        required : true,
                        minlength : 10      // 최소 입력 글자수
                    }
                },

                // 메시지
                messages : {
                    name : {
                        required : "담당자 이름 입력은 필수입니다.",
                    },
                    entrpsNm : {
                        required : "업체명 입력은 필수입니다.",
                    },
                    rprsvNm : {
                        required : "업체 대표자 이름 입력은 필수입니다.",
                    },
                    entrpsEmail : {
                        required : "이메일 입력은 필수입니다.",
                        email : "이메일 형식으로 입력해주세요."
                    },
                    email : {
                        required : "이메일 입력은 필수입니다.",
                        email : "이메일 형식으로 입력해주세요."
                    },
                    password : {
                        required : "비밀번호 입력은 필수입니다.",
                        minlength : "최소 6자 이상 입력해주세요."
                    },
                    passwordConfirm : {
                        required : "비밀번호 확인 입력은 필수입니다.",
                        equalTo : "비밀번호가 동일하지 않습니다."
                    },
                    phoneNum : {
                        required : "",
                        minlength : "지역번호 및 전화번호를 다시 입력해주세요."
                    },
                    telNum : {
                        required : "",
                        minlength : "지역번호 및 전화번호를 다시 입력해주세요."
                    },
                    faxNum : {
                        required : "",
                        minlength : "지역번호 및 팩스번호를 다시 입력해주세요."
                    },
                    brno : {
                        required : "사업자번호 입력은 필수입니다.",
                        minlength : "번호를 확인 후 다시 입력해주세요."
                    }
                },

                //메시지 태그
                errorElement : 'span',          // 태그
                errorClass : 'input-error',     // 클레스 이름
                validClass : 'vaild'
            });
        });

        // 전화번호 입력 시, 자동 하이픈(-)
        function telRep(data) {
            $(data).val($(data).val().replace(/[^0-9]/g, "")
                .replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3")
                .replace("--", "-"));
        }

        // 사업자등록번호 입력 시, 자동 하이픈(-)
        function brnoRep(data) {
            $(data).val($(data).val().replace(/[^0-9]/g, "")
                .replace(/(^[0-9]{3}|^[0-9]{2})([0-9]+)?([0-9]{5})$/,"$1-$2-$3")
                .replace("--", "-"));
        }

        // 이메일 수정 시, 중복확인 false
        function emailChkVal() { emailCheck = false; }

        // 사업자번호 수정 시, 중복확인 false
        function brnoChkVal() { brnoCheck = false; }


        /**
         * 사업자 번호 중복확인
         * */
        function brnoSrch() {
            let brno = document.getElementById('brno').value.replaceAll('-','');

            if (!brno) {
                alert('사업자번호는 필수 입력입니다.');
                return false;
            }
            if(brno.length != 10){
                alert('사업자번호를 확인 후 다시 입력해주세요.');
                return false;
            }
            if (brno.validationMessage) {
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            $.ajax({
                type: 'get',
                url: 'searchBrno',
                data: {
                    brno: brno,
                },
                success: function (response) {
                    if (response == 'false') {
                        alert('이미 사용 중인 사업자번호 입니다.');
                        brnoCheck = false;
                    } else {
                        alert('사용 가능한 사업자번호 입니다.');
                        brnoCheck = true;
                    }
                    $('#load_screen').remove();                 // Loader 제거
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    alert('사업자 번호 확인 중 오류가 발생했습니다.');
                }
            });
        }

        /**
         * 아이디(이메일) 중복확인
         * */
        function emailSrch() {
            let email = document.getElementById('email');

            if (!email.value) {
                alert('아이디(이메일) 필수 입력입니다.');
                return false;
            }

            if (email.validationMessage) {
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            $.ajax({
                type: 'get',
                url: 'searchEmail',
                data: {
                    email: email.value,
                },
                success: function (response) {
                    if (response == 'false') {
                        alert('이미 사용 중인 아이디(이메일) 입니다.');
                        emailCheck = false;
                    } else {
                        alert('사용 가능한 아이디(이메일) 입니다.');
                        emailCheck = true;
                    }
                    $('#load_screen').remove();                 // Loader 제거
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    alert('이메일 중복 확인 중 오류가 발생했습니다.');
                }
            });
        }

        /**
         * 카카오 주소 api 연동
         * */
        function openAddrPop() {
            new daum.Postcode({
                // 선택시 입력값 세팅
                oncomplete: function(data) {
                    document.getElementById("zip").value = data.zonecode;           // 우편번호 넣기
                    document.getElementById("address").value = data.address;        // 주소 넣기
                    document.querySelector("input[name=detail_address]").focus();   // 상세입력 포커싱
                }
            }).open();
        }

        /**
         * 회원가입 저장
         * */
        function saveRegister() {
            if (division == 'business') {
                // 사업자 번호
                if (!$('input[name=brno]').val() || !$('input[name=brno]').valid()) {
                    alert('사업자번호를 확인해주시기 바랍니다.');
                    document.getElementsByName('brno')[0].focus();
                    return false;
                }
                if (!brnoCheck) {
                    alert('사업자번호 중복확인이 필요합니다.');
                    return false;
                }

                // 업체명
                if (!$('input[name=entrpsNm]').val() || !$('input[name=entrpsNm]').valid()) {
                    alert('업체명을 확인해주시기 바랍니다.');
                    document.getElementsByName('entrpsNm')[0].focus();
                    return false;
                }

                // 업체 대표자 이름
                if (!$('input[name=rprsvNm]').val() || !$('input[name=rprsvNm]').valid()) {
                    alert('대표명을 확인해주시기 바랍니다.');
                    document.getElementsByName('rprsvNm')[0].focus();
                    return false;
                }

                // 업체 대표자 이메일
                if (!$('input[name=entrpsEmail]').val() || !$('input[name=entrpsEmail]').valid()) {
                    alert('대표 이메일을 확인해주시기 바랍니다.');
                    document.getElementsByName('entrpsEmail')[0].focus();
                    return false;
                }

                // 업체 주소
                if (!$('input[name=zip]').val() || !$('input[name=zip]').valid() || !$('input[name=address]').val() || !$('input[name=address]').valid()) {
                    alert('업체 주소를 확인해주시기 바랍니다.');
                    document.getElementsByName('detail_address')[0].focus();
                    return false;
                }

                // 문서 선택
                if ($(".my-select option:selected").length < 1) {
                    alert('사용할 문서를 1개 이상 선택해주세요.');
                    document.getElementsByName('entrpsEmail')[0].focus();
                    return false;
                }
            }

            // 담당자 이름
            if (!$('input[name=name]').val() || !$('input[name=name]').valid()) {
                alert('담당자 이름을 확인해주시기 바랍니다.');
                document.getElementsByName('name')[0].focus();
                return false;
            }

            // 아이디(이메일)
            if (!$('input[name=email]').val() || !$('input[name=email]').valid()) {
                alert('아이디(이메일)를 확인해주시기 바랍니다.');
                document.getElementsByName('email')[0].focus();
                return false;
            }
            if (!emailCheck) {
                alert('아이디(이메일) 중복확인이 필요합니다.');
                return false;
            }

            // 비밀번호
            if (!$('input[name=password]').val() || !$('input[name=password]').valid() || !$('input[name=passwordConfirm]').val() || !$('input[name=passwordConfirm]').valid()) {
                alert('비밀번호를 확인해주시기 바랍니다.');
                document.getElementsByName('password')[0].focus();
                return false;
            }

            // 비밀번호 확인
            if ($('input[name=password]').val() != $('input[name=passwordConfirm]').val()) {
                alert('비밀번호가 맞지 않습니다.\n다시 확인해주시기 바랍니다.');
                document.getElementsByName('passwordConfirm')[0].focus();
                return false;
            }

            // formData 파일 추가
            var formData = new FormData($("#reg-from")[0]);
            var selDoc = $(".my-select option:selected");

            for (var i = 0; i < selDoc.length; i++) {
                selectDocument.push(selDoc[i].value);
            }

            // json 문자열로 변환. (controller 에서 배열로 받기 위해)
            var json_arr = JSON.stringify(selectDocument);

            formData.append('selectDoc', json_arr);

            $('#div_for_loader').html(loader);          // Loader 실행

            $.ajax({
                type: 'post',
                url: 'saveRegister',
                data: formData,
                processData: false,                 // formData를 query String으로 설정하지 않움
                contentType: false,                 // post token error
                success: function (response) {
                    if(response.success == false) {
                        console.log(response);
                        alert('ERROR!\n회원가입에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                        $('#load_screen').remove();                 // Loader 제거
                    } else {
                        alert('회원가입이 완료되었습니다.\n로그인 페이지로 이동합니다.');
                        $('#load_screen').remove();                 // Loader 제거
                        location.href="/login";
                    }
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    alert('회원가입 저장 중 오류가 발생했습니다.');
                }
            });
        }
    </script>
@endpush
