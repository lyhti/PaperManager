<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">15. 조작 Rod 행정거리 측정(제작사별 취급설명서 참조)</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">기 준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">Stroke</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">16± 1 mm</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('strk_15-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-1" value="{{ $rtnData->get('strk_15-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-1" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_15-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_15-1') != null)
                        @if($rtnData->get('chck_rslt_15-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_15-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-1">{{ $rtnData->get('rmrk_15-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('strk_15-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-2" value="{{ $rtnData->get('strk_15-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-2" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_15-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_15-2') != null)
                        @if($rtnData->get('chck_rslt_15-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_15-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-2">{{ $rtnData->get('rmrk_15-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if ($rtnData->get('strk_15-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-3" value="{{ $rtnData->get('strk_15-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="strk_15-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_15-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_15-3') != null)
                        @if($rtnData->get('chck_rslt_15-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_15-3') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('rmrk_15-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-3">{{ $rtnData->get('rmrk_15-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_15-3"></textarea>
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
            <td class="record_25-8kv-tg-a128" colspan="15">16. 부하전류 측정, LPSLamp 점검</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="2">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="2">구분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">점 검전</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">점 검후</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="2">비 고</td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">A</td>
            <td class="record_25-8kv-tg-9wq8">B</td>
            <td class="record_25-8kv-tg-9wq8">C</td>
            <td class="record_25-8kv-tg-9wq8">N</td>
            <td class="record_25-8kv-tg-9wq8">A</td>
            <td class="record_25-8kv-tg-9wq8">B</td>
            <td class="record_25-8kv-tg-9wq8">C</td>
            <td class="record_25-8kv-tg-9wq8">N</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">부하전류</td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-1" value="{{ $rtnData->get('value_16-1-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-1" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-2" value="{{ $rtnData->get('value_16-1-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-2" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-3" value="{{ $rtnData->get('value_16-1-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-4" value="{{ $rtnData->get('value_16-1-4') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-4" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-5') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-5" value="{{ $rtnData->get('value_16-1-5') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-5" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-6') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-6" value="{{ $rtnData->get('value_16-1-6') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-6" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-7') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-7" value="{{ $rtnData->get('value_16-1-7') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-7" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-1-8') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-8" value="{{ $rtnData->get('value_16-1-8') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-1-8" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_16-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_16-1') != null)
                        @if($rtnData->get('chck_rslt_16-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_16-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_16-1') == "불량")
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
                @if($rtnData->get('rmrk_16-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_16-1">{{ $rtnData->get('rmrk_16-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_16-1"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">LPS 점등상태</td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-1" value="{{ $rtnData->get('value_16-2-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-1" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-2" value="{{ $rtnData->get('value_16-2-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-2" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-3" value="{{ $rtnData->get('value_16-2-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi"></td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-4" value="{{ $rtnData->get('value_16-2-4') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-4" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-5') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-5" value="{{ $rtnData->get('value_16-2-5') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-5" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi">
                @if ($rtnData->get('value_16-2-6') != null)
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-6" value="{{ $rtnData->get('value_16-2-6') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="value_16-2-6" />
                @endif
            </td>
            <td class="record_25-8kv-tg-lboi"></td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_16-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_16-2') != null)
                        @if($rtnData->get('chck_rslt_16-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_16-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_16-2') == "불량")
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
                @if($rtnData->get('rmrk_16-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_16-2">{{ $rtnData->get('rmrk_16-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_16-2"></textarea>
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
            <td class="record_25-8kv-tg-a128" colspan="15">17. 최종 확인</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검항목</td>
            <td class="record_25-8kv-tg-9wq8" colspan="5">점 검내 용</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">기 준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">단자결선</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">CT 결선 및 조임상태 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-1" value="{{ $rtnData->get('chck_rslt_17-1') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-1" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-1">{{ $rtnData->get('rmrk_17-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-1"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">가스밸브</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">Gas Valve 개, 폐 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">개방</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-2" value="{{ $rtnData->get('chck_rslt_17-2') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-2" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-2">{{ $rtnData->get('rmrk_17-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-2"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">전원상태</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">AC, DC 전원 ON상태 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">ON</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-3') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-3" value="{{ $rtnData->get('chck_rslt_17-3') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-3" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-3">{{ $rtnData->get('rmrk_17-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-3"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">4</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">경보유무</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">경보발생 유무 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">경보 미발생</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-4') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-4" value="{{ $rtnData->get('chck_rslt_17-4') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-4" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-4') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-4">{{ $rtnData->get('rmrk_17-4') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-4"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">5</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">스위치류</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">스위치류 정위치 확인<br>(43LRS)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">SCADA</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-5') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-5" value="{{ $rtnData->get('chck_rslt_17-5') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-5" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-5') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-5">{{ $rtnData->get('rmrk_17-5') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-5"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">6</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">상태확인</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">CB, DS 개방상태 화인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">Open</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-6') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-6" value="{{ $rtnData->get('chck_rslt_17-6') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-6" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-6') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-6">{{ $rtnData->get('rmrk_17-6') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-6"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">7</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">현장정리</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">사용 공기구 방치 여부</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-7') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-7" value="{{ $rtnData->get('chck_rslt_17-7') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-7" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-7') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-7">{{ $rtnData->get('rmrk_17-7') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-7"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">8</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">부하전류</td>
            <td class="record_25-8kv-tg-lboi" colspan="5">가압후 부하전류 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">3상 전류값 확인</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if ($rtnData->get('chck_rslt_17-8') != null)
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-8" value="{{ $rtnData->get('chck_rslt_17-8') }}" />
                @else
                    <input class="record_25-8kv-tg-inpt100" name="chck_rslt_17-8" />
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                @if($rtnData->get('rmrk_17-8') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-8">{{ $rtnData->get('rmrk_17-8') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_17-8"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">18. 담당자 의견</td>
        </tr>
    </tbody>
    <tbody class="tbody-end">
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="15">
                @if($rtnData->get('chck_opin_18') != null)
                    <textarea class="txtarea txtarea_left" rows="1" onkeydown="resize(this)" onkeyup="resize(this)" name="chck_opin_18">{{ $rtnData->get('chck_opin_18') }}</textarea>
                @else
                    <textarea class="txtarea txtarea_left" rows="1" onkeydown="resize(this)" onkeyup="resize(this)" name="chck_opin_18"></textarea>
                @endif
            </td>
        </tr>
    </tbody>
</table>
