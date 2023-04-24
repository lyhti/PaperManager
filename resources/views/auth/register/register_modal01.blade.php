<div class="modal-body">
    <div class="tbl-wrap">
        <table class="table type1">
            <colgroup>
                <col width="6%;">
                <col width="20%;">
                <col width="16%;">
                <col width="10%;">
                <col width="18%;">
                <col width="30%;">
            </colgroup>
            <thead class="thead-light">
                <tr>
                    <th>선택</th>
                    <th>업체명</th>
                    <th>사업자등록번호</th>
                    <th>대표이름</th>
                    <th>전화번호</th>
                    <th>주소</th>
                </tr>
            </thead>
            <tbody>
            @if( count($rtnData) == 0 )
                <tr>
                    <td colspan="6"><span>가입되지 않은 사업장입니다.</span></td>
                </tr>
            @else
                @foreach($rtnData as $row)
                    <tr>
                        <td scope="row">
                            <label class="radio radio-lg">
                                <input type="radio" name="radioChk" value="{!! $row->entrps_sn !!}">
{{--                                <span class="text-hide">선택</span>--}}
                            </label>
                        </td>
                        <td>{!! $row->entrps_nm !!}</td>
                        <td>{!! $row->brno_format !!}</td>
                        <td>{!! $row->rprsv_nm !!}</td>
                        <td>{!! $row->tel_number !!}</td>
                        <td>{!! $row->address !!} {!! $row->detail_address !!}</td>
                    </tr>
                    <input type="hidden" id="selCompanyNm" value="{!! $row->entrps_nm !!}">
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
