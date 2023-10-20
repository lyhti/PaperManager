@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/loader.css') !!}
    {!! Html::style('css/cooct.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->

    @if($docSn != null)
        <input type="hidden" id="docSn" value="{{$docSn}}"/>
    @endif

    <input type="hidden" id="docTypeCd" value="2"/>
    <input type="hidden" id="crud" value="{{$crud}}"/>

    <form id="cooctForm" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        {!! csrf_field() !!}
        <div id="cooctContents"></div>
        <div><table id="pdfConts"></table></div>
        <div class="btn-wrap btngroup">
            <button type="button" id="updateBtn" class="me-5 btn btn-primary btn-l">수    정</button>
            <button type="button" id="pdfSave" class="btn btn-primary btn-l" onclick="savePDF()">PDF 저장</button>
            <button type="button" id="dataInsert" class="btn btn-primary btn-l" onclick="documentInsOrUpd('insert');">저    장</button>
            <button type="button" id="updateDataInsert" class="me-5 btn btn-primary btn-l" onclick="documentInsOrUpd('update')">저    장</button>
            <button type="button" id="newnamesave" class="me-5 btn btn-secondary btn-l" onclick="documentInsOrUpd('insert');">다른 이름으로 저장</button>
            <button type="button" id="cancelbtn" class="me-5 btn btn-outline-danger btn-l" onclick="updateCancel();">취    소</button>
        </div>
    </form>
@endsection

@push('plugin-scripts')
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
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
        var url;                // ajax url
        var renderedImg = new Array;
        var contWidth = 190, // 너비(mm) (a4에 맞춤)
            padding = 10; //상하좌우 여백(mm)

        $(function () {
            getView();           // 개폐동작특성시험 문서 조회

            // 새로고침 후 페이지 상단 이동
            setTimeout(function () {
                scrollTo({top:0, left:0, behavior:'instant'})
                // scrollTo({top:0, left:0, behavior:'smooth'})
            }, 100)

            // 수정 버튼 클릭 시
            $("#updateBtn").on('click', function () {
                crud = 'crud-u';
                $('#cooctContents input').attr("readonly", false);
                $('#cooctContents input').css("border", "");

                $('#updateBtn').hide();
                $('#pdfSave').hide();

                $('#cancelbtn').show();
                $('#updateDataInsert').show();
                $('#newnamesave').show();

                $('label[class=input-file-btn]').css("display", "");
                $('label[class=del-file-btn]').css("display", "");

                // 페이지 상단 이동
                setTimeout(function () {
                    scrollTo({top:0, left:0, behavior:'instant'})
                    // scrollTo({top:0, left:0, behavior:'smooth'})
                }, 100)

                $('#cooctContents input').attr("accept", "image/*");          //인풋태그(type file) 이미지만 업로드 가능하게 설정
            });
            //sub_title opening 글씨 수정
            var sub_title = $(".cooct-table-subtitle");
            for (var i=0; i<sub_title.length; i++) {
                var text = document.getElementsByClassName('cooct-table-subtitle')[i].innerHTML;
                var result = text.replace('Time_', 'Time<br>');
                document.getElementsByClassName('cooct-table-subtitle')[i].innerHTML = result;
            }

            $('.cooct-table-tg input').attr("accept", "image/*");
        });

        // 날짜/변전소/기기명 변경
        function dataChange(data) {
            if (data.name == "chck_ymd") {
                $("input[name=chck_ymd]").each(function () {
                    $(this).val(data.value);
                })
            }

            if (data.name == "sub_sttn_nm") {
                $("input[name=sub_sttn_nm]").each(function () {
                    $(this).val(data.value);
                })
            }

            if (data.name == "eqp_nm") {
                $("input[name=eqp_nm]").each(function () {
                    $(this).val(data.value);
                })
            }
        }

        /**
         * 개폐동작특성시험 문서 조회
         * */
        function getView() {
            $('#div_for_loader').html(loader);          // Loader 실행

            crud = $("#crud").val();

            if (crud == "crud-r" || crud == "crud-u") {
                docSn = $('#docSn').val();
            }

            docTypeCd = $('#docTypeCd').val();

            $.ajax({
                type: 'get',
                async: false,
                url: '/cooct/getCooct',
                data: {
                    docSn : docSn,
                    docTypeCd: docTypeCd,
                },
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        $('#cooctContents').append(response[i]);
                    }

                    if (crud == "crud-r") {
                        $('#cooctContents input').attr("readonly", true);
                        $('#cooctContents input').css("border", "none");
                        $("#updateBtn").show();
                        $("#pdfSave").show();
                    }

                    if (crud == "crud-c") {
                        $("#dataInsert").show();
                        $('label[class=input-file-btn]').css("display", "");
                        $('label[class=del-file-btn]').css("display", "");
                    }

                    $('#load_screen').remove();                 // Loader 제거
                }, error: function (error) {
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

        /**
         * Insert Or Update
         * */
        function documentInsOrUpd(data) {
            var blank_pattern = /^\s+|\s+$/g;

            if (document.getElementsByName('chck_ymd')[0].value.replace(blank_pattern, '' ) == '') {
                alert('점검일자를 지정해주세요');
                document.getElementsByName('chck_ymd')[0].focus();
                return false;
            }

            if (document.getElementsByName('sub_sttn_nm')[0].value.replace(blank_pattern, '' ) == '') {
                alert('변전소명을 입력해주세요');
                document.getElementsByName('sub_sttn_nm')[0].focus();
                return false;
            }

            if (document.getElementsByName('eqp_nm')[0].value.replace(blank_pattern, '' ) == '') {
                alert('기기명을 입력해주세요');
                document.getElementsByName('eqp_nm')[0].focus();
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            // formData 파일 추가
            var formData = new FormData($("#cooctForm")[0]);
            var length = $('input[type=file]').length;

            for (var i = 0; i < length; i++) {
                // file 이 있으면
                if ($('input[type=file]')[i].files[0]) {
                    formData.append($('input[type=file]')[i].name, $('input[type=file]')[i].files[0]);
                } else {
                    if ($('#'+$('input[type=file]')[i].name)[0].src) {
                        let imgNm = $('#'+$('input[type=file]')[i].name)[0].src.split('/').reverse()[0]
                        formData.append($('input[type=file]')[i].name, imgNm);
                    }
                }
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
                success: function (response) {
                    if (data == "insert") {
                        if (response.success == false) {
                            alert('ERROR!\n개폐동작특성시험 등록에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('개폐동작특성시험 등록이 완료되었습니다.');
                            location.href="/document/list";
                        }
                    } else {
                        if (response.success == false) {
                            alert('ERROR!\n개폐동작특성시험 수정에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('개폐동작특성시험 수정이 완료되었습니다.');
                            location.reload();
                        }
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
                        alert('개폐동작특성시험 등록 중 오류가 발생했습니다.');
                    }
                }
            });
        }

        /**
         * 개폐동작특성시험 문서 수정 취소
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
            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('cooctContents')).then(canvas => {
                var list = $('#cooctContents tbody');
                var lists = new Array;

                for (var i = 0; i < list.length; i ++) {
                    if (i != 0) {
                        // 이미지가 없으면 pdf 출력 빼기
                        if (list.find('img')[i].src) {
                            lists.push(list[i])
                        }
                    } else {
                        lists.push(list[i])
                    }
                }

                var deferreds = [];
                var doc = new jsPDF("p", "mm", "a4");
                var listsLeng = lists.length;
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

                        if (lists[i].className == 'tbody-end' || i == (listsLeng-1)) {
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

        /**
         * 이미지 삽입
         * */
        function insertImage(data) {
            var fileForm = /(.*?)\.(jpg|jpeg|gif|bmp|png)$/;        //확장자 이미지로 제한
            var imgId = data.parentElement.parentElement.previousElementSibling.getAttribute('id');         // 현재 태그의 이전 태그 id 값

            if (data.files.length < 1) {
                alert('사진 선택을 취소하였습니다.\n사진이 저장되지 않습니다.');
                //data 스타일 none
                data.parentElement.parentElement.previousElementSibling.style.display = 'none';
                //src data 제거
                data.parentElement.parentElement.previousElementSibling.removeAttribute('src');
                console.log('cancel was pressed');
            } else {
                if (!data.value.toLocaleLowerCase().match(fileForm)) {
                    alert('이미지 파일만 업로드 가능합니다.')
                    return false;
                }
                console.log(data.files[0].name);
            }

            console.log(data.files);
            console.log("data.files.width");

            // 인풋 태그에 파일이 있는 경우
            if (data.files && data.files[0]) {
                // FileReader 인스턴스 생성
                const reader = new FileReader()
                // 이미지가 로드가 된 경우
                reader.onload = e => {
                    const previewImage = document.getElementById(imgId)
                    previewImage.src = e.target.result
                }
                // reader가 이미지 읽도록 하기
                reader.readAsDataURL(data.files[0])

                $("#" + imgId).show();                   // 이미지 preview
            }
        }

        //사진 삭제
        function delImage(data) {
            if (data.parentElement.parentElement.previousElementSibling.src) {
                if (confirm("사진을 삭제 하시겠습니까?")) {
                    for (var i = 0; i < $('input[type=file]').length; i++) {
                        //data value 초기화
                        data.parentElement.previousElementSibling.childNodes[1].value = "";
                        //data 스타일 none
                        data.parentElement.parentElement.previousElementSibling.style.display = 'none';
                        //src data 제거
                        data.parentElement.parentElement.previousElementSibling.removeAttribute('src');
                    }
                } else {
                    return false;
                }
            } else {
                alert("사진이 없습니다.");
            }
        }

    </script>
@endpush
