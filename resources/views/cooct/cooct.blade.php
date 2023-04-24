@extends('layout.master')

@push('plugin-scripts')
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->
    <input type="hidden" id="docSn" value="{{ $docSn }}"/>
    <input type="hidden" id="docType" value="{{ $docType }}"/>

    <div class="doc-content" id="{{ $docType }}"></div>
    <div class="doc-content" id="pdfConts"></div>
    <div class="align-center">
        <button type="button" id="dataSave" class="btn btn-primary btn-l display-none" onclick="documentInsOrUpd('insert')">저    장</button>
        <button type="button" id="update" class="me-5 btn btn-primary btn-l display-none" onclick="updateDoc()">수    정</button>
        <button type="button" id="pdfSave" class="btn btn-primary btn-l display-none dist-left-mm-15" onclick="savePDF()">PDF 출력</button>
        <button type="button" id="newSave" class="me-5 btn btn-secondary btn-l display-none dist-left-mm-15" onclick="documentInsOrUpd('insert')">다른 이름으로 저장</button>
        <button type="button" id="cancel" class="me-5 btn btn-outline-danger btn-l display-none dist-left-mm-15" onclick="updateCancel();">취    소</button>
    </div>
@endsection

@push('custom-styles')
    {!! Html::style('css/ttestt2.css') !!}
    {!! Html::style('css/loader.css') !!}
    {{--    {!! Html::style('css/cooct.css') !!}--}}
@endpush

@push('custom-scripts')
    <script>
        var loader = `<div id="load_screen">` +
            `<div class="lds-spinner">` +
            `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
            `</div>`;

        /***********************************************
         * 변수 선언
         ***********************************************/
        var crud;               // 문서 확인 (create, read, update, delete)
        var docSn;              // 문서 번호
        var docType;            // 문서 종류
        let renderedImg = new Array;
        let contWidth = 170, // 너비(mm) (a4에 맞춤)
            padding = 20; // 상하좌우 여백(mm)

        $(function () {
            getDocData();
        });

        // 문서 조회
        function getDocData() {
            docSn = $('#docSn').val();
            // docSn = 231;
            docType = $('#docType').val();

            $.ajax({
                type: 'get',
                url: '/getDocData',
                async: false,
                data: {
                    docSn: docSn,
                    docType: docType,
                },
                success: function (response) {
                    $('#{{ $docType }}').append(response);

                    /** select option selected true start */
                    var selTag = $('input[type=hidden][id*=chck_rslt]');

                    for (var i = 0; i < selTag.length; i++) {
                        if (selTag[i].value == '') {
                            selTag[i].nextElementSibling.options[0].selected = true
                        } else {
                            selTag[i].nextElementSibling.value = selTag[i].value;
                        }

                        checkResult(selTag[i].nextElementSibling);
                    }
                    /** select option selected true end */

                    if (docSn != '') {
                        crud = 'crud-r';

                        $('#update').show();
                        $('#pdfSave').show();

                        $('input[type=text], input[type=date], input[type=month]').addClass('border-none');
                        $('input[type=text], input[type=date], input[type=month]').prop('readonly', true);

                        $('select').addClass('select-border-none');
                        $('option').prop('disabled', true);

                        var txtArea = document.querySelectorAll('textarea');

                        txtArea.forEach(function(data) {            // html2canvas 사용 시, textarea 개행 불가로 인한 임시 태그 변경
                            data.innerHTML = data.value;

                            if (data.name == 'chck_opin_18') {      // 18. 담당자 의견 textarea 는 크기 및 테두리 표시
                                var height = data.offsetHeight;
                                $(data).addClass('border-txtArea');
                                data.outerHTML = data.outerHTML.replaceAll('textarea', 'pre');
                                $('pre[name=' + data.name + ']').css('height', height + 'px');
                            } else {
                                data.outerHTML = data.outerHTML.replaceAll('textarea', 'pre');
                            }
                        });
                    } else {
                        crud = 'crud-c';

                        $('#dataSave').show();
                        $('#cancel').show();

                        // textarea 자동 높이 조절
                        $('.txt-auto').textareaAutoSize();
                    }

                    setTimeout(function () {
                        $('#load_screen').remove(); // Loader 제거
                        // 새로고침 후 페이지 상단 이동
                        scrollTo({top:0, left:0, behavior:'instant'})
                    }, 500)

                    // loopData(response).then(function(result) {
                    //     // for 루프가 모두 실행된 후 실행될 코드
                    //     console.log(result);
                    //     console.log("다음 코드 실행");
                    // });
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    if (error.statusText == 'Unauthorized') {
                        alert("다른 기기에서 접속하였습니다.\n로그인 정보가 해제됩니다.");
                        location.href = '/login';
                    } else {
                        alert('문서 조회 중 오류가 발생했습니다.');
                    }
                },
            });
        }

    </script>
@endpush
