<table class="ct-table-tg" id="{{$docSn}}_ctseconcrct1">
    <input type="hidden" name="docTypeCd" value="ct_scrmrs">
    <tbody class="tbody-start">
        <tr>
            <th class="ct-table-tg-iiav" colspan="9" rowspan="2">CT 2차회로 저항 측정 기록표</th>
            <th class="ct-table-tg-9wq8" rowspan="4">결<br><br>재</th>
            <th class="ct-table-tg-9wq8">담 당</th>
            <th class="ct-table-tg-9wq8">차 장</th>
        </tr>
        <tr>
            <th class="sign" rowspan="3" onclick="openModal('signData');">
                <span style="position: relative;">
                    @if($rtnData->get('spvs_sign_file_name') != null)
                        <img id="chkSign" style="width: 70px;" src="{{ Storage::url('public/uploads/'.$rtnData->get('spvs_sign_file_name')) }}" onclick="openModal('signData');"/>
                    @else
                        <img id="chkSign" style="width: 70px; position:fixed; cursor: pointer;" />
                        서명
                    @endif
                </span>
            </th>
            <th class="ct-table-tg-9wq8" rowspan="3"></th>
        </tr>
        <tr>
            <th class="ct-table-tg-bono" colspan="9"></th>
        </tr>
        <tr>
            <th class="ct-table-tg-bono" colspan="9">점검구분&nbsp;&nbsp;:
                @if($rtnData->get('chck_dvs') !== null)
                    <input class="ct-table-tg-a129" name="chck_dvs" value="{{ $rtnData->get('chck_dvs') }}"/>
                @else
                    <input class="ct-table-tg-a129" name="chck_dvs"/>
                @endif
                &nbsp;&nbsp;
                점검일자 :
                @if($rtnData->get('chck_ymd') !== null)
                    <input type="date" class="ct-table-tg-9wq8" name="chck_ymd" value="{{ $rtnData->get('chck_ymd') }}"/>
                @else
                    <input type="date" class="ct-table-tg-9wq8" name="chck_ymd" onchange="dataChange(this)" value="{!! date('Y-m-d') !!}"/>
                @endif
                
                날씨 및 기온 :
                @if($rtnData->get('weather') !== null)
                    <input class="ct-table-tg-a129" name="weather" value="{{ $rtnData->get('weather') }}"/>
                @else
                    <input class="ct-table-tg-a129" name="weather"/>
                @endif
                /
                @if($rtnData->get('tmpt') !== null)
                    <input class="ct-table-tg-a129" name="tmpt" value="{{ $rtnData->get('tmpt') }}"/>
                @else
                <input class="ct-table-tg-a129" name="tmpt"/>
                @endif
                ℃
            </th>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">설 치 장 소</td>
            <td colspan="9">
                @if($rtnData->get('sub_sttn_nm') !== null)
                    <input class="ct-table-tg-inpt100" name="sub_sttn_nm" value="{{ $rtnData->get('sub_sttn_nm') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="sub_sttn_nm"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">설&nbsp;&nbsp;비&nbsp;&nbsp;명</td>
            <td colspan="9">
                @if($rtnData->get('eqp_nm') !== null)
                    <input class="ct-table-tg-inpt100" name="eqp_nm" value="{{ $rtnData->get('eqp_nm') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="eqp_nm"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">Ry&nbsp;&nbsp;제 원</td>
            <td colspan="9">
                @if($rtnData->get('ry_spc') !== null)
                    <input class="ct-table-tg-inpt100" name="ry_spc" value="{{ $rtnData->get('ry_spc') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="ry_spc"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3" rowspan="2">CT 2차회로 경로</td>
            <td colspan="9">
                @if($rtnData->get('ct_secon_crct_paway_1') !== null)
                    <input class="ct-table-tg-inpt100" name="ct_secon_crct_paway_1" value="{{ $rtnData->get('ct_secon_crct_paway_1') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="ct_secon_crct_paway_1"/>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="9">
                @if($rtnData->get('ct_secon_crct_paway_2') !== null)
                    <input class="ct-table-tg-inpt100" name="ct_secon_crct_paway_2" value="{{ $rtnData->get('ct_secon_crct_paway_2') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="ct_secon_crct_paway_2"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">CT 케이블 길이</td>
            <td colspan="9">
                @if($rtnData->get('ct_cable_leng') !== null)
                    <input class="ct-table-tg-inpt100" name="ct_cable_leng" value="{{ $rtnData->get('ct_cable_leng') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="ct_cable_leng"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">CT 케이블 규격</td>
            <td colspan="9">
                @if($rtnData->get('ct_cable_stnd') !== null)
                    <input class="ct-table-tg-inpt100" name="ct_cable_stnd" value="{{ $rtnData->get('ct_cable_stnd') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="ct_cable_stnd"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">접속개소 수량</td>
            <td colspan="9">
                @if($rtnData->get('cntn_zone_qaty') !== null)
                    <input class="ct-table-tg-inpt100" name="cntn_zone_qaty" value="{{ $rtnData->get('cntn_zone_qaty') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="cntn_zone_qaty"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">계&nbsp;&nbsp;측&nbsp;&nbsp;기</td>
            <td colspan="9">
                @if($rtnData->get('msrm_inmt') !== null)
                    <input class="ct-table-tg-inpt100" name="msrm_inmt" value="{{ $rtnData->get('msrm_inmt') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="msrm_inmt" />
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">측&nbsp;&nbsp;정&nbsp;&nbsp;자</td>
            <td colspan="9">
                @if($rtnData->get('msrm_nm') !== null)
                    <input class="ct-table-tg-inpt100" name="msrm_nm" value="{{ $rtnData->get('msrm_nm') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="msrm_nm"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">측 정 위 치</td>
            <td colspan="9">
                @if($rtnData->get('msrm_lctn') !== null)
                    <input class="ct-table-tg-inpt100" name="msrm_lctn" value="{{ $rtnData->get('msrm_lctn') }}"/>
                @else
                    <input class="ct-table-tg-inpt100" name="msrm_lctn" />
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-bono" colspan="12"></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">기&nbsp;&nbsp;준&nbsp;&nbsp;치</td>
            <td colspan="9">측정일자 : <input type="date" class="ct-table-tg-9wq8" disabled/>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;단위
                : mΩ</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td colspan="6">
                @if($rtnData->get('crtr_type_1') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_type_1" value="{{ $rtnData->get('crtr_type_1') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_type_1"/>
                @endif
            </td>
            <td colspan="6">
                @if($rtnData->get('crtr_type_2') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_type_2" value="{{ $rtnData->get('crtr_type_2') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_type_2"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8">A-B</td>
            <td class="ct-table-tg-9wq8">B-C</td>
            <td class="ct-table-tg-9wq8">C-A</td>
            <td class="ct-table-tg-9wq8">A-N</td>
            <td class="ct-table-tg-9wq8">B-N</td>
            <td class="ct-table-tg-9wq8">C-N</td>
            <td class="ct-table-tg-9wq8">A-B</td>
            <td class="ct-table-tg-9wq8">B-C</td>
            <td class="ct-table-tg-9wq8">C-A</td>
            <td class="ct-table-tg-9wq8">A-N</td>
            <td class="ct-table-tg-9wq8">B-N</td>
            <td class="ct-table-tg-9wq8">C-N</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_a-b') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_a-b" value="{{ $rtnData->get('crtr_ry_a-b') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_a-b"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_b-c') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_b-c" value="{{ $rtnData->get('crtr_ry_b-c') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_b-c"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_c-a') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_c-a" value="{{ $rtnData->get('crtr_ry_c-a') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_c-a"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_a-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_a-n" value="{{ $rtnData->get('crtr_ry_a-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_a-n"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_b-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_b-n" value="{{ $rtnData->get('crtr_ry_b-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_b-n"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_ry_c-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_c-n" value="{{ $rtnData->get('crtr_ry_c-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_ry_c-n"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_a-b') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_a-b" value="{{ $rtnData->get('crtr_met_a-b') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_a-b"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_b-c') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_b-c" value="{{ $rtnData->get('crtr_met_b-c') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_b-c"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_c-a') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_c-a" value="{{ $rtnData->get('crtr_met_c-a') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_c-a"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_a-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_a-n" value="{{ $rtnData->get('crtr_met_a-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_a-n"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_b-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_b-n" value="{{ $rtnData->get('crtr_met_b-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_b-n"/>
                @endif
            </td>
            <td class="ct-table-tg-9wq8">
                @if($rtnData->get('crtr_met_c-n') !== null)
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_c-n" value="{{ $rtnData->get('crtr_met_c-n') }}"/>
                @else
                    <input disabled class="ct-table-tg-inpt100" name="crtr_met_c-n"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-bono" colspan="12"></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8" colspan="3">측 정 치</td>
            <td colspan="9">측정일자 :
                @if($rtnData->get('msrm_chck_ymd') !== null)
                    <input type="date" class="ct-table-tg-9wq8" name="msrm_chck_ymd" value="{{ $rtnData->get('msrm_chck_ymd') }}"/>
                @else
                    <input type="date" class="ct-table-tg-9wq8" name="msrm_chck_ymd" value="{!! date('Y-m-d') !!}"/>
                @endif
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;단위
                : mΩ</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td colspan="6">
                @if($rtnData->get('msrm_type_1') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_type_1" value="{{ $rtnData->get('msrm_type_1') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_type_1"/>
                @endif
            </td>
            <td colspan="6">
                @if($rtnData->get('msrm_type_2') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_type_2" value="{{ $rtnData->get('msrm_type_2') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_type_2"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="ct-table-tg-9wq8">A-B</td>
            <td class="ct-table-tg-9wq8">B-C</td>
            <td class="ct-table-tg-9wq8">C-A</td>
            <td class="ct-table-tg-9wq8">A-N</td>
            <td class="ct-table-tg-9wq8">B-N</td>
            <td class="ct-table-tg-9wq8">C-N</td>
            <td class="ct-table-tg-9wq8">A-B</td>
            <td class="ct-table-tg-9wq8">B-C</td>
            <td class="ct-table-tg-9wq8">C-A</td>
            <td class="ct-table-tg-9wq8">A-N</td>
            <td class="ct-table-tg-9wq8">B-N</td>
            <td class="ct-table-tg-9wq8">C-N</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>
                @if($rtnData->get('msrm_ry_a-b') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_a-b" value="{{ $rtnData->get('msrm_ry_a-b') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_a-b"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_ry_b-c') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_b-c" value="{{ $rtnData->get('msrm_ry_b-c') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_b-c"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_ry_c-a') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_c-a" value="{{ $rtnData->get('msrm_ry_c-a') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_c-a"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_ry_a-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_a-n" value="{{ $rtnData->get('msrm_ry_a-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_a-n"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_ry_b-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_b-n" value="{{ $rtnData->get('msrm_ry_b-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_b-n"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_ry_c-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_ry_c-n" value="{{ $rtnData->get('msrm_ry_c-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_ry_c-n"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_a-b') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_a-b" value="{{ $rtnData->get('msrm_met_a-b') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_a-b"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_b-c') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_b-c" value="{{ $rtnData->get('msrm_met_b-c') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_b-c"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_c-a') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_c-a" value="{{ $rtnData->get('msrm_met_c-a') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_c-a"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_a-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_a-n" value="{{ $rtnData->get('msrm_met_a-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_a-n"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_b-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_b-n" value="{{ $rtnData->get('msrm_met_b-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_b-n"/>
                @endif
            </td>
            <td>
                @if($rtnData->get('msrm_met_c-n') !== null)
                    <input class="ct-table-tg-inc100" name="msrm_met_c-n" value="{{ $rtnData->get('msrm_met_c-n') }}"/>
                @else
                    <input class="ct-table-tg-inc100" name="msrm_met_c-n"/>
                @endif
            </td>
        </tr>
    </tbody>
    <tbody class="tbody-end">
        <tr>
            <td class="ct-table-tg-bono" colspan="12">※ 배전선로 계전기내부저항의 차이로 각 상의 측정값이 차이를 보일 수 있음<br>&nbsp;&nbsp;- 계전기 제작사에 확인 요망</td>
        </tr>
    </tbody>
</table>

{{-- Modal Start --}}
<div class="modal fade" id="getCanvas" data-backdrop="static" data-bs-keyboard="false" role="dialog"
     aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="signData"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="closeModal('signData');">취 소</button>
                <button type="button" class="btn btn-default" onclick="saveSign('signData');">저 장</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal End --}}
