<table class="cos-table-tg" id="{{$docSn}}_construc3">
    <input type="hidden" name="docTypeCd" value="construc">
    <tbody class="tbody-start">
        <tr>
            <td class="cos-table-tg-zw5y" colspan="10">시 공 사 진 03</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="cos-table-tg-a126" colspan="10">
                @if ($rtnData->get('chck_ymd') !== null)
                    <input type="date" class="cos-table-tg-a128" name="chck_ymd" onchange="dataChange(this);" value="{{$rtnData->get('chck_ymd')}}"/>
                @else
                    <input type="date" class="cos-table-tg-a128" name="chck_ymd" onchange="dataChange(this);" value="{!! date('Y-m-d') !!}"/>
                @endif
                @if ($rtnData->get('sub_sttn_nm') !== null)
                    <input class="cos-table-tg-a129" name="sub_sttn_nm" onchange="dataChange(this);" value="{{$rtnData->get('sub_sttn_nm')}}"/>
                @else
                    <input class="cos-table-tg-a129" name="sub_sttn_nm" onchange="dataChange(this);"/>
                @endif
                S/S
                @if ($rtnData->get('eqp_nm') !== null)
                    <input class="cos-table-tg-a130" name="eqp_nm" onchange="dataChange(this);" value="{{$rtnData->get('eqp_nm')}}"/>
                @else
                    <input class="cos-table-tg-a130" name="eqp_nm" onchange="dataChange(this);"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-1') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-1')) }}" id="photo_file_nm_3-1"/>
                @else
                    <img id="photo_file_nm_3-1" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-1" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-2') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-2')) }}" id="photo_file_nm_3-2"/>
                @else
                    <img id="photo_file_nm_3-2" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-2" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr class="cos-table-tg-uzvj">
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-1') !== null)
                    <input id="sub_title_3-1" name="sub_title_3-1" value="{{$rtnData->get('sub_title_3-1')}}"/>
                @else
                    <input id="sub_title_3-1" name="sub_title_3-1"/>
                @endif
            </td>
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-2') !== null)
                    <input id="sub_title_3-2" name="sub_title_3-2" value="{{$rtnData->get('sub_title_3-2')}}"/>
                @else
                    <input id="sub_title_3-2" name="sub_title_3-2"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-3') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-3')) }}" id="photo_file_nm_3-3"/>
                @else
                    <img id="photo_file_nm_3-3" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-3" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-4') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-4')) }}" id="photo_file_nm_3-4"/>
                @else
                    <img id="photo_file_nm_3-4" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-4" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr class="cos-table-tg-uzvj">
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-3') !== null)
                    <input id="sub_title_3-3" name="sub_title_3-3" value="{{$rtnData->get('sub_title_3-3')}}"/>
                @else
                    <input id="sub_title_3-3" name="sub_title_3-3"/>
                @endif
            </td>
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-4') !== null)
                    <input id="sub_title_3-4" name="sub_title_3-4" value="{{$rtnData->get('sub_title_3-4')}}"/>
                @else
                    <input id="sub_title_3-4" name="sub_title_3-4"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-5') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-5')) }}" id="photo_file_nm_3-5"/>
                @else
                    <img id="photo_file_nm_3-5" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-5" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
            <td class="cos-table-tg-lboi" colspan="5">
                @if($rtnData->get('photo_file_nm_3-6') !== null)
                    <img src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_3-6')) }}" id="photo_file_nm_3-6"/>
                @else
                    <img id="photo_file_nm_3-6" style="display: none;"/>
                @endif
                <label class="input-file-btn" style="display: none">
                    <input type="file" name="photo_file_nm_3-6" onchange="insertImage(this);" style="display: none"/>파일 업로드
                </label>
                <label class="del-file-btn" style="display: none">
                    <input onclick="delImage(this);" style="display: none"/>파일삭제
                </label>
            </td>
        </tr>
    </tbody>
    <tbody class="tbody-end">
        <tr class="cos-table-tg-uzvj">
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-5') !== null)
                    <input id="sub_title_3-5" name="sub_title_3-5" value="{{$rtnData->get('sub_title_3-5')}}"/>
                @else
                    <input id="sub_title_3-5" name="sub_title_3-5"/>
                @endif
            </td>
            <td  colspan="2">사진설명</td>
            <td  colspan="3">
                @if($rtnData->get('sub_title_3-6') !== null)
                    <input id="sub_title_3-6" name="sub_title_3-6" value="{{$rtnData->get('sub_title_3-6')}}"/>
                @else
                    <input id="sub_title_3-6" name="sub_title_3-6"/>
                @endif
            </td>
        </tr>
    </tbody>
</table>
