@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/construc.css') !!}
    {!! Html::style('css/loader.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->

    @if ($docSn != null)
        <input type="hidden" id="docSn" value="{{$docSn}}"/>
    @endif

    <input type="hidden" id="docTypeCd" value="3"/>
    <input type="hidden" id="crud" value="{{$crud}}"/>

    <form id="construcForm" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        {!! csrf_field() !!}
        <div>
            <button id="btn-add-tab" type="button" class="btn btn-primary btn-sm" onclick="addTab();">Add Tab</button>
            <button id="btn-add-tab" type="button" class="btn btn-outline-danger btn-sm" onclick="delTab(this);">Del Tab</button>
            <ul class="tabnav"></ul>
            <div id="tabContent" class="tabContent"></div>
            <div><table id="pdfConts"></table></div>
        </div>
        <div class="btn-wrap btngroup">
            <button type="button" id="updateBtn" class="me-5 btn btn-primary btn-l">수    정</button>
            <button type="button" id="pdfSave" class="btn btn-primary btn-l" onclick="savePDF()">PDF 저장</button>
            <button type="button" id="dataInsert" class="btn btn-primary btn-l" onclick="documentInsOrUpd('insert');">저    장</button>
            <button type="button" id="updateDataInsert" class="me-5 btn btn-primary btn-l" onclick="documentInsOrUpd('update')">저    장</button>
            <button type="button" id="newnamesave" class="me-5 btn btn-secondary btn-l" onclick="documentInsOrUpd('insert')">다른 이름으로 저장</button>
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

        $(document).ready(function () {
            // var test = document.location.href.split('?')[1]; //url ? 뒤쪽 데이터 가져오기
            // window.btoa(test); //암호화
            getView();              // 시공사진 문서 조회
            


            // 새로고침 후 페이지 상단 이동
            setTimeout(function () {
                scrollTo({top:0, left:0, behavior:'instant'})
            }, 100)

            // 수정 버튼 클릭 시
            $("#updateBtn").on('click', function () {
                crud = 'crud-u';
                $('.cos-table-tg input').attr("readonly", false);       // 인풋태그 readonly 해제
                $('.cos-table-tg input').css("border", "");             // 인풋태그 none 해제

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
                }, 100)
            });

            $('.cos-table-tg input').attr("accept", "image/*");         //인풋태그(type file) 이미지만 업로드 가능하게 설정
        });

        // 날짜/변전소/기기명 변경
        function dataChange(data) {
            //날짜 data tab별로 동일하게 입력
            if (data.name == "chck_ymd") {
                $("input[name=chck_ymd]").each(function () {
                    $(this).val(data.value);
                })
            }

            //변전소 data tab별로 동일하게 입력
            if (data.name == "sub_sttn_nm") {
                $("input[name=sub_sttn_nm]").each(function () {
                    $(this).val(data.value);
                })
            }

            //기기명 data tab별로 동일하게 입력
            if (data.name == "eqp_nm") {
                $("input[name=eqp_nm]").each(function () {
                    $(this).val(data.value);
                })
            }
        }

        // tab 추가
        function addTab() {
            //문서 tab개수 체크
            if ($('.tabnav').children('li').length >= 5) {
                alert('문서가 5개를 초과 할 수 없습니다.');
                return false;
            }

            //crud 체크
            if (crud == 'crud-r') {
                alert('문서 수정 시 가능합니다.');
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            var tab = $('.tabnav').children('li').length;
            tab++;

            $.ajax({
                type: 'get',
                url: 'insertTab',
                data: {
                    docSn: docSn,
                    crud: crud,
                    tab: tab
                },
                success: function (response) {
                    $('.tabnav').append('<li><a href="javascript:void(0);" onclick="tabMove(' + tab + ');">시공사진 0' + tab + '</a></li>');
                    $('.tabContent').append('<div id="contable0' + tab + '" style="display: none;"></div>');
                    $('#contable0' + tab).html(response);

                    // tab 추가 시 날짜
                    $('input[name=chck_ymd]').each(function () {
                        // 기존 tab 날짜가 있으면 새로 생성한 tab에도 날짜 지정.
                        if ($(this).val()) {
                            $('input[name=chck_ymd]').last().val($(this).val())
                        }
                    })

                    // tab 추가 시 변전소명
                    $('input[name=sub_sttn_nm]').each(function () {
                        // 기존 tab 변전소명이 있으면 새로 생성한 tab 에도 변전소명 지정.
                        if ($(this).val()) {
                            $('input[name=sub_sttn_nm]').last().val($(this).val())
                        }
                    })

                    // tab 추가 시 기기명
                    $('input[name=eqp_nm]').each(function () {
                        // 기존 tab 기기명이 있으면 새로 생성한 tab 에도 기기명 지정.
                        if ($(this).val()) {
                            $('input[name=eqp_nm]').last().val($(this).val())
                        }
                    })

                    $('label[class=input-file-btn]').css("display", "");
                    $('label[class=del-file-btn]').css("display", "");
                    $('.cos-table-tg input').attr("accept", "image/*");
                    $('#load_screen').remove();                 // Loader 제거
                },
                error: function (error) {
                    console.log(error);
                    $('#load_screen').remove(); // Loader 제거
                    if (error.statusText == 'Unauthorized') {
                        alert("다른 기기에서 접속하였습니다.\n로그인 정보가 해제됩니다.");
                        location.href = '/login';
                    } else {
                        alert('페이지 추가 중 오류가 발생했습니다.');
                    }
                }
            });
        }

        // tab 이동
        function tabMove(tab) {
            for (var i = 1; i <= $('ul.tabnav li').length; i++) {
                if (i == tab) {
                    $('#contable0' + i).fadeIn();
                } else {
                    $('#contable0' + i).fadeOut();
                }
            }
        }

        // tab 삭제
        function delTab() {
            var seltab;

            if (crud == 'crud-r') {
                alert('문서 수정 시 가능합니다.');
                return false;
            }

            if ($('ul.tabnav li').length == 1) {
                alert("삭제 가능한 문서가 없습니다.");
                return false;
            }

            for (var i = 0; i < $('ul.tabnav li').length; i++) {
                if ($('#tabContent')[0].children[i].style.display != "none") {
                    if (confirm('문서 시공사진(0'+(i+1)+')가 삭제됩니다.\n삭제하시겠습니까?')) {
                        seltab = i;     //삭제하는 탭 번호 저장
                        $('ul.tabnav li')[i].remove();
                        $('.tabContent div')[i].remove();
                        $('#contable0' + (i)).fadeIn();
                    } else {
                        return false;
                    }
                }
            }
            //input 태그 id, name 변경
            for (var i = 0; i< $('.cos-table-tg input').length; i++) {
                // if ($('.cos-table-tg input')[i].name.indexOf('photo_file') != -1 || $('.cos-table-tg input')[i].name.indexOf('sub_title') != -1) {
                    for (var j = seltab; j < 5; j++) {
                        $('.cos-table-tg input')[i].name = $('.cos-table-tg input')[i].name.replace('_'+(j+1)+'-', '_'+j+'-');
                        $('.cos-table-tg input')[i].id = $('.cos-table-tg input')[i].id.replace('_'+(j+1)+'-', '_'+j+'-');
                    }
                // }
            }
            //img 태그 id 변경
            for (var i = 0; i < $('.cos-table-tg img').length; i++) {
                for (var j = seltab; j < 5; j++) {
                    $('.cos-table-tg img')[i].id = $('.cos-table-tg img')[i].id.replace('_'+(j+1)+'-', '_'+j+'-');
                }
            }
            //탭 재정렬
            $('.tabnav').empty();
            for (var i = 0; i < $($('.tabContent div')).length; i++) {
                $('.tabnav').append('<li><a href="javascript:void(0);" onclick="tabMove(' + (i+1) + ');">시공사진 0' + (i+1) + '</a></li>');        // 탭 리스트 재정렬
                $('#'+$('.tabContent div')[i].id).attr('id','contable0'+(i+1));         // 탭 삭제 후 id 변경
                $('.cos-table-tg-zw5y')[i].innerHTML = $('.cos-table-tg-zw5y')[i].innerHTML.replace('0'+(i+2), '0'+(i+1))   // 탭 삭제 후 시공사진 이름 변경
            }

            if (seltab == '0') {
                $('#contable01').fadeIn();
            }
        }
        // 시공사진 문서 수정 취소
        function updateCancel() {
            if (confirm("작성 되었던 모든 내용은 사라집니다.\n정말로 취소 하시겠습니까?")) {
                // location.reload();
                history.go(0);
            } else {
                return false;
            }
        }

        // 시공사진 문서 조회
        function getView() {
            $('#div_for_loader').html(loader);          // Loader 실행

            crud = $('#crud').val();

            if (crud == "crud-r" || crud == "crud-u") {
                docSn = $('#docSn').val();
            }

            docTypeCd = $('#docTypeCd').val();

            $.ajax({
                type: 'get',
                url: 'getConstruc',
                async: false,
                data: {
                    docSn: docSn,
                    docTypeCd: docTypeCd
                },
                success: function (response) {
                    console.log(crud);
                    for (var i = 0; i < response.length; i++) {
                        $('.tabnav').append('<li><a href="javascript:void(0);" onclick="tabMove(' + (i+1) + ');">시공사진 0' + (i+1) + '</a></li>');
                        if (i == 0) {
                            $('.tabContent').append('<div id="contable0' + (i+1) + '" style="display: block"></div>');
                        } else {
                            $('.tabContent').append('<div id="contable0' + (i+1) + '" style="display: none"></div>');
                        }
                        $('#contable0' + (i+1)).html(response[i]);
                    }

                    if (crud == "crud-r") {
                        $('.cos-table-tg input').attr("readonly", true);
                        $('.cos-table-tg input').css({"border" : "none"});

                        $("#updateBtn").show();
                        $("#pdfSave").show();
                    }

                    if (crud == "crud-c") {
                        $("#dataInsert").show();
                        $('label[class=input-file-btn]').css("display", "");
                        $('label[class=del-file-btn]').css("display", "");
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

        // Insert Or Update
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

            $('#div_for_loader').html(loader);          // Loader 실행

            // formData 파일 추가
            var formData = new FormData($("#construcForm")[0]);
            formData.append('tabs', $('ul.tabnav li').length);
            var length = $('input[type=file]').length;

            for ( var i = 0; i < length; i++ ) {
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

        // Insert Or Update Ajax
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
                            alert('ERROR!\n시공사진 등록에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('시공사진 등록이 완료되었습니다.');
                            location.href="/document/list";
                        }
                    } else {
                        if (response.success == false) {
                            alert('ERROR!\n시공사진 수정에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            history.back();
                        } else {
                            alert('시공사진 수정이 완료되었습니다.');
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
                        alert('시공사진 등록 중 오류가 발생했습니다.');
                    }
                }
            });
        }

        // PDF 저장
        function savePDF() {
            $('#div_for_loader').html(loader);          // Loader 실행
            $('#tabContent').children('div').css('display', '')
            $('#pdfConts').show(); //pdf 생성영역 보이기
            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('tabContent')).then(canvas => {
                var lists = document.getElementById('tabContent').querySelectorAll('tbody');
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

                    for ( var i = 0; i < sortedLeng; i++ ) {
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
                    $('#tabContent').children('div').css('display', 'none')
                    $('#tabContent').children('div').first().fadeIn();
                    console.timeEnd('PDF End');
                    $('#load_screen').remove();                 // Loader 제거
                    $('#pdfConts').hide();                      // pdf 생성 후 공백 제거
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

        // 이미지 삽입
        function insertImage(data) {
            var fileForm = /(.*?)\.(jpg|jpeg|gif|bmp|png)$/;    //확장자 이미지로 제한
            var imgId = data.parentElement.previousElementSibling.getAttribute('id');         // 현재 태그의 이전 태그 id 값

            if (data.files.length < 1) {
                alert('사진 선택을 취소하였습니다.\n사진이 저장되지 않습니다.');
                // data 스타일 none
                data.parentElement.previousElementSibling.style.display = 'none';
                // src data 제거
                data.parentElement.previousElementSibling.removeAttribute('src');
                console.log('cancel was pressed');
            } else {
                if (!data.value.toLocaleLowerCase().match(fileForm)) {
                    alert('이미지 파일만 업로드 가능합니다.')
                    return false;
                }
            }


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
                $("#" + imgId).show();                                  // 이미지 preview
            }
        }

        //사진 삭제
        function delImage(data){
            if (data.parentElement.previousElementSibling.previousElementSibling.src) {
                if (confirm("사진을 삭제 하시겠습니까?")) {
                    for (var i = 0; i < $('input[type=file]').length; i++) {
                        // data value 초기화
                        data.parentElement.previousElementSibling.childNodes[1].value = "";
                        // data 스타일 none
                        data.parentElement.previousElementSibling.previousElementSibling.style.display = 'none';
                        // src data 제거
                        data.parentElement.previousElementSibling.previousElementSibling.removeAttribute('src');
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
