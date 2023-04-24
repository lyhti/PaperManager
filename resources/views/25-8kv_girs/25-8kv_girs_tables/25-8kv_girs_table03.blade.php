<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">14</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">LCP 및 조작함 Door 여닫힘 상태<br> - Door의 제어케이블 간섭 여부 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-14" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-14') != null)
                        @if($rtnData->get('chck_rslt_4-14') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-14') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-14') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-14') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-14">{{ $rtnData->get('rmrk_4-14') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-14"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">15</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">제어용전선, CT 2차배선<br> - Door 장력, 외피손상 여부<br> - Heater에 의한 표피 열손상 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-15" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-15') != null)
                        @if($rtnData->get('chck_rslt_4-15') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-15') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-15') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-15') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-15">{{ $rtnData->get('rmrk_4-15') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-15"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">16</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각종 단자대 점검<br> - 단자탈락, 표피 변경, 과다장력, 단자조임등</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-16" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-16') != null)
                        @if($rtnData->get('chck_rslt_4-16') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-16') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-16') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-16') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-16">{{ $rtnData->get('rmrk_4-16') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-16"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">17</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">CT 결선 (Ratio, 결선), 정정표 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-17" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-17') != null)
                        @if($rtnData->get('chck_rslt_4-17') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-17') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-17') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-17') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-17">{{ $rtnData->get('rmrk_4-17') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-17"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">18</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">인출케이블 과다장력 여부(지지 크리트 시공여부)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-18" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-18') != null)
                        @if($rtnData->get('chck_rslt_4-18') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-18') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-18') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-18') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-18">{{ $rtnData->get('rmrk_4-18') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-18"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">19</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">케이블 접속부 점검(볼트 풀림 여부등)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-19" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-19') != null)
                        @if($rtnData->get('chck_rslt_4-19') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-19') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-19') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-19') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-19">{{ $rtnData->get('rmrk_4-19') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-19"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">20</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">GIS 내부, 외부 발청상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-20" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-20') != null)
                        @if($rtnData->get('chck_rslt_4-20') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-20') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-20') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_4-20') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-20">{{ $rtnData->get('rmrk_4-20') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-20"></textarea>
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
            <td class="record_25-8kv-tg-a128" colspan="15">5. 조작함, 조작기구, 제어회로점검</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검항목</td>
            <td class="record_25-8kv-tg-9wq8" colspan="6">점 검 내용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">기 준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점 검 결 과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">일 반<br>점 검</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">각종Bolt / Nut 의 조임상태<br> - 체크마크 확인 및 체크마크 표기</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-1-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-1" value="{{ $rtnData->get('crtr_5-1-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-1-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-1-1') != null)
                        @if($rtnData->get('chck_rslt_5-1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-1') == "불량")
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
                @if($rtnData->get('rmrk_5-1-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-1">{{ $rtnData->get('rmrk_5-1-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">연결부, 활동부, 등의 청소</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-1-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-2" value="{{ $rtnData->get('crtr_5-1-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-1-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-1-2') != null)
                        @if($rtnData->get('chck_rslt_5-1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-2') == "불량")
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
                @if($rtnData->get('rmrk_5-1-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-2">{{ $rtnData->get('rmrk_5-1-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">전력케이블 및제어케이블 인출부<br>방화구획재 시공 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-1-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-3" value="{{ $rtnData->get('crtr_5-1-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-1-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-1-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-1-3') != null)
                        @if($rtnData->get('chck_rslt_5-1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-1-3') == "불량")
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
                @if($rtnData->get('rmrk_5-1-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-3">{{ $rtnData->get('rmrk_5-1-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-1-3"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="12">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="12">메커니즘</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">메커니즘 내부 각종 발청, 마모 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-1" value="{{ $rtnData->get('crtr_5-2-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-1') != null)
                        @if($rtnData->get('chck_rslt_5-2-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-1') == "불량")
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
                @if($rtnData->get('rmrk_5-2-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-1">{{ $rtnData->get('rmrk_5-2-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">CB 조작 메커니즘과 조작 Link간Bolt 체결상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-2" value="{{ $rtnData->get('crtr_5-2-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-2') != null)
                        @if($rtnData->get('chck_rslt_5-2-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-2') == "불량")
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
                @if($rtnData->get('rmrk_5-2-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-2">{{ $rtnData->get('rmrk_5-2-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">DS 조작기구 구동축 연결 Bolt이완여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-3" value="{{ $rtnData->get('crtr_5-2-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-3"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-3') != null)
                        @if($rtnData->get('chck_rslt_5-2-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-3') == "불량")
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
                @if($rtnData->get('rmrk_5-2-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-3">{{ $rtnData->get('rmrk_5-2-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-3"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">DSOver-Run 여부<br>
                <img src="/image/figure-5-2-4.jpg" height="100px"><br>
                Ο DS 수동조작부 상태표시점(꼭지점)<br>
                12시 방향 지시여부 확인<br> ☞ 불일치시다른 CB, DS 조작불가<br>
                Ο DS 정지는 End Position Limit S/W에<br>
                동작하므로 S/W 불량시 DS 조작상태 불량
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">12시방향</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-4') != null)
                        @if($rtnData->get('chck_rslt_5-2-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-4') == "불량")
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
                @if($rtnData->get('rmrk_5-2-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-4">{{ $rtnData->get('rmrk_5-2-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-4"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">Limit SW (CB, DS)<br> - 지지/고정 상태, 탈락, 변형, 동작중 걸림 등</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-5') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-5" value="{{ $rtnData->get('crtr_5-2-5') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-5"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-5') != null)
                        @if($rtnData->get('chck_rslt_5-2-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-5') == "불량")
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
                @if($rtnData->get('rmrk_5-2-5') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-5">{{ $rtnData->get('rmrk_5-2-5') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-5"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">ESInter-Lock 해제용 레버 복귀상태<br> - 그리스 고착여부 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-6') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-6" value="{{ $rtnData->get('crtr_5-2-6') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-6"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-6') != null)
                        @if($rtnData->get('chck_rslt_5-2-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-6') == "불량")
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
                @if($rtnData->get('rmrk_5-2-6') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-6">{{ $rtnData->get('rmrk_5-2-6') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-6"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
</table>
