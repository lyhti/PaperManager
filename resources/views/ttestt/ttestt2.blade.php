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

    <div class="doc-content" id="25-8kv_girs">
        <form id="doc-data" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            {!! csrf_field() !!}
            <div class="align-center pdf-chck-height">
                <span class="doc-main-header main-header-font font-20">25.8kV GIS(보통, 정밀) 점검기록표</span>
            </div>
            <div class="hi-mm-5 pdf-chck-height"></div>
            <div class="float-clear pdf-chck-height">
                <div class="float-left dist-top-mm-5 wd-mm-172">
                    <div class="dist-btm-mm-3">
                        <span>공 사 명 :&nbsp;&nbsp;</span>
                        <span>
                            <input type="text" class="border-line wd-mm-149_7" name="cstrn_nm"/>
                        </span>
                    </div>
                    <div class="dist-btm-mm-3">
                        <span>변전소 및 기기명 :&nbsp;&nbsp;</span>
                        <span>
                            <input type="text" class="border-line wd-mm-34_7" name="sub_sttn_nm"/>
                        </span>
                        <span>S/S</span>
                        <span>
                            <input type="text" class="border-line wd-mm-87_5" name="eqp_nm"/>
                        </span>
                    </div>
                    <div class="dist-btm-mm-3">
                        <span>점검일자 :</span>
                        <span>
                            <input type="date" class="border-line wd-mm-30" name="chck_ymd"/>
                        </span>
                        <span>&nbsp;&nbsp;날씨 :</span>
                        <span>
                            <input type="text" class="align-center border-line wd-mm-18 display-none" name="weather"/>
                        </span>
                        <span>
                            <select class="border-line align-center" name="selectWeather" onchange="choWeather();">
                                <option value="맑음">맑음</option>
                                <option value="흐림">흐림</option>
                                <option value="비">비</option>
                                <option value="직접입력">직접입력</option>
                            </select>
                        </span>
                        <span>&nbsp;&nbsp;기온 :</span>
                        <span>
                            <input type="text" class="border-line align-right wd-mm-9" name="tmpt" maxlength="4"/>
                        </span>
                        <span>℃</span>
                        <span>&nbsp;&nbsp;습도 :</span>
                        <span>
                            <input type="text" class="border-line align-right wd-mm-9" name="hmdt" maxlength="4"/>
                        </span>
                        <span>%</span>
                    </div>
                    <div class="dist-btm-mm-3">
                        <span>점 검 자 :</span>
                        <span>
                            <input type="text" class="border-line align-center wd-mm-25" name="chck_nm"/>
                        </span>
                        <label style="position: relative;">
                            <span class="sign-cursor dist-left-mm-5" onclick="openModal('chck')">(인)</span>
                            <span class="sign-img" onclick="openModal('chck');">
                                <img class="sign-cursor wd-mm-18" id="chck_sign_file_name" onclick="openModal('chck')"/>
                            </span>
                        </label>
                        <span class="tooltip-custom2 dist-left-mm-4">
                            <span class="tooltip-custom-text2">
                                "(인)" 클릭 시,
                                <br/>
                                사인 팝업창이 나옵니다.
                            </span>
                            <img class="wd-mm-6" src="{{ url('/image/icon_faq.png') }}" alt="question">
                        </span>
                        <span class="dist-left-mm-31">감 독 자 :</span>
                        <span>
                            <input type="text" class="border-line align-center wd-mm-25" name="spvs_nm"/>
                        </span>
                        <label style="position: relative;">
                            <span class="sign-cursor dist-left-mm-5" onclick="openModal('spvs')">(인)</span>
                            <span class="sign-img" onclick="openModal('spvs');">
                                <img class="wd-mm-18 sign-cursor" id="spvs_sign_file_name" onclick="openModal('spvs');"/>
                            </span>
                        </label>
                        <span class="tooltip-custom3 dist-left-mm-4">
                            <span class="tooltip-custom-text3">
                                "(인)" 클릭 시,
                                <br/>
                                사인 팝업창이 나옵니다.
                            </span>
                            <img class="wd-mm-6" src="{{ url('/image/icon_faq.png') }}" alt="question">
                        </span>
                    </div>
                </div>
                <div class="float-right">
                    <table>
                        <tr>
                            <td rowspan="2" class="align-center wd-mm-7_5 hi-mm-30">
                                <span>결 재</span>
                            </td>
                            <td class="align-center wd-mm-15 hi-mm-11">
                                <span>담 당</span>
                            </td>
                            <td class="align-center wd-mm-15 hi-mm-11">
                                <span>차 장</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-full" id="spvs_sign_file_name2"/>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="hi-mm-6 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <table class="table-bd wd-per-100">
                    <tr>
                        <td class="align-center hi-mm-9">
                            <span>설치장소</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="instl_lctn"/>
                        </td>
                        <td class="align-center">
                            <span>급전번호</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="load_dspt_no"/>
                        </td>
                        <td class="align-center">
                            <span>점&nbsp;&nbsp;검&nbsp;&nbsp;자</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="chck_nm"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-center hi-mm-9">
                            <span>형&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;식</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="hmlg"/>
                        </td>
                        <td class="align-center">
                            <span>정&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;격</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="rtng"/>
                        </td>
                        <td class="align-center">
                            <span>감&nbsp;&nbsp;독&nbsp;&nbsp;자</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="spvs_nm"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-center hi-mm-9">
                            <span>제&nbsp;&nbsp;작&nbsp;&nbsp;사</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="prdc_co"/>
                        </td>
                        <td class="align-center">
                            <span>제작번호</span>
                        </td>
                        <td class="align-center">
                            <input type="text" class="border-line" name="prdc_no"/>
                        </td>
                        <td class="align-center">
                            <span>제작년월</span>
                        </td>
                        <td class="align-center">
                            <input type="month" class="border-line wd-mm-30" name="prdc_ym"/>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">1. 활선상태 점검 (휴전조작 전)</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-9_5">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center">
                                <span>판정기준</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>측&nbsp;&nbsp;정&nbsp;&nbsp;값</span>
                            </td>
                            <td class="align-center">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-25">
                                <span>비&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td rowspan="3" class="align-center">
                                <span>1</span>
                            </td>
                            <td rowspan="3" class="align-left">
                                <span>부분방전 측정</span><br/>
                                <span>- 휴대용 TEV 측정장비 사용</span><br/>
                                <span>※ 한전 측정장비 제공시</span>
                            </td>
                            <td rowspan="3" class="align-center">
                                <span>16 [dbm]</span><br/>
                                <span>이하</span>
                            </td>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-center wd-mm-48">
                                <input type="text" class="align-center border-line wd-px-35" name="cb_msrm_1-1-1"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="cb_msrm_1-1-2"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="cb_msrm_1-1-3"/>
                                <span>[dbm]</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="cb_chck_rslt_1-1"/>
                                <select class="border-line align-center" name="cb_chck_rslt_1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td rowspan="3" class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_1-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-35" name="ds1_msrm_1-1-1"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="ds1_msrm_1-1-2"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="ds1_msrm_1-1-3"/>
                                <span>[dbm]</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds1_chck_rslt_1-1"/>
                                <select class="border-line align-center" name="ds1_chck_rslt_1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-35" name="ds2_msrm_1-1-1"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="ds2_msrm_1-1-2"/>/
                                <input type="text" class="align-center border-line wd-px-35" name="ds2_msrm_1-1-3"/>
                                <span>[dbm]</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds2_chck_rslt_1-1"/>
                                <select class="border-line align-center" name="ds2_chck_rslt_1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td rowspan="3" class="align-center">
                                <span>2</span>
                            </td>
                            <td rowspan="3" class="align-left">
                                <span>GIS 내부 이음 발생 여부</span><br/>
                                <span>- 청진기 사용</span><br/>
                                <span>※ 휴대용 TEV 측정장비가</span><br/>
                                <span>없을 경우</span>
                            </td>
                            <td rowspan="3" class="align-center">
                                <span>무</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-52" name="cb_msrm_1-2-1"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="cb_msrm_1-2-2"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="cb_msrm_1-2-3"/>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="cb_chck_rslt_1-2"/>
                                <select class="border-line align-center" name="cb_chck_rslt_1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td rowspan="3" class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_1-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-52" name="ds1_msrm_1-2-1"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="ds1_msrm_1-2-2"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="ds1_msrm_1-2-3"/>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds1_chck_rslt_1-2"/>
                                <select class="border-line align-center" name="ds1_chck_rslt_1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-52" name="ds2_msrm_1-2-1"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="ds2_msrm_1-2-2"/>/
                                <input type="text" class="align-center border-line wd-px-52" name="ds2_msrm_1-2-3"/>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds2_chck_rslt_1-2"/>
                                <select class="border-line align-center" name="ds2_chck_rslt_1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height end-tbody">
                        <tr>
                            <td rowspan="4" class="align-center">
                                <span>3</span>
                            </td>
                            <td rowspan="4" class="align-left">
                                <span>GIS 표피온도 측정</span><br/>
                                <span>- Thermovision 사용</span>
                            </td>
                            <td rowspan="4" class="align-center">
                                <span>각 상간</span><br/>
                                <span>차이가</span><br/>
                                <span>없을 것</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-44" name="cb_msrm_1-3-1"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="cb_msrm_1-3-2"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="cb_msrm_1-3-3"/>
                                <span>℃</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="cb_chck_rslt_1-3"/>
                                <select class="border-line align-center" name="cb_chck_rslt_1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td rowspan="4" class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_1-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-44" name="ds1_msrm_1-3-1"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="ds1_msrm_1-3-2"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="ds1_msrm_1-3-3"/>
                                <span>℃</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds1_chck_rslt_1-3"/>
                                <select class="border-line align-center" name="ds1_chck_rslt_1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-44" name="ds2_msrm_1-3-1"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="ds2_msrm_1-3-2"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="ds2_msrm_1-3-3"/>
                                <span>℃</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="ds2_chck_rslt_1-3"/>
                                <select class="border-line align-center" name="ds2_chck_rslt_1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>인출측</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-44" name="wdrw_msrm_1-3-1"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="wdrw_msrm_1-3-2"/>/
                                <input type="text" class="align-center border-line wd-px-44" name="wdrw_msrm_1-3-3"/>
                                <span>℃</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="wdrw_chck_rslt_1-3"/>
                                <select class="border-line align-center" name="wdrw_chck_rslt_1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">2. 작업 전 안전점검</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100 page-break-inside">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>점&nbsp;&nbsp;검&nbsp;&nbsp;내&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>비&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr class="page-break-inside">
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-left">
                                <div><span>검전 및 접지, 사 ∙ 활선 구획 로프 설치</span></div>
                                <div class="line-height12"><span>(사, 활선 착각)</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-36" name="chck_rslt_2-1"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_2-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-left">
                                <span>안전회의 시행 및 위험성체크리스트 활용</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-36" name="chck_rslt_2-2"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_2-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>3</span>
                            </td>
                            <td class="align-left">
                                <span>안전모, 안전화 등 개인별 안전장구 착용상태</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-36" name="chck_rslt_2-3"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_2-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height end-tbody">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>4</span>
                            </td>
                            <td class="align-left">
                                <span>작업통보서 지참 및 작업내용 숙지</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-36" name="chck_rslt_2-4"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_2-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">3. 지시치 확인</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center line-height12">
                                <span>점&nbsp;&nbsp;검&nbsp;&nbsp;결&nbsp;&nbsp;과</span><br/>
                                <span>(점검 전&nbsp;&nbsp;/&nbsp;&nbsp;후)</span>
                            </td>
                            <td class="align-center wd-mm-51">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-left" colspan="2">
                                <span>차단기 동작횟수</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-90" name="chck_rslt_3-1-1"/>
                                <span>/</span>
                                <input type="text" class="align-center border-line wd-px-90" name="chck_rslt_3-1-2"/>
                                <span>회</span>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_3-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height end-tbody">
                        <tr>
                            <td class="align-center" rowspan="3">
                                <span>2</span>
                            </td>
                            <td class="align-left wd-mm-42" rowspan="3">
                                <span>SF6 Gas 압력</span>
                            </td>
                            <td class="align-center wd-mm-42 hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-60" name="cb_chck_rslt_3-2-1"/>
                                <span>/</span>
                                <input type="text" class="align-center border-line wd-px-60" name="cb_chck_rslt_3-2-2"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                            <td class="align-center">
                                <span>정격 :</span>
                                <input type="text" class="align-center border-line wd-px-60" name="cb_rmrk_3-2-1"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-60" name="ds1_chck_rslt_3-2-1"/>
                                <span>/</span>
                                <input type="text" class="align-center border-line wd-px-60" name="ds1_chck_rslt_3-2-2"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                            <td class="align-center">
                                <span>정격 :</span>
                                <input type="text" class="align-center border-line wd-px-60" name="ds1_rmrk_3-2-2"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-px-60" name="ds2_chck_rslt_3-2-1"/>
                                <span>/</span>
                                <input type="text" class="align-center border-line wd-px-60" name="ds2_chck_rslt_3-2-2"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                            <td class="align-center">
                                <span>정격 :</span>
                                <input type="text" class="align-center border-line wd-px-60" name="ds2_rmrk_3-2-3"/>
                                <span>[kg.f/cm²]</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-7 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">4. 외부 일반 점검</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>점&nbsp;&nbsp;&nbsp;&nbsp;검&nbsp;&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-left">
                                <span>개폐기(CB, DS) OFF 상태 확인</span>
                                <div style="left:-0.15mm;top:-0.15mm;margin-bottom:1mm;width:37.50mm;height:19.94mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd1.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.50 19.94">
                                        <path fill="none" d="M13.97,8.04L13.97,7.91L13.96,7.79L13.95,7.67L13.92,7.55L13.90,7.43L13.86,7.31L13.83,7.19L13.78,7.08L13.73,6.97L13.67,6.86L13.61,6.76L13.54,6.66L13.47,6.56L13.39,6.46L13.31,6.37L13.23,6.29L13.14,6.21L13.05,6.13L12.95,6.06L12.85,6L12.75,5.94L12.64,5.89L12.53,5.84L12.42,5.80L12.30,5.77L12.19,5.74L12.08,5.71L11.96,5.70L11.84,5.69L11.72,5.69L11.61,5.69L11.49,5.70L11.37,5.71L11.25,5.74L11.14,5.77L11.03,5.80L10.91,5.84L10.81,5.89L10.70,5.94L10.60,6L10.50,6.06L10.40,6.13L10.30,6.21L10.22,6.29L10.13,6.37L10.05,6.46L9.97,6.56L9.90,6.66L9.84,6.76L9.77,6.86L9.72,6.97L9.67,7.08L9.62,7.19L9.58,7.31L9.55,7.43L9.52,7.55L9.50,7.67L9.48,7.79L9.48,7.91L9.47,8.04L9.48,8.16L9.48,8.28L9.50,8.40L9.52,8.52L9.55,8.64L9.58,8.76L9.62,8.88L9.67,8.99L9.72,9.10L9.77,9.21L9.84,9.32L9.90,9.42L9.97,9.51L10.05,9.61L10.13,9.70L10.22,9.78L10.30,9.86L10.40,9.94L10.50,10.01L10.60,10.07L10.70,10.13L10.81,10.18L10.91,10.23L11.03,10.27L11.14,10.30L11.25,10.33L11.37,10.36L11.49,10.37L11.61,10.38L11.72,10.39L11.84,10.38L11.96,10.37L12.08,10.36L12.19,10.33L12.30,10.30L12.42,10.27L12.53,10.23L12.64,10.18L12.75,10.13L12.85,10.07L12.95,10.01L13.05,9.94L13.14,9.86L13.23,9.78L13.31,9.70L13.39,9.61L13.47,9.51L13.54,9.42L13.61,9.32L13.67,9.21L13.73,9.10L13.78,8.99L13.83,8.88L13.86,8.76L13.90,8.64L13.92,8.52L13.95,8.40L13.96,8.28L13.97,8.16L13.97,8.04Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path fill="none" d="M35.77,7.94L35.77,7.81L35.76,7.69L35.74,7.57L35.72,7.45L35.69,7.33L35.66,7.21L35.62,7.09L35.58,6.98L35.52,6.87L35.47,6.76L35.41,6.66L35.34,6.56L35.27,6.46L35.19,6.36L35.11,6.28L35.03,6.19L34.94,6.11L34.84,6.04L34.75,5.97L34.65,5.90L34.54,5.85L34.43,5.79L34.33,5.74L34.22,5.70L34.10,5.67L33.99,5.64L33.87,5.62L33.76,5.60L33.64,5.59L33.52,5.59L33.40,5.59L33.28,5.60L33.17,5.62L33.05,5.64L32.94,5.67L32.83,5.70L32.71,5.74L32.61,5.79L32.50,5.85L32.40,5.90L32.30,5.97L32.20,6.04L32.10,6.11L32.01,6.19L31.93,6.28L31.85,6.36L31.77,6.46L31.70,6.56L31.63,6.66L31.57,6.76L31.52,6.87L31.46,6.98L31.42,7.09L31.38,7.21L31.35,7.33L31.32,7.45L31.30,7.57L31.28,7.69L31.27,7.81L31.27,7.94L31.27,8.06L31.28,8.18L31.30,8.30L31.32,8.42L31.35,8.54L31.38,8.66L31.42,8.78L31.46,8.89L31.52,9L31.57,9.11L31.63,9.22L31.70,9.32L31.77,9.42L31.85,9.51L31.93,9.60L32.01,9.68L32.10,9.76L32.20,9.84L32.30,9.91L32.40,9.97L32.50,10.03L32.61,10.08L32.71,10.13L32.83,10.17L32.94,10.21L33.05,10.23L33.17,10.26L33.28,10.27L33.40,10.28L33.52,10.29L33.64,10.28L33.76,10.27L33.87,10.26L33.99,10.23L34.10,10.21L34.22,10.17L34.33,10.13L34.43,10.08L34.54,10.03L34.65,9.97L34.75,9.91L34.84,9.84L34.94,9.76L35.03,9.68L35.11,9.60L35.19,9.51L35.27,9.42L35.34,9.32L35.41,9.22L35.47,9.11L35.52,9L35.58,8.89L35.62,8.78L35.66,8.66L35.69,8.54L35.72,8.42L35.74,8.30L35.76,8.18L35.77,8.06L35.77,7.94Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path fill="none" d="M14.07,14.44L14.07,14.32L14.06,14.19L14.04,14.07L14.02,13.95L13.99,13.83L13.96,13.71L13.92,13.60L13.88,13.48L13.83,13.37L13.77,13.26L13.71,13.16L13.64,13.06L13.57,12.96L13.49,12.87L13.41,12.78L13.33,12.69L13.24,12.61L13.14,12.54L13.05,12.47L12.95,12.40L12.84,12.35L12.74,12.29L12.63,12.24L12.52,12.21L12.40,12.17L12.29,12.14L12.17,12.12L12.06,12.10L11.94,12.09L11.82,12.09L11.71,12.09L11.59,12.10L11.47,12.12L11.35,12.14L11.24,12.17L11.13,12.21L11.01,12.24L10.91,12.29L10.80,12.35L10.70,12.40L10.60,12.47L10.50,12.54L10.40,12.61L10.32,12.69L10.23,12.78L10.15,12.87L10.07,12.96L10,13.06L9.93,13.16L9.87,13.26L9.82,13.37L9.76,13.48L9.72,13.60L9.68,13.71L9.65,13.83L9.62,13.95L9.60,14.07L9.58,14.19L9.57,14.32L9.57,14.44L9.57,14.56L9.58,14.69L9.60,14.81L9.62,14.93L9.65,15.05L9.68,15.17L9.72,15.28L9.76,15.40L9.82,15.50L9.87,15.61L9.93,15.72L10,15.82L10.07,15.92L10.15,16.01L10.23,16.10L10.32,16.19L10.40,16.27L10.50,16.34L10.60,16.41L10.70,16.47L10.80,16.53L10.91,16.58L11.01,16.63L11.13,16.67L11.24,16.71L11.35,16.74L11.47,16.76L11.59,16.77L11.71,16.79L11.82,16.79L11.94,16.79L12.06,16.77L12.17,16.76L12.29,16.74L12.40,16.71L12.52,16.67L12.63,16.63L12.74,16.58L12.84,16.53L12.95,16.47L13.05,16.41L13.14,16.34L13.24,16.27L13.33,16.19L13.41,16.10L13.49,16.01L13.57,15.92L13.64,15.82L13.71,15.72L13.77,15.61L13.83,15.50L13.88,15.40L13.92,15.28L13.96,15.17L13.99,15.05L14.02,14.93L14.04,14.81L14.06,14.69L14.07,14.56L14.07,14.44Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-1"/>
                                <select class="border-line align-center" name="chck_rslt_4-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-left">
                                <span>발청 및 변형 유무</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-2"/>
                                <select class="border-line align-center" name="chck_rslt_4-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>3</span>
                            </td>
                            <td class="align-left">
                                <span>Gas 누기 여부</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-3"/>
                                <select class="border-line align-center" name="chck_rslt_4-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>4</span>
                            </td>
                            <td class="align-left">
                                <span>Gas Valve 작동 및 외관 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-4"/>
                                <select class="border-line align-center" name="chck_rslt_4-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>5</span>
                            </td>
                            <td class="align-left">
                                <div style="display: block">
                                    <span>Gas gauge 이상 유무</span>
                                </div>
                                <div style="display: inline-block;left:11.65mm;top:53.03mm;width:41.41mm;height:47.14mm;">
                                    <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:37.12mm;height:27.65mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd2.png') }});"></div>
                                </div>
                                <div style="display: inline-block">
                                    <div><span>[Gas gauge 고장예방]</span></div>
                                    <div><span>○ SF6 Gas 주입시 게이지</span></div>
                                    <div><span>&nbsp;&nbsp;충격 방지를 위해 서서히&nbsp;</span></div>
                                    <div><span>주입</span></div>
                                    <div><span>&nbsp;&nbsp;☞ 레귤레이터 사용</span></div>
                                    <div><span>○ Gugae 부동작시&nbsp;</span></div>
                                    <div><span>손가락으로</span></div>
                                    <div><span>&nbsp;&nbsp;약하게 충격을 주어&nbsp;</span></div>
                                    <div><span>게이지</span></div>
                                    <div><span>&nbsp;&nbsp;움직임 관찰</span></div>
                                </div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-5"/>
                                <select class="border-line align-center" name="chck_rslt_4-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-5" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>6</span>
                            </td>
                            <td class="align-left">
                                <div style="display: block">
                                    <span>가스 주입구 스프링 Return 상태</span>
                                </div>
                                <div style="display: inline-block;left:-0.15mm;top:-0.15mm;margin-bottom:1mm;width:37.42mm;height:27.80mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd3.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 27.80">
                                        <rect x="-0.01" y="-0.01" width="37.12" height="27.51" fill="url(#ttestt_hd3)"></rect>
                                        <path fill="none" d="M21.80,12.70L21.79,12.53L21.78,12.37L21.76,12.21L21.72,12.04L21.68,11.88L21.63,11.72L21.57,11.57L21.50,11.41L21.42,11.26L21.33,11.12L21.24,10.97L21.13,10.84L21.02,10.71L20.90,10.58L20.78,10.46L20.64,10.35L20.51,10.24L20.36,10.14L20.21,10.05L20.06,9.96L19.90,9.88L19.73,9.81L19.57,9.75L19.39,9.69L19.22,9.64L19.04,9.61L18.86,9.57L18.68,9.55L18.50,9.54L18.32,9.54L18.13,9.54L17.95,9.55L17.77,9.57L17.59,9.61L17.42,9.64L17.24,9.69L17.07,9.75L16.90,9.81L16.74,9.88L16.58,9.96L16.42,10.05L16.27,10.14L16.13,10.24L15.99,10.35L15.85,10.46L15.73,10.58L15.61,10.71L15.50,10.84L15.40,10.97L15.30,11.12L15.22,11.26L15.13,11.41L15.07,11.57L15,11.72L14.95,11.88L14.91,12.04L14.88,12.21L14.85,12.37L14.84,12.53L14.83,12.70L14.84,12.87L14.85,13.03L14.88,13.19L14.91,13.36L14.95,13.52L15,13.68L15.07,13.83L15.13,13.99L15.22,14.14L15.30,14.28L15.40,14.43L15.50,14.56L15.61,14.69L15.73,14.82L15.85,14.94L15.99,15.05L16.13,15.16L16.27,15.26L16.42,15.35L16.58,15.44L16.74,15.52L16.90,15.59L17.07,15.65L17.24,15.71L17.42,15.76L17.59,15.79L17.77,15.83L17.95,15.85L18.13,15.86L18.32,15.86L18.50,15.86L18.68,15.85L18.86,15.83L19.04,15.79L19.22,15.76L19.39,15.71L19.57,15.65L19.73,15.59L19.90,15.52L20.06,15.44L20.21,15.35L20.36,15.26L20.51,15.16L20.64,15.05L20.78,14.94L20.90,14.82L21.02,14.69L21.13,14.56L21.24,14.43L21.33,14.28L21.42,14.14L21.50,13.99L21.57,13.83L21.63,13.68L21.68,13.52L21.72,13.36L21.76,13.19L21.78,13.03L21.79,12.87L21.80,12.70Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M23.19,8.78 L27.09,5.57" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M21.13,10.47L24.85,8.70L23.19,8.78L23.58,7.16Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                    </svg>
                                </div>
                                <div style="display: inline-block">
                                    <div><span>○ 미복귀시 Gas 누기</span></div>
                                </div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-6"/>
                                <select class="border-line align-center" name="chck_rslt_4-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-6" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>7</span>
                            </td>
                            <td class="align-left">
                                <span>각 부분 청소 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-7"/>
                                <select class="border-line align-center" name="chck_rslt_4-7" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-7" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>8</span>
                            </td>
                            <td class="align-left">
                                <span>각종 명판 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-8"/>
                                <select class="border-line align-center" name="chck_rslt_4-8" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>9</span>
                            </td>
                            <td class="align-left">
                                <span>Gas Pipe 외관 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-9"/>
                                <select class="border-line align-center" name="chck_rslt_4-9" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-9" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>10</span>
                            </td>
                            <td class="align-left">
                                <span>각종 Packing 접착 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-10"/>
                                <select class="border-line align-center" name="chck_rslt_4-10" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-10" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>11</span>
                            </td>
                            <td class="align-left">
                                <div><span>각종 Bolt/Nut의 조임 상태</span></div>
                                <div><span>- 체크마크 확인 및 체크마크 표기</span></div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-11"/>
                                <select class="border-line align-center" name="chck_rslt_4-11" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-11" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>12</span>
                            </td>
                            <td class="align-left">
                                <span>각종 접지 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-12"/>
                                <select class="border-line align-center" name="chck_rslt_4-12" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-12" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>13</span>
                            </td>
                            <td class="align-left">
                                <span>표시램프 점등 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-13"/>
                                <select class="border-line align-center" name="chck_rslt_4-13" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-13" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>14</span>
                            </td>
                            <td class="align-left">
                                <div><span>LCP 및 조작함 Door 여닫힘 상태</span></div>
                                <div><span>- Door의 제어케이블 간섭 여부 확인</span></div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-14"/>
                                <select class="border-line align-center" name="chck_rslt_4-14" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-14" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>15</span>
                            </td>
                            <td class="align-left">
                                <div><span>제어용전선, CT 2차배선</span></div>
                                <div><span>&nbsp;&nbsp;- Door 장력, 외피손상 여부</span></div>
                                <div><span>&nbsp;&nbsp;- Heater에 의한 표피 열손상 여부</span></div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-15"/>
                                <select class="border-line align-center" name="chck_rslt_4-15" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-15" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>16</span>
                            </td>
                            <td class="align-left">
                                <div><span>각종 단자대 점검</span></div>
                                <div><span>&nbsp;&nbsp;- 단자탈락, 표피 변형, 과다장력, 단자조임등</span></div>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-16"/>
                                <select class="border-line align-center" name="chck_rslt_4-16" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-16" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>17</span>
                            </td>
                            <td class="align-left">
                                <span>CT 결선 (Ratio, 결선), 정정표 참조</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-17"/>
                                <select class="border-line align-center" name="chck_rslt_4-17" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-17" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>18</span>
                            </td>
                            <td class="align-left">
                                <span>인출케이블 과다장력 여부(지지 크리트 시공여부)</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-18"/>
                                <select class="border-line align-center" name="chck_rslt_4-18" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-18" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>19</span>
                            </td>
                            <td class="align-left">
                                <span>케이블 접속부 점검(볼트 풀림 여부등)</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-19"/>
                                <select class="border-line align-center" name="chck_rslt_4-19" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-19" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height end-tbody">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>20</span>
                            </td>
                            <td class="align-left">
                                <span>GIS 내부, 외부 발청상태</span>
                            </td>
                            <td class="align-center">
                                <input type="hidden" id="chck_rslt_4-20"/>
                                <select class="border-line align-center" name="chck_rslt_4-20" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_4-20" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-7 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">5. 조작함, 조작기구, 제어회로 점검</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-21">
                                <span>점검항목</span>
                            </td>
                            <td class="align-center wd-mm-85">
                                <span>점&nbsp;&nbsp;&nbsp;&nbsp;검&nbsp;&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>기&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="3">
                                <span>1</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>일&nbsp;&nbsp;반</span></div>
                                <div><span>점&nbsp;&nbsp;검</span></div>
                            </td>
                            <td class="align-left hi-mm-9">
                                <div><span>각종 Bolt / Nut의 조임상태</span></div>
                                <div><span>- 체크마크 확인 및 체크마크 표기</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-1-1"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-1-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>연결부, 활동부 등의 청소</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-1-2"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-1-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>전력케이블 및 제어케이블 인출부</span></div>
                                <div><span>방화구획재 시공 상태</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-1-3"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-1-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="18">
                                <span>2</span>
                            </td>
                            <td class="align-center" rowspan="18">
                                <span>메커니즘</span>
                            </td>
                            <td class="align-left hi-mm-9">
                                <span>메커니즘 내부 각종 발청, 마모 여부</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-1"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>CB 조작 메커니즘과 조작 Link간</span></div>
                                <div><span>Bolt 체결상태</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-2"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>DS 조작기구 구동축 연결 Bolt 이완여부</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-3"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div style="display: block">
                                    <span>DS Over-Run 여부</span>
                                </div>
                                <div style="display: inline-block;left:-0.15mm;top:-0.15mm;width:37.42mm;height:25.72mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd4.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 25.72">
                                        <path d="M18.31,6.88 L18.39,2.89" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M18.24,10.87L19.35,4.90L18.31,6.88L17.35,4.86Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                    </svg>
                                </div>
                                <div style="display: inline-block">
                                    <div><span>○ DS 수동조작부 상태표시점(꼭지점)</span></div>
                                    <div><span>&nbsp;&nbsp;&nbsp;12시 방향 지시여부 확인</span></div>
                                    <div><span>&nbsp;&nbsp;&nbsp;☞ 불일치시 다른 CB, DS 조작불가</span></div>
                                    <div><span>○ DS 정지는 End Position Limit S/W에</span></div>
                                    <div><span>&nbsp;&nbsp;&nbsp;동작하므로 S/W 불량시 DS 조작상태</span></div>
                                    <div><span>&nbsp;&nbsp;&nbsp;불량</span></div>
                                </div>
                            </td>
                            <td class="align-center">
                                <span>12시 방향</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Limit SW (CB, DS)</span></div>
                                <div><span>- 지지/고정 상태, 탈락, 변형, 동작중 걸림 등</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-5"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-5" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>ES Inter-Lock 해제용 레버 복귀상태</span></div>
                                <div><span>- 그리스 고착여부 확인</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-6"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-6" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Hook의 걸림 및 마모상태, Hook Gap</span></div>
                                <div><span>이상 유무</span></div>
                                <div><span>- Trip 및 Closing Latch 접촉량 등</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>제작사</span></div>
                                <div><span>기준 참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-7" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-7" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>베어링 이상 유무</span></div>
                                <div style="display: inline-block;left:-0.15mm;top:-0.15mm;margin-bottom:1mm;width:37.42mm;height:27.04mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd5.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 27.04">
                                        <path fill="none" d="M23.68,14.64L23.67,14.42L23.65,14.20L23.61,13.98L23.57,13.77L23.50,13.55L23.42,13.34L23.33,13.13L23.22,12.93L23.10,12.73L22.97,12.54L22.82,12.35L22.67,12.17L22.50,11.99L22.31,11.83L22.12,11.67L21.92,11.51L21.71,11.37L21.49,11.24L21.26,11.11L21.02,11L20.78,10.89L20.52,10.80L20.27,10.71L20,10.64L19.74,10.58L19.47,10.53L19.19,10.49L18.92,10.46L18.64,10.44L18.36,10.44L18.08,10.44L17.80,10.46L17.53,10.49L17.25,10.53L16.98,10.58L16.71,10.64L16.45,10.71L16.19,10.80L15.94,10.89L15.70,11L15.46,11.11L15.23,11.24L15.01,11.37L14.80,11.51L14.59,11.67L14.40,11.83L14.22,11.99L14.05,12.17L13.89,12.35L13.75,12.54L13.61,12.73L13.49,12.93L13.39,13.13L13.30,13.34L13.22,13.55L13.15,13.77L13.10,13.98L13.06,14.20L13.04,14.42L13.04,14.64L13.04,14.86L13.06,15.08L13.10,15.30L13.15,15.52L13.22,15.73L13.30,15.94L13.39,16.15L13.49,16.35L13.61,16.55L13.75,16.74L13.89,16.93L14.05,17.11L14.22,17.29L14.40,17.46L14.59,17.61L14.80,17.77L15.01,17.91L15.23,18.04L15.46,18.17L15.70,18.28L15.94,18.39L16.19,18.48L16.45,18.57L16.71,18.64L16.98,18.70L17.25,18.75L17.53,18.79L17.80,18.82L18.08,18.84L18.36,18.85L18.64,18.84L18.92,18.82L19.19,18.79L19.47,18.75L19.74,18.70L20,18.64L20.27,18.57L20.52,18.48L20.78,18.39L21.02,18.28L21.26,18.17L21.49,18.04L21.71,17.91L21.92,17.77L22.12,17.61L22.31,17.46L22.50,17.29L22.67,17.11L22.82,16.93L22.97,16.74L23.10,16.55L23.22,16.35L23.33,16.15L23.42,15.94L23.50,15.73L23.57,15.52L23.61,15.30L23.65,15.08L23.67,14.86L23.68,14.64Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-8"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-8" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>CB, DS 각종 Link 점검</span></div>
                                <div><span>&nbsp;&nbsp;- 적정길이, 간격, 이탈여부 등</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>제작사</span></div>
                                <div><span>기준 참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-9" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-9" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div style="display: block;"><span>각종 축 고정장치용 핀류의 상태 및</span></div>
                                <div style="display: block;"><span>이탈 여부</span></div>
                                <div style="display: inline-block;left:-0.15mm;top:-0.15mm;margin-bottom:1mm;width:37.42mm;height:27.95mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd6.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 27.95">
                                        <path fill="none" d="M12.49,12.34L18.24,5.43L24.25,15.40L18.95,23.47L12.49,12.34Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                    </svg>
                                    <div style="left:22.76mm;top:0.97mm;width:13.13mm;height:5.28mm;position:absolute;background-color: rgb(255,255,255);">
                                        <svg viewBox="0 0 13.13 8.28">
                                            <path fill="none" d="M0.06,0.06L13.07,0.06L13.07,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        </svg>
                                    </div>
                                    <div style="left:25.46mm;top:1.97mm;width:13.13mm;height:5.28mm;position:absolute;line-height:1.98mm;white-space:nowrap;">
                                        <span style="font-size: 8pt">서클립</span>
                                    </div>
                                </div>
                                <div class="dist-left-mm-3" style="display: inline-block; position: absolute;">
                                    <div><span>☞ 분할핀</span></div>
                                    <div><span>☞ 서클립</span></div>
                                    <div><span>☞ C링</span></div>
                                    <div><span>☞ E링 등</span></div>
                                </div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-10"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-10" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-10" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>구동부 Grease 도포</span></div>
                                <div><span>(기존 Grease 및 이물질 제거 후)</span></div>
                                <div><span>- Grese 제거/재도포, 변색상태 등 </span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:37.12mm;height:28.08mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd7.png') }});"></div>
                                <div><span>○ 점검시 마다 그리스 제거 및 재도포 시행</span></div>
                                <div><span>○ 제작사별 주유 권장개소 참조</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>유지보수업무</span></div>
                                <div><span>Guide - 01</span></div>
                                <div><span>참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-11" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-11" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>Spring의 발청, 손상, 변형</span>
                                <div style="top:0;margin-bottom:1mm;left:0;margin-right:0;width:37.12mm;height:27.20mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd8.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 27.50">
                                        <path d="M27.72,13.81 L31.52,10.81" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M25.63,15.46L29.38,13.77L27.72,13.81L28.15,12.20Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                        <path d="M5.45,12.35 L2.17,9.92" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M7.59,13.93L4.97,10.75L5.45,12.35L3.79,12.36Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                    </svg>
                                </div>
                                <div><span>○ 3개의 스프링으로 구성</span></div>
                                <div><span>&nbsp;&nbsp;☞ OPEN, Closing, Wiper(조작 완충용)</span></div>
                                <div><span>○ 스프링 압축 또는 이완시 길이 측정</span></div>
                                <div><span>&nbsp;&nbsp;☞ 스프링 장력 변화 여부 판정</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>제작사</span></div>
                                <div><span>기준 참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-12" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-12" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>Shaft 및 CAM 이상 유무</span>
                                <div style="top:0;margin-bottom:1mm;left:0;margin-right:0;width:37.12mm;height:26.41mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd9.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 26.71">
                                        <path fill="none" d="M12.49,8.66L23.98,7.31L25.77,14.58L23.35,22.39L12.04,19.52L12.49,8.66Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.30;"></path>
                                        <path d="M10.30,8.90 L7.10,6.15" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M12.31,10.64L9.94,7.27L10.30,8.90L8.64,8.78Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                    </svg>
                                    <div style="left:1.85mm;top:1.06mm;width:9.99mm;height:5.28mm;position:absolute;background-color: rgb(255,255,255);">
                                        <svg viewBox="0 0 10.03 7.98">
                                            <path fill="none" d="M0.06,0.06L9.93,0.06L9.93,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        </svg>
                                    </div>
                                    <div style="left:3.55mm;top:1.05mm;width:9.99mm;height:5.28mm;position:absolute;line-height:3.68mm;white-space:nowrap;">
                                        <span style="font-size: 8pt">CAM</span>
                                    </div>
                                </div>
                                <div><span>○ 캠은 CB ON/OFF 상태에서</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;자유롭게 움직여야 함.</span></div>
                                <div><span>○ 캠 공차 불량시 보조접점 동작불량 유발</span></div>
                                <div><span>&nbsp;&nbsp;☞ 기계적으로는 이상이 없으나, 전기적으로</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;모터 및 체인소손 유발 가능</span></div>
                                <div><span>○ 공차 불일치시 캠 교체</span></div>
                                <div><span>○ 캠(DS 기계적 보조접점용) 그리스 제거</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;및 재도포</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>캠 움직임</span></div>
                                <div><span>원활 여부</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-13" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-13" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Close/Trip Coil 손상 유무</span></div>
                                <div><span>- 고정 지지용 Spring의 유지상태</span></div>
                                <div><span>- 동작봉과 접점편 적정이격거리 확보</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>제작사별</span></div>
                                <div><span>기준 참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-14" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-14" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Motor 점검</span></div>
                                <div><span>(Spring Charger 및 DS 구동용)</span></div>
                                <div><span>- 동작중 이음, 온도상승, 외피변색,</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;고정상태/흔들림</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-15"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-15" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-15" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Dashpot 압축유 누유 여부</span></div>
                                <div><span>- 압축유 주입량 : 10cc</span></div>
                                <div style="left:-0.15mm;top:-0.15mm;margin-bottom:1mm;width:37.42mm;height:25.81mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hda.png') }});">
                                    <svg viewBox="-0.15 -0.15 37.42 25.81">
                                        <path d="M6.82,10.74 L3.43,5.52" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                        <path d="M8.27,12.97L6.93,9.08L6.82,10.74L5.26,10.16Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                        <path fill="none" d="M18.50,4.71L8.72,8.66L8.72,22.31L28.47,22.48L28.47,8.57L18.50,4.71Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.30;"></path>
                                    </svg>
                                    <div style="left:0.68mm;top:0.68mm;width:13.23mm;height:5.78mm;position:absolute;background-color: rgb(255,255,255);">
                                        <svg viewBox="0 0 12.30 7.78">
                                            <path fill="none" d="M0.06,0.06L12.17,0.06L12.17,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        </svg>
                                    </div>
                                    <div style="left:1.5mm;top:-0.16mm;height:3.17mm;width:10.12mm;position:absolute;line-height:5.58mm;white-space:nowrap;">
                                        <span style="font-size: 8pt">Dashpot</span>
                                    </div>
                                </div>
                            </td>
                            <td class="align-center">
                                <div><span>제작사별</span></div>
                                <div><span>기준 참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-16" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-16" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>DS, ES 구동용 체인</span></div>
                                <div><span>- 탈락, 변형, 적정장력 등</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-2-17"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-17" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-17" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>V.I 접점마모도 측정용 지그 이상 유무</span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:37.12mm;height:27.78mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdb.png') }});"></div>
                                <div><span>○ 극간격 설계값 : 제작사 기준 참고</span></div>
                                <div><span>○ 지그가 설치된 설비에 해당</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>설치시</span></div>
                                <div><span>시&nbsp;&nbsp;&nbsp;행</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-2-18" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-2-18" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="8">
                                <span>3</span>
                            </td>
                            <td class="align-center" rowspan="8">
                                <span>제어회로</span>
                            </td>
                            <td class="align-left hi-mm-9">
                                <span>저압회로 볼트 조임상태</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-1"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>저압회로 배선정리 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-2"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>보조계전기 발열 및 탄화 유무</span></div>
                                <div><span>- 불량시 교체</span></div>
                            </td>
                            <td class="align-center">
                                <div><span>1회/12년</span></div>
                                <div><span>교체</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>ES Lock용 접점 동작 상태</span></div>
                                <div><span>- Lock Pin 분리시 "딸깍"소리 확인</span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:36.71mm;height:23.96mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdc.png') }});"></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-4"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>CB, DS 기계적 접점 (a, b접점 상태)</span></div>
                                <div><span>- 기계적 a, b보조 접점 측정</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-5"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-5" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>Multi-Socket 접촉 상태</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-6"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-6" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <span>CT 및 제어회로 터미널 단자 손상 여부</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-3-7"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-7" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-7" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>CT 2차회로 단선여부</span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:36.94mm;height:21.95mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdd.png') }});"></div>
                            </td>
                            <td class="align-center">
                                <div><span>유지보수업무</span></div>
                                <div><span>Guide - 02</span></div>
                                <div><span>참조</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-3-8" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-3-8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center">
                                <span>4</span>
                            </td>
                            <td class="align-center">
                                <span>보조기기</span>
                            </td>
                            <td class="align-left hi-mm-9">
                                <div><span>재폐로용 LPS 접점 Pass</span></div>
                                <div><span>○ 최종 가압후 감도 조절 및 3상 전압측정</span></div>
                                <div><span>○ LPS 79Ry Blocking 미사용 개소 "b"</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;접점 Common 확인</span></div>
                                <div><span>GIS용 보조계전기 KIT(SSCR)</span></div>
                                <div><span>○ SSCR 동작상태 및 램프점검</span></div>
                                <div><span>○ 점검프로그램 활용한 동작상태 점검</span></div>
                                <div><span>○ GIS 제작사별 Tag Program 확인</span></div>
                                <div><span>○ Cable 접속용 Connector 단자 점검</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-4"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="2">
                                <span>5</span>
                            </td>
                            <td class="align-center" rowspan="2">
                                <div><span>보호</span></div>
                                <div><span>계전기</span></div>
                            </td>
                            <td class="align-left hi-mm-9">
                                <div><span>보호계전기 이상유무</span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:36.94mm;height:21.95mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hde.png') }});"></div>
                                <div><span>○ 정정표에 따른 Setting치 확인</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-5-1"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-5-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-5-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-left hi-mm-9">
                                <div><span>Static Type Noise Filter 설치 여부</span></div>
                                <div style="top:0;left:0;margin-bottom:1mm;margin-right:0;width:36.94mm;height:21.95mm;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdf.png') }});"></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-26" name="crtr_5-5-2"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_5-5-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_5-5-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">6. SF</span><span class="sub-header-font font-8">6</span><span class="sub-header-font font-12"> Gas 분석</span>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center wd-mm-45">
                                <span>판정기준</span>
                            </td>
                            <td class="align-center wd-mm-32">
                                <span>측&nbsp;&nbsp;정&nbsp;&nbsp;치</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-28">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="3">
                                <span>1</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <span>SO</span><span class="font-8">2</span><span> 함유량 측정</span>
                            </td>
                            <td class="align-center wd-mm-25 hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>1 PPMv</span></div>
                                <div><span>이하</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="cb_msrm_6-1"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="cb_chck_rslt_6-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="cb_rmrk_6-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="ds1_msrm_6-1"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="ds1_chck_rslt_6-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="ds1_rmrk_6-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="ds2_msrm_6-1"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="ds2_chck_rslt_6-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="ds2_rmrk_6-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="3">
                                <span>2</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <span>수분 함유량 측정</span>
                            </td>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>CB</span>
                            </td>
                            <td class="align-left" rowspan="3">
                                <div class="hi-mm-5"><span class="font-10">○ CB</span></div>
                                <div class="hi-mm-5"><span class="font-10">&nbsp;&nbsp;- 관리치 : 200PPMv 이하</span></div>
                                <div class="hi-mm-5"><span class="font-10">&nbsp;&nbsp;- 허용치 : 300PPMv 이하</span></div>
                                <div class="hi-mm-5"><span class="font-10">○ 기타</span></div>
                                <div class="hi-mm-5"><span class="font-10">&nbsp;&nbsp;- 관리치 : 300PPMv 이하</span></div>
                                <div><span class="font-10">&nbsp;&nbsp;- 허용치 : 1000PPMv 이하</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="cb_msrm_6-2"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="cb_chck_rslt_6-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="cb_rmrk_6-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>#1 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="ds1_msrm_6-2"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="ds1_chck_rslt_6-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="ds1_rmrk_6-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-21 hi-mm-9">
                                <span>#2 DS</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="ds2_msrm_6-2"/>
                                <span>[PPM]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="ds2_chck_rslt_6-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="ds2_rmrk_6-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">7. 각종시험</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>점&nbsp;&nbsp;&nbsp;&nbsp;검&nbsp;&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>1</span>
                            </td>
                            <td class="align-left">
                                <div><span>CB, DS, ES, 43RC 조작시험 (Indicator 동작 확인)</span></div>
                                <div><span>- Local / Remote / SCADA / 수동 조작</span></div>
                                <div><span>- 보조계전기 동작상태 (DC24V, 125V)</span></div>
                                <div><span>- 조작회로 Diode</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>2</span>
                            </td>
                            <td class="align-left">
                                <span>CB, DS, ES, Spring Charge Indicator 동작 상태</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>3</span>
                            </td>
                            <td class="align-left">
                                <span>Spring Charger 동작 상태</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>4</span>
                            </td>
                            <td class="align-left">
                                <span>Trip Free 시험</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>5</span>
                            </td>
                            <td class="align-left">
                                <span>CB Counter 동작상태</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-5" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>6</span>
                            </td>
                            <td class="align-left">
                                <span>CB Gas 누기(쇄정)시 동작 여부</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-6" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>7</span>
                            </td>
                            <td class="align-left">
                                <span>온 ∙ 습도계 ∙ 히터 동작 상태</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-7" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-7" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>8</span>
                            </td>
                            <td class="align-left">
                                <div><span>43RC ON 상태에서 CB 투입 → 43RC OFF 및 1분 후 재투입 시험</span></div>
                                <div><span>- 79Ry 사용시</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-8" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>9</span>
                            </td>
                            <td class="align-left">
                                <span>각종 보조계전기의 동작상태 점검</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-9" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-9" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>10</span>
                            </td>
                            <td class="align-left">
                                <div><span>보호계전기에 의한 CB 연동시험</span></div>
                                <div><span>- 79Ry가 있을 경우 재폐로 동작 확인, 순시 Blocking</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-10" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-10" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>11</span>
                            </td>
                            <td class="align-left">
                                <span>보호계전기 성능시험 (50, 79)</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-11" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-11" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>12</span>
                            </td>
                            <td class="align-left">
                                <div><span>경보회로 시험</span></div>
                                <div><span>&nbsp;- 50, 51, 50N, 51N, 79, Gas Low, 27D, 27A,</span></div>
                                <div><span>&nbsp;&nbsp;&nbsp;&nbsp;PT NFB</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_7-12" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_7-12" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">8. Gas 밀도 검출기 시험</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height table-hd start-tbody">
                        <tr>
                            <td class="align-center wd-mm-11" rowspan="2">
                                <span>No</span>
                            </td>
                            <td class="align-center" rowspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>기&nbsp;&nbsp;&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>측&nbsp;&nbsp;&nbsp;정&nbsp;&nbsp;&nbsp;값</span>
                            </td>
                            <td class="align-center wd-mm-30" rowspan="2">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-42" rowspan="2">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-21">
                                <span>ON</span>
                            </td>
                            <td class="align-center wd-mm-21">
                                <span>OFF</span>
                            </td>
                            <td class="align-center wd-mm-21">
                                <span>ON</span>
                            </td>
                            <td class="align-center wd-mm-21">
                                <span>OFF</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center">
                                <span>CB (㎏.f/㎠)</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_on_8-1"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_off_8-1"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_on_8-1"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_off_8-1"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_8-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center" rowspan="3">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center">
                                <span>#1 DS (㎏.f/㎠)</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_on_8-2"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_off_8-2"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_on_8-2"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_off_8-2"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_8-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>3</span>
                            </td>
                            <td class="align-center">
                                <span>#2 DS (㎏.f/㎠)</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_on_8-3"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="crtr_off_8-3"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_on_8-3"/>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-15" name="msrm_off_8-3"/>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_8-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">9. Gas 누기 점검분석</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center">
                                <span>점검내용</span>
                            </td>
                            <td class="align-center">
                                <span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center">
                                <span>결&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;과</span>
                            </td>
                            <td class="align-center wd-mm-48">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <div><span>점검창 및 각 부분</span></div>
                                <div><span>(비닐로 밀봉한다)</span></div>
                            </td>
                            <td class="align-left">
                                <div><span>년 1% 이하</span></div>
                                <div><span>(24시간 이상 경과 후</span></div>
                                <div><span>Check:5PPMv 이하일것)</span></div>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_9" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_9" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">10. 절연저항 측정</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-32" colspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center">
                                <span>판정기준</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>측정값</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="3">
                                <span>1</span>
                            </td>
                            <td class="align-left" rowspan="3">
                                <span>CT회로</span>
                            </td>
                            <td class="align-center wd-mm-28 hi-mm-11">
                                <span>A상</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <span>5 ㏁이상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="msrm_10-1-1"/>
                                <span>[㏁]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_10-1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center" rowspan="4">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_10" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-11">
                                <span>B상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="msrm_10-1-2"/>
                                <span>[㏁]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_10-1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-11">
                                <span>C상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="msrm_10-1-3"/>
                                <span>[㏁]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_10-1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-11">
                                <span>2</span>
                            </td>
                            <td class="align-left" colspan="2">
                                <span>제어회로</span>
                            </td>
                            <td class="align-center">
                                <span>2 ㏁이상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="msrm_10-2"/>
                                <span>[㏁]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_10-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">11. 차단기 동작특성 시험</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>점검항목</span>
                            </td>
                            <td class="align-center wd-mm-55">
                                <span>점&nbsp;&nbsp;&nbsp;&nbsp;검&nbsp;&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center">
                                <span>기&nbsp;&nbsp;&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center wd-mm-55">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center">
                                <span>동작시험</span>
                            </td>
                            <td class="align-left">
                                <div><span>무부하 투입시간 측정</span></div>
                                <div><span>(정격 동작전압 : 125V)</span></div>
                            </td>
                            <td class="align-center" rowspan="5">
                                <div><span>최종검수</span></div>
                                <div><span>시험성적서</span></div>
                                <div><span>참조</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="chck_rslt_11-1"/>
                                <span>ms</span>
                            </td>
                            <td class="align-center" rowspan="5">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_11" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center">
                                <span>"</span>
                            </td>
                            <td class="align-left">
                                <div><span>무부하 개극시간 측정</span></div>
                                <div><span>(정격 동작전압 : 125V)</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-20" name="chck_rslt_11-2"/>
                                <span>ms</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>3</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <span>"</span>
                            </td>
                            <td class="align-left" rowspan="3">
                                <span>O-C-O</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-20" name="chck_rslt_11-3-1"/>
                                <span>ms</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-20" name="chck_rslt_11-3-2"/>
                                <span>ms</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-20" name="chck_rslt_11-3-3"/>
                                <span>ms</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">12. 변류기 시험</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center" colspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center wd-mm-30">
                                <span>판정기준</span>
                            </td>
                            <td class="align-center">
                                <span>측정값</span>
                            </td>
                            <td class="align-center">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-40">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="6">
                                <span>1</span>
                            </td>
                            <td class="align-center wd-mm-25" rowspan="6">
                                <span>포화특성</span>
                            </td>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 A상</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>200V</span></div>
                                <div><span>이상</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-1"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center" rowspan="6">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_12-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 B상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-2"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 C상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-3"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 A상</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>50V</span></div>
                                <div><span>이상</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-4"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 B상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-5"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 C상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-38" name="msrm_12-1-6"/>
                                <span>[V]</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-1-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center" rowspan="6">
                                <span>2</span>
                            </td>
                            <td class="align-center wd-mm-25" rowspan="6">
                                <span>변&nbsp;&nbsp;류&nbsp;&nbsp;비</span>
                            </td>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 A상</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>120/80/40</span></div>
                                <div><span>: 1</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-1-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-1-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-1-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center" rowspan="6">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_12-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 B상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-2-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-2-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-2-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Ry용 C상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-3-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-3-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-3-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 A상</span>
                            </td>
                            <td class="align-center" rowspan="3">
                                <div><span>120/60</span></div>
                                <div><span>: 1</span></div>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-4-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-4-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-4-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-4" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 B상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-5-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-5-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-5-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-5" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-28 hi-mm-9">
                                <span>Meter용 C상</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-6-1"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-6-2"/>/
                                <input type="text" class="align-center border-line wd-mm-11" name="msrm_12-2-6-3"/>
                                <span>: 1</span>
                            </td>
                            <td class="align-center">
                                <select class="border-line align-center" name="chck_rslt_12-2-6" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-4 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <div class="align-left hi-mm-9">
                    <span>☞ 외장형 CT 및 변류기 시험기 한전 제공시 → C.T 포화시험기로 측정시 측정기록지로 대신함.</span>
                </div>
                <div class="align-left">
                    <span>☞ 내장형 CT(현대 旧형) 및 외장형 CT중 CT 내부도체 통과가 불가능한 개소는 시험생략 가능</span>
                </div>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">13. Close / Trip Coil 저항 측정</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-38">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>기 준(Ω)</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>측정치(Ω)</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>Close Coil</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-32" name="crtr_13-1"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-32" name="msrm_13-1"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_13-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center" rowspan="2">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_13" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>Trip Coil</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-32" name="crtr_13-2"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-32" name="msrm_13-2"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_13-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">14. VI 접점 마모량 측정</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-38">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>기&nbsp;&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>측정치</span>
                            </td>
                            <td class="align-center wd-mm-32">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>A상</span>
                            </td>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>3mm 이내</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="msrm_14-1"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_14-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_14-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>B상</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="msrm_14-2"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_14-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_14-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>3</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>C상</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="msrm_14-3"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_14-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_14-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">15. 조작Rod 행정거리 측정 (제작사별 취급설명서 참조)</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-38">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center wd-mm-42">
                                <span>기&nbsp;&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>Stroke</span>
                            </td>
                            <td class="align-center wd-mm-32">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>A상</span>
                            </td>
                            <td class="align-center hi-mm-9" rowspan="3">
                                <span>16 ± 1 mm</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="strk_15-1"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_15-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_15-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>B상</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="strk_15-2"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_15-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_15-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>3</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>C상</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-21" name="strk_15-3"/>
                                <span>[mm]</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_15-3" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_15-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">16. 부하전류 측정, LPS Lamp 점검</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height table-hd start-tbody">
                        <tr>
                            <td class="align-center wd-mm-11" rowspan="2">
                                <span>No</span>
                            </td>
                            <td class="align-center wd-mm-38" rowspan="2">
                                <span>구&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                            </td>
                            <td class="align-center" colspan="4">
                                <span>점&nbsp;&nbsp;검&nbsp;&nbsp;전</span>
                            </td>
                            <td class="align-center" colspan="4">
                                <span>점&nbsp;&nbsp;검&nbsp;&nbsp;후</span>
                            </td>
                            <td class="align-center wd-mm-32" rowspan="2">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center" rowspan="2">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-center wd-mm-11">
                                <span>A</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>B</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>C</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>N</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>A</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>B</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>C</span>
                            </td>
                            <td class="align-center wd-mm-11">
                                <span>N</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>1</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>부하전류</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-1"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-2"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-3"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-4"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-5"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-6"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-7"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-1-8"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_16-1" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100 line-height1" name="rmrk_16-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-9">
                                <span>2</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <span>LPS 점등상태</span>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-1"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-2"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-3"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <img src="{{ url('/image/slash.png') }}" class="img-full"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-4"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-5"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <input type="text" class="align-center border-line wd-mm-9_5" name="value_16-2-6"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <img src="{{ url('/image/slash.png') }}" class="img-full"/>
                            </td>
                            <td class="align-center hi-mm-9">
                                <select class="border-line align-center" name="chck_rslt_16-2" onchange="checkResult(this)">
                                    <option value="양호">양호</option>
                                    <option value="조치 후 양호">조치 후 양호</option>
                                    <option value="불량">불량</option>
                                    <option value="해당없음">해당없음</option>
                                </select>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_16-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">17. 최종 확인</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div>
                <table class="table-bd wd-per-100">
                    <tbody class="pdf-chck-height start-tbody">
                        <tr class="table-hd">
                            <td class="align-center wd-mm-11">
                                <span>No</span>
                            </td>
                            <td class="align-center">
                                <span>점검항목</span>
                            </td>
                            <td class="align-center">
                                <span>점&nbsp;&nbsp;&nbsp;&nbsp;검&nbsp;&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;&nbsp;용</span>
                            </td>
                            <td class="align-center wd-mm-36">
                                <span>기&nbsp;&nbsp;준</span>
                            </td>
                            <td class="align-center wd-mm-32">
                                <span>점검결과</span>
                            </td>
                            <td class="align-center wd-mm-32">
                                <span>비&nbsp;&nbsp;&nbsp;&nbsp;고</span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>1</span>
                            </td>
                            <td class="align-center">
                                <span>단자결선</span>
                            </td>
                            <td class="align-left">
                                <span>CT 결선 및 조임상태 확인</span>
                            </td>
                            <td class="align-center">
                                <span>확인</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-1"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-1" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>2</span>
                            </td>
                            <td class="align-center">
                                <span>가스밸브</span>
                            </td>
                            <td class="align-left">
                                <span>Gas Valve 개, 폐 확인</span>
                            </td>
                            <td class="align-center">
                                <span>개방</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-2"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-2" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>3</span>
                            </td>
                            <td class="align-center">
                                <span>전원상태</span>
                            </td>
                            <td class="align-left">
                                <span>AC, DC전원 ON상태 확인</span>
                            </td>
                            <td class="align-center">
                                <span>ON</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-3"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-3" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>4</span>
                            </td>
                            <td class="align-center">
                                <span>경보유무</span>
                            </td>
                            <td class="align-left">
                                <span>경보발생 유무 확인</span>
                            </td>
                            <td class="align-center">
                                <span>경보 미발생</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-4"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-4" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>5</span>
                            </td>
                            <td class="align-center">
                                <span>스위치류</span>
                            </td>
                            <td class="align-left">
                                <div class="hi-mm-5"><span>스위치류 정위치 확인</span></div>
                                <div><span>(43LRS)</span></div>
                            </td>
                            <td class="align-center">
                                <span>SCADA</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-5"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-5" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>6</span>
                            </td>
                            <td class="align-center">
                                <span>상태확인</span>
                            </td>
                            <td class="align-left">
                                <span>CB, DS 개방상태 확인</span>
                            </td>
                            <td class="align-center">
                                <span>Open</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-6"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-6" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>7</span>
                            </td>
                            <td class="align-center">
                                <span>현장정리</span>
                            </td>
                            <td class="align-left">
                                <span>사용 공기구 방치 여부</span>
                            </td>
                            <td class="align-center">
                                <span>확인</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-7"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-7" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="pdf-chck-height">
                        <tr>
                            <td class="align-center hi-mm-12">
                                <span>8</span>
                            </td>
                            <td class="align-center">
                                <span>부하전류</span>
                            </td>
                            <td class="align-left">
                                <span>가압후 부하전류 확인</span>
                            </td>
                            <td class="align-center">
                                <span>3상 전류값 확인</span>
                            </td>
                            <td class="align-center">
                                <input type="text" class="align-center border-line wd-mm-28" name="chck_rslt_17-8"/>
                            </td>
                            <td class="align-center">
                                <textarea class="align-center txt-auto border-none wd-per-100" name="rmrk_17-8" onchange="resize(this)" rows="1"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hi-mm-11 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <span class="sub-header-font font-12">18. 담당자 의견</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div class="pdf-chck-height">
                <textarea class="align-left pad-top-mm-2 wd-per-100" name="chck_opin_18" rows="5"></textarea>
            </div>
            <div class="pdf-chck-height end-doc"></div>
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

        function ttestt() {
            // Get the element.
            // var element = document.getElementById('25-8kv_girs');

            // html2pdf(element);
            // Generate the PDF.
            // html2pdf().from(element).set({
            //     margin: 20,
            //     filename: 'test.pdf',
            //     // html2canvas: { scale: 1 },
            //     jsPDF: {orientation: 'p', unit: 'mm', format: 'a4', compressPDF: true}
            // }).save();
            // window.open('getDocData?docType=25-8kv_girs','test','width=500,height=500,resizable=no');


            // let element = document.createElement('a');
            // element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(document.getElementById('25-8kv_girs')));
            // element.setAttribute('download', 'test.html');
            //
            // element.style.display = 'none';
            // document.body.appendChild(element);
            //
            // element.click();
            //
            // document.body.removeChild(element);
        }

        function pdfPrint() {
            html2canvas(document.getElementById('doc-data')).then(canvas => {
                var lists = document.getElementById('doc-data').querySelectorAll('.pdf-chck-height');
                var listsLeng = lists.length;
                var deferreds = [];
                var doc = new jsPDF("p", "mm", "a4");

                var pdfHeight = 0;
                var tag = document.getElementById('pdfConts');
                var pdfImgNum = 0;

                for (var i = 0; i < listsLeng; i++) {
                    // 첫 페이지 시작 시, lists에 공백 div 무시
                    // if (pdfHeight == 0 && lists[i].innerHTML.length == 0) {
                    //     continue;
                    // }

                    // 페이지가 새로 시작되고, tbody 태그인 경우 table header row 가져오기.
                    if (pdfHeight == 0 && lists[i].tagName == 'TBODY' && lists[i].className.indexOf('start-tbody') == -1) {
                        var data = lists[i].parentElement.getElementsByClassName('table-hd')[0];
                        var tbodyWidth = data.offsetWidth * 0.2645,     // px -> mm로 변환
                            tbodyHeight = data.offsetHeight * 0.2645,   // px -> mm로 변환
                            // 비율에 맞게 높이 조절
                            tbodyHeightCalc = contWidth * tbodyHeight / tbodyWidth;

                        pdfHeight += tbodyHeightCalc;

                        // var tbodyTag = document.createElement('tbody');
                        // tbodyTag.className = lists[i].className;
                        // $(tbodyTag).clone().appendTo(tag.lastElementChild);
                        //
                        // $(data).clone().appendTo(tag.lastElementChild.lastElementChild);

                        // table 태그 생성하여 각 table class 속성 넣기
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
                            var emptyTag = '<div class="page-break-before"></div>';

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

                                    // column에 rowspan 이 있을 경우 rowspan column이 tr보다 offsetHeight 클 경우 rowspan column의 offsetHeight로 높이 측정.
                                    // for (let j = 0; j < lists[i].childElementCount; j++) {
                                    //     for (let k = 0; k < lists[i].children[j].childElementCount; j++) {
                                    //         if (lists[i].children[j].children[k].getAttribute('rowspan') != null) {
                                    //             var rowspanWidth = lists[i].children[j].children[k].offsetWidth * 0.2645,     // px -> mm로 변환
                                    //                 rowspanHeight = lists[i].children[j].children[k].offsetHeight * 0.2645,   // px -> mm로 변환
                                    //                 // 비율에 맞게 높이 조절
                                    //                 rowspanHeightCalc = contWidth * rowspanHeight / rowspanWidth;
                                    //
                                    //             if (pdfHeight + rowspanHeightCalc >= 297 - (padding * 2)) {
                                    //                 j = lists[i].childElementCount;
                                    //                 break;
                                    //             }
                                    //         }
                                    //     }
                                    // }

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
                                                        if (clone[0].children[b].children[c].getAttribute('rowspan') > clone[0].childElementCount) {
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
                                            // var deferred = $.Deferred();
                                            // deferreds.push(deferred.promise());
                                            // generateCanvas(pdfImgNum, doc, deferred, tag);
                                            //
                                            // pdfImgNum++;
                                            i--;

                                            var emptyTag = '<div class="page-break-before"></div>';

                                            $(tag).append(emptyTag);

                                            pdfHeight = 0;
                                            // $(tag).empty();
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
                                                            if (tempTable.childElementCount < clone[0].children[d].children[e].getAttribute('rowspan')) {
                                                                clone[0].children[d].children[e].setAttribute('rowspan', tempTable.childElementCount);
                                                                // 12번의 판정기준 처럼 전체 rowspan과 컬럼의 rowspan이 다를 경우 조건 추가
                                                                var tdCnt = 0;
                                                                for (var y = 0; y < rowSpan.length; y++) {
                                                                    if (rowSpan[y].tr <= 0) {
                                                                        if (rowSpan[0].td <= e) {
                                                                            tdCnt++;
                                                                        }
                                                                    }
                                                                }
                                                                rowSpan.push({'tr' : 0, 'td' : tdCnt, 'value' : $(clone[0].children[d].children[e]).clone(true)});
                                                            } else {
                                                                clone[0].children[d].children[e].setAttribute('rowspan', (clone[0].childElementCount - d));
                                                                rowSpan.push({'tr' : d, 'td' : e, 'value' : $(clone[0].children[d].children[e]).clone(true)});
                                                            }
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
                                                    $(rowSpan[f].value).clone(true).insertBefore(tempTable.lastElementChild.children[rowSpan[f].td]);
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

                                        // var deferred = $.Deferred();
                                        // deferreds.push(deferred.promise());
                                        // generateCanvas(pdfImgNum, doc, deferred, tag);
                                        //
                                        // pdfImgNum++;
                                        var emptyTag = '<div class="page-break-before"></div>';

                                        $(tag).append(emptyTag);

                                        pdfHeight = 0;
                                        // $(tag).empty();
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
                                    // var tbodyTag = document.createElement('tbody');
                                    // tbodyTag.className = lists[i].className;
                                    // $(tbodyTag).clone().appendTo(tag.lastElementChild);
                                    //
                                    // $(data).clone().appendTo(tag.lastElementChild.lastElementChild);

                                    var tableTag = document.createElement('table');
                                    tableTag.className = lists[i].parentElement.className;
                                    $(tableTag).clone().appendTo(tag);

                                    $(data).clone().appendTo(tag.lastElementChild)
                                } else {
                                    clone = $(tempTable).clone();
                                }
                            }
                        } else {
                            // var deferred = $.Deferred();
                            // deferreds.push(deferred.promise());
                            // generateCanvas(pdfImgNum, doc, deferred, tag);
                            //
                            // pdfImgNum++;
                            i--;
                            var emptyTag = '<div class="page-break-before"></div>';

                            $(tag).append(emptyTag);

                            pdfHeight = 0;
                            // $(tag).empty();
                        }
                    }
                }
                // $(tag).empty();

                $.when.apply($, deferreds).then(function () { // 이미지 렌더링이 끝난 후
                    sessionStorage.setItem("pdfData", tag.outerHTML);
                    $(tag).empty();

                    $('#load_screen').remove();                 // Loader 제거

                    location.href = '/pdf_content'

                    // var sorted = renderedImg.sort(function (a, b) {return a.num < b.num ? -1 : 1;}), // 순서대로 정렬
                    //     curHeight = padding, //위 여백 (이미지가 들어가기 시작할 y축)
                    //     sortedLeng = sorted.length;
                    //
                    // for (var i = 0; i < sortedLeng; i++) {
                    //     var sortedHeight = sorted[i].height,    // 이미지 높이
                    //         sortedImage = sorted[i].image;      // 이미지
                    //
                    //     /** 위에서 div, tbody, tr 별로 높이 측정 후 이미지 생성으로 doc 만들어진 이미지 추가만 */
                    //     if (i != 0) {           // 처음에는 빈 doc 생성되어 있음
                    //         doc.addPage();      // 페이지를 추가함
                    //     }
                    //
                    //     doc.addImage(sortedImage, 'png', padding , curHeight, contWidth, sortedHeight); //이미지 넣기
                    // }
                    // doc.save('filename.pdf');                   // pdf 저장
                    // sorted.splice(0);                           // pdf 저장 후 데이터 초기화
                    // console.timeEnd('PDF End');
                    //
                    // $('#load_screen').remove();                 // Loader 제거
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
