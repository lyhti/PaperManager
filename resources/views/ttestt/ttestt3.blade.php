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

    <div class="doc-content" id="cqis_154kv_si">
        <form id="doc-data" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            {!! csrf_field() !!}
        </form>
    </div>
    <div class="pdf-content" id="pdfConts"></div>
    <div class="align-center">
        <button type="button" id="dataSave" class="btn btn-primary btn-l display-none" onclick="documentInsOrUpd('insert')">저    장</button>
        <button type="button" id="update" class="me-5 btn btn-primary btn-l display-none" onclick="updateDoc()">수    정</button>
        <button type="button" id="pdfSave" class="btn btn-primary btn-l dist-left-mm-15" onclick="savePDF()">PDF 출력</button>
        <button type="button" id="newSave" class="me-5 btn btn-secondary btn-l display-none dist-left-mm-15" onclick="documentInsOrUpd('insert')">다른 이름으로 저장</button>
        <button type="button" id="cancel" class="me-5 btn btn-outline-danger btn-l display-none dist-left-mm-15" onclick="updateCancel();">취    소</button>
    </div>
    {{-- Modal Start --}}
    <div class="modal fade" id="getCanvas_chck" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="chck"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeModal('chck');">취 소</button>
                    <button type="button" class="btn btn-default" onclick="saveSign('chck');">저 장</button>               {{-- 점검자 사인 저장 --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Modal End --}}
    {{-- Modal Start --}}
    <div class="modal fade" id="getCanvas_spvs" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="spvs"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeModal('spvs');">취 소</button>
                    <button type="button" class="btn btn-default" onclick="saveSign('spvs');">저 장</button>               {{-- 점검자 사인 저장 --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Modal End --}}
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
        let contWidth = 168, // 너비(mm) (a4에 맞춤)
            padding = 20; // 상하좌우 여백(mm)

        $(function () {
            // $('#div_for_loader').html(loader);          // Loader 실행

            // getDocData();
        });

        /**
         * 서명 모달 open
         * */
        function openModal(data) {
            if (crud == 'crud-r') {
                alert('사인은 작성 및 수정 시 사용 가능합니다.');
                return false;
            }

            var canvasId = data + "-signature";
            var modalId = "getCanvas_" + data;

            if (!document.getElementById(canvasId)) {
                $('#' + data).append('<canvas id="' + canvasId + '" width="760" height="500"></canvas>');
            }

            var canvas = $("#" + canvasId)[0];

            new SignaturePad(canvas, {
                minWidth: 10,
                maxWidth: 10
            });

            $("#" + modalId).modal('show');
        }

        /**
         * 서명 모달 close
         * */
        function closeModal(data) {
            var modalId = "getCanvas_" + data;
            $('#' + modalId).modal('hide');
        }

        /**
         * sign 저장
         * */
        function saveSign(data) {
            var canvasId = data + "-signature";
            var imgId = data + "_sign_file_name";

            var canvas = document.getElementById(canvasId);
            document.getElementById(imgId).src = canvas.toDataURL("image/png", 1.0);

            if (data == 'spvs'){
                document.getElementById(imgId + "2").src = canvas.toDataURL("image/png", 1.0);
            }

            closeModal(data);
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
                        var tbodyWidth = data.offsetWidth * 0.2645,     // px -> mm로 변환
                            tbodyHeight = data.offsetHeight * 0.2645,   // px -> mm로 변환
                            // 비율에 맞게 높이 조절
                            tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                        pdfHeight += tbodyHeightCalc;

                        var tableTag = document.createElement('table');
                        tableTag.className = lists[i].parentElement.className;
                        $(tableTag).clone().appendTo(tag);

                        $(data).clone().appendTo(tag.lastElementChild)
                    }

                    var tbodyWidth = lists[i].offsetWidth * 0.2645,     // px -> mm로 변환
                        tbodyHeight = lists[i].offsetHeight * 0.2645,   // px -> mm로 변환
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
                            // var deferred = $.Deferred();
                            // deferreds.push(deferred.promise());
                            // generateCanvas(pdfImgNum, doc, deferred, tag);
                            //
                            // pdfImgNum++;
                            var emptyTag = '<div style="height:';
                            emptyTag += (297 - (padding * 2)) - pdfHeight;
                            emptyTag +=  'mm">';
                            emptyTag += '</div>';

                            $(tag).append(emptyTag);

                            pdfHeight = 0;
                            // $(tag).empty();
                        }
                    } else {
                        // rowspan 속성이 있는 tbody가 a4크기 넘을 경우, 크기에 맞춰서 rowspan 나누는 작업
                        if (lists[i].tagName == 'TBODY' && lists[i].childElementCount > 1) {
                            var rowCnt = 0;
                            var clone = $(lists[i]).clone(true);            // element 복제

                            var tempTable = document.createElement('tbody');

                            while (clone[0].childElementCount > 0) {
                                for (var a = rowCnt; a < (rowCnt + clone[0].childElementCount); a++) {
                                    var trWidth = lists[i].children[a].offsetWidth * 0.2645,     // px -> mm로 변환
                                        trHeight = lists[i].children[a].offsetHeight * 0.2645,   // px -> mm로 변환
                                        // 비율에 맞게 높이 조절
                                        trHeightCalc = contWidth * trHeight / trWidth;

                                    if (pdfHeight + trHeightCalc < 297 - (padding * 2)) {
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

                                            var emptyTag = '<div style="height:';
                                            emptyTag += (297 - (padding * 2)) - pdfHeight;
                                            emptyTag +=  'mm">';
                                            emptyTag += '</div>';

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

                                        var emptyTag = '<div style="height:';
                                        emptyTag += (297 - (padding * 2)) - pdfHeight;
                                        emptyTag +=  'mm">';
                                        emptyTag += '</div>';

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
                                    var tbodyWidth = data.offsetWidth * 0.2645,     // px -> mm로 변환
                                        tbodyHeight = data.offsetHeight * 0.2645,   // px -> mm로 변환
                                        // 비율에 맞게 높이 조절
                                        tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                                    pdfHeight += tbodyHeightCalc;

                                    var tableTag = document.createElement('table');
                                    tableTag.className = lists[i].parentElement.className;
                                    $(tableTag).clone().appendTo(tag);

                                    $(data).clone().appendTo(tag.lastElementChild)
                                } else {
                                    clone = $(tempTable).clone();
                                }
                            }
                        } else {
                            i--;
                            var emptyTag = '<div style="height:';
                            emptyTag += (297 - (padding * 2)) - pdfHeight;
                            // emptyTag += 297 - padding - pdfHeight;
                            emptyTag +=  'mm">';
                            emptyTag += '</div>';

                            $(tag).append(emptyTag);

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
