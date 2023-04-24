<table class="record_25-8kv-tg" id="{{ $docSn }}_printArea">
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15">12. 변류기 시험</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="4">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">판정기준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">측정값</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8" rowspan="6">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="6">포화특성</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용 A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">200V<br>이상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-1') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-1" value="{{ $rtnData->get('msrm_12-1-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-1"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-1') != null)
                        @if($rtnData->get('chck_rslt_12-1-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="6">
                @if($rtnData->get('rmrk_12-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_12-1">{{ $rtnData->get('rmrk_12-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_12-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-2" value="{{ $rtnData->get('msrm_12-1-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-2"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-2') != null)
                        @if($rtnData->get('chck_rslt_12-1-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-3') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-3" value="{{ $rtnData->get('msrm_12-1-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-3"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-3') != null)
                        @if($rtnData->get('chck_rslt_12-1-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-3') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">50V<br>이상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-4') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-4" value="{{ $rtnData->get('msrm_12-1-4') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-4"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-4') != null)
                        @if($rtnData->get('chck_rslt_12-1-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-4') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-5') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-5" value="{{ $rtnData->get('msrm_12-1-5') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-5"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-5') != null)
                        @if($rtnData->get('chck_rslt_12-1-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-5') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-1-6') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-6" value="{{ $rtnData->get('msrm_12-1-6') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_12-1-6"/>
                @endif
                [V]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-1-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-1-6') != null)
                        @if($rtnData->get('chck_rslt_12-1-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-1-6') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" rowspan="6">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="6">변 류 비</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용 A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">120/80/40<br>: 1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-1-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-1" value="{{ $rtnData->get('msrm_12-2-1-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-1-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-2" value="{{ $rtnData->get('msrm_12-2-1-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-1-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-3" value="{{ $rtnData->get('msrm_12-2-1-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-1-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-1') != null)
                        @if($rtnData->get('chck_rslt_12-2-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="6">
                @if($rtnData->get('rmrk_12-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_12-2">{{ $rtnData->get('rmrk_12-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_12-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-2-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-1" value="{{ $rtnData->get('msrm_12-2-2-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-2-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-2" value="{{ $rtnData->get('msrm_12-2-2-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-2-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-3" value="{{ $rtnData->get('msrm_12-2-2-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-2-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-2') != null)
                        @if($rtnData->get('chck_rslt_12-2-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-2') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Ry용C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-3-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-1" value="{{ $rtnData->get('msrm_12-2-3-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-3-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-2" value="{{ $rtnData->get('msrm_12-2-3-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-3-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-3" value="{{ $rtnData->get('msrm_12-2-3-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-3-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-3') != null)
                        @if($rtnData->get('chck_rslt_12-2-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-3') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2" rowspan="3">120/60<br>: 1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-4-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-1" value="{{ $rtnData->get('msrm_12-2-4-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-4-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-2" value="{{ $rtnData->get('msrm_12-2-4-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-4-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-3" value="{{ $rtnData->get('msrm_12-2-4-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-4-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-4" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-4') != null)
                        @if($rtnData->get('chck_rslt_12-2-4') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-4') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-4') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-5-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-1" value="{{ $rtnData->get('msrm_12-2-5-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-5-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-2" value="{{ $rtnData->get('msrm_12-2-5-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-5-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-3" value="{{ $rtnData->get('msrm_12-2-5-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-5-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-5" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-5') != null)
                        @if($rtnData->get('chck_rslt_12-2-5') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-5') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-5') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="2">Meter용C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_12-2-6-1') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-1" value="{{ $rtnData->get('msrm_12-2-6-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-1"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-6-2') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-2" value="{{ $rtnData->get('msrm_12-2-6-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-2"/>
                @endif
                /
                @if($rtnData->get('msrm_12-2-6-3') != null)
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-3" value="{{ $rtnData->get('msrm_12-2-6-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt15" name="msrm_12-2-6-3"/>
                @endif
                : 1
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_12-2-6" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_12-2-6') != null)
                        @if($rtnData->get('chck_rslt_12-2-6') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-6') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_12-2-6') == "불량")
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
            <td class="record_25-8kv-tg-lboi" colspan="15">
                ☞ 외장형 CT 및 변류기 시험기 한전 제공시 → C.T 포화시험기로 측정시측정기록지로 대신함
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-lboi" colspan="15">
                ☞ 내장형 CT(현대 |日형) 및 외장형 CT중 CT 내부도체 통과가 불가능한개소는 시험생략 가능
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
            <td class="record_25-8kv-tg-a128" colspan="15">13. Close / TripCoil 저항 측정</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">기 준(Ω)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">측정치(Ω)</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">Close Coil</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('crtr_13-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_13-1" value="{{ $rtnData->get('crtr_13-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_13-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_13-1') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_13-1" value="{{ $rtnData->get('msrm_13-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_13-1"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_13-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_13-1') != null)
                        @if($rtnData->get('chck_rslt_13-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_13-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_13-1') == "불량")
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
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="2">
                @if($rtnData->get('rmrk_13') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_13">{{ $rtnData->get('rmrk_13') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_13"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">Trip Coil</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('crtr_13-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="crtr_13-2" value="{{ $rtnData->get('crtr_13-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="crtr_13-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_13-2') != null)
                    <input class="record_25-8kv-tg-inpt100" name="msrm_13-2" value="{{ $rtnData->get('msrm_13-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt100" name="msrm_13-2"/>
                @endif
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_13-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_13-2') != null)
                        @if($rtnData->get('chck_rslt_13-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_13-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_13-2') == "불량")
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
            <td class="record_25-8kv-tg-a128" colspan="15">14. VI 접점 마모량 측정</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">No</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">구 분</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">기 준</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">측정치</td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">점검결과</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">비 고</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="record_25-8kv-tg-9wq8">1</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">A상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3" rowspan="3">3mm이내</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_14-1') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-1" value="{{ $rtnData->get('msrm_14-1') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-1"/>
                @endif
                [mm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_14-1" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_14-1') != null)
                        @if($rtnData->get('chck_rslt_14-1') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-1') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-1') == "불량")
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
                @if($rtnData->get('rmrk_14-1') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-1">{{ $rtnData->get('rmrk_14-1') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-1"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">2</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">B상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_14-2') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-2" value="{{ $rtnData->get('msrm_14-2') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-2"/>
                @endif
                [mm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_14-2" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_14-2') != null)
                        @if($rtnData->get('chck_rslt_14-2') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-2') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-2') == "불량")
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
                @if($rtnData->get('rmrk_14-2') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-2">{{ $rtnData->get('rmrk_14-2') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-2"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-9wq8">3</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">C상</td>
            <td class="record_25-8kv-tg-9wq8" colspan="3">
                @if($rtnData->get('msrm_14-3') != null)
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-3" value="{{ $rtnData->get('msrm_14-3') }}"/>
                @else
                    <input class="record_25-8kv-tg-inpt60" name="msrm_14-3"/>
                @endif
                [mm]
            </td>
            <td class="record_25-8kv-tg-9wq8" colspan="2">
                <select name="chck_rslt_14-3" onchange="selValue(this)">
                    @if ($rtnData->get('chck_rslt_14-3') != null)
                        @if($rtnData->get('chck_rslt_14-3') == "양호")
                            <option value="양호" selected>양호</option>
                            <option value="조치 후 양호">조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-3') == "조치 후 양호")
                            <option value="양호">양호</option>
                            <option value="조치 후 양호" selected>조치 후 양호</option>
                            <option value="불량">불량</option>
                            <option value="해당없음">해당없음</option>
                        @elseif ($rtnData->get('chck_rslt_14-3') == "불량")
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
                @if($rtnData->get('rmrk_14-3') != null)
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-3">{{ $rtnData->get('rmrk_14-3') }}</textarea>
                @else
                    <textarea class="txtarea" rows="1" onkeyup="resize(this)" name="rmrk_14-3"></textarea>
                @endif
            </td>
        </tr>
        <tr>
            <td class="record_25-8kv-tg-a128" colspan="15"></td>
        </tr>
    </tbody>
</table>
