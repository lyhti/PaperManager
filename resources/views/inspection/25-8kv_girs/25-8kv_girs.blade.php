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
                    <button type="button" class="btn btn-default" onclick="saveSign('spvs');">저 장</button>               {{-- 감독자 사인 저장 --}}
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
        let contWidth = 170, // 너비(mm) (a4에 맞춤)
            padding = 20; // 상하좌우 여백(mm)

        $(function () {
            $('#div_for_loader').html(loader);          // Loader 실행

            getDocData();
        });

        // 문서 조회
        function getDocData() {
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

        // 수정 버튼
        function updateDoc() {
            if (crud == 'crud-r') {
                // pdf 출력 버튼 hide
                $('#pdfSave').hide();
                $('#newSave').show();
                $('#cancel').show();

                $('input[type=text], input[type=date], input[type=month], pre').removeClass('border-none');
                $('input[type=text], input[type=date], input[type=month], pre').prop('readonly', false);

                $('select').removeClass('select-border-none');
                $('option').prop('disabled', false);

                if ($('select[name=selectWeather]').val() == '직접입력') {
                    $('select[name=selectWeather]').show();
                }

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

        /** 날씨 선택 */
        function choWeather() {
            if (crud == 'crud-r') {
                alert('날씨 선택은 작성 및 수정 시 사용 가능합니다.');
                return false;
            }

            let select = $('select[name=selectWeather]').val();
            let weather = $('input[name=weather]');

            if (select == '직접입력') {
                weather.val('');
                weather.show();
            } else {
                weather.val(select);
                weather.hide();
            }
        }

        /** textarea 실시간 크기 조절 (ex. 10줄 → 1줄 변경 시 크기 조절) */
        function resize(data) {
            data.style.height = "auto";

            if (data.clientHeight < data.scrollHeight) {
                data.style.height = data.scrollHeight + "px";
            }
        }

        /** 점검결과 select change 이벤트 */
        function checkResult(data) {
            if (crud == 'crud-r') {
                alert('점검결과 선택은 작성 및 수정 시 사용 가능합니다.');
                return false;
            }

            var inputData = data.parentElement.parentElement.querySelectorAll('input[type=text]');

            // option selected
            for (var opt of data.options) {
                if (opt.value == data.value) {
                    opt.selected = true;
                    opt.setAttribute('selected', true);
                }
            }

            if (data.value == '해당없음') {
                if (inputData.length > 0) {
                    for (var item of inputData) {
                        item.value = '';
                        item.disabled = true;
                    }
                }
            } else {
                if (inputData.length > 0) {
                    for (var item of inputData) {
                        item.disabled = false;
                    }
                }
            }
        }

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

        // Insert Or Update
        function documentInsOrUpd(data) {
            let blank_pattern = /^\s+|\s+$/g;

            let chckYmd = $(document.getElementsByName('chck_ymd'));
            let subSttnNm = $(document.getElementsByName('sub_sttn_nm'));
            let eqpNm = $(document.getElementsByName('eqp_nm'));

            // 점검일자 체크
            if (chckYmd.val().replace(blank_pattern, '') == '') {
                alert('점검일자를 지정해주세요');
                chckYmd.focus();
                return false;
            }

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

            formData.append('docType', docType);

            // 점검자 사인 가져오기
            var img1 = document.getElementById('chck_sign_file_name'); // img 태그 객체
            var img2 = document.getElementById('spvs_sign_file_name'); // img 태그 객체

            if (img1.src.split('/')[0] == 'data:image') {
                var bstr = atob(img1.src.split(",")[1]);
                var n = bstr.length;
                var u8arr = new Uint8Array(n);

                while(n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }

                var chckSign = new File([u8arr], "chkSign.png", {type:"mime"});
                formData.append('chck_sign_file_name', chckSign);
            } else {
                if (window.location.href != img1.src) {
                    var chckSign = img1.src.split('/').reverse()[0]
                    formData.append('chck_sign_file_name', chckSign);
                }
            }

            if (img2.src.split('/')[0] == 'data:image') {
                var bstr = atob(img2.src.split(",")[1]);
                var n = bstr.length;
                var u8arr = new Uint8Array(n);

                while(n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }

                var spvsSign = new File([u8arr], "spvsSign.png", {type:"mime"});
                formData.append('spvs_sign_file_name', spvsSign);
            } else {
                if (window.location.href != img2.src) {
                    var spvsSign = img2.src.split('/').reverse()[0]
                    formData.append('spvs_sign_file_name', spvsSign);
                }
            }

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

        /** PDF 저장 */
        function savePDF() {
            $('#div_for_loader').html(loader);          // Loader 실행

            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('25-8kv_girs')).then(canvas => {
                var lists = document.getElementById('25-8kv_girs').querySelectorAll('.pdf-chck-height');
                var listsLeng = lists.length;
                var deferreds = [];
                var doc = new jsPDF("p", "mm", "a4");

                var pdfHeight = 0;
                var tag = document.getElementById('pdfConts');
                var pdfImgNum = 0;

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

                        // table 태그 생성하여 각 table class 속성 넣기
                        var tableTag = document.createElement('table');
                        tableTag.className = lists[i].parentElement.className;
                        $(tableTag).clone().appendTo(tag);

                        $(data).clone().appendTo(tag.firstElementChild)
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
                            var deferred = $.Deferred();
                            deferreds.push(deferred.promise());
                            generateCanvas(pdfImgNum, doc, deferred, tag);

                            pdfImgNum++;
                            pdfHeight = 0;
                            $(tag).empty();
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
                                            var deferred = $.Deferred();
                                            deferreds.push(deferred.promise());
                                            generateCanvas(pdfImgNum, doc, deferred, tag);

                                            pdfImgNum++;
                                            i--;
                                            pdfHeight = 0;
                                            $(tag).empty();
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

                                        var deferred = $.Deferred();
                                        deferreds.push(deferred.promise());
                                        generateCanvas(pdfImgNum, doc, deferred, tag);

                                        pdfImgNum++;
                                        pdfHeight = 0;
                                        $(tag).empty();
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

                                    // table 태그 생성하여 각 table 마다 속성 넣기
                                    var tableTag = document.createElement('table');
                                    tableTag.className = lists[i].parentElement.className;
                                    $(tableTag).clone().appendTo(tag);

                                    $(data).clone().appendTo(tag.firstElementChild)
                                } else {
                                    clone = $(tempTable).clone();
                                }
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
                }
                // $(tag).empty();

                $.when.apply($, deferreds).then(function () { // 이미지 렌더링이 끝난 후
                    var sorted = renderedImg.sort(function (a, b) {return a.num < b.num ? -1 : 1;}), // 순서대로 정렬
                        curHeight = padding, //위 여백 (이미지가 들어가기 시작할 y축)
                        sortedLeng = sorted.length;

                    for (var i = 0; i < sortedLeng; i++) {
                        var sortedHeight = sorted[i].height,    // 이미지 높이
                            sortedImage = sorted[i].image;      // 이미지

                        /** 위에서 div, tbody, tr 별로 높이 측정 후 이미지 생성으로 doc 만들어진 이미지 추가만 */
                        if (i != 0) {           // 처음에는 빈 doc 생성되어 있음
                            doc.addPage();      // 페이지를 추가함
                        }

                        doc.addImage(sortedImage, 'svg', padding , curHeight, contWidth, sortedHeight); //이미지 넣기
                    }
                    doc.save('filename.pdf');                   // pdf 저장
                    sorted.splice(0);                           // pdf 저장 후 데이터 초기화
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
            html2canvas(curList).then(
                function (canvas) {
                    var img = canvas.toDataURL('image/svg', 1.0); //이미지 형식 지정
                    renderedImg.push({num:i, image:img, height:heightCalc}); //renderedImg 배열에 이미지 데이터 저장(뒤죽박죽 방지)
                    deferred.resolve(); //결과 보내기
                }
            );
        }

        {{--function loopData(response) {--}}
        {{--    return new Promise(function(resolve, reject) {--}}
        {{--        for (let i = 0; i < response.length; i++) {--}}
        {{--            var colNm = response[i].document_column_value;--}}
        {{--            var colVal = response[i].data_value;--}}

        {{--            // for 루프에서 처리할 코드--}}
        {{--            if (colVal != null) {--}}
        {{--                if (colNm.indexOf('file') != -1) {                  // 이미지--}}
        {{--                    var imgData = $("img[id^=" + colNm + "]");--}}

        {{--                    for (var j = 0; j < imgData.length; j++) {--}}
        {{--                        imgData[j].src = "{{ Storage::url('public/uploads/') }}" + colVal;--}}
        {{--                    }--}}
        {{--                } else {--}}
        {{--                    $(document.getElementsByName(colNm)).val(colVal);--}}

        {{--                    if (colNm == 'weather') {--}}
        {{--                        switch (colVal) {--}}
        {{--                            case '맑음':--}}
        {{--                            case '흐림':--}}
        {{--                            case '비':--}}
        {{--                                $('select[name=selectWeather]').val(colVal);--}}
        {{--                                break;--}}
        {{--                            default:--}}
        {{--                                $('select[name=selectWeather]').val('직접입력');--}}
        {{--                                $('select[name=selectWeather]').hide();--}}
        {{--                                $('input[name=weather]').show();--}}
        {{--                                break;--}}
        {{--                        }--}}
        {{--                    }--}}

        {{--                    if (colNm.indexOf('chck_rslt') != -1) {--}}
        {{--                        if (document.getElementsByName(colNm)[0].tagName == 'SELECT') {--}}
        {{--                            checkResult(document.getElementsByName(colNm)[0]);--}}
        {{--                        }--}}
        {{--                    }--}}
        {{--                }--}}
        {{--            }--}}
        {{--        }--}}
        {{--        resolve("for 루프가 모두 실행됨");--}}
        {{--    });--}}
        {{--}--}}
    </script>
@endpush
