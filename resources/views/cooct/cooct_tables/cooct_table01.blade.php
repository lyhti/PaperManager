@for ($i=1; $i<=5; $i++)
<input type="hidden" id="pdfstart"/>
<table class="cooct-table-tg" id="{{ $docSn }}_cooct">
    <input type="hidden" name="docTypeCd" value="cooct">
    <tbody>
        <tr>
            <td class="cooct-table-tg-bono" colspan="3">개 폐 동 작 특 성 시 험</td>
        </tr>
        <tr>
            <td class="cooct-table-tg-lvth">측정일자</td>
            <td class="cooct-table-tg-lvth1">
                @if($rtnData->get('chck_ymd') !== null)
                    <input type="date" style="width: 100%; height:100%;" name="chck_ymd" onchange="dataChange(this);" value="{{ date($rtnData->get('chck_ymd')) }}"/>
                @else
                    <input type="date" style="width: 100%; height:100%;" name="chck_ymd" onchange="dataChange(this);" value="{!! date('Y-m-d') !!}"/>
                @endif
            </td>
            <td class="cooct-table-subtitle" rowspan="2">
                {{ $rtnData1->get('sub_title_'.$i) }}
            </td>
        </tr>
        <tr>
            <td class="cooct-table-tg-lvth">설 비 명</td>
            <td class="cooct-table-tg-lvth1">
                @if($rtnData->get('sub_sttn_nm') !== null)
                    <input style="width: 100px; height:100%;" name="sub_sttn_nm" onchange="dataChange(this);" value="{{ $rtnData->get('sub_sttn_nm') }}"/>
                @else
                    <input style="width: 100px; height:100%;" name="sub_sttn_nm" onchange="dataChange(this);"/>
                @endif
                S/S
                @if($rtnData->get('eqp_nm') !== null)
                    <input style="width: 100px; height:100%;" name="eqp_nm" onchange="dataChange(this);" value="{{ $rtnData->get('eqp_nm') }}"/>
                @else
                    <input style="width: 100px; height:100%;" name="eqp_nm" onchange="dataChange(this);"/>
                @endif
            </td>
        </tr>
        <tr>
            <td class="cooct-table-tg-0lay" colspan="3">
                @if($rtnData->get('photo_file_nm_'.$i) !== null)
                    <img class="cooct-img" src="{{ Storage::url('public/uploads/'.$rtnData->get('photo_file_nm_'.$i)) }}" id="photo_file_nm_{{$i}}"/>
                @else
                    <img class="cooct-img" id="photo_file_nm_{{$i}}" style="display: none;"/>
                @endif
                <div>
                    <label class="input-file-btn" style="display: none">
                        <input type="file" id="photo_file_nm_{{$i}}" name="photo_file_nm_{{$i}}" onchange="insertImage(this);" style="display: none"/>파일 업로드
                    </label>
                    <label class="del-file-btn" style="display: none">
                        <input onclick="delImage(this);" style="display: none"/>파일삭제
                    </label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endfor