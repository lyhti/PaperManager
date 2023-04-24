@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/loader.css') !!}
    {!! Html::style('css/construc.css') !!}
    {!! Html::style('css/cooct.css') !!}
    {!! Html::style('css/25-8kv_girs.css') !!}
    {!! Html::style('css/ct_scrmrs.css') !!}
    {!! Html::style('css/doc.css') !!}
    {!! Html::style('bootstrap/select/css/bootstrap-select.min.css') !!}
@endpush

@section('content')
    {{-- Loader 시작 --}}
    <div id="div_for_loader"></div>
    {{-- Loader 끝 --}}
    {{ csrf_field() }}
    <div class="document-table-search">
        <input type="date" id="startDate" value="{!! date("Y-m-d", strtotime("-30 day")) !!}"/> ~ <input type="date" id="endDate" value="{!! date('Y-m-d') !!}"/>
        <select id="docType" class="my-select selectpicker show-menu-arrow" data-live-search="true">
            <option value="all">전체문서</option>
            @foreach ($docTypeList as $row)
                <option value="{{ $row -> code_abbreviation }}">{{ $row -> document_type_nm }}</option>
            @endforeach
        </select>
        <input type="text" id="searchText"/>
        <button id="search" class="btn-search" onclick="docList();">검색</button>
    </div>
    <table class="table">
        <thead>
            <th style="width: 50px;">
                <input type="checkbox" name="docAllChk" onclick="allChk(this);"/>
            </th>
            <th style="width: 65px;">번   호</th>
            <th style="width: 300px;">문서종류</th>
            <th>문서제목</th>
            <th style="width: 120px;">작성/수정자</th>
            <th style="width: 130px;">작성/수정일시</th>
        </thead>
        <tbody id="tableList">
            @if($rtnData->total() == 0)
                <tr style="height: 487px;">
                    <td class="nodata" colspan="6" >
                        <div>리스트 내역 없음</div>
                    </td>
                </tr>
            @else
                @foreach ($rtnData as $key => $row)
                    <tr class="inquiry">
                        <td>
                            <input type="checkbox" name="docSnChk" onclick="selChk(this);" value="{{ $row->document_sn }}"/>
                            <input type="hidden" name="docTypeChk" value="{{ $row->code_abbreviation }}"/>
                        </td>
                        <td>
                            {{ $num - $key }}
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="selDoc({{ $row->document_sn }}, '{{ $row->code_abbreviation }}')">{{ $row->document_type_nm }}</a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="selDoc({{ $row->document_sn }}, '{{ $row->code_abbreviation }}')">{{ $row->title }}</a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="selDoc({{ $row->document_sn }}, '{{ $row->code_abbreviation }}')">{{ $row->user_nm }}</a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="selDoc({{ $row->document_sn }}, '{{ $row->code_abbreviation }}')">{{ $row->udt_dt->format('Y-m-d') }}</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5" style="border-bottom: none; text-align: right;">
                        {{-- 페이지네이션 pagination.blade.php START--}}
                        @include('layout.pagination')
                        {{-- 페이지네이션 pagination.blade.php END--}}
                    </td>
                    <td style="padding-bottom: 0px; vertical-align: middle; text-align:center">
                        <select class="custom-select" id="listCnt" onchange="docList()">
                            <option value="10">10개</option>
                            <option value="20">20개</option>
                            <option value="30">30개</option>
                            <option value="40">40개</option>
                            <option value="50">50개</option>
                        </select>
                    </td>
                </tr>
                <div style="display: none">{{ $rtnData->links() }}</div>
            @endif
        </tbody>
    </table>
    <div class="pdf-btn">
        <button type="button" class="btn btn-primary btn-l" onclick="openPdfModal();">PDF 출력</button>
    </div>
    <div>
        <table class="table" style="width: 580px;">
            <thead>
                <tr>
                    <span>&emsp;PDF 저장 목록 (최대 5개 선택 가능)</span>
                    <th style="width: 100px; text-align: center;">문서번호</th>
                    <th style="width: 170px;">문서종류</th>
                    <th style="width: 210px;">문서제목</th>
                    <th style="width: 100px; text-align: center;">삭   제</th>
                </tr>
            </thead>
            <tbody id="pdf_arrData">
                <tr style="height: 273px;">
                    <td class="nodata" colspan="6">
                        <div>리스트 내역 없음</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> 
    <div class="modal fade" id="docPdfData" data-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="staticBackdropLabel">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="pdfdata"></div>
                <div><table id="pdfConts"></table></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeModal();">취  소</button>
                    <button type="button" class="btn btn-default" onclick="savePdf();">저  장</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('bootstrap/select/js/bootstrap-select.min.js') !!}
@endpush

@push('custom-scripts')
    <script>
        let loader = `<div id="load_screen">` +
            `<div class="lds-spinner">` +
            `<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>` +
            `</div>`;

        let startDate;              // 시작날짜 - 직접입력
        let endDate;                // 종료날짜 - 직접입력
        let docType;             // type 선택
        let searchText;             // 검색어
        let listCnt;                // list 개수
        let chkData = [];
        let url;
        let renderedImg = new Array;
        let contWidth = 190, // 너비(mm) (a4에 맞춤)
            padding = 10; //상하좌우 여백(mm)
        let pageNum;

        $(document).ready(function() {
            // 검색어 입력 후 엔터 동작시 검색
            $('#searchText').keypress(function(event){
                if (event.which == 13) { docList(); return false; }
            });

            /** URL Parameter 가져오기 시작 */
            let search = location.search
            let params = new URLSearchParams(search);

            if (params.get('startDate')) {
                $("#startDate").val(window.atob(params.get('startDate')));
            }

            if (params.get('endDate')) {
                $("#endDate").val(window.atob(params.get('endDate')));
            }

            if (params.get('docType')) {
                $("#docType").val(window.atob(params.get('docType')));
            }

            if (params.get('searchText')) {
                $("#searchText").val(window.atob(params.get('searchText')));
            }

            if (params.get('listCnt')) {
                $("#listCnt").val(window.atob(params.get('listCnt')));
            }

            if (params.get('chkData')) {
                chkData = JSON.parse(decodeURIComponent(window.atob (params.get('chkData'))));
            }
            /** URL Parameter 가져오기 종료 */

            /** PDF 출력목록 생성 */
            $('#pdf_arrData').empty();

            for (var i = 0; i < chkData.length; i++) {
                let rtn = "<tr><td style='text-align: center;'" + i + ">" + chkData[i].num + "</td>";
                rtn += "<td class='td_over' style='max-width: 170px;' id='pdf_typeNm'" + i + ">" + chkData[i].typeNm + "</td>";
                rtn += "<td class='td_over' style='max-width: 210px;' id='pdf_docNm'" + i + ">" + chkData[i].docNm + "</td>";
                rtn += "<td style='text-align: center;'><button class='btn btn-outline-danger btn-sm' onclick='chkDataDel(" + chkData[i].docSn + ")'>삭   제</button></td></tr>";

                $('#pdf_arrData').append(rtn);

                for (var j = 0; j < $('input[name=docSnChk]').length; j++) {
                    if (chkData[i].docSn == $('input[name=docSnChk]')[j].value) {
                        $($('input[name=docSnChk]')[j]).attr('checked', true)
                    }
                }
                
            }
        });

        // pageNation
        function pageNation(data, currentPage) {
            if (data == 'pre') { data = currentPage - 1; }
            if (data == 'next') { data = currentPage + 1; }

            pageNum = data;

            docList();
        }

        // Document List 조회
        function docList() {
            $('#div_for_loader').html(loader);      // Loader 실행

            startDate = $('#startDate').val();
            endDate = $('#endDate').val();
            docType = $('#docType').val();
            searchText = $('#searchText').val();
            listCnt = $('#listCnt').val();

            let btMs = new Date(endDate).getTime() - new Date(startDate).getTime();     //검색 날짜 차수
            let btDay = btMs / (1000 * 60 * 60 * 24);

            if (pageNum == undefined) {
                pageNum = '';
            }

            if (listCnt == undefined) {
                listCnt = '';
            }

            if (startDate == '' || endDate == '') {
                alert("기간 입력을 다시 확인해주시기 바랍니다.");
                $('#load_screen').remove();                 // Loader 제거
                return false;
            }

            if (startDate > endDate) {
                alert("기간 입력이 잘못되었습니다.\n기간 입력을 다시 확인해주시기 바랍니다.");
                $('#load_screen').remove();                 // Loader 제거
                return false;
            }

            if (btDay > 30) {
                alert("조회 기간을 초과하였습니다.\n다시 입력해주시기 바랍니다.\n(검색기간 : 최대 30일)")
                $('#load_screen').remove();                 // Loader 제거
                return false;
            }

            $('#load_screen').remove();                 // Loader 제거

            console.log(JSON.stringify(chkData));

            location.href = 'list?page=' + pageNum + '&startDate=' + window.btoa(startDate) + '&endDate=' + window.btoa(endDate) + '&docType='
                + window.btoa(docType) + '&searchText=' + window.btoa(searchText) + '&listCnt=' + window.btoa(listCnt) + '&chkData=' + window.btoa(encodeURIComponent(JSON.stringify(chkData)));
        }

        // 문서 조회 - 개별
        function selDoc(docSn, docType) {
            location.href = '/' + docType + '/getDoc?docSn=' + window.btoa(docSn);
        }

        // pdf 체크박스
        function selChk(data) {
            if (data.checked) {
                if (chkData.length == 5) {
                    alert('PDF 저장은 최대 5개 까지 가능합니다.');
                    data.checked = false;
                } else {
                    chkbox(data);
                }
            } else {
                if ($('input[name=docSnChk]:checked').length != $('input[name=docSnChk]').length) {
                    $('input[name=docAllChk]').attr('checked', false);
                }
                chkDataDel(data)
            }
        }

        // chckbox 조건 확인
        function allChk(data) {
            if (data.checked) {
                // 페이지 내 name=docSnChk 인 값 반복문
                $('input[name=docSnChk]').each(function () {
                    this.checked = true;
                    chkbox(this);
                });

                // PDF 저장목록이 5개인경우 pdf 목록 개수 정하면 수정
                if (chkData.length == 5) {
                    alert('PDF 저장은 최대 5개 까지 가능합니다.');
                    $('input[name=docAllChk]').attr('checked', false);
                }

                // 선택할 문서가 없는경우
                if (chkData.length == 0) {
                    alert('선택 가능한 문서가 없습니다.');
                    $('input[name=docAllChk]').attr('checked', false);
                }
            } else {
                // 페이지 내 name=docSnChk 인 값 반복문
                $('input[name=docSnChk]').each(function () {
                    this.checked = false;
                    chkDataDel(this);
                });
            }
        }

        // pdf 저장목록 삭제
        function chkDataDel(data) {
            let value;

            if (typeof(data) == "number") {
                value = data;
            } else {
                value = data.value;
            }

            // 저장목록 초기화
            $('#pdf_arrData').empty();

            // chkData 내부 있는 데이터들만 추출하여 배열 만들기
            chkData = chkData.filter(function(item) {
                return item.docSn != value;
            });

            // 남아있는 chkData 데이터 재정렬
            for (let i = 0; i < chkData.length; i++) {
                let rtn = "<tr><td style='text-align: center'" + i + ">" + chkData[i].num + "</td>";
                rtn += "<td class='td_over' style='max-width: 170px;' id='pdf_typeNm'" + i + ">" + chkData[i].typeNm + "</td>";
                rtn += "<td class='td_over' style='max-width: 210px;' id='pdf_docNm'" + i + ">" + chkData[i].docNm + "</td>";
                rtn += "<td style='text-align: center;'><button class='btn btn-outline-danger btn-sm' onclick='chkDataDel(" + chkData[i].docSn + ")'>삭   제</button></td></tr>";
                $('#pdf_arrData').append(rtn);
            }

            // 해당 value chkbox 해제
            $('input:checkbox[name=docSnChk]').each(function() {
                if (this.value == value) { this.checked = false; }
            });

            // docAllchk 해제
            if ($('input[name=docSnChk]:checked').length != $('input[name=docSnChk]').length) {
                $('input[name=docAllChk]').attr('checked', false);
            }

            // 리스트 없음 표시
            if (chkData.length == '0') {
                let rtn = "<tr><td class='nodata' colspan='6' style='text-align: center; height: 273px;'><div>리스트 내역 없음</div></td></tr>";
                $('#pdf_arrData').append(rtn);
            }
        }

        /**
         * PDF 저장 목록 출력
         * */
        function chkbox(data) {
            // 페이지 내 체크박스들이 전부 체크되어 있으면 allChk true
            if ($('input[name=docSnChk]:checked').length == $('input[name=docSnChk]').length) {
                $('input[name=docAllChk]').prop("checked", true);
            }

            // 선택한 체크박스의 docSn이 chkData 내부 있는 데이터들만 추출하여 배열 만들기
            let chkDataYn = chkData.filter(function(item) {
                return item.docSn == data.value;
            });

            // 중복되는 값이 있으면 현재 함수 나가기 (중복데이터 배제)
            if (chkDataYn.length > 0) {
                return false;
            }

            // pdf 저장 목록에 5개 이상 데이터가 있으면 현재 선택한 체크박스 해제 후 함수 나가기
            if (chkData.length == 5) {
                data.checked = false;
                // 전체 check 선택 시, pdf 목록에 이미 5개 이상 데이터가 있으면 전체 check 해제.
                if ($('input[name=docSnChk]:checked').length < $('input[name=docSnChk]').length) {
                    return false;
                }
            }

            $('#pdf_arrData').empty();          // pdf 목록 비우기

            // pdf 목록 재정렬
            chkData.push({
                "num" : data.parentElement.nextElementSibling.innerText,
                "docSn" : data.value,
                "type" : data.nextElementSibling.value,
                "typeNm" : data.parentElement.nextElementSibling.nextElementSibling.innerText,
                "docNm" : data.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.innerText,
                "user" : data.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.innerText,
                "crtDt" : data.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.innerText
            });

            // pdf 재정렬 목록 표시
            for (let i = 0; i < chkData.length; i++) {
                let rtn = "<tr><td style='text-align: center;'" + i + ">" + chkData[i].num + "</td>";
                rtn += "<td class='td_over' style='max-width: 170px;' id='pdf_typeNm'" + i + ">" + chkData[i].typeNm + "</td>";
                rtn += "<td class='td_over' style='max-width: 210px;' id='pdf_docNm'" + i + ">" + chkData[i].docNm + "</td>";
                rtn += "<td style='text-align: center;'><button class='btn btn-outline-danger btn-sm' onclick='chkDataDel(" + chkData[i].docSn + ")'>삭   제</button></td></tr>";

                $('#pdf_arrData').append(rtn);
            }
        }

        // pdf modal 출력
        function openPdfModal() {
            let list;
            let lists = new Array;
            let gap = "<div id='gap' style='height: 80px;'></div>";        // 문서 사이 여백 넣기

            if (Array.isArray(chkData) && chkData.length == 0) {
                alert('선택 된 문서가 없습니다.');
                return false;
            }

            $('#div_for_loader').html(loader);          // Loader 실행

            for (const item of chkData) {
                $.ajax({
                    type: 'get',
                    url: 'documentPdf',
                    async: false,
                    data: {
                        docSn: item.docSn,
                        docType: item.type
                    },
                    success: function (response) {
                        for (const [i, data] of response.entries()) {
                            // 개폐동작특성시험, 시공사진 - 사진 미포함시, pdf 출력 배제
                            if (data.indexOf('construc') != -1) {
                                if (i != 0) {
                                    // 이미지가 없으면 pdf 출력 빼기
                                    if (data.indexOf("src") != -1) {
                                        $('#pdfdata').append(data);
                                        $('#pdfdata').append(gap);
                                    }
                                } else {
                                    $('#pdfdata').append(data);
                                    $('#pdfdata').append(gap);
                                }
                            } else if (data.indexOf('cooct') != -1) {
                                list = data.split('<input type="hidden" id="pdfstart"/>');          // 개폐동작 pdf 시작점 잡기
                                for (let j = 1; j < list.length; j++) {
                                    if (j != 1) {                                                   // Closing Time 은 항상 포함
                                        if (list[j].indexOf('src') != -1) {                         // 사진 미포함시 배제
                                            lists.push(list[j]);                                    // lists에 해당 table push
                                            lists.push(gap);
                                        }
                                    } else {
                                        lists.push(list[j]);
                                        lists.push(gap);
                                    }
                                }
                                $('#pdfdata').append(lists);                                        //lists pdf 모달에 추가
                            } else {
                                $('#pdfdata').append(data);
                                if (response.length-1 == i) {
                                    $('#pdfdata').append(gap);
                                }
                                setTimeout(function() {
                                    // textarea 자동 높이 조절
                                    $('.txtarea').textareaAutoSize();
                                }, 500)
                            }
                        }

                        $('#pdfdata input, select, textarea').css({"border": "none", "appearance": "none"});
                        $('#pdfdata input, textarea').attr("readonly", true);
                        $('#pdfdata select').attr("disabled", true);
                    },
                    error: function (error) {
                        console.log(error);
                        $('#load_screen').remove(); // Loader 제거
                        if (error.statusText == 'Unauthorized') {
                            alert("다른 기기에서 접속하였습니다.\n로그인 정보가 해제됩니다.");
                            location.href = '/login';
                        } else {
                            alert('PDF 불러오기 중 오류가 발생했습니다.');
                        }
                    }
                });
            }
            $("#docPdfData").modal('show');

            // 1초 후 로더 제거
            setTimeout(function () {
                $('#load_screen').remove();                 // Loader 제거
            }, 1000)
        }

        /**
         * 모달 닫기 - modal body 에 append 한 데이터 삭제
         * */
        function closeModal() {
            $('#pdfdata').empty();
            $('#docPdfData').modal('hide');
            $('#docType').css({"border" : "", "appearance": ""});
            $('#listCnt').css({"border" : "", "appearance": ""});
        }

        // pdf 저장
        function savePdf() {
            $('#div_for_loader').html(loader);          // Loader 실행

            // 문서 사이 여백 숨기기
            $('#gap').hide()

            let txtArea = document.getElementById('pdfdata').querySelectorAll('.txtarea');

            txtArea.forEach(function(data) {
                // html2canvas 사용 시, textarea 개행 불가로 인한 임시 태그 변경
                data.outerHTML = data.outerHTML.replaceAll('textarea', 'pre');
            });

            pdfPrint();
        }

        function pdfPrint() {
            html2canvas(document.getElementById('pdfdata')).then(canvas => {
                let lists = document.getElementById('pdfdata').querySelectorAll('tbody');
                let listsLeng = lists.length;
                let deferreds = [];
                let doc = new jsPDF("p", "mm", "a4");
                let pdfHeight = 0;
                let tag = document.getElementById('pdfConts');
                let pdfImgNum = 0;

                for (let i = 0; i < listsLeng; i++) {
                    let tbodyWidth = lists[i].offsetWidth * 0.2645,
                        tbodyHeight = lists[i].offsetHeight * 0.2645,
                        // 비율에 맞게 높이 조절
                        tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;
                    if (padding + pdfHeight + tbodyHeightCalc < 297 - padding * 2) {
                        pdfHeight += tbodyHeightCalc;
                        let clone = $(lists[i]).clone(true);

                        tag.setAttribute('class', lists[i].parentElement.className)
                        tag.append(clone[0]);
                        if (lists[i].className == 'tbody-end' || i == (listsLeng-1)) {
                            let deferred = $.Deferred();
                            deferreds.push(deferred.promise());
                            generateCanvas(pdfImgNum, doc, deferred, tag);
                            pdfImgNum++;
                            pdfHeight = 0;
                            $(tag).empty();
                            tag.removeAttribute('class')
                        }
                    } else {
                        let deferred = $.Deferred();
                        deferreds.push(deferred.promise());
                        generateCanvas(pdfImgNum, doc, deferred, tag);

                        pdfImgNum++;
                        i--;
                        pdfHeight = 0;
                        $(tag).empty();
                        tag.removeAttribute('class')
                    }
                }

                $(tag).empty();

                $.when.apply($, deferreds).then(function () { // 이미지 렌더링이 끝난 후
                    let sorted = renderedImg.sort(function (a, b) {return a.num < b.num ? -1 : 1;}), // 순서대로 정렬
                        curHeight = padding, //위 여백 (이미지가 들어가기 시작할 y축)
                        sortedLeng = sorted.length;

                    for (let i = 0; i < sortedLeng; i++) {
                        let sortedHeight = sorted[i].height,
                            sortedImage = sorted[i].image;

                        if (i != 0) {
                            doc.addPage(); // 페이지를 추가함
                        }
                        curHeight = padding; // 이미지가 들어갈 y축을 초기 여백값으로 초기화
                        doc.addImage(sortedImage, 'jpeg', padding , curHeight, contWidth, sortedHeight); // 이미지 넣기
                        curHeight += sortedHeight; // y축 = 여백 + 새로 들어간 이미지 높이
                    }
                    doc.save('filename.pdf');                   // pdf 저장

                    console.timeEnd('PDF End');
                    sorted.splice(0);                           // pdf 저장 후 데이터 초기화
                    let txtArea = document.getElementById('pdfdata').querySelectorAll('.txtarea');
                    txtArea.forEach(function(data) {
                        data.outerHTML = data.outerHTML.replaceAll('pre', 'textarea');          // 임시 태그 변경 원복
                    });

                    // 문서 사이 여백 보이기
                    $('#gap').show()

                    $('#load_screen').remove();                 // Loader 제거
                });
            });
        }

        // 페이지를 이미지로 만들기
        function generateCanvas(i, doc, deferred, curList) {
            let pdfWidth = $(curList).outerWidth() * 0.2645, //px -> mm로 변환
                pdfHeight = $(curList).outerHeight() * 0.2645,
                heightCalc = contWidth * pdfHeight / pdfWidth; //비율에 맞게 높이 조절
            html2canvas(curList).then(
                function (canvas) {
                    let img = canvas.toDataURL('image/jpeg', 1.0); //이미지 형식 지정
                    renderedImg.push({num:i, image:img, height:heightCalc}); //renderedImg 배열에 이미지 데이터 저장(뒤죽박죽 방지)
                    deferred.resolve(); //결과 보내기
                }
            );
        }
    </script>
@endpush
