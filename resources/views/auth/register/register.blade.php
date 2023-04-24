@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('css/loader.css') !!}
    {!! Html::style('css/register.css') !!}
    {!! Html::style('bootstrap/bootstrap-icons-1.10.2/bootstrap-icons.css') !!}
@endpush

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->
    <div class="sign_wrap">
        <div class="card">
            <div class="card-header register-header">회 원 가 입 유 형</div>
            <div class="card-body register-body">
                <span class="desc">가입 유형을 선택해 주세요.</span>
                <div class="sign-type sign-enterprise">
                    <a href="javascript:void(0);" onclick="selectBiz();">사업자</a>
                </div>
                <div class="sign-type sign-user">
                    <a href="javascript:void(0);">담당자</a>
                </div>
                <div class="sign-info">
                    <strong class="title">문서관리(KEDMS) 서비스 가입여부 확인</strong>
                    <span class="desc"><b style="color: #00a59d;">업체명 또는 사업자 등록번호</b>로 사업장을 검색하세요</span>
                    <div class="tbl-wrap">
                        <table class="table type2">
                            <colgroup>
                                <col width="157px;">
                                <col width="303px;">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th class="text-left">업체명</th>
                                <td class="text-left">
                                    <input type="text" class="inp inp-round width-full" id="entrpsNm" placeholder="업체명 입력">
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">사업자 등록번호</th>
                                <td class="text-left">
                                    <input type="text" class="inp inp-round width-30" placeholder="입력" id="bisNum1" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    <span class="hyphen">-</span>
                                    <input type="text" class="inp inp-round width-30" placeholder="입력" id="bisNum2" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    <span class="hyphen">-</span>
                                    <input type="text" class="inp inp-round width-30" placeholder="입력" id="bisNum3" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-wrap mt-32 mb-0">
                        <button type="button" id="modalBiz" class="btn btn-dark width-full" data-toggle="modal" onclick="return chkBisNum();">사업장 가입여부 확인</button>
                    </div>
                </div>
                <div class="btn-wrap mt-16">
                    <a href="{{url('/login')}}" class="btn btn-outline-dark width-full">로그인 화면으로 이동</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Start --}}
    <div class="modal fade" id="entrpsModal" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">사업장 가입 여부</h4>
                    <button type="button" class="btn-close" onclick="closeModal();"></button>
                </div>
                <div class="modal-body" id="entrpsData"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeModal();">취  소</button>
                    <button type="button" class="btn btn-default" onclick="nextRegister();">다  음</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal End --}}
@endsection

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
        var division;


        $(function() {
            $('.sign-user').click(function () {
                $(this).toggleClass("sign-active");

                if ($(this).hasClass('sign-active')) {
                    $('.sign-info').show();
                } else {
                    $('.sign-info').hide();
                }
            })
        });

        /***********************************************
         * 사업장 가입여부 확인 모달
         ***********************************************/
        function chkBisNum() {
            var bisNum1 = document.getElementById('bisNum1').value;
            var bisNum2 = document.getElementById('bisNum2').value;
            var bisNum3 = document.getElementById('bisNum3').value;
            var entrpsNm = document.getElementById('entrpsNm').value;

            if (bisNum1 == '' && bisNum2 == '' && bisNum3 == '' && entrpsNm == '') {
                alert('업체명 또는 사업자 등록번호를 입력해 주세요.');
                return false;
            } else {
                $('#div_for_loader').html(loader);          // Loader 실행

                $.ajax({
                    type: 'get',
                    url: 'searchEntrps',
                    data: {
                        entrpsNm: entrpsNm,
                        brno: bisNum1+bisNum2+bisNum3,
                    },
                    success: function (response) {
                        console.log(response);
                        if (response !='false') {
                            $("#entrpsModal").modal('show');
                            $('#entrpsData').html(response);
                            $('#load_screen').remove();                 // Loader 제거
                        } else {
                            alert('조회 내용이 없습니다.');
                            $('#load_screen').remove();                 // Loader 제거
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        $('#load_screen').remove(); // Loader 제거
                        alert('업체 가입 여부 확인 중 오류가 발생했습니다.');
                    }
                });
            }
        }

        /**
         * 모달 닫기 - modal body 에 append 한 데이터 삭제
         * */
        function closeModal() {
            $('#entrpsData').empty();
            $('#entrpsModal').modal('hide');
        }

        /**
         * 사업자 선택
         * */
        function selectBiz() {
            division = 'business'

            let f = document.createElement('form');
            let token = $('meta[name="csrf-token"]').attr('content');

            // csrf 토큰
            let obj;
            obj = document.createElement('input');
            obj.setAttribute('type', 'hidden');
            obj.setAttribute('name', '_token');
            obj.setAttribute('value', token);
            f.appendChild(obj);

            // devision 전달
            let obj2;
            obj2 = document.createElement('input');
            obj2.setAttribute('type', 'hidden');
            obj2.setAttribute('name', 'division');
            obj2.setAttribute('value', division);
            f.appendChild(obj2);

            f.setAttribute('method', 'post');
            url = 'getJoin';
            f.setAttribute('action', url);
            document.body.appendChild(f);
            f.submit();
        }

        /**
         * 담당자 선택
         * */
        function nextRegister() {
            division = 'customer';

            let selCom = $('input[name=radioChk]:checked').val();

            if (selCom == '' || selCom == null) {
                alert('사업장 선택은 필수입니다.');
                return false;
            }

            let f = document.createElement('form');
            let token = $('meta[name="csrf-token"]').attr('content');

            // csrf 토큰
            let obj;
            obj = document.createElement('input');
            obj.setAttribute('type', 'hidden');
            obj.setAttribute('name', '_token');
            obj.setAttribute('value', token);
            f.appendChild(obj);

            // devision 전달
            let obj2;
            obj2 = document.createElement('input');
            obj2.setAttribute('type', 'hidden');
            obj2.setAttribute('name', 'division');
            obj2.setAttribute('value', division);
            f.appendChild(obj2);

            // 선택한 업체번호 전달
            let obj3;
            obj3 = document.createElement('input');
            obj3.setAttribute('type', 'hidden');
            obj3.setAttribute('name', 'entrps_sn');
            obj3.setAttribute('value', selCom);
            f.appendChild(obj3);

            f.setAttribute('method', 'post');
            url = 'getJoin';
            f.setAttribute('action', url);
            document.body.appendChild(f);
            f.submit();
        }
    </script>
@endpush
