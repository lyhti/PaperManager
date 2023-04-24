<form id="doc-data" method="POST" enctype="multipart/form-data" onsubmit="return false;">
    {!! csrf_field() !!}
    <div class="pdf-chck-height">
        <table class="table-bd table-bd-btm-none wd-per-100">
            <tr>
                <td class="align-center hi-mm-7 font-15" colspan="2">
                    <span>시공품질점검표</span>
                </td>
                <td class="align-center wd-mm-9 font-15" rowspan="4">
                    <span>공종명</span>
                </td>
                <td class="align-center wd-mm-42 font-15" rowspan="4">
                    <div><span>154kV Sh.C 설치</span></div>
                    <div><span>(철거)</span></div>
                </td>
                <td class="align-center wd-mm-30 hi-mm-9" rowspan="2">
                    <span>공사명</span>
                </td>
                <td class="align-center wd-mm-90" rowspan="2">
                    <input type="text" class="align-right border-line wd-mm-25" name="sub_sttn_nm" value="{{ $rtn->get('sub_sttn_nm') == null ? '' : $rtn->get('sub_sttn_nm') }}"/>
                    <span>S/S</span>
                    <input type="text" class="align-left border-line wd-mm-40" name="eqp_nm" value="{{ $rtn->get('eqp_nm') == null ? '' : $rtn->get('eqp_nm') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-7 font-15" rowspan="2" colspan="2">
                    <span>CQ-03-0290</span>
                </td>
            </tr>
            <tr>
                <td class="align-center" rowspan="2">
                    <span>위&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                </td>
                <td class="align-center" rowspan="2">
                    <span>154lV Sh.C</span>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-15 hi-mm-7 font-15">
                    <span>분야</span>
                </td>
                <td class="align-center font-15">
                    <span>반전</span>
                </td>
            </tr>
        </table>
    </div>
    <div class="pdf-chck-height">
        <table class="table-bd table-bd-top-12 table-bd-btm-none wd-per-100">
            <tr>
                <td class="align-left border-none">
                    <div class="dist-btm-mm-5 font-12"><span class="font-bold">1. 기초점검 : </span><span>상부수평±2mm, 배수홈 시공여부</span></div>
                    <div class="dist-btm-mm-5 font-12"><span class="font-bold">2. 앵커볼트길이 적정여부 : </span><span>Double nut+5mm</span></div>
                    <div class="dist-btm-mm-5 font-12"><span class="font-bold">3. 기기가대 조립상태 : </span><span>조립도면과 일치할 것</span></div>
                    <div class="font-12"><span class="font-bold">4. 볼트취부형 크램프 적정성</span></div>
                    <div class="align-left font-12"><span>4.1 외관의 균열 여부</span></div>
                    <div class="align-left font-12"><span>4.2 전선의 첩촉면 : 불순물, 산화물, 제거</span></div>
                    <div class="align-left dist-btm-mm-1 font-12"><span>4.3 볼트의길이 여유도</span></div>
                    <div class="font-12"><span class="font-bold">5. 외부일반</span></div>
                    <div class="align-left font-12"><span>5.1 녹슬음 및 파손변형 여부</span></div>
                    <div class="align-left font-12"><span>5.2 애자 균열 및 오손여부</span></div>
                    <div class="align-left font-12"><span>5.3 단자 볼트조임</span></div>
                    <div class="align-left font-12"><span>5.3 단자 볼트조임</span></div>
                    <div class="dist-left-mm-5 font-12"><span>- 재질별, 규격별 규정 Torque[공종 13 참조] 사용</span></div>
                </td>
                <td class="align-left border-none">
                    <div class="hi-mm-5"></div>
                    <div class="font-12"><span class="font-bold">6. 절연저항 측정(외함과 단자사이)</span></div>
                    <div class="align-left dist-btm-mm-5 font-12"><span>- 1000V 2000㏁ : 1000㏁</span></div>
                    <div class="dist-btm-mm-5 font-12"><span class="font-bold">7. cell 용량 측정 : </span><span>cell 정격용량의 -5% ~ +10%</span></div>
                    <div class="dist-btm-mm-5 font-12"><span class="font-bold">8. cell case 팽창도 측정 : </span><span>cell 규격의 편측당 20mm 이내</span></div>
                    <div class="font-12"><span class="font-bold">9. 리액터 용량 측정</span></div>
                    <div class="align-left dist-btm-mm-1 font-12"><span>ABB제: 80.25mH 60HZ COPPER제: 35mH 60HZ</span></div>
                    <div class="font-12"><span class="font-bold">10. 중성점 저항 측정</span></div>
                    <div class="align-left dist-btm-mm-1 font-12"><span>ABB제: 50Ω±5% COPPER제: 50Ω±5%</span></div>
                    <div class="font-12"><span class="font-bold">11. 중성점 CT비 측정</span></div>
                    <div class="align-left font-12"><span>ABB제: 50:5(unbalance CT), 100:1(NEUTRAL)</span></div>
                    <div class="font-12"><span>COPPER제: 50:5</span></div>
                </td>
            </tr>
        </table>
    </div>
    <table class="table-bd table-bd-top-12 wd-per-100 font-11">
        <tbody class="pdf-chck-height table-hd start-tbody">
            <tr>
                <td class="align-center wd-mm-13" rowspan="2" colspan="2"><span>구&nbsp;&nbsp;분</span></td>
                <td class="align-center wd-mm-42" rowspan="2"><span>기&nbsp;&nbsp;준&nbsp;&nbsp;치</span></td>
                <td class="align-center wd-mm-21" rowspan="2"><span>측&nbsp;&nbsp;정&nbsp;&nbsp;치</span></td>
                <td class="align-center" colspan="2"><span>측&nbsp;&nbsp;&nbsp;&nbsp;정</span></td>
                <td class="align-center" colspan="2"><span>Supervisor</span></td>
                <td class="align-center" colspan="3"><span>확&nbsp;&nbsp;&nbsp;&nbsp;인</span></td>
                <td class="align-center wd-mm-21" rowspan="2">
                    <div><span>작업</span></div>
                    <div><span>종사자</span></div>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-16"><span>월&nbsp;&nbsp;&nbsp;일</span></td>
                <td class="align-center wd-mm-16"><span>성&nbsp;&nbsp;&nbsp;명</span></td>
                <td class="align-center wd-mm-16"><span>성&nbsp;&nbsp;&nbsp;명</span></td>
                <td class="align-center wd-mm-16"><span>판&nbsp;&nbsp;&nbsp;정</span></td>
                <td class="align-center wd-mm-16"><span>월&nbsp;&nbsp;&nbsp;일</span></td>
                <td class="align-center wd-mm-16"><span>성&nbsp;&nbsp;&nbsp;명</span></td>
                <td class="align-center wd-mm-16"><span>판&nbsp;&nbsp;&nbsp;정</span></td>
            </tr>
        </tbody>
        <tbody class="pdf-chck-height">
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>1</span>
                </td>
                <td class="align-left">
                    <div><span>상부수평±2mm</span></div>
                    <div><span>배수홈 시공여부</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_1" value="{{ $rtn->get('msrm_val_1') == null ? '' : $rtn->get('msrm_val_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_1" value="{{ $rtn->get('msrm_md_1') == null ? '' : $rtn->get('msrm_md_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_1" value="{{ $rtn->get('msrm_nm_1') == null ? '' : $rtn->get('msrm_nm_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_1" value="{{ $rtn->get('msrm_spvs_nm_1') == null ? '' : $rtn->get('msrm_spvs_nm_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_1" value="{{ $rtn->get('msrm_spvs_eval_1') == null ? '' : $rtn->get('msrm_spvs_eval_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_1" value="{{ $rtn->get('msrm_cnfr_md_1') == null ? '' : $rtn->get('msrm_cnfr_md_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_1" value="{{ $rtn->get('msrm_cnfr_nm_1') == null ? '' : $rtn->get('msrm_cnfr_nm_1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_1" value="{{ $rtn->get('msrm_cnfr_eval_1') == null ? '' : $rtn->get('msrm_cnfr_eval_1') }}"/>
                </td>
                <td class="align-center" rowspan="15">
                    <textarea class="align-center txt-auto wd-per-100" name="worker" onchange="resize(this)" rows="1">{{ $rtn->get('worker') == null ? '' : $rtn->get('worker') }}</textarea>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>2</span>
                </td>
                <td class="align-left">
                    <span>Double nut+5mm</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_2" value="{{ $rtn->get('msrm_val_2') == null ? '' : $rtn->get('msrm_val_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_2" value="{{ $rtn->get('msrm_md_2') == null ? '' : $rtn->get('msrm_md_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_2" value="{{ $rtn->get('msrm_nm_2') == null ? '' : $rtn->get('msrm_nm_2') }}">
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_2" value="{{ $rtn->get('msrm_spvs_nm_2') == null ? '' : $rtn->get('msrm_spvs_nm_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_2" value="{{ $rtn->get('msrm_spvs_eval_2') == null ? '' : $rtn->get('msrm_spvs_eval_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_2" value="{{ $rtn->get('msrm_cnfr_md_2') == null ? '' : $rtn->get('msrm_cnfr_md_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_2" value="{{ $rtn->get('msrm_cnfr_nm_2') == null ? '' : $rtn->get('msrm_cnfr_nm_2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_2" value="{{ $rtn->get('msrm_cnfr_eval_2') == null ? '' : $rtn->get('msrm_cnfr_eval_2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>3</span>
                </td>
                <td class="align-left">
                    <span>조립도면</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_3" value="{{ $rtn->get('msrm_val_3') == null ? '' : $rtn->get('msrm_val_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_3" value="{{ $rtn->get('msrm_md_3') == null ? '' : $rtn->get('msrm_md_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_3" value="{{ $rtn->get('msrm_nm_3') == null ? '' : $rtn->get('msrm_nm_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_3" value="{{ $rtn->get('msrm_spvs_nm_3') == null ? '' : $rtn->get('msrm_spvs_nm_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_3" value="{{ $rtn->get('msrm_spvs_eval_3') == null ? '' : $rtn->get('msrm_spvs_eval_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_3" value="{{ $rtn->get('msrm_cnfr_md_3') == null ? '' : $rtn->get('msrm_cnfr_md_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_3" value="{{ $rtn->get('msrm_cnfr_nm_3') == null ? '' : $rtn->get('msrm_cnfr_nm_3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_3" value="{{ $rtn->get('msrm_cnfr_eval_3') == null ? '' : $rtn->get('msrm_cnfr_eval_3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-7" rowspan="3">
                    <span>4</span>
                </td>
                <td class="align-center wd-mm-6 hi-mm-9">
                    <span>4.1</span>
                </td>
                <td class="align-left">
                    <span>균열 여부</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_4-1" value="{{ $rtn->get('msrm_val_4-1') == null ? '' : $rtn->get('msrm_val_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_4-1" value="{{ $rtn->get('msrm_md_4-1') == null ? '' : $rtn->get('msrm_md_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_4-1" value="{{ $rtn->get('msrm_nm_4-1') == null ? '' : $rtn->get('msrm_nm_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_4-1" value="{{ $rtn->get('msrm_spvs_nm_4-1') == null ? '' : $rtn->get('msrm_spvs_nm_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_4-1" value="{{ $rtn->get('msrm_spvs_eval_4-1') == null ? '' : $rtn->get('msrm_spvs_eval_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_4-1" value="{{ $rtn->get('msrm_cnfr_md_4-1') == null ? '' : $rtn->get('msrm_cnfr_md_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_4-1" value="{{ $rtn->get('msrm_cnfr_nm_4-1') == null ? '' : $rtn->get('msrm_cnfr_nm_4-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_4-1" value="{{ $rtn->get('msrm_cnfr_eval_4-1') == null ? '' : $rtn->get('msrm_cnfr_eval_4-1') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-7 hi-mm-9">
                    <span>4.2</span>
                </td>
                <td class="align-left">
                    <span>불순물, 산화물제거</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_4-2" value="{{ $rtn->get('msrm_val_4-2') == null ? '' : $rtn->get('msrm_val_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_4-2" value="{{ $rtn->get('msrm_md_4-2') == null ? '' : $rtn->get('msrm_md_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_4-2" value="{{ $rtn->get('msrm_nm_4-2') == null ? '' : $rtn->get('msrm_nm_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_4-2" value="{{ $rtn->get('msrm_spvs_nm_4-2') == null ? '' : $rtn->get('msrm_spvs_nm_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_4-2" value="{{ $rtn->get('msrm_spvs_eval_4-2') == null ? '' : $rtn->get('msrm_spvs_eval_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_4-2" value="{{ $rtn->get('msrm_cnfr_md_4-2') == null ? '' : $rtn->get('msrm_cnfr_md_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_4-2" value="{{ $rtn->get('msrm_cnfr_nm_4-2') == null ? '' : $rtn->get('msrm_cnfr_nm_4-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_4-2" value="{{ $rtn->get('msrm_cnfr_eval_4-2') == null ? '' : $rtn->get('msrm_cnfr_eval_4-2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-7 hi-mm-9">
                    <span>4.3</span>
                </td>
                <td class="align-left">
                    <span>조임후 6mm</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_4-3" value="{{ $rtn->get('msrm_val_4-3') == null ? '' : $rtn->get('msrm_val_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_4-3" value="{{ $rtn->get('msrm_md_4-3') == null ? '' : $rtn->get('msrm_md_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_4-3" value="{{ $rtn->get('msrm_nm_4-3') == null ? '' : $rtn->get('msrm_nm_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_4-3" value="{{ $rtn->get('msrm_spvs_nm_4-3') == null ? '' : $rtn->get('msrm_spvs_nm_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_4-3" value="{{ $rtn->get('msrm_spvs_eval_4-3') == null ? '' : $rtn->get('msrm_spvs_eval_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_4-3" value="{{ $rtn->get('msrm_cnfr_md_4-3') == null ? '' : $rtn->get('msrm_cnfr_md_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_4-3" value="{{ $rtn->get('msrm_cnfr_nm_4-3') == null ? '' : $rtn->get('msrm_cnfr_nm_4-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_4-3" value="{{ $rtn->get('msrm_cnfr_eval_4-3') == null ? '' : $rtn->get('msrm_cnfr_eval_4-3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center" rowspan="3">
                    <span>5</span>
                </td>
                <td class="align-center wd-mm-7 hi-mm-9">
                    <span>5.1</span>
                </td>
                <td class="align-left">
                    <span>녹슴, 파손변형여부</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_5-1" value="{{ $rtn->get('msrm_val_5-1') == null ? '' : $rtn->get('msrm_val_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_5-1" value="{{ $rtn->get('msrm_md_5-1') == null ? '' : $rtn->get('msrm_md_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_5-1" value="{{ $rtn->get('msrm_nm_5-1') == null ? '' : $rtn->get('msrm_nm_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_5-1" value="{{ $rtn->get('msrm_spvs_nm_5-1') == null ? '' : $rtn->get('msrm_spvs_nm_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_5-1" value="{{ $rtn->get('msrm_spvs_eval_5-1') == null ? '' : $rtn->get('msrm_spvs_eval_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_5-1" value="{{ $rtn->get('msrm_cnfr_md_5-1') == null ? '' : $rtn->get('msrm_cnfr_md_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_5-1" value="{{ $rtn->get('msrm_cnfr_nm_5-1') == null ? '' : $rtn->get('msrm_cnfr_nm_5-1') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_5-1" value="{{ $rtn->get('msrm_cnfr_eval_5-1') == null ? '' : $rtn->get('msrm_cnfr_eval_5-1') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-7 hi-mm-9">
                    <span>5.2</span>
                </td>
                <td class="align-left">
                    <span>애자균열, 오손여부</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_5-2" value="{{ $rtn->get('msrm_val_5-2') == null ? '' : $rtn->get('msrm_val_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_5-2" value="{{ $rtn->get('msrm_md_5-2') == null ? '' : $rtn->get('msrm_md_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_5-2" value="{{ $rtn->get('msrm_nm_5-2') == null ? '' : $rtn->get('msrm_nm_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_5-2" value="{{ $rtn->get('msrm_spvs_nm_5-2') == null ? '' : $rtn->get('msrm_spvs_nm_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_5-2" value="{{ $rtn->get('msrm_spvs_eval_5-2') == null ? '' : $rtn->get('msrm_spvs_eval_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_5-2" value="{{ $rtn->get('msrm_cnfr_md_5-2') == null ? '' : $rtn->get('msrm_cnfr_md_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_5-2" value="{{ $rtn->get('msrm_cnfr_nm_5-2') == null ? '' : $rtn->get('msrm_cnfr_nm_5-2') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_5-2" value="{{ $rtn->get('msrm_cnfr_eval_5-2') == null ? '' : $rtn->get('msrm_cnfr_eval_5-2') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center wd-mm-7 hi-mm-9">
                    <span>5.3</span>
                </td>
                <td class="align-left">
                    <span>단자 볼트 조임</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_5-3" value="{{ $rtn->get('msrm_val_5-3') == null ? '' : $rtn->get('msrm_val_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_5-3" value="{{ $rtn->get('msrm_md_5-3') == null ? '' : $rtn->get('msrm_md_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_5-3" value="{{ $rtn->get('msrm_nm_5-3') == null ? '' : $rtn->get('msrm_nm_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_5-3" value="{{ $rtn->get('msrm_spvs_nm_5-3') == null ? '' : $rtn->get('msrm_spvs_nm_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_5-3" value="{{ $rtn->get('msrm_spvs_eval_5-3') == null ? '' : $rtn->get('msrm_spvs_eval_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_5-3" value="{{ $rtn->get('msrm_cnfr_md_5-3') == null ? '' : $rtn->get('msrm_cnfr_md_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_5-3" value="{{ $rtn->get('msrm_cnfr_nm_5-3') == null ? '' : $rtn->get('msrm_cnfr_nm_5-3') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_5-3" value="{{ $rtn->get('msrm_cnfr_eval_5-3') == null ? '' : $rtn->get('msrm_cnfr_eval_5-3') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>6</span>
                </td>
                <td class="align-left">
                    <span>1000㏁</span>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_6" value="{{ $rtn->get('msrm_val_6') == null ? '' : $rtn->get('msrm_val_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_6" value="{{ $rtn->get('msrm_md_6') == null ? '' : $rtn->get('msrm_md_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_6" value="{{ $rtn->get('msrm_nm_6') == null ? '' : $rtn->get('msrm_nm_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_6" value="{{ $rtn->get('msrm_spvs_nm_6') == null ? '' : $rtn->get('msrm_spvs_nm_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_6" value="{{ $rtn->get('msrm_spvs_eval_6') == null ? '' : $rtn->get('msrm_spvs_eval_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_6" value="{{ $rtn->get('msrm_cnfr_md_6') == null ? '' : $rtn->get('msrm_cnfr_md_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_6" value="{{ $rtn->get('msrm_cnfr_nm_6') == null ? '' : $rtn->get('msrm_cnfr_nm_6') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_6" value="{{ $rtn->get('msrm_cnfr_eval_6') == null ? '' : $rtn->get('msrm_cnfr_eval_6') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>7</span>
                </td>
                <td class="align-left font-10">
                    <div><span>cell 정격용량의</span></div>
                    <div><span>-5% ~ +10%</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_7" value="{{ $rtn->get('msrm_val_7') == null ? '' : $rtn->get('msrm_val_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_7" value="{{ $rtn->get('msrm_md_7') == null ? '' : $rtn->get('msrm_md_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_7" value="{{ $rtn->get('msrm_nm_7') == null ? '' : $rtn->get('msrm_nm_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_7" value="{{ $rtn->get('msrm_spvs_nm_7') == null ? '' : $rtn->get('msrm_spvs_nm_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_7" value="{{ $rtn->get('msrm_spvs_eval_7') == null ? '' : $rtn->get('msrm_spvs_eval_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_7" value="{{ $rtn->get('msrm_cnfr_md_7') == null ? '' : $rtn->get('msrm_cnfr_md_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_7" value="{{ $rtn->get('msrm_cnfr_nm_7') == null ? '' : $rtn->get('msrm_cnfr_nm_7') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_7" value="{{ $rtn->get('msrm_cnfr_eval_7') == null ? '' : $rtn->get('msrm_cnfr_eval_7') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>8</span>
                </td>
                <td class="align-left font-10">
                    <div><span>cell 규격의 편측당</span></div>
                    <div><span>20mm 이내</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_8" value="{{ $rtn->get('msrm_val_8') == null ? '' : $rtn->get('msrm_val_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_8" value="{{ $rtn->get('msrm_md_8') == null ? '' : $rtn->get('msrm_md_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_8" value="{{ $rtn->get('msrm_nm_8') == null ? '' : $rtn->get('msrm_nm_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_8" value="{{ $rtn->get('msrm_spvs_nm_8') == null ? '' : $rtn->get('msrm_spvs_nm_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_8" value="{{ $rtn->get('msrm_spvs_eval_8') == null ? '' : $rtn->get('msrm_spvs_eval_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_8" value="{{ $rtn->get('msrm_cnfr_md_8') == null ? '' : $rtn->get('msrm_cnfr_md_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_8" value="{{ $rtn->get('msrm_cnfr_nm_8') == null ? '' : $rtn->get('msrm_cnfr_nm_8') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_8" value="{{ $rtn->get('msrm_cnfr_eval_8') == null ? '' : $rtn->get('msrm_cnfr_eval_8') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>9</span>
                </td>
                <td class="align-left font-10">
                    <div><span>ABB제: 80.25mH 60HZ</span></div>
                    <div><span>COPPER제: 35mH</span></div>
                    <div><span>60HZ</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_9" value="{{ $rtn->get('msrm_val_9') == null ? '' : $rtn->get('msrm_val_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_9" value="{{ $rtn->get('msrm_md_9') == null ? '' : $rtn->get('msrm_md_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_9" value="{{ $rtn->get('msrm_nm_9') == null ? '' : $rtn->get('msrm_nm_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_9" value="{{ $rtn->get('msrm_spvs_nm_9') == null ? '' : $rtn->get('msrm_spvs_nm_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_9" value="{{ $rtn->get('msrm_spvs_eval_9') == null ? '' : $rtn->get('msrm_spvs_eval_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_9" value="{{ $rtn->get('msrm_cnfr_md_9') == null ? '' : $rtn->get('msrm_cnfr_md_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_9" value="{{ $rtn->get('msrm_cnfr_nm_9') == null ? '' : $rtn->get('msrm_cnfr_nm_9') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_9" value="{{ $rtn->get('msrm_cnfr_eval_9') == null ? '' : $rtn->get('msrm_cnfr_eval_9') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>10</span>
                </td>
                <td class="align-left font-10">
                    <div><span>ABB제: 50Ω±5%</span></div>
                    <div><span>COPPER제: 50Ω±5%</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_10" value="{{ $rtn->get('msrm_val_10') == null ? '' : $rtn->get('msrm_val_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_10" value="{{ $rtn->get('msrm_md_10') == null ? '' : $rtn->get('msrm_md_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_10" value="{{ $rtn->get('msrm_nm_10') == null ? '' : $rtn->get('msrm_nm_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_10" value="{{ $rtn->get('msrm_spvs_nm_10') == null ? '' : $rtn->get('msrm_spvs_nm_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_10" value="{{ $rtn->get('msrm_spvs_eval_10') == null ? '' : $rtn->get('msrm_spvs_eval_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_10" value="{{ $rtn->get('msrm_cnfr_md_10') == null ? '' : $rtn->get('msrm_cnfr_md_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_10" value="{{ $rtn->get('msrm_cnfr_nm_10') == null ? '' : $rtn->get('msrm_cnfr_nm_10') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_10" value="{{ $rtn->get('msrm_cnfr_eval_10') == null ? '' : $rtn->get('msrm_cnfr_eval_10') }}"/>
                </td>
            </tr>
            <tr>
                <td class="align-center hi-mm-9" colspan="2">
                    <span>11</span>
                </td>
                <td class="align-left font-10">
                    <div><span>ABB제: 50:5(unbalance</span></div>
                    <div><span>CT), 100:1(NEUTRAL)</span></div>
                    <div><span>COPPER제: 50:5</span></div>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-18" name="msrm_val_11" value="{{ $rtn->get('msrm_val_11') == null ? '' : $rtn->get('msrm_val_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_md_11" value="{{ $rtn->get('msrm_md_11') == null ? '' : $rtn->get('msrm_md_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_nm_11" value="{{ $rtn->get('msrm_nm_11') == null ? '' : $rtn->get('msrm_nm_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_nm_11" value="{{ $rtn->get('msrm_spvs_nm_11') == null ? '' : $rtn->get('msrm_spvs_nm_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_spvs_eval_11" value="{{ $rtn->get('msrm_spvs_eval_11') == null ? '' : $rtn->get('msrm_spvs_eval_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_md_11" value="{{ $rtn->get('msrm_cnfr_md_11') == null ? '' : $rtn->get('msrm_cnfr_md_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_nm_11" value="{{ $rtn->get('msrm_cnfr_nm_11') == null ? '' : $rtn->get('msrm_cnfr_nm_11') }}"/>
                </td>
                <td class="align-center">
                    <input type="text" class="align-center border-line wd-mm-14" name="msrm_cnfr_eval_11" value="{{ $rtn->get('msrm_cnfr_eval_11') == null ? '' : $rtn->get('msrm_cnfr_eval_11') }}"/>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    <div><span>※ 특기사항</span></div>
                    <textarea class="align-left txt-auto pad-top-mm-2 wd-per-100" name="rmrk" onchange="resize(this)" rows="2">{{ $rtn->get('rmrk') == null ? '' : $rtn->get('rmrk') }}</textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="pdf-chck-height end-doc"></div>
</form>
