<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">3. 지시치 확인</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="6">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">점 검 결 과<br>(점검 전 / 후)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="6">차단기 동작횟수</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">
                @if($rtnData->get('chck_rslt_3-1-1') != null)
                    <input class="record_25-8kv-tg-inpt30" name="chck_rslt_3-1-1" value="{{ $rtnData->get('chck_rslt_3-1-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="chck_rslt_3-1-1" />
                @endif
                /
                @if($rtnData->get('chck_rslt_3-1-2') != null)
                    <input class="record_25-8kv-tg-inpt30" name="chck_rslt_3-1-2" value="{{ $rtnData->get('chck_rslt_3-1-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="chck_rslt_3-1-2" />
                @endif
                회
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">
                @if($rtnData->get('rmrk_3-1') != null)
                    <input class="record_25-8kv-tg-inpt100" onkeyup="resize(this)" name="rmrk_3-1" value="{{ $rtnData->get('rmrk_3-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" onkeyup="resize(this)" name="rmrk_3-1" />
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="3">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">SF6 Gas 압력</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">CB</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">
                @if($rtnData->get('cb_chck_rslt_3-2-1') != null)
                    <input class="record_25-8kv-tg-inpt30" name="cb_chck_rslt_3-2-1" value="{{ $rtnData->get('cb_chck_rslt_3-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="cb_chck_rslt_3-2-1" />
                @endif
                /
                @if($rtnData->get('cb_chck_rslt_3-2-2') != null)
                    <input class="record_25-8kv-tg-inpt30" name="cb_chck_rslt_3-2-2" value="{{ $rtnData->get('cb_chck_rslt_3-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="cb_chck_rslt_3-2-2" />
                @endif
                [kg.f/cm²]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">정격 :
                @if($rtnData->get('cb_rmrk_3-2-1') != null)
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="cb_rmrk_3-2-1">{{ $rtnData->get('cb_rmrk_3-2-1') }}</textarea>
                @else
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="cb_rmrk_3-2-1"></textarea>
                @endif
                [kg.f/cm²]
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="3">#1DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">
                @if($rtnData->get('ds1_chck_rslt_3-2-1') != null)
                    <input class="record_25-8kv-tg-inpt30" name="ds1_chck_rslt_3-2-1" value="{{ $rtnData->get('ds1_chck_rslt_3-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="ds1_chck_rslt_3-2-1" />
                @endif
                /
                @if($rtnData->get('ds1_chck_rslt_3-2-2') != null)
                    <input class="record_25-8kv-tg-inpt30" name="ds1_chck_rslt_3-2-2" value="{{ $rtnData->get('ds1_chck_rslt_3-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="ds1_chck_rslt_3-2-2" />
                @endif
                [kg.f/cm²]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">정격 :
                @if($rtnData->get('ds1_rmrk_3-2-2') != null)
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="ds1_rmrk_3-2-2">{{ $rtnData->get('ds1_rmrk_3-2-2') }}</textarea>
                @else
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="ds1_rmrk_3-2-2"></textarea>
                @endif
                [kg.f/cm²]
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="3">#2DS</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">
                @if($rtnData->get('ds2_chck_rslt_3-2-1') != null)
                    <input class="record_25-8kv-tg-inpt30" name="ds2_chck_rslt_3-2-1" value="{{ $rtnData->get('ds2_chck_rslt_3-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="ds2_chck_rslt_3-2-1" />
                @endif
                /
                @if($rtnData->get('ds2_chck_rslt_3-2-2') != null)
                    <input class="record_25-8kv-tg-inpt30" name="ds2_chck_rslt_3-2-2" value="{{ $rtnData->get('ds2_chck_rslt_3-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt30" name="ds2_chck_rslt_3-2-2" />
                @endif
                [kg.f/cm²]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">정격 :
                @if($rtnData->get('ds2_rmrk_3-2-3') != null)
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="ds2_rmrk_3-2-3">{{ $rtnData->get('ds2_rmrk_3-2-3') }}</textarea>
                @else
                    <textarea class="txtarea_30" rows="1" onkeyup="resize(this)" name="ds2_rmrk_3-2-3"></textarea>
                @endif
                [kg.f/cm²]
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
            <td class="record_25-8kv-tg-a128" colspan="15">4. 외부 일반 점검</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="8">점 검내 용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">개폐기(CB, DS) OFF 상태 확인<br>
                <img src="/image/figure-4-1.jpg" height="100px">
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-1') != null)
                        @if($rtnData->get('chck_rslt_4-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-1') == "불량")
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
                @if($rtnData->get('rmrk_4-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-1">{{ $rtnData->get('rmrk_4-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-1"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">발청 및 변형 유무</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-2') != null)
                        @if($rtnData->get('chck_rslt_4-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-2') == "불량")
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
                @if($rtnData->get('rmrk_4-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-2">{{ $rtnData->get('rmrk_4-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-2"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">Gas누기 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-3') != null)
                        @if($rtnData->get('chck_rslt_4-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-3') == "불량")
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
                @if($rtnData->get('rmrk_4-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-3">{{ $rtnData->get('rmrk_4-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-3"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">4</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">Gas Valve 작동 및 외관 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-4') != null)
                        @if($rtnData->get('chck_rslt_4-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-4') == "불량")
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
                @if($rtnData->get('rmrk_4-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-4">{{ $rtnData->get('rmrk_4-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-4"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">5</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">Gas gauge 이상 유무<br>
                <img src="/image/figure-4-5.jpg" height="100px"><br>[Gas gauge 고장예방]<br> Ο
                SF6 Gas 주입시 게이지 충격 방지를 위 해 서서히 주입<br> → 레귤레이터 사용<br> Ο
                Gugae 부동작시 손가락으로 약하게 충격을 주어 게이지 움직임 관찰
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-5') != null)
                        @if($rtnData->get('chck_rslt_4-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-5') == "불량")
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
                @if($rtnData->get('rmrk_4-5') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-5">{{ $rtnData->get('rmrk_4-5') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-5"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">6</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">가스 주입구 스프링 Return 상태<br>
                <img src="/image/figure-4-6.jpg" height="100px">
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-6') != null)
                        @if($rtnData->get('chck_rslt_4-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-6') == "불량")
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
                @if($rtnData->get('rmrk_4-6') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-6">{{ $rtnData->get('rmrk_4-6') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-6"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">7</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각 부분 청소 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-7" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-7') != null)
                        @if($rtnData->get('chck_rslt_4-7') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-7') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-7') == "불량")
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
                @if($rtnData->get('rmrk_4-7') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-7">{{ $rtnData->get('rmrk_4-7') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-7"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">8</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각종 명판 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-8" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-8') != null)
                        @if($rtnData->get('chck_rslt_4-8') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-8') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-8') == "불량")
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
                @if($rtnData->get('rmrk_4-8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-8">{{ $rtnData->get('rmrk_4-8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-8"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">9</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">Gas Pipe 외관 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-9" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-9') != null)
                        @if($rtnData->get('chck_rslt_4-9') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-9') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-9') == "불량")
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
                @if($rtnData->get('rmrk_4-9') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-9">{{ $rtnData->get('rmrk_4-9') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-9"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">10</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각종 Packing 접착 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-10" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-10') != null)
                        @if($rtnData->get('chck_rslt_4-10') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-10') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-10') == "불량")
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
                @if($rtnData->get('rmrk_4-10') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-10">{{ $rtnData->get('rmrk_4-10') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-10"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">11</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각종 Bolt / Nut의 조임 상태<br> - 체크마크 확인 및 체크마크 표기</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-11" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-11') != null)
                        @if($rtnData->get('chck_rslt_4-11') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-11') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-11') == "불량")
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
                @if($rtnData->get('rmrk_4-11') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-11">{{ $rtnData->get('rmrk_4-11') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-11"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">12</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">각종 접지 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-12" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-12') != null)
                        @if($rtnData->get('chck_rslt_4-12') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-12') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-12') == "불량")
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
                @if ($rtnData->get('rmrk_4-12') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-12">{{ $rtnData->get('rmrk_4-12') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-12"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">13</td>
            <td class="record_25-8kv-tg-lboi" colspan="8">표시램프 점등 상태</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                <select name="chck_rslt_4-13" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_4-13') != null)
                        @if($rtnData->get('chck_rslt_4-13') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-13') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_4-13') == "불량")
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
                @if($rtnData->get('rmrk_4-13') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-13">{{ $rtnData->get('rmrk_4-13') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_4-13"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
</table>
