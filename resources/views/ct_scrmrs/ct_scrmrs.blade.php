@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/ct_scrmrs.css') !!}
    {!! Html::style('css/loader.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->

    @if ($docSn != null)
        <input type="hidden" id="docSn" value="{{$docSn}}" />
    @endif

    <input type="hidden" id="docTypeCd" value="4"/>
    <input type="hidden" id="crud" value="{{$crud}}" />

    <form id="construcForm" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        {!! csrf_field() !!}
        <div id="ct_scrmrs"></div>
        <div><table id="pdfConts"></table></div>
        <div class="btn-wrap btngroup" style="text-align: center; margin: 10px 10px 10px 10px">
            <button type="button" id="updateBtn" class="me-5 btn btn-primary btn-l">수 정</button>
            <button type="button" id="pdfSave" class="btn btn-primary btn-l" onclick="savePDF()">PDF 저장</button>
            <button type="button" id="dataInsert" class="btn btn-primary btn-l" onclick="documentInsOrUpd('insert');">저 장</button>
            <button type="button" id="updateDataInsert" class="me-5 btn btn-primary btn-l" onclick="documentInsOrUpd('update')">저 장</button>
            <button type="button" id="newnamesave" class="me-5 btn btn-secondary btn-l" onclick="documentInsOrUpd('insert')">다른 이름으로 저장</button>
            <button type="button" id="cancelbtn" class="me-5 btn btn-outline-danger btn-l" onclick="updateCancel();">취 소</button>
        </div>
    </form>
@endsection


@push('custom-scripts')
    <script>
        var loader = `<div id="load_screen">` +
            `<div class="lds-spinner">` +
            `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
            `</div>`;

        /***********************************************
         * 변수 선언
         ***********************************************/
        var crud; // 문서 확인 ( create, read, update, delete)
        var docSn; // 문서 번호
        var docTypeCd; //문서 코드
        var renderedImg = new Array;
        var contWidth = 190, // 너비(mm) (a4에 맞춤)
            padding = 10; //상하좌우 여백(mm)

        $(document).ready(function() {
            getView();          // CT 2차회로 저항 측정 기록표 문서 조회

            $("#updateBtn").on('click', function() {
                crud = 'crud-u';
                $('#ct_scrmrs input').attr("readonly", false);
                $('#ct_scrmrs input').css("border", "");

                $('#updateBtn').hide();
                $('#pdfSave').hide();

                $('#cancelbtn').show();
                $('#updateDataInsert').show();
                $('#newnamesave').show();

                $('label[class=input-file-btn]').css("display", "");

                // 페이지 상단 이동
                setTimeout(function() {
                    scrollTo({top: 0, left: 0, behavior: 'instant'})
                    // scrollTo({top:0, left:0, behavior:'smooth'})
                }, 100)
            });
        });

        function dataChange(data) {
            if (data.name == "chck_ymd") {
                $("input[name=msrm_chck_ymd]").each(function () {
                    $(this).val(data.value);
                })
            }
        }

        /**
         * CT 2차회로 저항 측정 기록표 문서 조회
         * */
        function getView() {
            $('#div_for_loader').html(loader); // Loader 실행

            crud = $("#crud").val();

            if (crud == "crud-r" || crud == "crud-u") {
                var docSn = $('#docSn').val();
            }

            docTypeCd = $('#docTypeCd').val();

            $.ajax({
                type: 'get',
                url: '/ct_scrmrs/getCtscrmrs',
                async: false,
                data: {
                    docSn: docSn,
                    docTypeCd: docTypeCd,
                },
                success: function(response) {
                    $('#ct_scrmrs').html(response);
                    if (crud == "crud-r") {
                        $('#ct_scrmrs input').attr("readonly", true);
                        $('#ct_scrmrs input').css({
                            "border": "none"
                        });

                        $("#updateBtn").show();
                        $("#pdfSave").show();
                    }

                    if (crud == "crud-c") {
                        $("#dataInsert").show();
                        $('label[class=input-file-btn]').css("display", "");
                    }

                    $('#load_screen').remove(); // Loader 제거
                },
                error: function(error) {
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

        // PDF 저장
        function savePDF() {
            $('#div_for_loader').html(loader);          // Loader 실행
            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('ct_scrmrs')).then(canvas => {
                var lists = document.getElementById('ct_scrmrs').querySelectorAll('tbody');
                var listsLeng = lists.length;
                var deferreds = [];
                var doc = new jsPDF("p", "mm", "a4");

                var pdfHeight = 0;
                var tag = document.getElementById('pdfConts');
                var pdfImgNum = 0;

                for (var i = 0; i < listsLeng; i++) {
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

                    for (var i = 0; i < sortedLeng; i++) {
                        var sortedHeight = sorted[i].height, //이미지 높이
                            sortedImage = sorted[i].image; //이미지

                        if (curHeight + sortedHeight > 297 - padding * 2) { // a4 높이에 맞게 남은 공간이 이미지높이보다 작을 경우 페이지 추가
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
                    sorted.splice(0);                           //pdf 저장 후 데이터 초기화
                    console.timeEnd('PDF End');
                    $('#load_screen').remove();                 // Loader 제거
                });
            });
        }

        // 페이지를 이미지로 만들기
        function generateCanvas(i, doc, deferred, curList) {
            var pdfWidth = $(curList).outerWidth() * 0.2645, //px -> mm로 변환
                pdfHeight = $(curList).outerHeight() * 0.2645,
                heightCalc = contWidth * pdfHeight / pdfWidth; //비율에 맞게 높이 조절
            html2canvas( curList ).then(
                function (canvas) {
                    var img = canvas.toDataURL('image/jpeg', 1.0); //이미지 형식 지정
                    renderedImg.push({num:i, image:img, height:heightCalc}); //renderedImg 배열에 이미지 데이터 저장(뒤죽박죽 방지)
                    deferred.resolve(); //결과 보내기
                }
            );
        }

        //문서 저장
        function documentInsOrUpd(data) {
            var blank_pattern = /^\s+|\s+$/g;

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

            docTypeCd = document.getElementsByName('docTypeCd')[0].value;     //문서 타입

            $('#div_for_loader').html(loader); // Loader 실행

            // formData 파일 추가
            var formData = new FormData($("#construcForm")[0]);
            // 담당자 사인 가져오기
            var img1 = $("#chkSign")[0]; // img 태그 객체

            if (img1.src.split('/')[0] == 'data:image') {
                var bstr = atob(img1.src.split(",")[1]);
                var n = bstr.length;
                var u8arr = new Uint8Array(n);

                while (n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }

                var chkSign1 = new File([u8arr], "chkSign1.png", {
                    type: "mime"
                });
                formData.append('spvs_sign_file_name', chkSign1);
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

            $.ajax({
                type: 'post',
                url: url,
                data: formData,
                enctype: "multipart/form-data",
                processData: false,
                contentType: false,
                success: function(response) {
                    if (data == "insert") {
                        if (response.success == false) {
                            alert('ERROR!\nCT 2차회로 저항 측정 기록표 등록에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('CT 2차회로 저항 측정 기록표가 등록되었습니다.');
                            location.href="/document/list";
                        }
                    } else {
                        if (response.success == false) {
                            console.log(response);
                            alert('ERROR!\nCT 2차회로 저항 측정 기록표 수정에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('CT 2차회로 저항 측정 기록표 수정이 완료되었습니다.');
                            location.reload();
                        }
                    }
                    $('#load_screen').remove(); // Loader 제거
                },
                error: function(error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    if (error.statusText == 'Unauthorized') {
                        alert("다른 기기에서 접속하였습니다.\n로그인 정보가 해제됩니다.");
                        location.href = '/login';
                    } else {
                        alert('CT 2차회로 저항 측정 기록표 등록 중 오류가 발생했습니다.');
                    }
                }
            });
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

            if (data == 'signData') {
                canvasId = "signature";
                modalId = "getCanvas";
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
            if (data == 'signData') {
                modalId = "getCanvas";
            }

            $('#' + modalId).modal('hide');
        }

        /**
         * sign 저장
         * */
        function saveSign(data) {
            var canvasId;
            var imgId;
            if (data == 'signData') {
                canvasId = "signature";
                imgId = "chkSign";
            }

            var canvas = document.getElementById(canvasId);
            var myImage = document.getElementById(imgId);
            myImage.src = canvas.toDataURL("image/png", 1.0);
            closeModal(data);
        }
    </script>
@endpush
