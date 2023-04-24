<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="8">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="8">제어회로</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">저압회로 볼트 조임상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-1" value="{{ $rtnData->get('crtr_5-3-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-1') != null)
                        @if($rtnData->get('chck_rslt_5-3-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-1') == "불량")
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
                @if($rtnData->get('rmrk_5-3-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-1">{{ $rtnData->get('rmrk_5-3-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">저압회로 배선정리 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-2" value="{{ $rtnData->get('crtr_5-3-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-2') != null)
                        @if($rtnData->get('chck_rslt_5-3-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-2') == "불량")
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
                @if($rtnData->get('rmrk_5-3-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-2">{{ $rtnData->get('rmrk_5-3-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">보조계전기 발열및 탄화 유무<br> - 불량시 교체</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">1회/12년<br>교체</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-3') != null)
                        @if($rtnData->get('chck_rslt_5-3-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-3') == "불량")
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
                @if($rtnData->get('rmrk_5-3-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-3">{{ $rtnData->get('rmrk_5-3-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-3"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">ES Lock용 접점 동작 상태<br> - Lock Pin 분리시 "딸깍" 소리확인<br>
                <img src="/image/figure-5-3-4.jpg" height="100px"><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-4" value="{{ $rtnData->get('crtr_5-3-4') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-4"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-4') != null)
                        @if($rtnData->get('chck_rslt_5-3-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-4') == "불량")
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
                @if($rtnData->get('rmrk_5-3-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-4">{{ $rtnData->get('rmrk_5-3-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-4"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">CB, DS기계적 접점 (a, b접점 상태)<br> - 기계적 a, b 보조 접정 측정</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-5') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-5" value="{{ $rtnData->get('crtr_5-3-5') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-5"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-5') != null)
                        @if($rtnData->get('chck_rslt_5-3-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-5') == "불량")
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
                @if($rtnData->get('rmrk_5-3-5') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-5">{{ $rtnData->get('rmrk_5-3-5') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-5"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">Multi-Socket 접촉상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-6') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-6" value="{{ $rtnData->get('crtr_5-3-6') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-6"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-6') != null)
                        @if($rtnData->get('chck_rslt_5-3-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-6') == "불량")
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
                @if($rtnData->get('rmrk_5-3-6') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-6">{{ $rtnData->get('rmrk_5-3-6') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-6"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">CT 및 제어회로 터미널 단자 손상여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-3-7') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-7" value="{{ $rtnData->get('crtr_5-3-7') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-3-7"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-7" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-7') != null)
                        @if($rtnData->get('chck_rslt_5-3-7') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-7') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-7') == "불량")
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
                @if($rtnData->get('rmrk_5-3-7') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-7">{{ $rtnData->get('rmrk_5-3-7') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-7"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">CT 2차회로단선여부<br>
                <img src="/image/figure-5-3-8.jpg" height="100px"><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">유지보수업무<br>Guide - 02<br>참조</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-3-8" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-3-8') != null)
                        @if($rtnData->get('chck_rslt_5-3-8') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-8') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-3-8') == "불량")
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
                @if($rtnData->get('rmrk_5-3-8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-8">{{ $rtnData->get('rmrk_5-3-8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-3-8"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">4</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">보조기기</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                재폐로용 LSP 접점 Pass<br> Ο 최종 가압후 감도 조절 및 3상 전압측정<br>
                Ο LPS 79Ry Blocking 미사용 개소 "b" 접점 Common 확인<br> GIS용보조계전기 KIT(SSCR)<br>
                Ο SSCR 동작상태 및 램프점검<br> Ο 점검프로그램 활용한 동작상태 점검<br> Ο GIS 제작사별 Tag Program 확인<br>
                Ο Cable 접속용 Connector 단자 점검
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-4" value="{{ $rtnData->get('crtr_5-4') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-4"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-4') != null)
                        @if($rtnData->get('chck_rslt_5-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-4') == "불량")
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
                @if($rtnData->get('rmrk_5-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-4">{{ $rtnData->get('rmrk_5-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-4"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="2">5</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="2">보호계전기</td>
            <td class="record_25-8kv-tg-lboi" colspan="6">보호계전기 이상유무<br>
                <img src="/image/figure-5-5-1.jpg" height="100px"><br>
                Ο 정정표에 따른 Setting치 확인
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-5-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-5-1" value="{{ $rtnData->get('crtr_5-5-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-5-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-5-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-5-1') != null)
                        @if($rtnData->get('chck_rslt_5-5-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-5-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-5-1') == "불량")
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
                @if($rtnData->get('rmrk_5-5-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-5-1">{{ $rtnData->get('rmrk_5-5-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-5-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="6">
                StaticType Noise Filter 설치 여부<br>
                <img src="/image/figure-5-5-2.jpg" height="100px"><br>
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('crtr_5-5-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-5-2" value="{{ $rtnData->get('crtr_5-5-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_5-5-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_5-5-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_5-5-2') != null)
                        @if($rtnData->get('chck_rslt_5-5-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-5-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_5-5-2') == "불량")
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
                @if($rtnData->get('rmrk_5-5-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-5-2">{{ $rtnData->get('rmrk_5-5-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_5-5-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
</table>
