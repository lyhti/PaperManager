<form id="doc-data" method="POST" enctype="multipart/form-data" onsubmit="return false;">
    {!! csrf_field() !!}
    @for($i = 1; $i <= $rtn->get('pageCnt'); $i++)
        <div class="doc-content-height">
            <div class="align-center pdf-chck-height">
                <span class="doc-main-header main-header-font border-none font-30">개 폐 동 작 특 성 시 험</span>
            </div>
            <div class="hi-mm-3 pdf-chck-height"></div>
            <div class="pdf-chck-height hi-mm-277" style="height: 277mm;">
                <table class="table-bd wd-per-100 hi-per-100">
                    <tr>
                        <td class="align-center hi-mm-11">
                            <span>측정일자</span>
                        </td>
                        <td class="align-left">
                            <input type="date" class="border-line img-full" name="chck_ymd" value="{{ $rtn->get('chck_ymd') == null ? date('Y-m-d') : $rtn->get('chck_ymd') }}"/>
                        </td>
                        <td class="align-center" rowspan="2">
                            <span>{{ $rtn->get("sub_title_$i") }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-center hi-mm-11">
                            <span>설&nbsp;&nbsp;비&nbsp;&nbsp;명</span>
                        </td>
                        <td class="align-left">
                            <input type="text" class="align-center border-line wd-mm-25" name="cb_msrm_1-1-1"/>S/S
                            <input type="text" class="align-center border-line wd-mm-25" name="cb_msrm_1-1-2"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-center" colspan="3"></td>
                    </tr>
                </table>
            </div>
        </div>
    @endfor
</form>
