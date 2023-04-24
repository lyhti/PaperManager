<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="12">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="12">메커니즘</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">Hook의 걸림 및 마모상태, Hook Gap이상 유무<br> - Trip 및 Closing Latch 접촉량 등</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작사<br>기준 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-7" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-7') != null)
                        @if($rtnData->get('chck_rslt_5-2-7') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-7') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-7') == "불량")
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
                @if($rtnData->get('rmrk_5-2-7') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-7">{{ $rtnData->get('rmrk_5-2-7') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-7"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">베어링 이상 유무<br>
                <img src="/image/figure-5-2-8.jpg" height="100px"><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-8') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-8" value="{{ $rtnData->get('crtr_5-2-8') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-8"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-8" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-8') != null)
                        @if($rtnData->get('chck_rslt_5-2-8') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-8') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-8') == "불량")
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
                @if($rtnData->get('rmrk_5-2-8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-8">{{ $rtnData->get('rmrk_5-2-8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-8"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6"> CB, DS 각종 Link 점검 <br> - 적정길이, 간격, 이탈여부 등</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작사<br>기준 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-9" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-9') != null)
                        @if($rtnData->get('chck_rslt_5-2-9') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-9') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-9') == "불량")
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
            @if($rtnData->get('rmrk_5-2-9') != null)
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-9">{{ $rtnData->get('rmrk_5-2-9') }}</textarea>
            @else
                <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-9"></textarea>
            @endif </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                각종 축 고정장치용 핀류의 상태 및 이탈 여부<br>
                <img src="/image/figure-5-2-10.jpg" height="100px"><br>👉 분할핀<br> 👉 서클립<br>👉 C링<br> 👉 E링 등<br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-10') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-10" value="{{ $rtnData->get('crtr_5-2-10') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-10"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-10" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-10') != null)
                        @if($rtnData->get('chck_rslt_5-2-10') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-10') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-10') == "불량")
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
                @if($rtnData->get('rmrk_5-2-10') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-10">{{ $rtnData->get('rmrk_5-2-10') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-10"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                구동부 Grease 도포<br>(기존 Grease 및 이물질 제거 후)<br> - Grease 제거/재도포, 변색상태 등 <br>
                <img src="/image/figure-5-2-11.jpg" height="100px"><br>Ο 점검시 마다 그리스 제거 및 재도포 시행<br> Ο 제작사별 주유 권장개소 참조<br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">유지보수업무<br>Guide - 01<br>참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-11" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-11') != null)
                        @if($rtnData->get('chck_rslt_5-2-11') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-11') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-11') == "불량")
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
                @if($rtnData->get('rmrk_5-2-11') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-11">{{ $rtnData->get('rmrk_5-2-11') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-11"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                <br>
                Spring의 발청, 손상, 변형 <br> <img src="/image/figure-5-2-12.jpg" height="100px"><br>Ο 3개의 스프링으로 구성<br>
                &emsp;👉 OPEN, Closing, Wiper(조작 완충용)<br> Ο 스프링 압축 또는 이완시 길이 측정<br> &emsp;👉 스프링 장력 변화 여부 판정<br>
                <br><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작사<br>기준 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-12" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-12') != null)
                        @if($rtnData->get('chck_rslt_5-2-12') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-12') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-12') == "불량")
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
                @if($rtnData->get('rmrk_5-2-12') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-12">{{ $rtnData->get('rmrk_5-2-12') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-12"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
</table>
