<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="12">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="12">메커니즘</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                Shaft 및CAM 이상 유무<br>
                <img src="/image/figure-5-2-13.jpg" height="100px">
                <br>Ο 캠은 CB ON/OFF 상태에서<br> 자유롭게 움직여야 함.<br>Ο 캠 공차 불량시 보조접정 동작불량 유발<br>
                ☞ 기계적으로 이상이 없으나, 전기적으로<br> 모터 및 체인소손 유발 가능<br>Ο 공차 불일치시캠 교체<br>Ο 캠(DS 기계적 보조접점용) 그리스 제거 및 재도포
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">캠 움직임<br>원활 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-13" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-13') != null)
                        @if($rtnData->get('chck_rslt_5-2-13') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-13') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-13') == "불량")
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
                @if($rtnData->get('rmrk_5-2-13') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-13">{{ $rtnData->get('rmrk_5-2-13') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-13"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                Close/ Trip Coil 손상 유무<br> - 고정 지지용 Spring의 유지상태<br> - 동작봉과 접점편 적정이격거리 확보
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작사별<br>기준 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-14" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-14') != null)
                        @if($rtnData->get('chck_rslt_5-2-14') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-14') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-14') == "불량")
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
                @if($rtnData->get('rmrk_5-2-14') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-14">{{ $rtnData->get('rmrk_5-2-14') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-14"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                Motor점검<br>(Spring Charger 및 DS 구동용)<br> - 동작중 이음, 온도상승, 외피변색, 고정상태 / 흔들림
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-15') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-15" value="{{ $rtnData->get('crtr_5-2-15') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-15"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-15" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-15') != null)
                        @if($rtnData->get('chck_rslt_5-2-15') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-15') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-15') == "불량")
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
                @if($rtnData->get('rmrk_5-2-15') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-15">{{ $rtnData->get('rmrk_5-2-15') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-15"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                Dashpot압축유 누유 여부<br> - 압축유 주입량 : 10cc<br>
                <img src="/image/figure-5-2-16.jpg" height="100px"><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">제작사별<br>기준 참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-16" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-16') != null)
                        @if($rtnData->get('chck_rslt_5-2-16') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-16') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-16') == "불량")
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
                @if($rtnData->get('rmrk_5-2-16') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-16">{{ $rtnData->get('rmrk_5-2-16') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-16"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">DS, ES구동용 체인<br> - 탈락, 변형, 적정장력 등</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-2-17') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-17" value="{{ $rtnData->get('crtr_5-2-17') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-2-17"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-17" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-17') != null)
                        @if($rtnData->get('chck_rslt_5-2-17') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-17') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-17') == "불량")
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
                @if($rtnData->get('rmrk_5-2-17') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-17">{{ $rtnData->get('rmrk_5-2-17') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-17"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                V.I접점마모도 측정용 지그 이상 유무<br>
                <img src="/image/figure-5-2-18.jpg" height="100px"><br>
                Ο 극간격 설계값 : 제작사 기준 참고<br>Ο 지그가 설치된 설비에 해당
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">설치시<br>시 행</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-2-18" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-2-18') != null)
                        @if($rtnData->get('chck_rslt_5-2-18') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-18') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-2-18') == "불량")
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
                @if($rtnData->get('rmrk_5-2-18') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-18">{{ $rtnData->get('rmrk_5-2-18') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-2-18"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
</table>
