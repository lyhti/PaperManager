<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">8. Gas 밀도 검출기 시험</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="2">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5" rowspan="2">구분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">측정값</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="2">비고</td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">ON</td>
            <td class="record_25-8kv-tg-9wq8">OFF</td>
            <td class="record_25-8kv-tg-9wq8">ON</td>
            <td class="record_25-8kv-tg-9wq8">OFF</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5">CB (kg.f/cm²)</td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_on_8-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-1" value="{{ $rtnData->get('crtr_on_8-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_off_8-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-1" value="{{ $rtnData->get('crtr_off_8-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_on_8-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-1" value="{{ $rtnData->get('msrm_on_8-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_off_8-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-1" value="{{ $rtnData->get('msrm_off_8-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_8-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_8-1') != null)
                        @if($rtnData->get('chck_rslt_8-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">
                @if($rtnData->get('rmrk_8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_8">{{ $rtnData->get('rmrk_8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_8">제작사별 기준&#10;확인&#10;오차범위 : ±2.5%</textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5">#1 DS (kg.f/cm²)</td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_on_8-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-2" value="{{ $rtnData->get('crtr_on_8-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_off_8-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-2" value="{{ $rtnData->get('crtr_off_8-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_on_8-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-2" value="{{ $rtnData->get('msrm_on_8-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_off_8-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-2" value="{{ $rtnData->get('msrm_off_8-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_8-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_8-2') != null)
                        @if($rtnData->get('chck_rslt_8-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5">#2 DS (kg.f/cm²)</td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_on_8-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-3" value="{{ $rtnData->get('crtr_on_8-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_on_8-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('crtr_off_8-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-3" value="{{ $rtnData->get('crtr_off_8-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_off_8-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_on_8-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-3" value="{{ $rtnData->get('msrm_on_8-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_on_8-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if($rtnData->get('msrm_off_8-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-3" value="{{ $rtnData->get('msrm_off_8-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_off_8-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_8-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_8-3') != null)
                        @if($rtnData->get('chck_rslt_8-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_8-3') == "불량")
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
            <td class="record_25-8kv-tg-a128" colspan="15">9. Gas 누기 점검분석</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="5">점검내용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="5" rowspan="3">점검창 및 각 부분<br>(비닐로 밀봉한다)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4" rowspan="3">년 1% 이하<br>(24시간 이상 경과 후<br>Check:5PPMv 이하일것)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">
                <select name="chck_rslt_9" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_9') != null)
                        @if($rtnData->get('chck_rslt_9') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_9') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_9') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">
                @if($rtnData->get('rmrk_9') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_9">{{ $rtnData->get('rmrk_9') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_9"></textarea>
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
            <td class="record_25-8kv-tg-a128" colspan="15">10. 절연저항 측정</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">구분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">판정기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">측정값</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">CT회로</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">5MΩ 이상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_10-1-1') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-1" value="{{ $rtnData->get('msrm_10-1-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-1"/>
                @endif
                [MΩ]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_10-1-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_10-1-1') != null)
                        @if($rtnData->get('chck_rslt_10-1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-1') == "불량")
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
                @if($rtnData->get('rmrk_10') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_10">{{ $rtnData->get('rmrk_10') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_10"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_10-1-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-2" value="{{ $rtnData->get('msrm_10-1-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-2"/>
                @endif
                [MΩ]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_10-1-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_10-1-2') != null)
                        @if($rtnData->get('chck_rslt_10-1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_10-1-3') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-3" value="{{ $rtnData->get('msrm_10-1-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-1-3"/>
                @endif
                [MΩ]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_10-1-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_10-1-3') != null)
                        @if($rtnData->get('chck_rslt_10-1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-1-3') == "불량")
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
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">제어회로</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">2MΩ 이상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_10-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-2" value="{{ $rtnData->get('msrm_10-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_10-2"/>
                @endif
                [MΩ]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_10-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_10-2') != null)
                        @if($rtnData->get('chck_rslt_10-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_10-2') == "불량")
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
            <td class="record_25-8kv-tg-a128" colspan="15">11. 차단기 동작특성 시험</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검항목</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">점 검내 용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">기 준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">동작시험</td>
            <td class="record_25-8kv-tg-lboi" colspan="4">무부하 투입시간 측정<br> (정격 동작전압 : 125V)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="5">최종검수<br>시험성적서<br>참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('chck_rslt_11-1') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-1" value="{{ $rtnData->get('chck_rslt_11-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-1"/>
                @endif
                ms
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="5">
                @if($rtnData->get('rmrk_11') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_11">{{ $rtnData->get('rmrk_11') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_11"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">"</td>
            <td class="record_25-8kv-tg-lboi" colspan="4">무부하 개극시간 측정<br> (정격 동작전압 : 125V)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('chck_rslt_11-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-2" value="{{ $rtnData->get('chck_rslt_11-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-2"/>
                @endif
                ms
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">"</td>
            <td class="record_25-8kv-tg-lboi" colspan="4" rowspan="3">O-C-O</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('chck_rslt_11-3-1') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-1" value="{{ $rtnData->get('chck_rslt_11-3-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-1"/>
                @endif
                ms
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('chck_rslt_11-3-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-2" value="{{ $rtnData->get('chck_rslt_11-3-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-2"/>
                @endif
                ms
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('chck_rslt_11-3-3') != null)
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-3" value="{{ $rtnData->get('chck_rslt_11-3-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="chck_rslt_11-3-3"/>
                @endif
                ms
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
</table>
