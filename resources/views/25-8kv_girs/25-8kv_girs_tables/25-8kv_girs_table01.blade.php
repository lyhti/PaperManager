<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <input type="hidden" name="docTypeCd" value="25-8kv_girs">
    <tbody class="tbody-start">
        <tr>
            <th class="record_25-8kv-tg-v4ld" colspan="15">25.8kV GIS(보통, 정밀) 점검기록표</th>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="1">공사명 :</td>
            <td class="record_25-8kv-tg-a128" colspan="11">
                @if ($rtnData->get('cstrn_nm') != null)
                    <input class="record_25-8kv-tg-inpt100" name="cstrn_nm" value="{{ $rtnData->get('cstrn_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="cstrn_nm" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">결<br><br>제</td>
            <td class="record_25-8kv-tg-9wq8">담 당</td>
            <td class="record_25-8kv-tg-9wq8">차 장</td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="2">변전소 및 기기명:</td>
            <td class="record_25-8kv-tg-a128" colspan="10">
                @if ($rtnData->get('sub_sttn_nm') != null)
                    <input class="record_25-8kv-tg-inpt15" name="sub_sttn_nm" value="{{ $rtnData->get('sub_sttn_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="sub_sttn_nm" />
                @endif
                S/S
                @if ($rtnData->get('eqp_nm') != null)
                    <input class="record_25-8kv-tg-inpt30" name="eqp_nm" value="{{ $rtnData->get('eqp_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="eqp_nm" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" rowspan="2">
                @if ($rtnData->get('spvs_sign_file_name') != null)
                    <img id="chkSign3" style="width: 50px;" src="{{ Storage::url('public/uploads/' . $rtnData->get('spvs_sign_file_name')) }}" />
                @else
                    <img id="chkSign3" style="width: 50px;" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" rowspan="2"><br><br></td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="2">점검일자 :</td>
            <td class="record_25-8kv-tg-a128" colspan="2">
                @if ($rtnData->get('chck_ymd') != null)
                    <input class="record_25-8kv-tg-inpt100" type="date" name="chck_ymd" value="{{ $rtnData->get('chck_ymd') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" type="date" name="chck_ymd" value="{!! date('Y-m-d') !!}"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-a128" colspan="1" style="text-align:right">날씨 :</td>
            <td class="record_25-8kv-tg-a128" colspan="3">
                @if ($rtnData->get('weather') != null)
                    <input id="weather" name="weather" class="record_25-8kv-tg-inpt50" value="{{ $rtnData->get('weather') }}" />
                @else
                    <input id="weather" name="weather" class="record_25-8kv-tg-inpt50" />
                @endif
                <select name="weather" onchange="selValue(this)">
                    <option value="맑음">맑음</option>
                    <option value="흐림">흐림</option>
                    <option value="비">비</option>
                    <option value="직접입력">직접입력</option>
                </select>
            </td>
            <td class="record_25-8kv-tg-a128" style="text-align:right" colspan="1">기온 :</td>
            <td class="record_25-8kv-tg-a128" colspan="1">
                @if ($rtnData->get('tmpt') != null)
                    <input class="record_25-8kv-tg-inpt60" name="tmpt" value="{{ $rtnData->get('tmpt') }}" />℃
                @else
                    <input class="record_25-8kv-tg-inpt60" name="tmpt" />℃
                @endif
            </td>
            <td class="record_25-8kv-tg-a128" style="text-align:right" colspan="1">습도 :</td>
            <td class="record_25-8kv-tg-a128" colspan="1">
                @if ($rtnData->get('hmdt') != null)
                    <input class="record_25-8kv-tg-inpt60" name="hmdt" value="{{ $rtnData->get('hmdt') }}" />%
                @else
                    <input class="record_25-8kv-tg-inpt60" name="hmdt" />%
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="1">점검자 :</td>
            <td class="record_25-8kv-tg-a128" colspan="4">
                @if ($rtnData->get('chck_nm') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_nm" value="{{ $rtnData->get('chck_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_nm" />
                @endif
                <label style="position: relative;">
                    <button type="button" class="record_25-8kv-tg-bt" onclick="openModal('signData1');"/>&nbsp&nbsp&nbsp&nbsp(인)</button>
                    <div style="position: absolute; top: -10px; left: 4px;">
                    @if ($rtnData->get('chck_sign_file_name') != null)
                        <img id="chkSign1" style="width: 70px;" src="{{ Storage::url('public/uploads/' . $rtnData->get('chck_sign_file_name')) }}" onclick="openModal('signData1');" />
                    @else
                        <img id="chkSign1" style="width: 70px;" onclick="openModal('signData1');" />
                    @endif
                    </div>
                </label>
            </td>
            <td class="record_25-8kv-tg-a128" colspan="1">감독자 :</td>
            <td class="record_25-8kv-tg-a128" colspan="4.5">
                @if ($rtnData->get('spvs_nm') != null)
                    <input class="record_25-8kv-tg-inpt60" name="spvs_nm" value="{{ $rtnData->get('spvs_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt60" name="spvs_nm" />
                @endif
                <label style="position: relative;">
                    <button type="button" class="record_25-8kv-tg-bt" onclick="openModal('signData2');"/>&nbsp&nbsp&nbsp&nbsp(인)</button>
                    <div style="position: absolute; top: -10px; left: 4px;">
                    @if ($rtnData->get('spvs_sign_file_name') != null)
                        <img id="chkSign2" style="width: 70px;" src="{{ Storage::url('public/uploads/' . $rtnData->get('spvs_sign_file_name')) }}" onclick="openModal('signData2');" />
                    @else
                        <img id="chkSign2" style="width: 70px;" onclick="openModal('signData2');" />
                    @endif
                    </div>
                </label>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">설치장소</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('sub_sttn_nm') != null)
                    <input class="record_25-8kv-tg-inpt100" name="sub_sttn_nm" value="{{ $rtnData->get('sub_sttn_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="sub_sttn_nm" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">급전번호</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('load_dspt_no') != null)
                    <input class="record_25-8kv-tg-inpt100" name="load_dspt_no" value="{{ $rtnData->get('load_dspt_no') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="load_dspt_no" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점 검 자</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('chck_nm') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_nm" value="{{ $rtnData->get('chck_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_nm" />
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">형 식</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('hmlg') != null)
                    <input class="record_25-8kv-tg-inpt100" name="hmlg" value="{{ $rtnData->get('hmlg') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="hmlg" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">정 격</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('rtng') != null)
                    <input class="record_25-8kv-tg-inpt100" name="rtng" value="{{ $rtnData->get('rtng') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="rtng" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">감 독 자</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('spvs_nm') != null)
                    <input class="record_25-8kv-tg-inpt60" name="spvs_nm" value="{{ $rtnData->get('spvs_nm') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="spvs_nm" />
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제 작 사</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('prdc_co') != null)
                    <input class="record_25-8kv-tg-inpt100" name="prdc_co" value="{{ $rtnData->get('prdc_co') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="prdc_co" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작번호</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('prdc_no') != null)
                    <input class="record_25-8kv-tg-inpt100" name="prdc_no" value="{{ $rtnData->get('prdc_no') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="prdc_no" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작년월</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('prdc_ym') != null)
                    <input class="record_25-8kv-tg-inpt100" type="month" name="prdc_ym" value="{{ $rtnData->get('prdc_ym') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" type="month" name="prdc_ym" />
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">1. 활선상태 점검 (휴전조작 전)</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">판정기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">측 정 값</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">1</td>
            <td class="record_25-8kv-tg-lboi" colspan="4" rowspan="3">부분방전 측정<br> - 휴대용 TEV 측정장비 사용<br> ※ 한전 측정장비 제공사</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">16[dbm]<br>이하</td>
            <td class="record_25-8kv-tg-9wq8">CB</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('cb_msrm_1-1-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-1" value="{{ $rtnData->get('cb_msrm_1-1-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-1" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-1-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-2" value="{{ $rtnData->get('cb_msrm_1-1-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-2" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-1-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-3" value="{{ $rtnData->get('cb_msrm_1-1-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-1-3" />
                @endif
                [dbm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="cb_chck_rslt_1-1" onchange="selValue(this)">
                    @if ($rtnData->get('cb_chck_rslt_1-1') != null)
                        @if($rtnData->get('cb_chck_rslt_1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-1') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">
                @if ($rtnData->get('rmrk_1-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-1">{{ $rtnData->get('rmrk_1-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#1 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds1_msrm_1-1-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-1" value="{{ $rtnData->get('ds1_msrm_1-1-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-1" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-1-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-2" value="{{ $rtnData->get('ds1_msrm_1-1-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-2" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-1-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-3" value="{{ $rtnData->get('ds1_msrm_1-1-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-1-3" />
                @endif
                [dbm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds1_chck_rslt_1-1" onchange="selValue(this)">
                    @if ($rtnData->get('ds1_chck_rslt_1-1') != null)
                        @if($rtnData->get('ds1_chck_rslt_1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-1') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#2 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds2_msrm_1-1-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-1" value="{{ $rtnData->get('ds2_msrm_1-1-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-1" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-1-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-2" value="{{ $rtnData->get('ds2_msrm_1-1-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-2" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-1-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-3" value="{{ $rtnData->get('ds2_msrm_1-1-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-1-3" />
                @endif
                [dbm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds2_chck_rslt_1-1" onchange="selValue(this)">
                    @if ($rtnData->get('ds2_chck_rslt_1-1') != null)
                        @if($rtnData->get('ds2_chck_rslt_1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-1') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">2</td>
            <td class="record_25-8kv-tg-lboi" colspan="4" rowspan="3">GIS 내부 이음 발생 여부<br> - 청진기 사용<br> ※ 휴대용 TEV 측정장비가 없을경우</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">무</td>
            <td class="record_25-8kv-tg-9wq8">CB</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('cb_msrm_1-2-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-1" value="{{ $rtnData->get('cb_msrm_1-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-1" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-2-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-2" value="{{ $rtnData->get('cb_msrm_1-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-2" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-2-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-3" value="{{ $rtnData->get('cb_msrm_1-2-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-2-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="cb_chck_rslt_1-2" onchange="selValue(this)">
                    @if ($rtnData->get('cb_chck_rslt_1-2') != null)
                        @if($rtnData->get('cb_chck_rslt_1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-2') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">
                @if ($rtnData->get('rmrk_1-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-2" row="1">{{ $rtnData->get('rmrk_1-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-2" row="1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#1 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds1_msrm_1-2-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-1" value="{{ $rtnData->get('ds1_msrm_1-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-1" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-2-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-2" value="{{ $rtnData->get('ds1_msrm_1-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-2" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-2-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-3" value="{{ $rtnData->get('ds1_msrm_1-2-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-2-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds1_chck_rslt_1-2" onchange="selValue(this)">
                    @if ($rtnData->get('ds1_chck_rslt_1-2') != null)
                        @if($rtnData->get('ds1_chck_rslt_1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-2') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#2 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds2_msrm_1-2-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-1" value="{{ $rtnData->get('ds2_msrm_1-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-1" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-2-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-2" value="{{ $rtnData->get('ds2_msrm_1-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-2" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-2-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-3" value="{{ $rtnData->get('ds2_msrm_1-2-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-2-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds2_chck_rslt_1-2" onchange="selValue(this)">
                    @if ($rtnData->get('ds2_chck_rslt_1-2') != null)
                        @if($rtnData->get('ds2_chck_rslt_1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-2') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="4">3</td>
            <td class="record_25-8kv-tg-lboi" colspan="4" rowspan="4">GIS 표피온도 측정<br>- Thermovision 사용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="4">각 상간<br>차이가<br>없을 것</td>
            <td class="record_25-8kv-tg-9wq8">CB</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('cb_msrm_1-3-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-1" value="{{ $rtnData->get('cb_msrm_1-3-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-1" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-3-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-2" value="{{ $rtnData->get('cb_msrm_1-3-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-2" />
                @endif
                /
                @if ($rtnData->get('cb_msrm_1-3-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-3" value="{{ $rtnData->get('cb_msrm_1-3-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="cb_msrm_1-3-3" />
                @endif
                ℃
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="cb_chck_rslt_1-3" onchange="selValue(this)">
                    @if ($rtnData->get('cb_chck_rslt_1-3') != null)
                        @if($rtnData->get('cb_chck_rslt_1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_1-3') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="4">
                @if ($rtnData->get('rmrk_1-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-3">{{ $rtnData->get('rmrk_1-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_1-3"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#1 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds1_msrm_1-3-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-1" value="{{ $rtnData->get('ds1_msrm_1-3-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-1" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-3-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-2" value="{{ $rtnData->get('ds1_msrm_1-3-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-2" />
                @endif
                /
                @if ($rtnData->get('ds1_msrm_1-3-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-3" value="{{ $rtnData->get('ds1_msrm_1-3-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds1_msrm_1-3-3" />
                @endif
                ℃
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds1_chck_rslt_1-3" onchange="selValue(this)">
                    @if ($rtnData->get('ds1_chck_rslt_1-3') != null)
                        @if($rtnData->get('ds1_chck_rslt_1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_1-3') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">#2 DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('ds2_msrm_1-3-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-1" value="{{ $rtnData->get('ds2_msrm_1-3-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-1" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-3-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-2" value="{{ $rtnData->get('ds2_msrm_1-3-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-2" />
                @endif
                /
                @if ($rtnData->get('ds2_msrm_1-3-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-3" value="{{ $rtnData->get('ds2_msrm_1-3-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="ds2_msrm_1-3-3" />
                @endif
                ℃
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds2_chck_rslt_1-3" onchange="selValue(this)">
                    @if ($rtnData->get('ds2_chck_rslt_1-3') != null)
                        @if($rtnData->get('ds2_chck_rslt_1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_1-3') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">인출측</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('wdrw_msrm_1-3-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-1" value="{{ $rtnData->get('wdrw_msrm_1-3-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-1" />
                @endif
                /
                @if ($rtnData->get('wdrw_msrm_1-3-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-2" value="{{ $rtnData->get('wdrw_msrm_1-3-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-2" />
                @endif
                /
                @if ($rtnData->get('wdrw_msrm_1-3-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-3" value="{{ $rtnData->get('wdrw_msrm_1-3-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt15" name="wdrw_msrm_1-3-3" />
                @endif
                ℃
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="wdrw_chck_rslt_1-3" onchange="selValue(this)">
                    @if ($rtnData->get('wdrw_chck_rslt_1-3') != null)
                        @if($rtnData->get('wdrw_chck_rslt_1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('wdrw_chck_rslt_1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('wdrw_chck_rslt_1-3') == "불량")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량" selected>불량</option>
                            <option value="해당없음">해당없음</option>
                        @else
                            <option value="양호">양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음" selected>해당없음</option>
                        @endif
                    @else
                        <option value="양호">양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">2. 작업 전 안전점검</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="8">점 검 내 용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">점 검 결 과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">검전 및 접지, 사활선 구획 로프 설치<br> (사, 활선 착각)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('chck_rslt_2-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-1" value="{{ $rtnData->get('chck_rslt_2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-1" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('rmrk_2-1') != null)
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-1">{{ $rtnData->get('rmrk_2-1') }}</textarea>
            @else
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-1"></textarea>
            @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">안전회의 시행 및 위험성체크리스트 활용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('chck_rslt_2-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-2" value="{{ $rtnData->get('chck_rslt_2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-2" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('rmrk_2-2') != null)
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-2">{{ $rtnData->get('rmrk_2-2') }}</textarea>
            @else
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-2"></textarea>
            @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">안전모, 안전화 등 개인별안전장구 착용상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('chck_rslt_2-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-3" value="{{ $rtnData->get('chck_rslt_2-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('rmrk_2-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-3">{{ $rtnData->get('rmrk_2-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-3"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">4</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">작업통보서 지참 및 작업내용숙지</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('chck_rslt_2-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-4" value="{{ $rtnData->get('chck_rslt_2-4') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_2-4" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('rmrk_2-4') != null)
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-4">{{ $rtnData->get('rmrk_2-4') }}</textarea>
            @else
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_2-4"></textarea>
            @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
</table>
