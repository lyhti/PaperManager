@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/login.css') !!}
    {!! Html::style('css/loader.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"><br>
                <div class="card">
                    <div class="card-header">로그인</div>
                    <div class="card-body">
                        <form method="POST" id="loginForm" onsubmit="return false;">
                            {!! csrf_field() !!}
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">이메일</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">비밀번호</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="password" name="password"/>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button onclick="login()" class="btn btn-primary">로그인</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        var loader = `<div id="load_screen">` +
        `<div class="lds-spinner">` +
        `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
        `</div>`;

        $(document).ready(function() {
            $("#loginForm").validate({
                // 규칙
                rules : {
                    email : {
                        required : true,
                        email: true         // email 형식
                    },
                    password : {
                        required : true,
                        minlength : 6       // 최소 입력 글자수
                    }
                },

                // 메시지
                messages : {
                    email : {
                        required : "이메일 입력은 필수입니다.",
                        email : "이메일 형식으로 입력해주세요."
                    },
                    password : {
                        required : "비밀번호 입력은 필수입니다.",
                        minlength : "최소 6자 이상 입력해주세요."
                    },
                },

                //메시지 태그
                errorElement : 'span',          // 태그
                errorClass : 'input-error',     // 클레스 이름
                validClass : 'vaild'
            })
        });

        // function apiToken() {
        //     var email = $('#email').val();
        //     var password = $('#password').val();
        //
        //     if (!email || !password) {
        //         alert('값 입력하시오.');
        //         return false;
        //     }
        //
        //     $.ajax({
        //         type: 'get',
        //         url: 'createApiToken',
        //         data: {
        //             email: email,
        //             password: password,
        //         },
        //         success: function (response) {
        //             if (response !='false') {
        //                 console.log("token : " + response.data);
        //             }
        //         },
        //         error: function (error) {
        //             console.log(error);
        //             alert('ERROR!');
        //         }
        //     });
        // }

        function login() {
            var blank_pattern = /^\s+|\s+$/g;
            var emailchk = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.[a-zA-Z]{2,4}$/;

            if (document.getElementsByName('email')[0].value.replace(blank_pattern, '') == '') {
                alert('아이디를 입력하세요.');
                document.getElementsByName('email')[0].focus();
                return false;
            }

            if (!emailchk.test(document.getElementsByName('email')[0].value)) {
                alert('아이디(이메일)를 확인해주시기 바랍니다.');
                return false;
            }

            if (document.getElementsByName('password')[0].value.replace(blank_pattern, '') == '') {
                alert('비밀번호를 입력하세요.');
                document.getElementsByName('password')[0].focus();
                return false;
            }

            if (document.getElementsByName('password')[0].value.length < 6) {
                alert('비밀번호를 6자 이상 입력해주세요.')
                document.getElementsByName('password')[0].focus();
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                type: 'post',
                url: 'userLogin',
                data: {
                    "_token": "{{CSRF_TOKEN()}}",
                    email: email,
                    password: password,
                },
                success: function (response) {
                    if (response == 'falseId') {
                        alert('등록 되지 않은 아이디 입니다.');
                        $('#email').focus();
                        document.getElementsByName('email')[0].value = '';
                        document.getElementsByName('password')[0].value = '';
                    } else if (response == 'falsePw') {
                        alert('비밀번호가 일치하지 않습니다.\n다시 확인해주시기 바랍니다.');
                        $('#password').focus();
                        document.getElementsByName('password')[0].value = '';
                    } else {
                        window.location='/'
                    }
                    $('#load_screen').remove(); // Loader 제거
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    alert('로그인 중 오류가 발생했습니다.');
                }
            });
        }
    </script>
@endpush
