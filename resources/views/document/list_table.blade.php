@if($rtnData->total() == 0)
    <tr style="height: 487px;">
        <td class="nodata" colspan="6" >
            <div>리스트 내역 없음</div>
        </td>
    </tr>
@else
@foreach ($rtnData as  $key => $row)
<tr class="inquiry">
    <td>
        <input type="checkbox" name="docSnChk" onclick="selChk(this);" value="{{$row->document_sn}}"/>
        <input type="hidden" name="docTypeChk" value="{{$row->code_abbreviation}}"/>
    </td>
    <td>
        {{ $num - $key }}
    </td>
    <td>
        <a href="javascript:void(0)" onclick="selDoc(this ,{{$row->document_sn}},'{{ $row->code_abbreviation }}')">{{ $row -> document_type_nm }}</a>
    </td>
    <td>
        <a href="javascript:void(0)" onclick="selDoc(this ,{{$row->document_sn}},'{{ $row->code_abbreviation }}')">{{ $row -> title }}</a>
    </td>
    <td>
        <a href="javascript:void(0)" onclick="selDoc(this ,{{$row->document_sn}},'{{ $row->code_abbreviation }}')">{{ $row -> user_nm }}</a>
    </td>
    <td>
        <a href="javascript:void(0)" onclick="selDoc(this ,{{$row->document_sn}},'{{ $row->code_abbreviation }}')">{{ $row -> udt_dt -> format('Y-m-d') }}</a>
    </td>
</tr>
@endforeach
    <tr>
        <td colspan="5" style="border-bottom: none; text-align: right;">
            {{-- 페이지네이션 pagination.blade.php START--}}
            @include('layout.pagination')
            {{-- 페이지네이션 pagination.blade.php END--}}
        </td>
        
        <td style="padding-bottom: 0px; vertical-align: middle; text-align:center">
            <select class="custom-select" id="listCount" onchange="doclist()">
                <option value="10">10개</option>
                <option value="20">20개</option>
                <option value="30">30개</option>
                <option value="40">40개</option>
                <option value="50">50개</option>
            </select>
        </td>
    </tr>
    <div style="display: none">{{ $rtnData->links() }}</div>
@endif
