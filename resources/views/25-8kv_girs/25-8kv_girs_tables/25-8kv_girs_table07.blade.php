<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">6. SF₆ Gas 분석</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5">구분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">판정기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">측정치</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">SO₂ 함유량 측정</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">CB</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">1 PPMv<br>이하</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('cb_msrm_6-1') != null)
                    <input class="record_25-8kv-tg-inpt50" name="cb_msrm_6-1" value="{{ $rtnData->get('cb_msrm_6-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="cb_msrm_6-1"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="cb_chck_rslt_6-1" onchange="selValue(this)">
                    @if ($rtnData->get('cb_chck_rslt_6-1') != null)
                        @if($rtnData->get('cb_chck_rslt_6-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_6-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_6-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('cb_rmrk_6-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="cb_rmrk_6-1">{{ $rtnData->get('cb_rmrk_6-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="cb_rmrk_6-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">#1DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds1_msrm_6-1') != null)
                    <input class="record_25-8kv-tg-inpt50" name="ds1_msrm_6-1" value="{{ $rtnData->get('ds1_msrm_6-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="ds1_msrm_6-1"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds1_chck_rslt_6-1" onchange="selValue(this)">
                    @if ($rtnData->get('ds1_chck_rslt_6-1') != null)
                        @if($rtnData->get('ds1_chck_rslt_6-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_6-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_6-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds1_rmrk_6-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds1_rmrk_6-1">{{ $rtnData->get('ds1_rmrk_6-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds1_rmrk_6-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">#2DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds2_msrm_6-1') != null)
                    <input class="record_25-8kv-tg-inpt50" name="ds2_msrm_6-1" value="{{ $rtnData->get('ds2_msrm_6-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="ds2_msrm_6-1"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds2_chck_rslt_6-1" onchange="selValue(this)">
                    @if ($rtnData->get('ds2_chck_rslt_6-1') != null)
                        @if($rtnData->get('ds2_chck_rslt_6-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_6-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_6-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds2_rmrk_6-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds2_rmrk_6-1">{{ $rtnData->get('ds2_rmrk_6-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds2_rmrk_6-1"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">수분함유량 측정</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">CB</td>
            <td class="record_25-8kv-tg-lboi" colspan="3" rowspan="3">
                Ο CB<br> - 관리치 : 200PPMv 이하<br> - 허용치 : 300PPMv 이하<br>
                Ο 기타 <br> - 관리치 : 300PPMv 이하<br> - 허용치 : 1,000PPMv 이하
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('cb_msrm_6-2') != null)
                    <input class="record_25-8kv-tg-inpt50" name="cb_msrm_6-2" value="{{ $rtnData->get('cb_msrm_6-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="cb_msrm_6-2"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="cb_chck_rslt_6-2" onchange="selValue(this)">
                    @if ($rtnData->get('cb_chck_rslt_6-2') != null)
                        @if($rtnData->get('cb_chck_rslt_6-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_6-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('cb_chck_rslt_6-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('cb_rmrk_6-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="cb_rmrk_6-2">{{ $rtnData->get('cb_rmrk_6-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="cb_rmrk_6-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">#1DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds1_msrm_6-2') != null)
                    <input class="record_25-8kv-tg-inpt50" name="ds1_msrm_6-2" value="{{ $rtnData->get('ds1_msrm_6-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="ds1_msrm_6-2"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds1_chck_rslt_6-2" onchange="selValue(this)">
                    @if ($rtnData->get('ds1_chck_rslt_6-2') != null)
                        @if($rtnData->get('ds1_chck_rslt_6-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_6-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds1_chck_rslt_6-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds1_rmrk_6-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds1_rmrk_6-2">{{ $rtnData->get('ds1_rmrk_6-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds1_rmrk_6-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">#2DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds2_msrm_6-2') != null)
                    <input class="record_25-8kv-tg-inpt50" name="ds2_msrm_6-2" value="{{ $rtnData->get('ds2_msrm_6-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt50" name="ds2_msrm_6-2"/>
                @endif
                [PPM]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="ds2_chck_rslt_6-2" onchange="selValue(this)">
                    @if ($rtnData->get('ds2_chck_rslt_6-2') != null)
                        @if($rtnData->get('ds2_chck_rslt_6-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_6-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('ds2_chck_rslt_6-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('ds2_rmrk_6-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds2_rmrk_6-2">{{ $rtnData->get('ds2_rmrk_6-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="ds2_rmrk_6-2"></textarea>
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
            <td class="record_25-8kv-tg-a128" colspan="15">7. 각종시험</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="10">점 검내 용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">
                CB, DS, ES, 43RC 조작시험(Indicator 동작 확인)<br>
                - Local / Remote / SCADA / 수동조작<br> - 보조계전기 동작상태 (DC24V, 125V)<br>
                - Inter-Lock, PTX용<br> - 조작회로 Diode
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-1') != null)
                        @if($rtnData->get('chck_rslt_7-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-1') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-1">{{ $rtnData->get('rmrk_7-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-1"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">CB, DS, ES, Spring Charge Indicator 동작 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-2') != null)
                        @if($rtnData->get('chck_rslt_7-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-2') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-2">{{ $rtnData->get('rmrk_7-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-2"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">Spring Charger 동작 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-3') != null)
                        @if($rtnData->get('chck_rslt_7-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-3') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-3">{{ $rtnData->get('rmrk_7-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-3"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">4</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">Trip Free 시험</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-4') != null)
                        @if($rtnData->get('chck_rslt_7-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-4') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-4">{{ $rtnData->get('rmrk_7-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-4"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">5</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">CB Counter 동작상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-5') != null)
                        @if($rtnData->get('chck_rslt_7-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-5') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-5') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-5">{{ $rtnData->get('rmrk_7-5') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-5"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">6</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">CB Gas 누기(쇄정)시 동작 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-6') != null)
                        @if($rtnData->get('chck_rslt_7-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-6') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-6') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-6">{{ $rtnData->get('rmrk_7-6') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-6"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">7</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">온 • 습도계 • 히터 동작 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-7" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-7') != null)
                        @if($rtnData->get('chck_rslt_7-7') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-7') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-7') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-7') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-7">{{ $rtnData->get('rmrk_7-7') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-7"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">8</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">43RC ON 상태에서 CB 투입 → 43RCOFF 및 1분 후 재투입 시험 <br> - 79Ry
                사용시
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-8" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-8') != null)
                        @if($rtnData->get('chck_rslt_7-8') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-8') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-8') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-8">{{ $rtnData->get('rmrk_7-8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-8"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">9</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">각종 보조계전기의 동작상태 점검</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-9" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-9') != null)
                        @if($rtnData->get('chck_rslt_7-9') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-9') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-9') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-9') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-9">{{ $rtnData->get('rmrk_7-9') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-9"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">10</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">
                보호계전기에 의한 CB 연동시험<br>
                - 79Ry가 있을 경우 재폐로 동작 확인, 순시Blocking
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-10" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-10') != null)
                        @if($rtnData->get('chck_rslt_7-10') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-10') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-10') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-10') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-10">{{ $rtnData->get('rmrk_7-10') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-10"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">11</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">보호계전기 성능시험 (50, 79)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-11" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-11') != null)
                        @if($rtnData->get('chck_rslt_7-11') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-11') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-11') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-11') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-11">{{ $rtnData->get('rmrk_7-11') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-11"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">12</td>
            <td class="record_25-8kv-tg-lboi" colspan="10">
                경보회로 시험<br> - 50, 51, 50N, 51N 79, Gas, Low,27D, 27A, PTNFB
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_7-12" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_7-12') != null)
                        @if($rtnData->get('chck_rslt_7-12') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-12') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_7-12') == "불량")
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
                        <option value="양호" selected>양호</option>
                        <option value="조치 후 양호">조치 후 양호</option>
                        <option value="불량">불량</option>
                        <option value="해당없음">해당없음</option>
                    @endif
                </select>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_7-12') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-12">{{ $rtnData->get('rmrk_7-12') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_7-12"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
</table>
