@extends('layout.master')

@push('plugin-scripts')
    {!! Html::script('js/signature_pad.umd.min.js') !!}
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
    {!! Html::script('js/jquery.textarea_autosize.min.js') !!}
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
@endpush

@push('custom-scripts')
    <script>
        let loader = `<div id="load_screen">` +
            `<div class="lds-spinner">` +
            `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
            `</div>`;

        /***********************************************
         * 변수 선언
         ***********************************************/
        var crud;               // 문서 확인 (create, read, update, delete)
        var docType;            // 문서 종류
        let renderedImg = new Array;
        let contWidth = 190, // 너비(mm) (a4에 맞춤)
            padding = 10; // 상하좌우 여백(mm)

        $(function () {

            getDocData();
        });

        /** textarea 실시간 크기 조절 (ex. 10줄 → 1줄 변경 시 크기 조절) */
        function resize(data) {
            data.style.height = "auto";

            if (data.clientHeight < data.scrollHeight) {
                data.style.height = data.scrollHeight + "px";
            }
        }

        // 문서 조회
        function getDocData() {
            $('#div_for_loader').html(loader);          // Loader 실행

            var docSn = $('#docSn').val();
            // var docSn = 231;
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

                    if (docSn != '') {
                        crud = 'crud-r';

                        $('#update').show();
                        $('#pdfSave').show();

                        $('input[type=text], textarea').addClass('border-none');
                        $('input[type=text]').prop('readonly', true);

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
                    }, 500);
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

        // 수정 버튼
        function updateDoc() {
            if (crud == 'crud-r') {
                // pdf 출력 버튼 hide
                $('#pdfSave').hide();
                $('#newSave').show();
                $('#cancel').show();

                $('input[type=text], pre').removeClass('border-none');
                $('input[type=text]').prop('readonly', false);

                var preTag = document.querySelectorAll('pre');

                for (var item of preTag) {
                    // html2canvas 사용 시, textarea 개행 불가로 인한 임시 태그 변경
                    item.outerHTML = item.outerHTML.replaceAll('pre', 'textarea');
                }

                crud = 'crud-u';

                // textarea 자동 높이 조절
                $('.txt-auto').textareaAutoSize();
            } else {
                documentInsOrUpd('update');
            }
        }

        // 취소 버튼
        function updateCancel() {
            if (confirm("작성 되었던 모든 내용은 사라집니다.\n정말로 취소 하시겠습니까?")) {
                if (crud == 'crud-c') {
                    history.back();
                } else {
                    history.go(0);
                }
            } else {
                return false;
            }
        }

        // Insert Or Update
        function documentInsOrUpd(data) {
            let blank_pattern = /^\s+|\s+$/g;

            /** 오늘 날짜 구하기 start */
            var today = new Date();

            var year = today.getFullYear();
            var month = ('0' + (today.getMonth() + 1)).slice(-2);
            var day = ('0' + today.getDate()).slice(-2);

            let chckYmd = year + '-' + month  + '-' + day;
            /** 오늘 날짜 구하기 end */

            let subSttnNm = $(document.getElementsByName('sub_sttn_nm'));
            let eqpNm = $(document.getElementsByName('eqp_nm'));

            // 변전소명 체크
            if (subSttnNm.val().replace(blank_pattern, '') == '') {
                alert('변전소명을 입력해주세요');
                subSttnNm.focus();
                return false;
            }

            // 기기명 체크
            if (eqpNm.val().replace(blank_pattern, '') == '') {
                alert('기기명을 입력해주세요');
                eqpNm.val().focus();
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            // formData 파일 추가
            var formData = new FormData($("#doc-data")[0]);

            formData.append('chck_ymd', chckYmd);       // 날짜
            formData.append('docType', docType);        // 문서 종류

            if (data == "insert") {
                url = "/insert2";
            } else {
                formData.append('docSn', $('#docSn').val());
                url = "/update2";
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
                            alert('ERROR!\n시공품질점검표 등록에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            $('#load_screen').remove();                 // Loader 제거
                            history.back();
                        } else {
                            alert('시공품질점검표 등록이 완료되었습니다.');
                            $('#load_screen').remove();                 // Loader 제거
                            location.href="/document/list";
                        }
                    } else {
                        if (response.success == false) {
                            alert('ERROR!\n시공품질점검표 수정에 실패하였습니다.\n\n에러메세지 : ' + response.msg);
                            $('#load_screen').remove();                 // Loader 제거
                            history.back();
                        } else {
                            alert('시공품질점검표 수정이 완료되었습니다.');
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
                        alert('시공품질점검표 등록 중 오류가 발생했습니다.');
                    }
                }
            });
        }

        /** PDF 저장 */
        function savePDF() {
            $('#div_for_loader').html(loader);          // Loader 실행

            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('doc-data')).then(canvas => {
                var lists = document.getElementById('doc-data').querySelectorAll('.pdf-chck-height');
                var listsLeng = lists.length;
                var deferreds = [];

                var pdfHeight = 0;
                var tag = document.getElementById('pdfConts');

                for (var i = 0; i < listsLeng; i++) {
                    // 첫 페이지 시작 시, lists에 공백 div 무시
                    if (pdfHeight == 0 && lists[i].innerHTML.length == 0) {
                        continue;
                    }

                    // 페이지가 새로 시작되고, tbody 태그인 경우 table header row 가져오기.
                    if (pdfHeight == 0 && lists[i].tagName == 'TBODY' && lists[i].className.indexOf('start-tbody') == -1) {
                        var data = lists[i].parentElement.getElementsByClassName('table-hd')[0];
                        var tbodyWidth = data.offsetWidth * 0.2645833333,     // px -> mm로 변환
                            tbodyHeight = data.offsetHeight * 0.2645833333,   // px -> mm로 변환
                            // 비율에 맞게 높이 조절
                            tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                        pdfHeight += tbodyHeightCalc;

                        var tableTag = document.createElement('table');
                        tableTag.className = lists[i].parentElement.className;
                        $(tableTag).clone().appendTo(tag);

                        $(data).clone().appendTo(tag.lastElementChild)
                    }

                    var tbodyWidth = lists[i].offsetWidth * 0.2645833333,     // px -> mm로 변환
                        tbodyHeight = lists[i].offsetHeight * 0.2645833333,   // px -> mm로 변환
                        // 비율에 맞게 높이 조절
                        tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                    if (pdfHeight + tbodyHeightCalc < 297 - (padding * 2)) {
                        pdfHeight += tbodyHeightCalc;

                        var clone = $(lists[i]).clone();            // element 복제

                        // tbody 경우 table tag 요소 안에 넣기
                        if (lists[i].tagName == 'TBODY') {
                            if (lists[i].className.indexOf('start-tbody') != -1) {
                                // table 태그 생성하여 각 table 마다 속성 넣기
                                var tableTag = document.createElement('table');
                                tableTag.className = lists[i].parentElement.className;
                                $(tableTag).clone().appendTo(tag);
                            }

                            clone.appendTo(tag.lastElementChild);
                        } else {
                            clone.appendTo(tag);
                        }

                        // 페이지 길이 넘어가지 않고 문서의 마지막 일 경우 generateCanvas
                        if (lists[i].className.indexOf('end-doc') != -1) {
                            // var emptyTag = '<div class="page-break-before"></div>';

                            // $(tag).append(emptyTag);

                            pdfHeight = 0;
                        }
                    } else {
                        // rowspan 속성이 있는 tbody가 a4크기 넘을 경우, 크기에 맞춰서 rowspan 나누는 작업
                        if (lists[i].tagName == 'TBODY' && lists[i].childElementCount > 1) {
                            var rowCnt = 0;
                            var clone = $(lists[i]).clone(true);            // element 복제

                            var tempTable = document.createElement('tbody');

                            while (clone[0].childElementCount > 0) {
                                for (var a = rowCnt; a < (rowCnt + clone[0].childElementCount); a++) {
                                    var trWidth = lists[i].children[a].offsetWidth * 0.2645833333,     // px -> mm로 변환
                                        trHeight = lists[i].children[a].offsetHeight * 0.2645833333,   // px -> mm로 변환
                                        // 비율에 맞게 높이 조절
                                        trHeightCalc = contWidth * trHeight / trWidth;

                                    if (pdfHeight + trHeightCalc < 297) {
                                        pdfHeight += trHeightCalc;

                                        // 페이지가 넘어가지 않고 tbody 종료 시, generateCanvas
                                        if (a == (rowCnt + clone[0].childElementCount) - 1) {
                                            // rowspan 개수 변경
                                            for (var b = 0; b < clone[0].childElementCount; b++) {
                                                for (var c = 0; c < clone[0].children[b].childElementCount; c++) {
                                                    if (clone[0].children[b].children[c].getAttribute('rowspan') != null) {
                                                        if (clone[0].children[b].children[c].getAttribute('rowspan') >= clone[0].childElementCount) {
                                                            clone[0].children[b].children[c].setAttribute('rowspan', clone[0].childElementCount);
                                                        } else {
                                                            if ((clone[0].childElementCount - b) < (clone[0].children[b].children[c].getAttribute('rowspan'))) {
                                                                clone[0].children[b].children[c].setAttribute('rowspan', (clone[0].childElementCount - b));
                                                            }
                                                        }
                                                    }
                                                }
                                            }

                                            clone.appendTo(tag.lastElementChild);
                                        }
                                    } else {
                                        // a = 0 이면 다음 페이지 생성 이유로 generateCanvas 생성 후, i-- & break
                                        if (a == 0) {
                                            i--;

                                            var emptyTag = '<div class="page-break-before"></div>';

                                            $(tag).append(emptyTag);

                                            pdfHeight = 0;
                                            break;
                                        }

                                        tempTable.className = 'pdf-chck-height';

                                        var cnt = clone[0].childElementCount;

                                        // a4 크기 넘어가는 row 부터 tempTable로 옮겨 놓기
                                        for (var z = cnt; z > (a-rowCnt); z--) {
                                            tempTable.append(clone[0].children[a-rowCnt]);
                                        }

                                        var rowSpan = [];                               // rowSpan column 담기

                                        // rowspan 개수 변경
                                        for (var d = 0; d < clone[0].childElementCount; d++) {
                                            for (var e = 0; e < clone[0].children[d].childElementCount; e++) {
                                                if (clone[0].children[d].children[e].getAttribute('rowspan') != null) {
                                                    if (clone[0].children[d].children[e].getAttribute('rowspan') > clone[0].childElementCount) {
                                                        clone[0].children[d].children[e].setAttribute('rowspan', clone[0].children[d].children[e].getAttribute('rowspan')-clone[0].childElementCount);
                                                        rowSpan.push({'tr' : d, 'td' : e, 'value' : $(clone[0].children[d].children[e]).clone(true)});
                                                        clone[0].children[d].children[e].setAttribute('rowspan', clone[0].childElementCount);
                                                    } else {
                                                        if ((clone[0].childElementCount - d) < (clone[0].children[d].children[e].getAttribute('rowspan'))) {
                                                            rowSpan.push({'tr' : d, 'td' : e, 'value' : $(clone[0].children[d].children[e]).clone(true)});
                                                            clone[0].children[d].children[e].setAttribute('rowspan', (clone[0].childElementCount - d));
                                                        }
                                                    }
                                                }
                                            }
                                        }

                                        // tempTable 첫 번째 tr 태그에 rowspan td 값 추가
                                        for (var f = 0; f < rowSpan.length; f++) {
                                            if (tempTable.children[rowSpan[f].tr] == undefined) {
                                                if (tempTable.lastElementChild.children[rowSpan[f].td] == undefined) {
                                                    $(rowSpan[f].value).clone(true).appendTo(tempTable.lastElementChild);
                                                } else {
                                                    $(rowSpan[f].value).clone(true).insertBefore(tempTable.lastElementChild.children[rowSpan[f].tr]);
                                                }
                                            } else {
                                                if (tempTable.children[rowSpan[f].tr].children[rowSpan[f].td] == undefined) {
                                                    $(rowSpan[f].value).clone(true).appendTo(tempTable.children[rowSpan[f].tr]);
                                                } else {
                                                    $(rowSpan[f].value).clone(true).insertBefore(tempTable.children[rowSpan[f].tr].children[rowSpan[f].td]);
                                                }
                                            }
                                        }

                                        clone.appendTo(tag.lastElementChild)

                                        var emptyTag = '<div class="page-break-before"></div>';

                                        $(tag).append(emptyTag);

                                        pdfHeight = 0;
                                    }
                                }
                                // tempTable 값(추가 작업해야 할 tr 값)이 남아 있으면 계속 작업
                                if (tempTable.childElementCount > 0) {
                                    rowCnt += clone[0].childElementCount;
                                    clone = $(tempTable).clone();
                                    tempTable = document.createElement('tbody');

                                    var data = lists[i].parentElement.getElementsByClassName('table-hd')[0];
                                    var tbodyWidth = data.offsetWidth * 0.2645833333,     // px -> mm로 변환
                                        tbodyHeight = data.offsetHeight * 0.2645833333,   // px -> mm로 변환
                                        // 비율에 맞게 높이 조절
                                        tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                                    pdfHeight += tbodyHeightCalc;

                                    var tableTag = document.createElement('table');
                                    var className = lists[i].parentElement.className.replaceAll('table-bd-top-12', '');
                                    className.replaceAll('table-bd-btm-12', '');
                                    tableTag.className = className;
                                    $(tableTag).clone().appendTo(tag);

                                    $(data).clone().appendTo(tag.lastElementChild)
                                } else {
                                    clone = $(tempTable).clone();
                                }
                            }
                        } else {
                            i--;
                            // var emptyTag = '<div class="page-break-before"></div>';

                            // $(tag).append(emptyTag);

                            pdfHeight = 0;
                        }
                    }
                }

                $.when.apply($, deferreds).then(function () { // 이미지 렌더링이 끝난 후
                    sessionStorage.setItem("pdfData", tag.outerHTML);
                    $(tag).empty();

                    $('#load_screen').remove();                 // Loader 제거

                    location.href = '/pdf_content'
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
                    var img = canvas.toDataURL('image/png', 0.1); //이미지 형식 지정
                    renderedImg.push({num:i, image:img, height:heightCalc}); //renderedImg 배열에 이미지 데이터 저장(뒤죽박죽 방지)
                    deferred.resolve(); //결과 보내기
                }
            );
        }
    </script>
@endpush
