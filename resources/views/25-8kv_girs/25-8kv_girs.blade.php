@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/25-8kv_girs.css') !!}
    {!! Html::style('css/loader.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->

    @if ($docSn != null)
        <input type="hidden" id="docSn" value="{{$docSn}}"/>
    @endif

    <input type="hidden" id="docTypeCd" value="1"/>
    <input type="hidden" id="crud" value="{{$crud}}"/>

    {{-- record_25-8kv_table.blade start --}}
    <form id="inspecForm" method="POST" enctype="multipart/form-data" onsubmit="return false;">
       {!! csrf_field() !!}
        <div id="inspecContents"></div>
        <div><table id="pdfConts"></table></div>
        <div class="btn-wrap btngroup" style="text-align: center; margin-top: 20px;">
            <button type="button" id="updateBtn" class="me-5 btn btn-primary btn-l">수    정</button>
            <button type="button" id="pdfSave" class="btn btn-primary btn-l" onclick="savePDF()">PDF 저장</button>
            <button type="button" id="dataInsert" class="btn btn-primary btn-l" onclick="documentInsOrUpd('insert')">저    장</button>
            <button type="button" id="updateDataInsert" class="me-5 btn btn-primary btn-l" onclick="documentInsOrUpd('update')">저    장</button>
            <button type="button" id="newnamesave" class="me-5 btn btn-secondary btn-l" onclick="documentInsOrUpd('insert')">다른 이름으로 저장</button>
            <button type="button" id="cancelbtn" class="me-5 btn btn-outline-danger btn-l" onclick="updateCancel();">취    소</button>
        </div>
        {{-- Modal Start --}}
        <div class="modal fade" id="getCanvas1" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="signData1"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="closeModal('signData1');">취 소</button>
                        <button type="button" class="btn btn-default" onclick="saveSign('signData1');">저 장</button>               {{-- 점검자 사인 저장 --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal End --}}

        {{-- Modal Start --}}
        <div class="modal fade" id="getCanvas2" data-backdrop="static" data-keyboard="false" role="dialog"
             aria-labelledby="staticBackdropLabel">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="signData2"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="closeModal('signData2');">취 소</button>
                        <button type="button" class="btn btn-default" onclick="saveSign('signData2');">저 장</button>                   {{-- 감독자 사인 저장 --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal End --}}
    </form>
    {{-- record_25-8kv_table.blade end --}}
@endsection

@push('plugin-scripts')
    {!! Html::script('js/signature_pad.umd.min.js') !!}
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
    {!! Html::script('js/jquery.textarea_autosize.min.js') !!}
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
        var crud;               // 문서 확인 ( create, read, update, delete)
        var docSn;              // 문서 번호
        var docTypeCd;              // 문서 코드
        var url;                // ajax url
        var renderedImg = new Array;
        var contWidth = 190, // 너비(mm) (a4에 맞춤)
            padding = 10; //상하좌우 여백(mm)

        $(function () {
            getView();          //점검기록표 문서 조회

            // 새로고침 후 페이지 상단 이동
            setTimeout(function () {
                scrollTo({top:0, left:0, behavior:'instant'})
            }, 100)

            // select reset
            window.onpageshow = function(event) {
                if (event.persisted || (window.performance && window.performance.navigation.type == 2)) {             //뒤로가기 버튼 감지
                    var selVal = $("#inspecContents select");
                    for (var i = 0; i < selVal.length; i++ ){
                        selVal.parent().children(':eq('+i+')').children().prop("selected", false);                      //select first값으로 변경
                    }
                }
            }

            let inWeather = $("input[name=weather]");
            let selWeather = $("select[name=weather]");

            switch (inWeather.val()) {
                case "":
                    selWeather.val('맑음');
                    inWeather.hide();
                    selWeather.parent().attr('colspan', '2');
                    break;
                case "맑음":
                case "흐림":
                case "비":
                    selWeather.val(inWeather.val());
                    inWeather.hide();
                    selWeather.parent().attr('colspan', '2');
                    break;
                default:
                    selWeather.val('직접입력');
                    inWeather.show();
                    selWeather.hide();
                    break;
            }

            // 점검자 동시 입력
            $("#inspecContents input[name=chck_nm]").keyup(function() {
                $("#inspecContents input[name=chck_nm]").val($(this).val());
            });

            // 감독자 동시 입력
            $("#inspecContents input[name=spvs_nm]").keyup(function() {
                $("#inspecContents input[name=spvs_nm]").val($(this).val());
            });

            // 변전소 동시 입력
            $("#inspecContents input[name=sub_sttn_nm]").keyup(function() {
                $("#inspecContents input[name=sub_sttn_nm]").val($(this).val());
            });

            // textarea 자동 높이 조절
            $('.txtarea').textareaAutoSize();


            /** 수정 버튼 클릭 시 */
            $("#updateBtn").on('click', function () {
                crud = 'crud-u';
                let selc = $('#inspecContents select');

                $('#inspecContents input, textarea').attr("readonly", false);           //input, textarea readonly 해제
                $('#inspecContents input, select, textarea').css({"border": "","appearance": ""});          //border 활성화 및 select 화살표 활성화
                $('#inspecContents select').attr("disabled", false);            //select disabled 해제
                $('#updateBtn').hide();
                $('#pdfSave').hide();

                $('#cancelbtn').show();
                $('#updateDataInsert').show();
                $('#newnamesave').show();


                for (let i = 0; i < selc.length; i++) {
                    if (selc[i].name == 'weather') {
                        switch (selc[i].value) {
                            case "맑음":
                            case "흐림":
                            case "비":
                                $('input[name=weather]').hide();
                                $('select[name=weather]').show();
                                break;
                            default:
                                $('select[name=weather]').show();
                                break;
                        }
                    } else {
                        if (selc[i].value == '해당없음') {
                            // 해당없음 경우 input 태그 disabled 처리
                            let data = $(selc[i].parentElement.parentElement).find('input').attr('disabled', true);
                            // 해당없음 경우 값을 비움
                            $(data).val("");
                        } else {
                            // input 태그 원상 복구
                            $(selc[i].parentElement.parentElement).find('input').attr('disabled', false);
                        }
                    }
                }

                // 페이지 상단 이동
                setTimeout(function () {
                    scrollTo({top:0, left:0, behavior:'instant'})
                    // scrollTo({top:0, left:0, behavior:'smooth'})
                }, 100)
            });
        })


        // 점검기록표 문서 조회
        function getView() {
            $('#div_for_loader').html(loader);          // Loader 실행

            crud = $("#crud").val();

            if ( crud == "crud-r" || crud == "crud-u" ) {
                docSn = $('#docSn').val();
            }

            docTypeCd = $('#docTypeCd').val();

            $.ajax({
                type: 'get',
                url: 'get258kvGirs',
                async: false,
                data: {
                    docSn: docSn,
                    docTypeCd: docTypeCd,
                },
                success: function (response) {

                    for ( var i = 0; i < response.length; i++ ) {
                        $('#inspecContents').append(response[i]);
                    }

                    $('.selected-menu').hide();

                    if ( crud == "crud-r" ) {
                        $('#inspecContents input, select, textarea').css({"border" : "none", "appearance": "none"});        //border 비활성화 및 select 화살표 비활성화
                        $('#inspecContents input, textarea').attr("readonly", true);            //input, textarea readonly 활성화
                        $('#inspecContents select').attr("disabled", true);         //select disabled 활성화
                        $("#updateBtn").show();
                        $("#pdfSave").show();
                    }

                    if ( crud == "crud-c" ) {
                        $("#dataInsert").show();
                        // $('label[class=input-file-btn]').css("display", "");
                    }

                    $('#load_screen').remove();                 // Loader 제거
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
                }
            });
        }

        // 점검결과 select 선택
        function selValue(obj) {
            if (obj.name == 'weather') {
                if (obj.value == "직접입력") {
                    $(obj.parentElement).attr('colspan', '3')
                    $('input[name=weather]').val('');
                    $('input[name=weather]').show();
                } else {
                    $(obj.parentElement).attr('colspan', '2')
                    obj.name = "weather";
                    $('input[name=weather]').val(obj.value);
                    $('input[name=weather]').hide();
                }
            } else {
                if (obj.value == '해당없음') {
                    // 해당없음 경우 input 태그 disabled 처리
                    let data = $(obj.parentElement.parentElement).find('input').attr('disabled', true);
                    // 해당없음 경우 값을 비움
                    $(data).val("");
                } else {
                    // input 태그 원상 복구
                    $(obj.parentElement.parentElement).find('input').attr('disabled', false);
                }
            }
        }

        // textarea 실시간 크기 조절
        function resize(txt) {
            txt.style.height = "auto";

            if (txt.clientHeight < txt.scrollHeight) {
                txt.style.height = txt.scrollHeight + "px";
            }
        }

        // Insert Or Update
        function documentInsOrUpd(data) {

            var docTypeCd = document.getElementsByName('docTypeCd')[0].value;
            var blank_pattern = /^\s+|\s+$/g;

            // 날씨 select name remove -> input name 겹침으로 인한
            $("select[name='weather']").removeAttr('name');

            // 점검일자 체크
            if (document.getElementsByName('chck_ymd')[0].value.replace(blank_pattern, '') == '') {
                alert('점검일자를 지정해주세요');
                document.getElementsByName('chck_ymd')[0].focus();
                return false;
            }

            // 변전소명 체크
            if (document.getElementsByName('sub_sttn_nm')[0].value.replace(blank_pattern, '') == '') {
                alert('변전소명을 입력해주세요');
                document.getElementsByName('sub_sttn_nm')[0].focus();
                return false;
            }

            // 기기명 체크
            if (document.getElementsByName('eqp_nm')[0].value.replace(blank_pattern, '') == '') {
                alert('기기명을 입력해주세요');
                document.getElementsByName('eqp_nm')[0].focus();
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            // formData 파일 추가
            var formData = new FormData($("#inspecForm")[0]);

            // 점검자 사인 가져오기
            var img1 = $("#chkSign1")[0]; // img 태그 객체
            var img2 = $("#chkSign2")[0]; // img 태그 객체

            console.log('img1');
            console.log(img1);
            console.log('img2');
            console.log(img2);

            if (img1.src.split('/')[0] == 'data:image') {
                var bstr = atob(img1.src.split(",")[1]);
                var n = bstr.length;
                var u8arr = new Uint8Array(n);

                while(n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }

                var chkSign1 = new File([u8arr], "chkSign1.png", {type:"mime"});
                formData.append('chck_sign_file_name', chkSign1);
            } else {
                var chkSign1 = img1.src.split('/').reverse()[0]
                formData.append('chck_sign_file_name', chkSign1);
            }

            if (img2.src.split('/')[0] == 'data:image') {
                var bstr = atob(img2.src.split(",")[1]);
                var n = bstr.length;
                var u8arr = new Uint8Array(n);

                while(n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }

                var chkSign2 = new File([u8arr], "chkSign2.png", {type:"mime"});
                formData.append('spvs_sign_file_name', chkSign2);
            } else {
                var chkSign2 = img2.src.split('/').reverse()[0]
                formData.append('spvs_sign_file_name', chkSign2);
            }

            if (data == "insert") {
                url = "/insert";
            } else {
                formData.append('docSn', $('#docSn').val());
                url = "/update";
            }

            // Insert Or Update Ajax
            ajaxConnec(data, url, formData);
        }

        /**
         * Insert Or Update Ajax
         * */
        function ajaxConnec(data, url, formData) {

            console.log('ajaxConnec');
            console.log(data);
            console.log(url);
            console.log(formData);

            $.ajax({
                type: 'post',
                url: url,
                data: formData,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function (response) {
                    if (data == "insert") {
                        if (response.success == false) {
                            alert('ERROR!\n점검기록표 등록에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            $('#load_screen').remove();                 // Loader 제거
                            history.back();
                        } else {
                            alert('점검기록표 등록이 완료되었습니다.');
                            $('#load_screen').remove();                 // Loader 제거
                            location.href="/document/list";
                        }
                    } else {
                        if (response.success == false) {
                            alert('ERROR!\n점검기록표 수정에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            $('#load_screen').remove();                 // Loader 제거
                            history.back();
                        } else {
                            alert('점검기록표 수정이 완료되었습니다.');
                            console.log(response);
                            $('#load_screen').remove();                 // Loader 제거
                            location.reload();
                        }
                    }
                },

                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    if (error.statusText == 'Unauthorized') {
                        alert("다른 기기에서 접속하였습니다.\n로그인 정보가 해제됩니다.");
                        location.href = '/login';
                    } else {
                        alert('점검기록표 등록 중 오류가 발생했습니다.');
                    }
                }
            });
        }

        /**
         * 점검기록표 문서 수정 취소
         * */
         function updateCancel() {
            if (confirm("작성 되었던 모든 내용은 사라집니다.\n정말로 취소 하시겠습니까?")) {
                history.go(0);
            } else {
                return false;
            }
        }

        // PDF 저장
        function savePDF() {
            $('#div_for_loader').html(loader);          // Loader 실행

            var txtArea = document.querySelectorAll('.txtarea');

            txtArea.forEach(function(data) {
                // html2canvas 사용 시, textarea 개행 불가로 인한 임시 태그 변경
                data.outerHTML = data.outerHTML.replaceAll('textarea', 'pre');
            });

            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('inspecContents')).then(canvas => {
                var lists = document.getElementById('inspecContents').querySelectorAll('tbody');
                var listsLeng = lists.length;
                var deferreds = [];
                var doc = new jsPDF("p", "mm", "a4");

                var pdfHeight = 0;
                var tag = document.getElementById('pdfConts');
                var pdfImgNum = 0;

                for ( var i = 0; i < listsLeng; i++ ) {
                    var tbodyWidth = lists[i].offsetWidth * 0.2645,
                        tbodyHeight = lists[i].offsetHeight * 0.2645,
                        // 비율에 맞게 높이 조절
                        tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                    if (padding + pdfHeight + tbodyHeightCalc < 297 - padding * 2) {
                        pdfHeight += tbodyHeightCalc;

                        var clone = $(lists[i]).clone(true);

                        tag.setAttribute('class', lists[i].parentElement.className)
                        tag.append(clone[0]);

                        if (lists[i].className == 'tbody-end') {
                            var deferred = $.Deferred();
                            deferreds.push(deferred.promise());
                            generateCanvas(pdfImgNum, doc, deferred, tag);

                            pdfImgNum++;
                            pdfHeight = 0;
                            $(tag).empty();
                        }
                    } else {
                        var deferred = $.Deferred();
                        deferreds.push(deferred.promise());
                        generateCanvas(pdfImgNum, doc, deferred, tag);

                        pdfImgNum++;
                        i--;
                        pdfHeight = 0;
                        $(tag).empty();
                    }
                }
                $(tag).empty();

                $.when.apply($, deferreds).then(function () { // 이미지 렌더링이 끝난 후
                    var sorted = renderedImg.sort(function (a, b) {return a.num < b.num ? -1 : 1;}), // 순서대로 정렬
                        curHeight = padding, //위 여백 (이미지가 들어가기 시작할 y축)
                        sortedLeng = sorted.length;

                    for ( var i = 0; i < sortedLeng; i++ ) {
                        var sortedHeight = sorted[i].height, //이미지 높이
                            sortedImage = sorted[i].image; //이미지

                        if (curHeight + sortedHeight > 297 - padding * 2){ // a4 높이에 맞게 남은 공간이 이미지높이보다 작을 경우 페이지 추가
                            doc.addPage(); // 페이지를 추가함
                            curHeight = padding; // 이미지가 들어갈 y축을 초기 여백값으로 초기화
                            doc.addImage(sortedImage, 'jpeg', padding , curHeight, contWidth, sortedHeight); //이미지 넣기
                            curHeight += sortedHeight; // y축 = 여백 + 새로 들어간 이미지 높이
                        } else { // 페이지에 남은 공간보다 이미지가 작으면 페이지 추가하지 않음
                            doc.addImage(sortedImage, 'jpeg', padding , curHeight, contWidth, sortedHeight); //이미지 넣기
                            curHeight += sortedHeight; // y축 = 기존y축 + 새로들어간 이미지 높이
                        }
                    }
                    doc.save('filename.pdf');                   // pdf 저장
                    sorted.splice(0);                           // pdf 저장 후 데이터 초기화
                    console.timeEnd('PDF End');
                    var txtArea = document.querySelectorAll('.txtarea');
                    txtArea.forEach(function(data) {
                        data.outerHTML = data.outerHTML.replaceAll('pre', 'textarea');      // 임시 태그 변경 원복
                    });
                    $('#load_screen').remove();                 // Loader 제거
                });
            });
        }

        // 페이지를 이미지로 만들기
        function generateCanvas(i, doc, deferred, curList) {
            var pdfWidth = $(curList).outerWidth() * 0.2645, //px -> mm로 변환
                pdfHeight = $(curList).outerHeight() * 0.2645,
                heightCalc = contWidth * pdfHeight / pdfWidth; //비율에 맞게 높이 조절
            html2canvas(curList).then(
                function (canvas) {
                    var img = canvas.toDataURL('image/jpeg', 1.0); //이미지 형식 지정
                    renderedImg.push({num:i, image:img, height:heightCalc}); //renderedImg 배열에 이미지 데이터 저장(뒤죽박죽 방지)
                    deferred.resolve(); //결과 보내기
                }
            );
        }

        /**
         * 서명 모달 open
         * */
        function openModal(data) {
            if (crud == "crud-r") {
                return false;
            }

            var canvasId;
            var modalId;

            if (data == 'signData1') {
                canvasId = "signature1";
                modalId = "getCanvas1";
            }

            if (data == 'signData2') {
                canvasId = "signature2";
                modalId = "getCanvas2";
            }

            if (!document.getElementById(canvasId)) {
                $('#' + data).append('<canvas id="' + canvasId + '" width="1100" height="600"></canvas>');
            }

            var canvas = $("#" + canvasId)[0];

            var sign = new SignaturePad(canvas, {
                minWidth: 10,
                maxWidth: 10,
                penColor: "rgb(0, 0, 0)"
            });

            $("#" + modalId).modal('show');
        }

        /**
         * 서명 모달 close
         * */
        function closeModal(data) {
            var modalId;

            if (data == 'signData1') {
                modalId = "getCanvas1";
            }

            if (data == 'signData2') {
                modalId = "getCanvas2";
            }

            $('#' + modalId).modal('hide');
        }

        /**
         * sign 저장
         * */
        function saveSign(data) {
            var canvasId;
            var imgId;
            var imgId1;

            if (data == 'signData1') {
                canvasId = "signature1";
                imgId = "chkSign1";
            }

            if (data == 'signData2') {
                canvasId = "signature2";
                imgId = "chkSign2";
                imgId1 = "chkSign3";
            }

            var canvas = document.getElementById(canvasId);
            var myImage = document.getElementById(imgId);
            myImage.src = canvas.toDataURL("image/png", 1.0);
            if (imgId1){
                var myImage1 = document.getElementById(imgId1);
                myImage1.src = canvas.toDataURL("image/png", 1.0);
            }

            closeModal(data);
        }
    </script>
@endpush
