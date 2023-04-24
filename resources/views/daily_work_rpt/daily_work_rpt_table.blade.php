<form id="doc-data" method="POST" enctype="multipart/form-data" onsubmit="return false;">
    {!! csrf_field() !!}
    <div class="pdf-chck-height">
        <div class="align-center table-bd table-bd-btm-none hi-mm-20">
            <span class="line-height25 font-20 font-bold">작&nbsp;&nbsp;&nbsp;&nbsp;업&nbsp;&nbsp;&nbsp;&nbsp;일&nbsp;&nbsp;&nbsp;&nbsp;보</span>
        </div>
    </div>
    <div class="pdf-chck-height">
        <table class="table-bd table-bd-top-12 table-bd-btm-none wd-per-100">
            <tr>
                <td class="align-center wd-mm-20 font-15 font-bold" rowspan="3">
                    <span>공사명</span>
                </td>
                <td class="align-center wd-mm-100" rowspan="3">
                    <input type="text" class="align-right border-line wd-mm-25" name="sub_sttn_nm" value="{{ $rtn->get('sub_sttn_nm') == null ? '' : $rtn->get('sub_sttn_nm') }}"/>
                    <span>S/S</span>
                    <input type="text" class="align-left border-line wd-mm-51" name="eqp_nm" value="{{ $rtn->get('eqp_nm') == null ? '' : $rtn->get('eqp_nm') }}"/>
                </td>
                <td class="align-center wd-mm-11 font-15 font-bold" rowspan="4">
                    <div><span>공</span></div>
                    <div><span>정</span></div>
                    <div><span>율</span></div>
                </td>
                <td class="align-center wd-mm-15 hi-mm-7 font-15 font-bold">
                    <span>계획</span>
                </td>
                <td class="align-center wd-mm-21 hi-mm-7">
                    <input type="text" class="align-right border-line wd-mm-14" name="prcrate_plan" value="{{ $rtn->get('prcrate_plan') == null ? '' : $rtn->get('prcrate_plan') }}"/>%
                </td>
                <td class="align-center wd-mm-15 font-15">
                    <span>날씨</span>
                </td>
                <td class="align-center font-15">
                    <span>온도</span>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-15 hi-mm-7 font-15 font-bold" rowspan="2">
                    <span>실적</span>
                </td>
                <td class="align-center wd-mm-21 hi-mm-7" rowspan="2">
                    <input type="text" class="align-right border-line wd-mm-14" name="prcrate_record" value="{{ $rtn->get('prcrate_record') == null ? '' : $rtn->get('prcrate_record') }}"/>%
                </td>
                <td class="align-center wd-mm-15 font-15" rowspan="3">
                    <input type="text" class="align-center border-line wd-mm-13" name="weather" value="{{ $rtn->get('weather') == null ? '' : $rtn->get('weather') }}"/>
                    {{--                    <input type="hidden" class="align-center border-line wd-mm-18 display-none" name="weather" value="{{ $rtn->get('weather') == null ? '' : $rtn->get('weather') }}"/>--}}
                    {{--                    <select class="border-line align-center" name="selectWeather" onchange="choWeather();">--}}
                    {{--                        <option value="맑음">맑음</option>--}}
                    {{--                        <option value="흐림">흐림</option>--}}
                    {{--                        <option value="비">비</option>--}}
                    {{--                        <option value="직접입력">직접입력</option>--}}
                    {{--                    </select>--}}
                </td>
                <td class="align-center font-15" rowspan="2">
                    <span>최저</span>
                    <input type="text" class="align-center border-line wd-mm-9 font-15" name="low_temp" value="{{ $rtn->get('low_temp') == null ? '' : $rtn->get('low_temp') }}"/>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td class="align-center wd-mm-20 hi-mm-16 font-15 font-bold" rowspan="2">
                    <span>일자</span>
                </td>
                <td class="align-center wd-mm-100" rowspan="2">
                    <input type="date" class="align-center border-line" name="chck_ymd" value="{{ $rtn->get('chck_ymd') == null ? date('Y-m-d') : $rtn->get('chck_ymd') }}"/>
                </td>
                <td class="align-center wd-mm-15 hi-mm-7 font-15 font-bold">
                    <span>대비</span>
                </td>
                <td class="align-center wd-mm-21 hi-mm-7 font-bold">
                    <input type="text" class="align-right border-line wd-mm-14" name="prcrate_provi" value="{{ $rtn->get('prcrate_provi') == null ? '' : $rtn->get('prcrate_provi') }}"/>%
                </td>
                <td class="align-center font-15">
                    <span>최고</span>
                    <input type="text" class="align-center border-line wd-mm-9 font-15" name="high_temp" value="{{ $rtn->get('high_temp') == null ? '' : $rtn->get('high_temp') }}"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="pdf-chck-height">
        <div class="align-center table-bd table-bd-btm-none daily_work_rpt-background hi-mm-9">
            <span class="font-15 font-bold">공&nbsp;&nbsp;&nbsp;정&nbsp;&nbsp;&nbsp;률</span>
        </div>
    </div>
    <div class="pdf-chck-height">
        <table class="table-bd table-bd-btm-none wd-per-100">
            <tr>
                <td class="align-center wd-mm-15">
                    <span>위치</span>
                </td>
                <td class="align-center wd-mm-60">
                    <span>구분</span>
                </td>
                <td class="align-center wd-mm-25">
                    <span>설계</span>
                </td>
                <td class="align-center wd-mm-25">
                    <span>전일</span>
                </td>
                <td class="align-center wd-mm-25">
                    <span>금일</span>
                </td>
                <td class="align-center wd-mm-25">
                    <span>누계</span>
                </td>
                <td class="align-center">
                    <span>비고</span>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-15 font-bold font-12" rowspan="6">
                    <div class="line-height12"><span>단</span></div>
                    <div class="line-height12"><span>위</span></div>
                    <div class="line-height12"><span>공</span></div>
                    <div class="line-height12"><span>종</span></div>
                    <div class="line-height12"><span>별</span></div>
                    <br/>
                    <div class="line-height12"><span>공</span></div>
                    <div class="line-height12"><span>정</span></div>
                    <div class="line-height12"><span>률</span></div>
                </td>
                <td class="align-center wd-mm-60">
                    <input type="text" class="align-center border-line wd-mm-55" name="prcrate_div_1" value="{{ $rtn->get('prcrate_div_1') == null ? '' : $rtn->get('prcrate_div_1') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_1" value="{{ $rtn->get('prcrate_des_1') == null ? '' : $rtn->get('prcrate_des_1') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_1" value="{{ $rtn->get('prcrate_ystd_1') == null ? '' : $rtn->get('prcrate_ystd_1') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_1" value="{{ $rtn->get('prcrate_tod_1') == null ? '' : $rtn->get('prcrate_tod_1') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_1" value="{{ $rtn->get('prcrate_sum_1') == null ? '' : $rtn->get('prcrate_sum_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_1" value="{{ $rtn->get('prcrate_rmrk_1') == null ? '' : $rtn->get('prcrate_rmrk_1') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-60">
                    <input type="text" class="align-center border-line wd-mm-55" name="prcrate_div_2" value="{{ $rtn->get('prcrate_div_2') == null ? '' : $rtn->get('prcrate_div_2') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_2" value="{{ $rtn->get('prcrate_des_2') == null ? '' : $rtn->get('prcrate_des_2') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_2" value="{{ $rtn->get('prcrate_ystd_2') == null ? '' : $rtn->get('prcrate_ystd_2') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_2" value="{{ $rtn->get('prcrate_tod_2') == null ? '' : $rtn->get('prcrate_tod_2') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_2" value="{{ $rtn->get('prcrate_sum_2') == null ? '' : $rtn->get('prcrate_sum_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_2" value="{{ $rtn->get('prcrate_rmrk_2') == null ? '' : $rtn->get('prcrate_rmrk_2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-60">
                    <input type="text" class="align-center border-line wd-mm-55" name="prcrate_div_3" value="{{ $rtn->get('prcrate_div_3') == null ? '' : $rtn->get('prcrate_div_3') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_3" value="{{ $rtn->get('prcrate_des_3') == null ? '' : $rtn->get('prcrate_des_3') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_3" value="{{ $rtn->get('prcrate_ystd_3') == null ? '' : $rtn->get('prcrate_ystd_3') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_3" value="{{ $rtn->get('prcrate_tod_3') == null ? '' : $rtn->get('prcrate_tod_3') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_3" value="{{ $rtn->get('prcrate_sum_3') == null ? '' : $rtn->get('prcrate_sum_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_3" value="{{ $rtn->get('prcrate_rmrk_3') == null ? '' : $rtn->get('prcrate_rmrk_3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-60">
                    <input type="text" class="align-center border-line wd-mm-55" name="prcrate_div_4" value="{{ $rtn->get('prcrate_div_4') == null ? '' : $rtn->get('prcrate_div_4') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_4" value="{{ $rtn->get('prcrate_des_4') == null ? '' : $rtn->get('prcrate_des_4') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_4" value="{{ $rtn->get('prcrate_ystd_4') == null ? '' : $rtn->get('prcrate_ystd_4') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_4" value="{{ $rtn->get('prcrate_tod_4') == null ? '' : $rtn->get('prcrate_tod_4') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_4" value="{{ $rtn->get('prcrate_sum_4') == null ? '' : $rtn->get('prcrate_sum_4') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_4" value="{{ $rtn->get('prcrate_rmrk_4') == null ? '' : $rtn->get('prcrate_rmrk_4') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-60">
                    <input type="text" class="align-center border-line wd-mm-55" name="prcrate_div_5" value="{{ $rtn->get('prcrate_div_5') == null ? '' : $rtn->get('prcrate_div_5') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_5" value="{{ $rtn->get('prcrate_des_5') == null ? '' : $rtn->get('prcrate_des_5') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_5" value="{{ $rtn->get('prcrate_ystd_5') == null ? '' : $rtn->get('prcrate_ystd_5') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_5" value="{{ $rtn->get('prcrate_tod_5') == null ? '' : $rtn->get('prcrate_tod_5') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_5" value="{{ $rtn->get('prcrate_sum_5') == null ? '' : $rtn->get('prcrate_sum_5') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_5" value="{{ $rtn->get('prcrate_rmrk_5') == null ? '' : $rtn->get('prcrate_rmrk_5') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-60">
                    <span class="font-bold font-12">전&nbsp;&nbsp;체</span>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_des_6" value="{{ $rtn->get('prcrate_des_6') == null ? '' : $rtn->get('prcrate_des_6') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_ystd_6" value="{{ $rtn->get('prcrate_ystd_6') == null ? '' : $rtn->get('prcrate_ystd_6') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_tod_6" value="{{ $rtn->get('prcrate_tod_6') == null ? '' : $rtn->get('prcrate_tod_6') }}"/>
                </td>
                <td class="align-center wd-mm-25">
                    <input type="text" class="align-center border-line wd-mm-21" name="prcrate_sum_6" value="{{ $rtn->get('prcrate_sum_6') == null ? '' : $rtn->get('prcrate_sum_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-30" name="prcrate_rmrk_6" value="{{ $rtn->get('prcrate_rmrk_6') == null ? '' : $rtn->get('prcrate_rmrk_6') }}"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="pdf-chck-height">
        <table class="table-bd table-bd-btm-none wd-per-100">
            <tr>
                <td class="align-center daily_work_rpt-background" colspan="2">
                    <span class="font-15 font-bold">작&nbsp;&nbsp;&nbsp;업&nbsp;&nbsp;&nbsp;내&nbsp;&nbsp;&nbsp;용</span>
                </td>
            </tr>
            <tr class="table-bd-btm">
                <td class="align-center daily_work_rpt-background">
                    <span class="font-12 font-bold">금&nbsp;&nbsp;일</span>
                </td>
                <td class="align-center daily_work_rpt-background">
                    <span class="font-12 font-bold">명&nbsp;&nbsp;일</span>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_1" value="{{ $rtn->get('oper_tod_1') == null ? '' : $rtn->get('oper_tod_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_1" value="{{ $rtn->get('oper_tom_1') == null ? '' : $rtn->get('oper_tom_1') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_2" value="{{ $rtn->get('oper_tod_2') == null ? '' : $rtn->get('oper_tod_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_2" value="{{ $rtn->get('oper_tom_2') == null ? '' : $rtn->get('oper_tom_2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_3" value="{{ $rtn->get('oper_tod_3') == null ? '' : $rtn->get('oper_tod_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_3" value="{{ $rtn->get('oper_tom_3') == null ? '' : $rtn->get('oper_tom_3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_4" value="{{ $rtn->get('oper_tod_4') == null ? '' : $rtn->get('oper_tod_4') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_4" value="{{ $rtn->get('oper_tom_4') == null ? '' : $rtn->get('oper_tom_4') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_5" value="{{ $rtn->get('oper_tod_5') == null ? '' : $rtn->get('oper_tod_5') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_5" value="{{ $rtn->get('oper_tom_5') == null ? '' : $rtn->get('oper_tom_5') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_6" value="{{ $rtn->get('oper_tod_6') == null ? '' : $rtn->get('oper_tod_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_6" value="{{ $rtn->get('oper_tom_6') == null ? '' : $rtn->get('oper_tom_6') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tod_7" value="{{ $rtn->get('oper_tod_7') == null ? '' : $rtn->get('oper_tod_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-100" name="oper_tom_7" value="{{ $rtn->get('oper_tom_7') == null ? '' : $rtn->get('oper_tom_7') }}"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="pdf-chck-height">
        <table class="table-bd wd-per-100">
            <tr>
                <td class="align-center daily_work_rpt-background wd-mm-70" colspan="4">
                    <span class="font-15 font-bold">인원투입현황</span>
                </td>
                <td class="align-center daily_work_rpt-background wd-mm-70" colspan="4">
                    <span class="font-15 font-bold">장비투입현황</span>
                </td>
                <td class="align-center daily_work_rpt-background wd-mm-70 table-bd">
                    <span class="font-15 font-bold">투입장비명</span>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <span>구분</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>전일</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>금일</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>누계</span>
                </td>
                <td class="align-center">
                    <span>장비명</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>전일</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>금일</span>
                </td>
                <td class="align-center wd-mm-15">
                    <span>누계</span>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_1" value="{{ $rtn->get('equ_alloca_nm_1') == null ? '' : $rtn->get('equ_alloca_nm_1') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_1" value="{{ $rtn->get('man_hours_div_1') == null ? '' : $rtn->get('man_hours_div_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_1" value="{{ $rtn->get('man_hours_ystd_1') == null ? '' : $rtn->get('man_hours_ystd_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_1" value="{{ $rtn->get('man_hours_tod_1') == null ? '' : $rtn->get('man_hours_tod_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_1" value="{{ $rtn->get('man_hours_tot_1') == null ? '' : $rtn->get('man_hours_tot_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_1" value="{{ $rtn->get('equ_nm_1') == null ? '' : $rtn->get('equ_nm_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_1" value="{{ $rtn->get('equ_ystd_1') == null ? '' : $rtn->get('equ_ystd_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_1" value="{{ $rtn->get('equ_tod_1') == null ? '' : $rtn->get('equ_tod_1') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_1" value="{{ $rtn->get('equ_tot_1') == null ? '' : $rtn->get('equ_tot_1') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_2" value="{{ $rtn->get('equ_alloca_nm_2') == null ? '' : $rtn->get('equ_alloca_nm_2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_2" value="{{ $rtn->get('man_hours_div_2') == null ? '' : $rtn->get('man_hours_div_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_2" value="{{ $rtn->get('man_hours_ystd_2') == null ? '' : $rtn->get('man_hours_ystd_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_2" value="{{ $rtn->get('man_hours_tod_2') == null ? '' : $rtn->get('man_hours_tod_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_2" value="{{ $rtn->get('man_hours_tot_2') == null ? '' : $rtn->get('man_hours_tot_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_2" value="{{ $rtn->get('equ_nm_2') == null ? '' : $rtn->get('equ_nm_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_2" value="{{ $rtn->get('equ_ystd_2') == null ? '' : $rtn->get('equ_ystd_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_2" value="{{ $rtn->get('equ_tod_2') == null ? '' : $rtn->get('equ_tod_2') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_2" value="{{ $rtn->get('equ_tot_2') == null ? '' : $rtn->get('equ_tot_2') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_3" value="{{ $rtn->get('equ_alloca_nm_3') == null ? '' : $rtn->get('equ_alloca_nm_3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_3" value="{{ $rtn->get('man_hours_div_3') == null ? '' : $rtn->get('man_hours_div_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_3" value="{{ $rtn->get('man_hours_ystd_3') == null ? '' : $rtn->get('man_hours_ystd_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_3" value="{{ $rtn->get('man_hours_tod_3') == null ? '' : $rtn->get('man_hours_tod_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_3" value="{{ $rtn->get('man_hours_tot_3') == null ? '' : $rtn->get('man_hours_tot_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_3" value="{{ $rtn->get('equ_nm_3') == null ? '' : $rtn->get('equ_nm_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_3" value="{{ $rtn->get('equ_ystd_3') == null ? '' : $rtn->get('equ_ystd_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_3" value="{{ $rtn->get('equ_tod_3') == null ? '' : $rtn->get('equ_tod_3') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_3" value="{{ $rtn->get('equ_tot_3') == null ? '' : $rtn->get('equ_tot_3') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_4" value="{{ $rtn->get('equ_alloca_nm_4') == null ? '' : $rtn->get('equ_alloca_nm_4') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_4" value="{{ $rtn->get('man_hours_div_4') == null ? '' : $rtn->get('man_hours_div_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_4" value="{{ $rtn->get('man_hours_ystd_4') == null ? '' : $rtn->get('man_hours_ystd_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_4" value="{{ $rtn->get('man_hours_tod_4') == null ? '' : $rtn->get('man_hours_tod_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_4" value="{{ $rtn->get('man_hours_tot_4') == null ? '' : $rtn->get('man_hours_tot_4') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_4" value="{{ $rtn->get('equ_nm_4') == null ? '' : $rtn->get('equ_nm_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_4" value="{{ $rtn->get('equ_ystd_4') == null ? '' : $rtn->get('equ_ystd_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_4" value="{{ $rtn->get('equ_tod_4') == null ? '' : $rtn->get('equ_tod_4') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_4" value="{{ $rtn->get('equ_tot_4') == null ? '' : $rtn->get('equ_tot_4') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_5" value="{{ $rtn->get('equ_alloca_nm_5') == null ? '' : $rtn->get('equ_alloca_nm_5') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_5" value="{{ $rtn->get('man_hours_div_5') == null ? '' : $rtn->get('man_hours_div_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_5" value="{{ $rtn->get('man_hours_ystd_5') == null ? '' : $rtn->get('man_hours_ystd_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_5" value="{{ $rtn->get('man_hours_tod_5') == null ? '' : $rtn->get('man_hours_tod_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_5" value="{{ $rtn->get('man_hours_tot_5') == null ? '' : $rtn->get('man_hours_tot_5') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_5" value="{{ $rtn->get('equ_nm_5') == null ? '' : $rtn->get('equ_nm_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_5" value="{{ $rtn->get('equ_ystd_5') == null ? '' : $rtn->get('equ_ystd_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_5" value="{{ $rtn->get('equ_tod_5') == null ? '' : $rtn->get('equ_tod_5') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_5" value="{{ $rtn->get('equ_tot_5') == null ? '' : $rtn->get('equ_tot_5') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_6" value="{{ $rtn->get('equ_alloca_nm_6') == null ? '' : $rtn->get('equ_alloca_nm_6') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_6" value="{{ $rtn->get('man_hours_div_6') == null ? '' : $rtn->get('man_hours_div_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_6" value="{{ $rtn->get('man_hours_ystd_6') == null ? '' : $rtn->get('man_hours_ystd_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_6" value="{{ $rtn->get('man_hours_tod_6') == null ? '' : $rtn->get('man_hours_tod_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_6" value="{{ $rtn->get('man_hours_tot_6') == null ? '' : $rtn->get('man_hours_tot_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_6" value="{{ $rtn->get('equ_nm_6') == null ? '' : $rtn->get('equ_nm_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_6" value="{{ $rtn->get('equ_ystd_6') == null ? '' : $rtn->get('equ_ystd_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_6" value="{{ $rtn->get('equ_tod_6') == null ? '' : $rtn->get('equ_tod_6') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_6" value="{{ $rtn->get('equ_tot_6') == null ? '' : $rtn->get('equ_tot_6') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_7" value="{{ $rtn->get('equ_alloca_nm_7') == null ? '' : $rtn->get('equ_alloca_nm_7') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <input type="text" class="align-left border-line wd-mm-20" name="man_hours_div_7" value="{{ $rtn->get('man_hours_div_7') == null ? '' : $rtn->get('man_hours_div_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_7" value="{{ $rtn->get('man_hours_ystd_7') == null ? '' : $rtn->get('man_hours_ystd_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_7" value="{{ $rtn->get('man_hours_tod_7') == null ? '' : $rtn->get('man_hours_tod_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_7" value="{{ $rtn->get('man_hours_tot_7') == null ? '' : $rtn->get('man_hours_tot_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="equ_nm_7" value="{{ $rtn->get('equ_nm_7') == null ? '' : $rtn->get('equ_nm_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_7" value="{{ $rtn->get('equ_ystd_7') == null ? '' : $rtn->get('equ_ystd_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_7" value="{{ $rtn->get('equ_tod_7') == null ? '' : $rtn->get('equ_tod_7') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_7" value="{{ $rtn->get('equ_tot_7') == null ? '' : $rtn->get('equ_tot_7') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_8" value="{{ $rtn->get('equ_alloca_nm_8') == null ? '' : $rtn->get('equ_alloca_nm_8') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center">
                    <span>[계]</span>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_ystd_8" value="{{ $rtn->get('man_hours_ystd_8') == null ? '' : $rtn->get('man_hours_ystd_8') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tod_8" value="{{ $rtn->get('man_hours_tod_8') == null ? '' : $rtn->get('man_hours_tod_8') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="man_hours_tot_8" value="{{ $rtn->get('man_hours_tot_8') == null ? '' : $rtn->get('man_hours_tot_8') }}"/>
                </td>
                <td class="align-center">
                    <span>[계]</span>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_ystd_8" value="{{ $rtn->get('equ_ystd_8') == null ? '' : $rtn->get('equ_ystd_8') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tod_8" value="{{ $rtn->get('equ_tod_8') == null ? '' : $rtn->get('equ_tod_8') }}"/>
                </td>
                <td class="align-center wd-mm-15">
                    <input type="text" class="align-center border-line wd-mm-12" name="equ_tot_8" value="{{ $rtn->get('equ_tot_8') == null ? '' : $rtn->get('equ_tot_8') }}"/>
                </td>
                <td class="align-center table-bd">
                    <input type="text" class="align-center border-line wd-mm-60" name="equ_alloca_nm_9" value="{{ $rtn->get('equ_alloca_nm_9') == null ? '' : $rtn->get('equ_alloca_nm_9') }}"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="hi-mm-20 pdf-chck-height"></div>
    <div class="pdf-chck-height float-clear">
        <div class="dist-left-mm-3" style="float: left">
            <span class="font-17">대&nbsp;&nbsp;영&nbsp;&nbsp;종&nbsp;&nbsp;합&nbsp;&nbsp;산&nbsp;&nbsp;기&nbsp;&nbsp;(주)</span>
        </div>
        <div class="dist-right-mm-3" style="float: right">
            {{--            <span class="font-17">시공관리책임자&nbsp;&nbsp;&nbsp;&nbsp;김&nbsp;&nbsp;용&nbsp;&nbsp;태&nbsp;&nbsp;</span>--}}
            <span class="font-17">시공관리책임자&nbsp;&nbsp;</span>
            <input type="text" class="align-center border-line wd-mm-30 font-17" name="spvs_nm" value="{{ $rtn->get('spvs_nm') == null ? '' : $rtn->get('spvs_nm') }}"/>
            <label style="position: relative;">
                <span class="sign-cursor dist-left-mm-5 font-17" onclick="openModal('spvs')">(인)</span>
                <span class="sign-img" onclick="openModal('spvs');">
                    <img src="{{ $rtn->get('spvs_sign_file_name') == null ? '' : Storage::url('public/uploads/'.$rtn->get('spvs_sign_file_name')) }}" class="sign-cursor wd-mm-18" id="spvs_sign_file_name" onclick="openModal('spvs')"/>
                </span>
            </label>
        </div>
    </div>
    <div class="hi-mm-11 pdf-chck-height"></div>
    <div class="pdf-chck-height end-doc"></div>
</form>
