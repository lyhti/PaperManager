@extends('layout.master')

@push('custom-styles')
    {!! Html::style('css/점검기록표_style.css') !!}
@endpush

@section('content')
    <!-- Loader 영역 -->
    <div id="div_for_loader"></div>
    <!-- Loader 영역 -->
    <div style="width: auto;">
        <div class="hpa" style="width:211mm; height:297mm">
            <div class="hcD">
                <div class="hcI">
                    <div class="hls ps28" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:164.70mm;">
                        <span class="hrt cs1">【서식7】</span>
                    </div>
                    <div class="hls ps3" style="line-height:48.10mm;white-space:nowrap;left:0;top:8.47mm;height:48.10mm;width:170mm;">
                        <div class="htb" style="left:0;width:168.01mm;top:0.50mm;height:48.10mm;display:inline-block;position:relative;vertical-align:middle;">
                            <div class="hce" style="left:0;top:0;width:168.01mm;height:45.60mm;">
                                <div class="hcD" style="left:1.80mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps11" style="line-height:9.60mm;white-space:nowrap;left:0;top:0;height:9.90mm;width:164.41mm;">
                                            <div class="htb" style="left:0.49mm;width:127.49mm;top:0.49mm;height:9.90mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-2.50 -2.50 132.49 14.89" style="left:-2.50mm;top:-2.50mm;width:132.49mm;height:14.89mm;">
                                                    <path d="M0,0 L0,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M126.50,0 L126.50,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M-0.06,0 L126.57,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M-0.06,8.91 L126.57,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M126.50,0 L126.50,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M0,0 L0,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M-0.06,8.91 L126.57,8.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    <path d="M-0.06,0 L126.57,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                </svg>
                                                <div class="hce" style="left:0;top:0;width:126.50mm;height:8.91mm;">
                                                    <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                                        <div class="hcI" style="top:0.43mm;">
                                                            <div class="hls ps11" style="line-height:6.28mm;white-space:nowrap;left:0;top:-0.35mm;height:7.06mm;width:125.50mm;">
                                                                <span class="hrt cs76">25.8kV GIS(보통, 정밀) 점검기록표</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hls ps2" style="line-height:3.43mm;white-space:nowrap;left:0;top:13.07mm;height:4.23mm;width:127.71mm;"></div>
                                        <div class="hls ps2" style="line-height:3.43mm;white-space:nowrap;left:0;top:19.84mm;height:4.23mm;width:127.71mm;">
                                            <span class="hrt cs6">공 사 명 :</span>
                                        </div>
                                        <div class="hls ps2" style="line-height:3.43mm;white-space:nowrap;left:0;top:26.62mm;height:4.23mm;width:127.71mm;">
                                            <span class="hrt cs6">변전소 및 기기명 :</span>
                                        </div>
                                        <div class="hls ps2" style="line-height:3.43mm;white-space:nowrap;left:0;top:33.39mm;height:4.23mm;width:127.71mm;">
                                            <span class="hrt cs6">점검일자 : &nbsp;&nbsp;&nbsp;&nbsp;. &nbsp;&nbsp;. &nbsp;&nbsp;. &nbsp;</span>
                                            <span class="hrt cs71">날씨 : &nbsp;&nbsp;&nbsp;&nbsp;기온 : &nbsp;&nbsp;&nbsp;습도 :</span>
                                        </div>
                                        <div class="hls ps2" style="line-height:3.43mm;white-space:nowrap;left:0;top:40.16mm;height:4.23mm;width:164.41mm;">
                                            <span class="hrt cs6">점 검 자 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(인) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;감 독 자 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(인)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="htb" style="left:130.51mm;width:39.09mm;top:14.78mm;height:26.25mm;">
                                    <svg class="hs" viewBox="-2.50 -2.50 44.09 31.25" style="left:-2.50mm;top:-2.50mm;width:44.09mm;height:31.25mm;">
                                        <path d="M0,0 L0,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M7.70,0 L7.70,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M22.40,0 L22.40,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M37.09,0 L37.09,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M-0.06,0 L37.15,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M7.65,8.13 L37.15,8.13" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M-0.06,24.25 L37.15,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M37.09,0 L37.09,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M0,0 L0,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M-0.06,24.25 L37.15,24.25" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                        <path d="M-0.06,0 L37.15,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                    </svg>
                                    <div class="hce" style="left:0;top:0;width:7.70mm;height:24.25mm;">
                                        <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                            <div class="hcI" style="top:5.70mm;">
                                                <div class="hls ps11" style="당line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:6.70mm;">
                                                    <span class="hrt cs1">결</span>
                                                </div>
                                                <div class="hls ps11" style="line-height:3.43mm;white-space:nowrap;left:0;top:7.41mm;height:4.23mm;width:6.70mm;">
                                                    <span class="hrt cs1">재</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hce" style="left:7.70mm;top:0;width:14.69mm;height:8.13mm;">
                                        <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                            <div class="hcI" style="top:1.45mm;">
                                                <div class="hls ps11" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:13.69mm;">
                                                    <span class="hrt cs1">담 당</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hce" style="left:22.40mm;top:0;width:14.69mm;height:8.13mm;">
                                        <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                            <div class="hcI" style="top:1.45mm;">
                                                <div class="hls ps11" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:13.69mm;">
                                                    <span class="hrt cs1">차 장</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hce" style="left:7.70mm;top:8.13mm;width:14.69mm;height:16.12mm;">
                                        <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                            <div class="hcI" style="top:5.44mm;">
                                                <div class="hls ps11" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:13.69mm;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hce" style="left:22.40mm;top:8.13mm;width:14.69mm;height:16.12mm;">
                                        <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                            <div class="hcI" style="top:5.44mm;">
                                                <div class="hls ps11" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:13.69mm;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps3" style="line-height:21.61mm;white-space:nowrap;left:0;top:59.95mm;height:21.61mm;width:170mm;">
                        <div class="htb" style="left:0.49mm;width:168.20mm;top:0.49mm;height:21.61mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.20 26.61" style="left:-2.50mm;top:-2.50mm;width:173.20mm;height:26.61mm;">
                                <path d="M0,0 L0,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M24.37,0 L24.37,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M53.74,0 L53.74,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.11,0 L78.11,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M109.48,0 L109.48,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.86,0 L132.86,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.22,0 L167.22,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L167.42,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,6.88 L167.42,6.88" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M-0.20,13.75 L167.42,13.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M-0.20,20.63 L167.42,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.22,0 L167.22,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,20.63 L167.42,20.63" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L167.42,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs5">설치장소</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:24.37mm;top:0;width:29.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:53.74mm;top:0;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs5">급전번호</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.11mm;top:0;width:31.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.38mm;">
                                            <span class="hrt cs5">&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:109.48mm;top:0;width:23.38mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.38mm;">
                                            <span class="hrt cs5">점 검 자</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.86mm;top:0;width:34.36mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.37mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.88mm;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs21">형 &nbsp;&nbsp;&nbsp;식</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:24.37mm;top:6.88mm;width:29.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:53.74mm;top:6.88mm;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs5">정 &nbsp;&nbsp;&nbsp;격</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.11mm;top:6.88mm;width:31.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.38mm;">
                                            <span class="hrt cs5">&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:109.48mm;top:6.88mm;width:23.38mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.38mm;">
                                            <span class="hrt cs5">감 독 자</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.86mm;top:6.88mm;width:34.36mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.37mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:13.75mm;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs82">제 작 사</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:24.37mm;top:13.75mm;width:29.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:53.74mm;top:13.75mm;width:24.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.38mm;">
                                            <span class="hrt cs5">제작번호</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.11mm;top:13.75mm;width:31.37mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.38mm;">
                                            <span class="hrt cs5">&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:109.48mm;top:13.75mm;width:23.38mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.38mm;">
                                            <span class="hrt cs5">제작년월</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.86mm;top:13.75mm;width:34.36mm;height:6.88mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.37mm;">
                                            <span class="hrt cs5">&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps57" style="line-height:3.43mm;white-space:nowrap;left:3.53mm;top:84.46mm;height:4.23mm;width:166.47mm;"></div>
                    <div class="hls ps3" style="line-height:3.43mm;white-space:nowrap;left:0;top:92.08mm;height:4.23mm;width:170mm;">
                        <span class="hrt cs29">1. 활선상태 점검 (휴전조작 전)</span>
                    </div>
                    <div class="hls ps6" style="line-height:70.43mm;white-space:nowrap;left:0;top:99.91mm;height:70.43mm;width:170mm;">
                        <div class="htb" style="left:0.49mm;width:167.65mm;top:0.49mm;height:70.43mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 172.65 75.43" style="left:-2.50mm;top:-2.50mm;width:172.65mm;height:75.43mm;">
                                <path d="M0.20,9.73 L9.70,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10.10 L9.70,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M9.70,9.73 L59.61,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M9.70,10.10 L59.61,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.61,9.73 L78.25,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.61,10.10 L78.25,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.25,9.73 L97.78,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.25,10.10 L97.78,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M97.78,9.73 L129.29,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M97.78,10.10 L129.29,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M129.29,9.73 L146.93,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M129.29,10.10 L146.93,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M146.93,9.73 L166.47,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M146.93,10.10 L166.47,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.73 L9.70,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10.10 L9.70,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M9.70,9.73 L59.61,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M9.70,10.10 L59.61,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.61,9.73 L78.25,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.61,10.10 L78.25,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.19,9.73 L97.78,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.19,10.10 L97.78,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M97.78,9.73 L129.29,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M97.78,10.10 L129.29,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M129.29,9.73 L146.93,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M129.29,10.10 L146.93,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M146.87,9.73 L166.47,9.73" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M146.87,10.10 L166.47,10.10" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M9.70,0 L9.70,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M59.61,0 L59.61,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.61,10.17 L59.61,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.25,0 L78.25,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M78.25,10.17 L78.25,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M97.78,10.17 L97.78,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M129.29,0 L129.29,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M129.29,10.17 L129.29,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M146.93,0 L146.93,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M146.93,10.17 L146.93,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M166.66,0 L166.66,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L166.87,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M78.20,15.79 L146.98,15.79" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,21.65 L146.98,21.65" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,29.94 L166.87,29.94" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,35.90 L146.98,35.90" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,41.85 L146.98,41.85" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,49.97 L9.75,49.97" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M9.65,49.97 L59.67,49.97" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M9.65,49.97 L166.87,49.97" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,54.84 L146.98,54.84" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,59.70 L146.98,59.70" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M78.20,64.57 L146.98,64.57" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,69.44 L166.87,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M166.66,0 L166.66,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,69.44 L166.87,69.44" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L166.87,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:9.70mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:8.71mm;">
                                            <span class="hrt cs5">No</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:9.70mm;top:0;width:49.91mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:48.92mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.61mm;top:0;width:18.64mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">판정기준</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:0;width:51.04mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:50.05mm;">
                                            <span class="hrt cs5">측 정 값</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:0;width:17.64mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.65mm;">
                                            <span class="hrt cs5">점검</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:16.65mm;">
                                            <span class="hrt cs5">결과</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:146.93mm;top:0;width:19.73mm;height:9.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.74mm;">
                                            <span class="hrt cs5">비 고</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.92mm;width:9.70mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.58mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:8.71mm;">
                                            <span class="hrt cs5">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:9.70mm;top:9.92mm;width:49.91mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">부분방전 측정</span>
                                        </div>
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">-&nbsp;</span>
                                            <span class="hrt cs69">휴대용 TEV 측정장비 사용</span>
                                        </div>
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:9.91mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">※ 한전 측정장비 제공시</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.61mm;top:9.92mm;width:18.64mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:5.05mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">16 [dbm]&nbsp;</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">이하</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:9.92mm;width:19.53mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">CB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:9.92mm;width:31.51mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;/ &nbsp;&nbsp;[dbm]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:9.92mm;width:17.64mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:146.93mm;top:9.92mm;width:19.73mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.74mm;">
                                            <span class="hrt cs5">17～28</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:18.74mm;">
                                            <span class="hrt cs5">요주의</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:18.74mm;">
                                            <span class="hrt cs5">29 이상</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:18.74mm;">
                                            <span class="hrt cs5">위 &nbsp;험</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:15.79mm;width:19.53mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#1 DS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:15.79mm;width:31.51mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;/ &nbsp;&nbsp;[dbm]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:15.79mm;width:17.64mm;height:5.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:21.65mm;width:19.53mm;height:8.29mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.71mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#2 DS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:21.65mm;width:31.51mm;height:8.29mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.71mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">&nbsp;/ &nbsp;&nbsp;/ &nbsp;&nbsp;[dbm]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:21.65mm;width:17.64mm;height:8.29mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.71mm;">
                                        <div class="hls ps64" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:29.94mm;width:9.70mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.58mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:8.71mm;">
                                            <span class="hrt cs5">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:9.70mm;top:29.94mm;width:49.91mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">GIS 내부 이음 발생 여부</span>
                                        </div>
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">- 청진기 사용</span>
                                        </div>
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:9.91mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs37">※ 휴대용 TEV 측정장비가</span>
                                        </div>
                                        <div class="hls ps63" style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:14.96mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs37">&nbsp;없을 경우</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.61mm;top:29.94mm;width:18.64mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">무</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:29.94mm;width:19.53mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">CB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:29.94mm;width:31.51mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:29.94mm;width:17.64mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:146.93mm;top:29.94mm;width:19.73mm;height:20.02mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.74mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:35.90mm;width:19.53mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#1 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:35.90mm;width:31.51mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:35.90mm;width:17.64mm;height:5.95mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.54mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:41.85mm;width:19.53mm;height:8.11mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.62mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#2 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:41.85mm;width:31.51mm;height:8.11mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.62mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:41.85mm;width:17.64mm;height:8.11mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.62mm;">
                                        <div class="hls ps65"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:49.97mm;width:9.70mm;height:19.47mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.30mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:8.71mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:9.70mm;top:49.97mm;width:49.91mm;height:19.47mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.78mm;">
                                        <div class="hls ps63"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">GIS 표피온도 측정</span></div>
                                        <div class="hls ps63"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:45.40mm;">
                                            <span class="hrt cs5">- Thermovision 사용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.61mm;top:49.97mm;width:18.64mm;height:19.47mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.25mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">각 상간</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">차이가</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">없을 것</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:49.97mm;width:19.53mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">CB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:49.97mm;width:31.51mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;℃</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:49.97mm;width:17.64mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:146.93mm;top:49.97mm;width:19.73mm;height:19.47mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.30mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.74mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:54.84mm;width:19.53mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#1 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:54.84mm;width:31.51mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">&nbsp;/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;℃</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:54.84mm;width:17.64mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:59.70mm;width:19.53mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">#2 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:59.70mm;width:31.51mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;℃</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:59.70mm;width:17.64mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:78.25mm;top:64.57mm;width:19.53mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:18.54mm;">
                                            <span class="hrt cs5">인출측</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:97.78mm;top:64.57mm;width:31.51mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.76mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;℃</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:129.29mm;top:64.57mm;width:17.64mm;height:4.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:14.89mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps57"
                         style="line-height:3.43mm;white-space:nowrap;left:3.53mm;top:171.19mm;height:4.23mm;width:166.47mm;"></div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:178.81mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">2. 작업 전 안전점검</span></div>
                    <div class="hls ps66"
                         style="line-height:44.32mm;white-space:nowrap;left:0;top:186.64mm;height:44.32mm;width:170mm;">
                        <div class="htb"
                             style="left:1mm;width:169.24mm;top:1mm;height:44.32mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.24 49.32"
                                 style="left:-2.50mm;top:-2.50mm;width:174.24mm;height:49.32mm;">
                                <path d="M0.20,7.71 L11.65,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.08 L11.65,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,7.71 L101.46,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,8.08 L101.46,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M101.46,7.71 L134.85,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M101.46,8.08 L134.85,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.85,7.71 L167.05,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.85,8.08 L167.05,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.71 L11.65,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.08 L11.65,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,7.71 L101.46,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,8.08 L101.46,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M101.46,7.71 L134.85,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M101.46,8.08 L134.85,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.85,7.71 L167.05,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.85,8.08 L167.05,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,42.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.65,0 L11.65,42.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M101.46,0 L101.46,42.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.85,0 L134.85,42.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.24,0 L167.24,42.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L167.45,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,17.65 L167.45,17.65"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,25.88 L167.45,25.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,34.10 L167.45,34.10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,42.32 L167.45,42.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.24,0 L167.24,42.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,42.33" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,42.32 L167.45,42.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L167.45,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.65mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:0;width:89.81mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:101.46mm;top:0;width:33.39mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.38mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.85mm;top:0;width:32.39mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:7.90mm;width:11.65mm;height:9.75mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.44mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:7.90mm;width:89.81mm;height:9.75mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps7"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">&nbsp;검전 및 접지, 사․활선 구획 로프 설치</span></div>
                                        <div class="hls ps7"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:3.69mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">&nbsp;(사, 활선 착각)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:101.46mm;top:7.90mm;width:33.39mm;height:9.75mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.44mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.85mm;top:7.90mm;width:32.39mm;height:9.75mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.44mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:17.65mm;width:11.65mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:17.65mm;width:89.81mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps7"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">&nbsp;안전회의 시행 및 위험성체크리스트 활용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:101.46mm;top:17.65mm;width:33.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.85mm;top:17.65mm;width:32.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:25.88mm;width:11.65mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:25.88mm;width:89.81mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps7"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">&nbsp;안전모, 안전화 등 개인별 안전장구 착용상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:101.46mm;top:25.88mm;width:33.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.85mm;top:25.88mm;width:32.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:34.10mm;width:11.65mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:34.10mm;width:89.81mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps7" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:88.82mm;">
                                            <span class="hrt cs5">&nbsp;작업통보서 지참 및 작업내용 숙지</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:101.46mm;top:34.10mm;width:33.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.38mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.85mm;top:34.10mm;width:32.39mm;height:8.22mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.67mm;">
                                        <div class="hls ps29" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps66" style="line-height:4.10mm;white-space:nowrap;left:0;top:232.19mm;height:4.94mm;width:170mm;"></div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;">
                <div class="hcI">
                    <div class="hls ps6"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">3. 지시치 확인</span></div>
                    <div class="hls ps6"
                         style="line-height:37.63mm;white-space:nowrap;left:0;top:5.50mm;height:37.63mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:169.48mm;top:0.50mm;height:37.63mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.48 42.63"
                                 style="left:-2.50mm;top:-2.50mm;width:174.48mm;height:42.63mm;">
                                <path d="M12.63,0.20 L12.63,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,0.20 L13,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.96 L12.69,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.33 L12.69,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.63,0.20 L12.63,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,0.20 L13,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.94,8.96 L79.86,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.94,9.33 L79.86,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M79.86,8.96 L124.68,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M79.86,9.33 L124.68,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M124.68,8.96 L168.29,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M124.68,9.33 L168.29,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.63,9.27 L12.63,15.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,9.27 L13,15.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.96 L12.69,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.33 L12.69,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.63,9.27 L12.63,15.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,9.27 L13,15.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.94,8.96 L79.86,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.94,9.33 L79.86,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M79.86,8.96 L124.68,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M79.86,9.33 L124.68,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M124.68,8.96 L168.29,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M124.68,9.33 L168.29,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.63,16.08 L12.63,36.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,16.08 L13,36.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.63,16.08 L12.63,36.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13,16.08 L13,36.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,36.64" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M44.70,16.02 L44.70,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M79.86,0 L79.86,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M124.68,0 L124.68,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M168.49,0 L168.49,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L168.69,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,16.02 L168.69,16.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.65,22.90 L168.69,22.90"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.65,29.77 L168.69,29.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M-0.20,36.64 L168.69,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.49,0 L168.49,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,36.64" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,36.64 L168.69,36.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L168.69,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:12.82mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.82mm;top:0;width:67.04mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:66.04mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:79.86mm;top:0;width:44.82mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:43.81mm;">
                                            <span class="hrt cs5">점 검 결 과</span></div>
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.08mm;height:3.88mm;width:43.81mm;">
                                            <span class="hrt cs5">(점검 전 / 후)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:124.68mm;top:0;width:43.81mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.81mm;">
                                            <span class="hrt cs5">비 &nbsp;&nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.15mm;width:12.82mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.81mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.82mm;top:9.15mm;width:67.04mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps35"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:64.28mm;">
                                            <span class="hrt cs5">차단기 동작횟수</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:79.86mm;top:9.15mm;width:44.82mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.05mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;회</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:124.68mm;top:9.15mm;width:43.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.81mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:16.02mm;width:12.82mm;height:20.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.87mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.81mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.82mm;top:16.02mm;width:31.89mm;height:20.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.87mm;">
                                        <div class="hls ps35"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:29.13mm;">
                                            <span class="hrt cs5">SF6 Gas 압력</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:16.02mm;width:35.15mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.15mm;">
                                            <span class="hrt cs5">CB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:79.86mm;top:16.02mm;width:44.82mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.05mm;">
                                    <span
                                        class="hrt cs5">&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:124.68mm;top:16.02mm;width:43.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.81mm;">
                                            <span class="hrt cs5">정격 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:22.90mm;width:35.15mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.15mm;">
                                            <span class="hrt cs5">#1 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:79.86mm;top:22.90mm;width:44.82mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.05mm;">
                                    <span
                                        class="hrt cs5">&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:124.68mm;top:22.90mm;width:43.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.81mm;">
                                            <span class="hrt cs5">정격 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:29.77mm;width:35.15mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.15mm;">
                                            <span class="hrt cs5">#2 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:79.86mm;top:29.77mm;width:44.82mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.05mm;">
                                    <span
                                        class="hrt cs5">&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:124.68mm;top:29.77mm;width:43.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:42.81mm;">
                                            <span class="hrt cs5">정격 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[kg.f/㎠]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps6"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:44.20mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps6"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:49.70mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">4. 외부 일반 점검</span></div>
                    <div class="hls ps66"
                         style="line-height:174.70mm;white-space:nowrap;left:0;top:55.41mm;height:174.70mm;width:170mm;">
                        <div class="htb"
                             style="left:1mm;width:170.24mm;top:1mm;height:174.70mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 179.69"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:179.69mm;">
                                <path d="M0.20,7.68 L11.65,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.05 L11.65,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,7.68 L104.46,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,8.05 L104.46,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,7.68 L135.85,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,8.05 L135.85,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,7.68 L168.05,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,8.05 L168.05,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.68 L11.65,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.05 L11.65,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,7.68 L104.46,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,8.05 L104.46,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,7.68 L135.85,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,8.05 L135.85,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,7.68 L168.05,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,8.05 L168.05,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,172.70" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.65,0 L11.65,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,0 L104.46,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,0 L135.85,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M168.24,0 L168.24,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L168.45,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,33.53 L168.45,33.53"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,38.41 L168.45,38.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,43.28 L168.45,43.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,48.16 L168.45,48.16"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,100.17 L168.45,100.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,133.52 L168.45,133.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,138.39 L168.45,138.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,143.27 L168.45,143.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,148.15 L168.45,148.15"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,153.02 L168.45,153.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,162.95 L168.45,162.95"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,167.82 L168.45,167.82"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M-0.20,172.70 L168.45,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.24,0 L168.24,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,172.70" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,172.70 L168.45,172.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M-0.20,0 L168.45,0"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:0;width:92.81mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:91.81mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:0;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:0;width:32.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:7.87mm;width:11.65mm;height:25.66mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.39mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:7.87mm;width:92.81mm;height:25.66mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">개폐기(CB, DS) OFF 상태 확인</span></div>
                                        <div class="hls ps67" style="line-height:19.61mm;white-space:nowrap;left:2.13mm;top:5.05mm;height:19.61mm;width:89.67mm;">
                                            <div class="hsR" style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.21mm;height:19.64mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.50 19.94" style="left:-0.15mm;top:-0.15mm;width:37.50mm;height:19.94mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd1" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd1.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.21" height="19.64" fill="url(#ttestt_hd1)"></rect>
                                                    <path fill="none" d="M13.97,8.04L13.97,7.91L13.96,7.79L13.95,7.67L13.92,7.55L13.90,7.43L13.86,7.31L13.83,7.19L13.78,7.08L13.73,6.97L13.67,6.86L13.61,6.76L13.54,6.66L13.47,6.56L13.39,6.46L13.31,6.37L13.23,6.29L13.14,6.21L13.05,6.13L12.95,6.06L12.85,6L12.75,5.94L12.64,5.89L12.53,5.84L12.42,5.80L12.30,5.77L12.19,5.74L12.08,5.71L11.96,5.70L11.84,5.69L11.72,5.69L11.61,5.69L11.49,5.70L11.37,5.71L11.25,5.74L11.14,5.77L11.03,5.80L10.91,5.84L10.81,5.89L10.70,5.94L10.60,6L10.50,6.06L10.40,6.13L10.30,6.21L10.22,6.29L10.13,6.37L10.05,6.46L9.97,6.56L9.90,6.66L9.84,6.76L9.77,6.86L9.72,6.97L9.67,7.08L9.62,7.19L9.58,7.31L9.55,7.43L9.52,7.55L9.50,7.67L9.48,7.79L9.48,7.91L9.47,8.04L9.48,8.16L9.48,8.28L9.50,8.40L9.52,8.52L9.55,8.64L9.58,8.76L9.62,8.88L9.67,8.99L9.72,9.10L9.77,9.21L9.84,9.32L9.90,9.42L9.97,9.51L10.05,9.61L10.13,9.70L10.22,9.78L10.30,9.86L10.40,9.94L10.50,10.01L10.60,10.07L10.70,10.13L10.81,10.18L10.91,10.23L11.03,10.27L11.14,10.30L11.25,10.33L11.37,10.36L11.49,10.37L11.61,10.38L11.72,10.39L11.84,10.38L11.96,10.37L12.08,10.36L12.19,10.33L12.30,10.30L12.42,10.27L12.53,10.23L12.64,10.18L12.75,10.13L12.85,10.07L12.95,10.01L13.05,9.94L13.14,9.86L13.23,9.78L13.31,9.70L13.39,9.61L13.47,9.51L13.54,9.42L13.61,9.32L13.67,9.21L13.73,9.10L13.78,8.99L13.83,8.88L13.86,8.76L13.90,8.64L13.92,8.52L13.95,8.40L13.96,8.28L13.97,8.16L13.97,8.04Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path fill="none" d="M35.77,7.94L35.77,7.81L35.76,7.69L35.74,7.57L35.72,7.45L35.69,7.33L35.66,7.21L35.62,7.09L35.58,6.98L35.52,6.87L35.47,6.76L35.41,6.66L35.34,6.56L35.27,6.46L35.19,6.36L35.11,6.28L35.03,6.19L34.94,6.11L34.84,6.04L34.75,5.97L34.65,5.90L34.54,5.85L34.43,5.79L34.33,5.74L34.22,5.70L34.10,5.67L33.99,5.64L33.87,5.62L33.76,5.60L33.64,5.59L33.52,5.59L33.40,5.59L33.28,5.60L33.17,5.62L33.05,5.64L32.94,5.67L32.83,5.70L32.71,5.74L32.61,5.79L32.50,5.85L32.40,5.90L32.30,5.97L32.20,6.04L32.10,6.11L32.01,6.19L31.93,6.28L31.85,6.36L31.77,6.46L31.70,6.56L31.63,6.66L31.57,6.76L31.52,6.87L31.46,6.98L31.42,7.09L31.38,7.21L31.35,7.33L31.32,7.45L31.30,7.57L31.28,7.69L31.27,7.81L31.27,7.94L31.27,8.06L31.28,8.18L31.30,8.30L31.32,8.42L31.35,8.54L31.38,8.66L31.42,8.78L31.46,8.89L31.52,9L31.57,9.11L31.63,9.22L31.70,9.32L31.77,9.42L31.85,9.51L31.93,9.60L32.01,9.68L32.10,9.76L32.20,9.84L32.30,9.91L32.40,9.97L32.50,10.03L32.61,10.08L32.71,10.13L32.83,10.17L32.94,10.21L33.05,10.23L33.17,10.26L33.28,10.27L33.40,10.28L33.52,10.29L33.64,10.28L33.76,10.27L33.87,10.26L33.99,10.23L34.10,10.21L34.22,10.17L34.33,10.13L34.43,10.08L34.54,10.03L34.65,9.97L34.75,9.91L34.84,9.84L34.94,9.76L35.03,9.68L35.11,9.60L35.19,9.51L35.27,9.42L35.34,9.32L35.41,9.22L35.47,9.11L35.52,9L35.58,8.89L35.62,8.78L35.66,8.66L35.69,8.54L35.72,8.42L35.74,8.30L35.76,8.18L35.77,8.06L35.77,7.94Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path fill="none" d="M14.07,14.44L14.07,14.32L14.06,14.19L14.04,14.07L14.02,13.95L13.99,13.83L13.96,13.71L13.92,13.60L13.88,13.48L13.83,13.37L13.77,13.26L13.71,13.16L13.64,13.06L13.57,12.96L13.49,12.87L13.41,12.78L13.33,12.69L13.24,12.61L13.14,12.54L13.05,12.47L12.95,12.40L12.84,12.35L12.74,12.29L12.63,12.24L12.52,12.21L12.40,12.17L12.29,12.14L12.17,12.12L12.06,12.10L11.94,12.09L11.82,12.09L11.71,12.09L11.59,12.10L11.47,12.12L11.35,12.14L11.24,12.17L11.13,12.21L11.01,12.24L10.91,12.29L10.80,12.35L10.70,12.40L10.60,12.47L10.50,12.54L10.40,12.61L10.32,12.69L10.23,12.78L10.15,12.87L10.07,12.96L10,13.06L9.93,13.16L9.87,13.26L9.82,13.37L9.76,13.48L9.72,13.60L9.68,13.71L9.65,13.83L9.62,13.95L9.60,14.07L9.58,14.19L9.57,14.32L9.57,14.44L9.57,14.56L9.58,14.69L9.60,14.81L9.62,14.93L9.65,15.05L9.68,15.17L9.72,15.28L9.76,15.40L9.82,15.50L9.87,15.61L9.93,15.72L10,15.82L10.07,15.92L10.15,16.01L10.23,16.10L10.32,16.19L10.40,16.27L10.50,16.34L10.60,16.41L10.70,16.47L10.80,16.53L10.91,16.58L11.01,16.63L11.13,16.67L11.24,16.71L11.35,16.74L11.47,16.76L11.59,16.77L11.71,16.79L11.82,16.79L11.94,16.79L12.06,16.77L12.17,16.76L12.29,16.74L12.40,16.71L12.52,16.67L12.63,16.63L12.74,16.58L12.84,16.53L12.95,16.47L13.05,16.41L13.14,16.34L13.24,16.27L13.33,16.19L13.41,16.10L13.49,16.01L13.57,15.92L13.64,15.82L13.71,15.72L13.77,15.61L13.83,15.50L13.88,15.40L13.92,15.28L13.96,15.17L13.99,15.05L14.02,14.93L14.04,14.81L14.06,14.69L14.07,14.56L14.07,14.44Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:7.87mm;width:31.39mm;height:25.66mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.39mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:7.87mm;width:32.39mm;height:25.66mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.39mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:33.53mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:33.53mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">발청 및 변형 유무</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:33.53mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:33.53mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:38.41mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:38.41mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">Gas 누기 여부</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:38.41mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:38.41mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:43.28mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:43.28mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">Gas Valve 작동 및 외관 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:43.28mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:43.28mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">가스구획 확인</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:48.16mm;width:11.65mm;height:52.01mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:23.57mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:48.16mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps61" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">Gas gauge 이상 유무</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:48.16mm;width:31.39mm;height:52.01mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:23.57mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:48.16mm;width:32.39mm;height:52.01mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:23.57mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:53.03mm;width:41.41mm;height:47.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.26mm;">
                                        <div class="hls ps61" style="line-height:27.62mm;white-space:nowrap;left:2.13mm;top:0;height:27.62mm;width:38.28mm;">
                                            <div class="hsR" style="top:0;left:0;margin-bottom:0;margin-right:0;width:37.12mm;height:27.65mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd2.png') }});"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:53.06mm;top:53.03mm;width:51.40mm;height:47.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs6">[Gas gauge 고장예방]</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:4.44mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">○ SF6 Gas 주입시 게이지</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:9.10mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">&nbsp;&nbsp;충격 방지를 위해 서서히&nbsp;</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:13.76mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">주입</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:18.41mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">&nbsp;&nbsp;☞ 레귤레이터 사용</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:23.07mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">○ Gugae 부동작시&nbsp;</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:27.73mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">손가락으로</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:32.38mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">&nbsp;&nbsp;약하게 충격을 주어&nbsp;</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:37.04mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">게이지</span>
                                        </div>
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:41.70mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">&nbsp;&nbsp;움직임 관찰</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:100.17mm;width:11.65mm;height:33.35mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:14.23mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">6</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:100.17mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps61" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">가스 주입구 스프링 Return 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:100.17mm;width:31.39mm;height:33.35mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:14.23mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:100.17mm;width:32.39mm;height:33.35mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:11.71mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">제작사별 상이</span>
                                        </div>
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs34">(동일 설비 해당)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:105.05mm;width:41.41mm;height:28.47mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps61" style="line-height:27.48mm;white-space:nowrap;left:2.13mm;top:0;height:27.48mm;width:38.28mm;">
                                            <div class="hsR" style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:27.51mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 27.80" style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:27.80mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd3" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd3.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="27.51" fill="url(#ttestt_hd3)"></rect>
                                                    <path fill="none" d="M21.80,12.70L21.79,12.53L21.78,12.37L21.76,12.21L21.72,12.04L21.68,11.88L21.63,11.72L21.57,11.57L21.50,11.41L21.42,11.26L21.33,11.12L21.24,10.97L21.13,10.84L21.02,10.71L20.90,10.58L20.78,10.46L20.64,10.35L20.51,10.24L20.36,10.14L20.21,10.05L20.06,9.96L19.90,9.88L19.73,9.81L19.57,9.75L19.39,9.69L19.22,9.64L19.04,9.61L18.86,9.57L18.68,9.55L18.50,9.54L18.32,9.54L18.13,9.54L17.95,9.55L17.77,9.57L17.59,9.61L17.42,9.64L17.24,9.69L17.07,9.75L16.90,9.81L16.74,9.88L16.58,9.96L16.42,10.05L16.27,10.14L16.13,10.24L15.99,10.35L15.85,10.46L15.73,10.58L15.61,10.71L15.50,10.84L15.40,10.97L15.30,11.12L15.22,11.26L15.13,11.41L15.07,11.57L15,11.72L14.95,11.88L14.91,12.04L14.88,12.21L14.85,12.37L14.84,12.53L14.83,12.70L14.84,12.87L14.85,13.03L14.88,13.19L14.91,13.36L14.95,13.52L15,13.68L15.07,13.83L15.13,13.99L15.22,14.14L15.30,14.28L15.40,14.43L15.50,14.56L15.61,14.69L15.73,14.82L15.85,14.94L15.99,15.05L16.13,15.16L16.27,15.26L16.42,15.35L16.58,15.44L16.74,15.52L16.90,15.59L17.07,15.65L17.24,15.71L17.42,15.76L17.59,15.79L17.77,15.83L17.95,15.85L18.13,15.86L18.32,15.86L18.50,15.86L18.68,15.85L18.86,15.83L19.04,15.79L19.22,15.76L19.39,15.71L19.57,15.65L19.73,15.59L19.90,15.52L20.06,15.44L20.21,15.35L20.36,15.26L20.51,15.16L20.64,15.05L20.78,14.94L20.90,14.82L21.02,14.69L21.13,14.56L21.24,14.43L21.33,14.28L21.42,14.14L21.50,13.99L21.57,13.83L21.63,13.68L21.68,13.52L21.72,13.36L21.76,13.19L21.78,13.03L21.79,12.87L21.80,12.70Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M23.19,8.78 L27.09,5.57" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M21.13,10.47L24.85,8.70L23.19,8.78L23.58,7.16Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:53.06mm;top:105.05mm;width:51.40mm;height:28.47mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:11.62mm;">
                                        <div class="hls ps62" style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:50.39mm;">
                                            <span class="hrt cs84">○</span><span class="hrt cs6">미복귀시 Gas 누기</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:133.52mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">7</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:133.52mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각 부분 청소 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:133.52mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:133.52mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:138.39mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:138.39mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각종 명판 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:138.39mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:138.39mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:143.27mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:143.27mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">Gas Pipe 외관 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:143.27mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:143.27mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:148.15mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:148.15mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각종 Packing 접착 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:148.15mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:148.15mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:153.02mm;width:11.65mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">11</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:153.02mm;width:92.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각종 Bolt/Nut의 조임 상태</span>
                                        </div>
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:4.86mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">- 체크마크 확인 및 체크마크 표기</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:153.02mm;width:31.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:153.02mm;width:32.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:162.95mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:162.95mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각종 접지 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:162.95mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:162.95mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">설계기준 확인</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:167.82mm;width:11.65mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">13</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:167.82mm;width:92.81mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67" style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">표시램프 점등 상태</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:167.82mm;width:31.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:167.82mm;width:32.39mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps66"
                         style="line-height:68.20mm;white-space:nowrap;left:0;top:0;height:68.20mm;width:170mm;">
                        <div class="htb"
                             style="left:1mm;width:170.24mm;top:1mm;height:68.20mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 73.19"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:73.19mm;">
                                <path d="M0.20,7.68 L11.65,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.05 L11.65,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,7.68 L104.46,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,8.05 L104.46,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,7.68 L135.85,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,8.05 L135.85,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,7.68 L168.05,7.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,8.05 L168.05,8.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,66.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.65,0 L11.65,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M104.46,0 L104.46,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,0 L135.85,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M168.24,0 L168.24,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,7.87 L168.25,7.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,17.80 L168.25,17.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,32.78 L168.25,32.78"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,42.70 L168.25,42.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,48.58 L168.25,48.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,54.45 L168.25,54.45"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,60.32 L168.25,60.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,66.20 L168.25,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.24,0 L168.24,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,66.20" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,66.20 L168.25,66.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:0;width:92.81mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:91.81mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:0;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:0;width:32.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:7.87mm;width:11.65mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">14</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:7.87mm;width:92.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">LCP 및 조작함 Door 여닫힘 상태</span></div>
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:4.86mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">- Door의 제어케이블 간섭 여부 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:7.87mm;width:31.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:7.87mm;width:32.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:17.80mm;width:11.65mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.05mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">15</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:17.80mm;width:92.81mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">제어용전선, CT 2차배선</span></div>
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:4.86mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">&nbsp;- Door 장력, 외피손상 여부</span></div>
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:9.91mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">&nbsp;- Heater에 의한 표피 열손상 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:17.80mm;width:31.39mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.05mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:17.80mm;width:32.39mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.05mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:32.78mm;width:11.65mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">16</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:32.78mm;width:92.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">각종 단자대 점검</span></div>
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:4.86mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">&nbsp;- 단자탈락, 표피 변형, 과다장력, 단자조임등</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:32.78mm;width:31.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:32.78mm;width:32.39mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:42.70mm;width:11.65mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">17</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:42.70mm;width:92.81mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">CT 결선 (Ratio, 결선), 정정표 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:42.70mm;width:31.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:42.70mm;width:32.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:48.58mm;width:11.65mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">18</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:48.58mm;width:92.81mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">인출케이블 과다장력 여부(지지 크리트 시공여부)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:48.58mm;width:31.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:48.58mm;width:32.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:54.45mm;width:11.65mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs25">19</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:54.45mm;width:92.81mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps82"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs25">케이블 접속부 점검(볼트 풀림 여부등)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:54.45mm;width:31.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:54.45mm;width:32.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:60.32mm;width:11.65mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs25">20</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:60.32mm;width:92.81mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps67"
                                             style="line-height:3.10mm;white-space:nowrap;left:2.13mm;top:-0.19mm;height:3.88mm;width:89.67mm;">
                                            <span class="hrt cs5">GIS 내부, 외부 발청상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:104.46mm;top:60.32mm;width:31.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:60.32mm;width:32.39mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps66"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:69.25mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:74.76mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">5. 조작함, 조작기구, 제어회로 점검</span></div>
                    <div class="hls ps3"
                         style="line-height:147.01mm;white-space:nowrap;left:0;top:82.59mm;height:147.01mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:170.24mm;top:0.50mm;height:147.01mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 152.01"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:152.01mm;">
                                <path d="M0.20,6.69 L11.81,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.06 L11.81,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,6.69 L29.62,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,7.06 L29.62,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,6.69 L100.48,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,7.06 L100.48,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.69 L126.06,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,7.06 L126.06,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,6.69 L148.65,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,7.06 L148.65,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,6.69 L169.05,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,7.06 L169.05,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,6.83 L11.81,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,6.91 L11.81,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,31.56 L11.81,31.56"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,31.64 L11.81,31.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.83 L29.56,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.91 L29.56,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,31.56 L29.56,31.56"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,31.64 L29.56,31.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,31.56 L11.81,31.56"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,31.64 L11.81,31.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,31.56 L29.56,31.56"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,31.64 L29.56,31.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0,0 L0,146.02" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.81,0 L11.81,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,0 L29.62,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,0 L100.48,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,0 L126.06,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,0 L148.65,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M169.24,0 L169.24,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M29.62,6.87 L100.49,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.87 L169.25,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,16.80 L100.49,16.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,16.80 L169.25,16.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,21.67 L100.49,21.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,21.67 L169.25,21.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,31.60 L100.49,31.60"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,31.60 L169.25,31.60"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,39.47 L100.49,39.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,39.47 L169.25,39.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,54.39 L100.49,54.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,54.39 L169.25,54.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,61.26 L100.49,61.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,61.26 L169.25,61.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,123.17 L100.49,123.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,123.17 L169.25,123.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,136.09 L100.49,136.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,136.09 L169.25,136.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,146.02 L169.25,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M169.24,0 L169.24,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,146.02" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,146.02 L169.25,146.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:0;width:17.80mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점검항목</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:0;width:70.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:0;width:25.58mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:0;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:0;width:20.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.87mm;width:11.81mm;height:24.73mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.93mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:6.87mm;width:17.80mm;height:24.73mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.40mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">일 반</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점 검</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:6.87mm;width:70.86mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">각종 Bolt / Nut의 조임상태</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">- 체크마크 확인 및 체크마크 표기</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:6.87mm;width:25.58mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:6.87mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:6.87mm;width:20.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:16.80mm;width:70.86mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;연결부, 활동부 등의 청소</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:16.80mm;width:25.58mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:16.80mm;width:22.59mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:16.80mm;width:20.59mm;height:4.88mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:21.67mm;width:70.86mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">전력케이블 및 제어케이블 인출부</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">방화구획재 시공 상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:21.67mm;width:25.58mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:21.67mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:21.67mm;width:20.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">설계기준&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:31.60mm;width:11.81mm;height:114.42mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:54.77mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:31.60mm;width:17.80mm;height:114.42mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:54.77mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">메커니즘</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:31.60mm;width:70.86mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;메커니즘 내부 각종 발청, 마모 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:31.60mm;width:25.58mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:31.60mm;width:22.59mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:31.60mm;width:20.59mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:39.47mm;width:70.86mm;height:14.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.49mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;CB 조작 메커니즘과 조작 Link간</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Bolt 체결상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:39.47mm;width:25.58mm;height:14.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.02mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:39.47mm;width:22.59mm;height:14.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:39.47mm;width:20.59mm;height:14.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:54.39mm;width:70.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span><span
                                                class="hrt cs59">DS 조작기구 구동축 연결 Bolt 이완여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:54.39mm;width:25.58mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:54.39mm;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:54.39mm;width:20.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:61.26mm;width:70.86mm;height:61.91mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.07mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;DS Over-Run 여부</span></div>
                                        <div class="hls ps8"
                                             style="line-height:25.40mm;white-space:nowrap;left:0;top:5.05mm;height:25.40mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:25.42mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 25.72" class="hs"
                                                     style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:25.72mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd4" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd4.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="25.42" fill="url(#ttestt_hd4)"></rect>
                                                    <path d="M18.31,6.88 L18.39,2.89" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M18.24,10.87L19.35,4.90L18.31,6.88L17.35,4.86Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:31.43mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs52">DS 수동조작부 상태표시점(꼭지점)</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:36.48mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;12시 방향 지시여부 확인</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:41.53mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;☞ 불일치시 다른 CB, DS 조작불가</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:46.58mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs60">DS 정지는 End Position Limit S/W에</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:51.63mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;</span><span class="hrt cs94">동작하므로 S/W 불량시 DS 조작상태</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:56.68mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs94">&nbsp;&nbsp;&nbsp;불량</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:61.26mm;width:25.58mm;height:61.91mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:28.51mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">12시방향</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:61.26mm;width:22.59mm;height:61.91mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:28.51mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:61.26mm;width:20.59mm;height:61.91mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:23.46mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">제작사별</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">취급설명서</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:123.17mm;width:70.86mm;height:12.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Limit SW (CB, DS)</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;-&nbsp;</span><span class="hrt cs78">지지/고정 상태, 탈락, 변형, 동작중 걸림 등</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:123.17mm;width:25.58mm;height:12.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.02mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:123.17mm;width:22.59mm;height:12.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:123.17mm;width:20.59mm;height:12.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:136.09mm;width:70.86mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;ES Inter-Lock 해제용 레버 복귀상태</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- 그리스 고착여부 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:136.09mm;width:25.58mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:136.09mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:136.09mm;width:20.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps3"
                         style="line-height:230.83mm;white-space:nowrap;left:0;top:0;height:230.83mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:170.24mm;top:0.50mm;height:230.83mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 235.83"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:235.83mm;">
                                <path d="M0.20,6.69 L11.81,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.06 L11.81,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,6.69 L29.62,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,7.06 L29.62,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,6.69 L100.48,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,7.06 L100.48,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.69 L126.06,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,7.06 L126.06,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,6.69 L148.65,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,7.06 L148.65,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,6.69 L169.05,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,7.06 L169.05,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,6.83 L11.81,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,6.91 L11.81,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.83 L29.56,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.91 L29.56,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0,0 L0,229.84" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.81,0 L11.81,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,0 L29.62,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,0 L100.48,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,0 L126.06,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,0 L148.65,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M169.24,0 L169.24,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M29.62,6.87 L100.49,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.87 L169.25,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,21.85 L100.49,21.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,21.85 L169.25,21.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,54.61 L100.49,54.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,54.61 L169.25,54.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,64.54 L100.49,64.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,64.54 L169.25,64.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,103.09 L100.49,103.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,103.09 L169.25,103.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,163.70 L100.49,163.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,163.70 L169.25,163.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,229.84 L169.25,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M169.24,0 L169.24,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,229.84" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,229.84 L169.25,229.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:0;width:17.80mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점검항목</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:0;width:70.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:0;width:25.58mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:0;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:0;width:20.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.87mm;width:11.81mm;height:222.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:109.04mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:6.87mm;width:17.80mm;height:222.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:109.04mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">메커니즘</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:6.87mm;width:70.86mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">Hook의 걸림 및 마모상태, Hook Gap</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">이상 유무</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">- Trip 및 Closing Latch 접촉량 등</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:6.87mm;width:25.58mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">제작사</span></div>
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">기준 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:6.87mm;width:22.59mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.05mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:6.87mm;width:20.59mm;height:14.98mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">취급설명서</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:21.85mm;width:70.86mm;height:32.76mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;베어링 이상 유무</span></div>
                                        <div class="hls ps8"
                                             style="line-height:26.71mm;white-space:nowrap;left:0;top:5.05mm;height:26.71mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:26.74mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 27.04"
                                                     style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:27.04mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd5" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd5.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="26.74" fill="url(#ttestt_hd5)"></rect>
                                                    <path fill="none" d="M23.68,14.64L23.67,14.42L23.65,14.20L23.61,13.98L23.57,13.77L23.50,13.55L23.42,13.34L23.33,13.13L23.22,12.93L23.10,12.73L22.97,12.54L22.82,12.35L22.67,12.17L22.50,11.99L22.31,11.83L22.12,11.67L21.92,11.51L21.71,11.37L21.49,11.24L21.26,11.11L21.02,11L20.78,10.89L20.52,10.80L20.27,10.71L20,10.64L19.74,10.58L19.47,10.53L19.19,10.49L18.92,10.46L18.64,10.44L18.36,10.44L18.08,10.44L17.80,10.46L17.53,10.49L17.25,10.53L16.98,10.58L16.71,10.64L16.45,10.71L16.19,10.80L15.94,10.89L15.70,11L15.46,11.11L15.23,11.24L15.01,11.37L14.80,11.51L14.59,11.67L14.40,11.83L14.22,11.99L14.05,12.17L13.89,12.35L13.75,12.54L13.61,12.73L13.49,12.93L13.39,13.13L13.30,13.34L13.22,13.55L13.15,13.77L13.10,13.98L13.06,14.20L13.04,14.42L13.04,14.64L13.04,14.86L13.06,15.08L13.10,15.30L13.15,15.52L13.22,15.73L13.30,15.94L13.39,16.15L13.49,16.35L13.61,16.55L13.75,16.74L13.89,16.93L14.05,17.11L14.22,17.29L14.40,17.46L14.59,17.61L14.80,17.77L15.01,17.91L15.23,18.04L15.46,18.17L15.70,18.28L15.94,18.39L16.19,18.48L16.45,18.57L16.71,18.64L16.98,18.70L17.25,18.75L17.53,18.79L17.80,18.82L18.08,18.84L18.36,18.85L18.64,18.84L18.92,18.82L19.19,18.79L19.47,18.75L19.74,18.70L20,18.64L20.27,18.57L20.52,18.48L20.78,18.39L21.02,18.28L21.26,18.17L21.49,18.04L21.71,17.91L21.92,17.77L22.12,17.61L22.31,17.46L22.50,17.29L22.67,17.11L22.82,16.93L22.97,16.74L23.10,16.55L23.22,16.35L23.33,16.15L23.42,15.94L23.50,15.73L23.57,15.52L23.61,15.30L23.65,15.08L23.67,14.86L23.68,14.64Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:21.85mm;width:25.58mm;height:32.76mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.94mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:21.85mm;width:22.59mm;height:32.76mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.94mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:21.85mm;width:20.59mm;height:32.76mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.94mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:54.61mm;width:70.86mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;CB, DS 각종 Link 점검&nbsp;</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;- 적정길이, 간격, 이탈여부 등</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:54.61mm;width:25.58mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">제작사</span></div>
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">기준 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:54.61mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:54.61mm;width:20.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">취급설명서</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:64.54mm;width:70.86mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">각종 축 고정장치용 핀류의 상태 및</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">이탈 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:64.54mm;width:25.58mm;height:38.55mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.84mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:64.54mm;width:22.59mm;height:38.55mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.84mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:64.54mm;width:20.59mm;height:38.55mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.84mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:74.46mm;width:41.42mm;height:28.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:27.63mm;white-space:nowrap;left:0;top:0;height:27.63mm;width:40.41mm;">
                                            <div class="hsR"
                                                 style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:27.66mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 27.95"
                                                     style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:27.95mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd6" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd6.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="27.66" fill="url(#ttestt_hd6)"></rect>
                                                    <path fill="none" d="M12.49,12.34L18.24,5.43L24.25,15.40L18.95,23.47L12.49,12.34Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                </svg>
                                                <div class="hsT" style="left:22.76mm;top:0.97mm;width:13.13mm;height:5.28mm;">
                                                    <svg class="hs" viewBox="-0.30 -0.30 13.72 5.88"
                                                         style="left:-0.15mm;top:-0.15mm;width:13.42mm;height:5.58mm;">
                                                        <defs>
                                                            <pattern id="w_30" width="10" height="10" patternUnits="userSpaceOnUse">
                                                                <rect width="10" height="10" fill="rgb(255,255,255)"/>
                                                            </pattern>
                                                        </defs>
                                                        <path fill="url(#w_30)" d="M0.06,0.06L13.07,0.06L13.07,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    </svg>
                                                    <div class="hcD" style="left:1.05mm;top:1.05mm;">
                                                        <div class="hcI">
                                                            <div class="hls ps12"
                                                                 style="line-height:2.48mm;white-space:nowrap;left:0;top:-0.16mm;height:3.17mm;width:11.01mm;">
                                                                <span class="hrt cs47">서클립</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:71.04mm;top:74.46mm;width:29.44mm;height:28.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.30mm;">
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.45mm;">
                                            <span class="hrt cs52">☞ 분할핀</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:28.45mm;">
                                            <span class="hrt cs52">☞ 서클립</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:28.45mm;">
                                            <span class="hrt cs52">☞ C링</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:28.45mm;">
                                            <span class="hrt cs52">☞ E링 등</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:103.09mm;width:70.86mm;height:60.61mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.15mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;구동부 Grease 도포</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;(기존 Grease 및 이물질 제거 후)</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- Grese 제거/재도포, 변색상태 등</span></div>
                                        <div class="hls ps8"
                                             style="line-height:28.05mm;white-space:nowrap;left:0;top:15.16mm;height:28.05mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;left:0;margin-bottom:0;margin-right:0;width:37.12mm;height:28.08mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hd7.png') }});"></div>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:44.18mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs93">점검시 마다 그리스 제거 및 재도포 시행</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:49.23mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○</span><span
                                                class="hrt cs52">&nbsp;제작사별 주유 권장개소 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:103.09mm;width:25.58mm;height:60.61mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:22.81mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">유지보수업무</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">Guide - 01</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:103.09mm;width:22.59mm;height:60.61mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:27.87mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:103.09mm;width:20.59mm;height:60.61mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:25.34mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">규격품&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">사용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:163.70mm;width:70.86mm;height:66.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:6.36mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Spring의 발청, 손상, 변형</span></div>
                                        <div class="hls ps8"
                                             style="line-height:27.17mm;white-space:nowrap;left:0;top:5.05mm;height:27.17mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:27.20mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 27.50" style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:27.50mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd8" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd8.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="27.20" fill="url(#ttestt_hd8)"></rect>
                                                    <path d="M27.72,13.81 L31.52,10.81" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M25.63,15.46L29.38,13.77L27.72,13.81L28.15,12.20Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                    <path d="M5.45,12.35 L2.17,9.92" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M7.59,13.93L4.97,10.75L5.45,12.35L3.79,12.36Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:33.20mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span
                                                class="hrt cs52">3개의 스프링으로 구성</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:38.25mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;☞</span><span class="hrt cs67">&nbsp;OPEN, Closing, Wiper(조작 완충용)</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:43.30mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○</span><span class="hrt cs85">&nbsp;</span><span
                                                class="hrt cs92">스프링 압축 또는 이완시 길이 측정</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:48.36mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;☞ 스프링 장력 변화 여부 판정</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:163.70mm;width:25.58mm;height:66.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:28.11mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">제작사</span></div>
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">기준 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:163.70mm;width:22.59mm;height:66.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:30.63mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:163.70mm;width:20.59mm;height:66.14mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:30.63mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps3"
                         style="line-height:230.51mm;white-space:nowrap;left:0;top:0;height:230.51mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:170.24mm;top:0.50mm;height:230.51mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 235.51"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:235.51mm;">
                                <path d="M0.20,6.69 L11.81,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.06 L11.81,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,6.69 L29.62,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,7.06 L29.62,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,6.69 L100.48,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,7.06 L100.48,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.69 L126.06,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,7.06 L126.06,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,6.69 L148.65,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,7.06 L148.65,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,6.69 L169.05,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,7.06 L169.05,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,6.83 L11.81,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,6.91 L11.81,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.83 L29.56,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.91 L29.56,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0,0 L0,229.52" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.81,0 L11.81,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,0 L29.62,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,0 L100.48,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,0 L126.06,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,0 L148.65,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M169.24,0 L169.24,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M29.62,6.87 L100.49,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.87 L169.25,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,94.93 L100.49,94.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,94.93 L169.25,94.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,113.90 L100.49,113.90"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,113.90 L169.25,113.90"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,136.93 L100.49,136.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,136.93 L169.25,136.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,174.51 L100.49,174.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,174.51 L169.25,174.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,185.44 L100.49,185.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,185.44 L169.25,185.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,229.52 L169.25,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M169.24,0 L169.24,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,229.52" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,229.52 L169.25,229.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:0;width:17.80mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점검항목</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:0;width:70.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:0;width:25.58mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:0;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:0;width:20.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.87mm;width:11.81mm;height:222.64mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:108.88mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:6.87mm;width:17.80mm;height:222.64mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:108.88mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">메커니즘</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:6.87mm;width:70.86mm;height:88.06mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.55mm;">
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Shaft 및 CAM 이상 유무</span></div>
                                        <div class="hls ps8"
                                             style="line-height:26.38mm;white-space:nowrap;left:0;top:5.05mm;height:26.38mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:26.41mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 26.71" style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:26.71mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hd9" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hd9.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="26.41" fill="url(#ttestt_hd9)"></rect>
                                                    <path fill="none" d="M12.49,8.66L23.98,7.31L25.77,14.58L23.35,22.39L12.04,19.52L12.49,8.66Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.30;"></path>
                                                    <path d="M10.30,8.90 L7.10,6.15" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M12.31,10.64L9.94,7.27L10.30,8.90L8.64,8.78Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                </svg>
                                                <div class="hsT" style="left:1.85mm;top:1.06mm;width:9.99mm;height:5.28mm;">
                                                    <svg class="hs" viewBox="-0.30 -0.30 10.58 5.88"
                                                         style="left:-0.15mm;top:-0.15mm;width:10.29mm;height:5.58mm;">
                                                        <defs>
                                                            <pattern id="w_40" width="10" height="10" patternUnits="userSpaceOnUse">
                                                                <rect width="10" height="10" fill="rgb(255,255,255)"/>
                                                            </pattern>
                                                        </defs>
                                                        <path fill="url(#w_40)" d="M0.06,0.06L9.93,0.06L9.93,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    </svg>
                                                    <div class="hcD" style="left:1.05mm;top:1.05mm;">
                                                        <div class="hcI">
                                                            <div class="hls ps12" style="line-height:2.48mm;white-space:nowrap;left:0;top:-0.16mm;height:3.17mm;width:7.87mm;">
                                                                <span class="hrt cs47">CAM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:32.41mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs52">캠은 CB ON/OFF 상태에서&nbsp;</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:37.46mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">자유롭게</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:42.52mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;움직여야 함.</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:47.57mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs90">캠 공차 불량시 보조접점 동작불량 유발</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:52.62mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;☞&nbsp;</span><span class="hrt cs94">기계적으로는 이상이 없으나,</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:57.67mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs94">&nbsp;&nbsp;&nbsp;전기적으로</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:62.72mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;&nbsp;모터 및 체인소손 유발 가능</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:67.78mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span
                                                class="hrt cs52">공차 불일치시 캠 교체</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:72.83mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs60">캠(DS 기계적 보조접점용) 그리스 제거</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:77.88mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;&nbsp;및 재도포</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:6.87mm;width:25.58mm;height:88.06mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:39.07mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs92">캠 움직임</span><span class="hrt cs52">&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">원활 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:6.87mm;width:22.59mm;height:88.06mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:41.59mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:6.87mm;width:20.59mm;height:88.06mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:41.59mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:94.93mm;width:70.86mm;height:18.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">Close/Trip Coil 손상 유무</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">- 고정 지지용 Spring의 유지상태</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">- 동작봉과 접점편 적정이격거리 확보</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:94.93mm;width:25.58mm;height:18.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.52mm;">
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">제작사별</span></div>
                                        <div class="hls ps70"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">기준 참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:94.93mm;width:22.59mm;height:18.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.05mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:94.93mm;width:20.59mm;height:18.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">취급설명서</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:113.90mm;width:70.86mm;height:23.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Motor 점검</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;(Spring Charger 및 DS 구동용)</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- 동작중 이음, 온도상승, 외피변색,</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;&nbsp;&nbsp;고정상태/흔들림</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:113.90mm;width:25.58mm;height:23.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.07mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:113.90mm;width:22.59mm;height:23.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.07mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:113.90mm;width:20.59mm;height:23.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.07mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:136.93mm;width:70.86mm;height:37.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Dashpot 압축유 누유 여부</span>
                                        </div>
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- 압축유 주입량 : 10cc</span>
                                        </div>
                                        <div class="hls ps8" style="line-height:25.48mm;white-space:nowrap;left:0;top:10.10mm;height:25.48mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR" style="top:0;margin-bottom:0;left:0;margin-right:0;width:37.12mm;height:25.51mm;display:inline-block;position:relative;vertical-align:middle;">
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 25.81" style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:25.81mm;">
                                                    <defs>
                                                        <pattern id="ttestt_hda" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                                                            <image width="1" height="1" preserveAspectRatio="none" xlink:href="{{ url('/image/ttestt/ttestt_hda.png') }}"/>
                                                        </pattern>
                                                    </defs>
                                                    <rect x="-0.01" y="-0.01" width="37.12" height="25.51" fill="url(#ttestt_hda)"></rect>
                                                    <path d="M6.82,10.74 L3.43,5.52" style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                                    <path d="M8.27,12.97L6.93,9.08L6.82,10.74L5.26,10.16Z " style="fill:#FF0000;stroke:none;stroke-width:0;stroke-width:0.40;"></path>
                                                </svg>
                                                <div class="hsT" style="left:0.68mm;top:0.68mm;width:12.23mm;height:5.28mm;">
                                                    <svg class="hs" viewBox="-0.30 -0.30 12.82 5.88" style="left:-0.15mm;top:-0.15mm;width:12.52mm;height:5.58mm;">
                                                        <path fill="url(#w_40)" d="M0.06,0.06L12.17,0.06L12.17,5.23L0.06,5.23L0.06,0.06Z " style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                                    </svg>
                                                    <div class="hcD" style="left:1.05mm;top:1.05mm;">
                                                        <div class="hcI">
                                                            <div class="hls ps12" style="line-height:2.48mm;white-space:nowrap;left:0;top:-0.16mm;height:3.17mm;width:10.12mm;">
                                                                <span class="hrt cs66">Dashpot</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <svg class="hs" viewBox="-0.15 -0.15 37.42 25.81" style="left:-0.15mm;top:-0.15mm;width:37.42mm;height:25.81mm;">
                                                    <path fill="none" d="M18.50,4.71L8.72,8.66L8.72,22.31L28.47,22.48L28.47,8.57L18.50,4.71Z " style="stroke:#FF0000;stroke-linecap:butt;stroke-width:0.30;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:136.93mm;width:25.58mm;height:37.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.83mm;">
                                        <div class="hls ps70" style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">제작사별</span>
                                        </div>
                                        <div class="hls ps70" style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs52">기준 참조</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:136.93mm;width:22.59mm;height:37.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.35mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:136.93mm;width:20.59mm;height:37.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.35mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:174.51mm;width:70.86mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;DS, ES 구동용 체인</span>
                                        </div>
                                        <div class="hls ps6" style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- 탈락, 변형, 적정장력 등</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:174.51mm;width:25.58mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:174.51mm;width:22.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:174.51mm;width:20.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:185.44mm;width:70.86mm;height:44.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.09mm;">
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs61">&nbsp;V.I 접점마모도 측정용 지그 이상 유무</span>
                                        </div>
                                        <div class="hls ps8" style="line-height:27.75mm;white-space:nowrap;left:0;top:5.05mm;height:27.75mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR" style="top:0;left:0;margin-bottom:0;margin-right:0;width:37.12mm;height:27.78mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdb.png') }});"></div>
                                        </div>
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:33.78mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs52">극간격 설계값 : 제작사 기준 참고</span>
                                        </div>
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:38.83mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span>
                                            <span class="hrt cs52">지그가 설치된 설비에 해당</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:185.44mm;width:25.58mm;height:44.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:17.07mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs92">설치시</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs92">시 &nbsp;행</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:185.44mm;width:22.59mm;height:44.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:19.60mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:185.44mm;width:20.59mm;height:44.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:14.55mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">필요시</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">제작사</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs52">요 &nbsp;청</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps3"
                         style="line-height:3.10mm;white-space:nowrap;left:0;top:233.42mm;height:3.88mm;width:170mm;"></div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps3"
                         style="line-height:233.22mm;white-space:nowrap;left:0;top:0;height:233.22mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:170.24mm;top:0.50mm;height:233.22mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 175.24 238.22"
                                 style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:238.22mm;">
                                <path d="M0.20,6.69 L11.81,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.06 L11.81,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,6.69 L29.62,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.81,7.06 L29.62,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,6.69 L100.48,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,7.06 L100.48,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.69 L126.06,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,7.06 L126.06,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,6.69 L148.65,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,7.06 L148.65,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,6.69 L169.05,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,7.06 L169.05,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,6.83 L11.81,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,6.91 L11.81,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,117.17 L11.81,117.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,117.26 L11.81,117.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.83 L29.56,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,6.91 L29.56,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,117.17 L29.56,117.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,117.26 L29.56,117.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,117.17 L11.81,117.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,117.26 L11.81,117.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,162.46 L11.81,162.46"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,162.55 L11.81,162.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,117.17 L29.56,117.17"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,117.26 L29.56,117.26"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,162.46 L29.56,162.46"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,162.55 L29.56,162.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,162.46 L11.81,162.46"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,162.55 L11.81,162.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,162.46 L29.56,162.46"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M11.81,162.55 L29.56,162.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0,0 L0,232.23" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M11.81,0 L11.81,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M29.62,0 L29.62,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,0 L100.48,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M126.06,0 L126.06,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M148.65,0 L148.65,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M169.24,0 L169.24,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M29.62,6.87 L100.49,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,6.87 L169.25,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,12.75 L100.49,12.75"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,12.75 L169.25,12.75"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,18.62 L100.49,18.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,18.62 L169.25,18.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,29.55 L100.49,29.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,29.55 L169.25,29.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,65.58 L100.49,65.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,65.58 L169.25,65.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,76.50 L100.49,76.50"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,76.50 L169.25,76.50"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,82.38 L100.49,82.38"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,82.38 L169.25,82.38"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,88.25 L100.49,88.25"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,88.25 L169.25,88.25"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,117.22 L100.49,117.22"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,117.22 L169.25,117.22"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,162.51 L100.49,162.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,162.51 L169.25,162.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M29.62,199.65 L100.49,199.65"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.48,199.65 L169.25,199.65"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,232.23 L169.25,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M169.24,0 L169.24,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,232.23" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,232.23 L169.25,232.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:0;width:17.80mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점검항목</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:0;width:70.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:0;width:25.58mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:0;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:0;width:20.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.87mm;width:11.81mm;height:110.35mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:52.73mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:6.87mm;width:17.80mm;height:110.35mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:52.73mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">제어회로</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:6.87mm;width:70.86mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">&nbsp;저압회로 볼트 조임상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:6.87mm;width:25.58mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:6.87mm;width:22.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:6.87mm;width:20.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:12.75mm;width:70.86mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">&nbsp;저압회로 배선정리 상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:12.75mm;width:25.58mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:12.75mm;width:22.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:12.75mm;width:20.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:18.62mm;width:70.86mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">&nbsp;보조계전기 발열 및 탄화 유무</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs5">&nbsp;- 불량시 교체</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:18.62mm;width:25.58mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">1회/12년</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">교체</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:18.62mm;width:22.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:18.62mm;width:20.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:29.55mm;width:70.86mm;height:36.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;ES Lock용 접점 동작 상태</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- Lock Pin 분리시 “딸깍”소리 확인</span></div>
                                        <div class="hls ps6"
                                             style="line-height:23.94mm;white-space:nowrap;left:0;top:10.10mm;height:23.94mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;left:0;margin-bottom:0;margin-right:0;width:36.71mm;height:23.96mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdc.png') }});"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:29.55mm;width:25.58mm;height:36.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:15.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:29.55mm;width:22.59mm;height:36.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:15.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:29.55mm;width:20.59mm;height:36.03mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:15.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:65.58mm;width:70.86mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;CB, DS 기계적 접점 (a, b접점 상태)</span></div>
                                        <div class="hls ps39"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;- 기계적 a, b보조 접점 측정</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:65.58mm;width:25.58mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:65.58mm;width:22.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:65.58mm;width:20.59mm;height:10.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.02mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:76.50mm;width:70.86mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;Multi-Socket 접촉상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:76.50mm;width:25.58mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:76.50mm;width:22.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:76.50mm;width:20.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:82.38mm;width:70.86mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs63">CT 및 제어회로 터미널 단자 손상 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:82.38mm;width:25.58mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:82.38mm;width:22.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:82.38mm;width:20.59mm;height:5.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:88.25mm;width:70.86mm;height:28.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs63">CT 2차회로 단선여부</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:21.92mm;white-space:nowrap;left:0;top:5.05mm;height:21.92mm;width:69.86mm;">
                                            <div class="hsR"
                                                 style="top:0;left:0;margin-bottom:0;margin-right:0;width:36.94mm;height:21.95mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdd.png') }});"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:88.25mm;width:25.58mm;height:28.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:6.99mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">유지보수업무</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">Guide - 02</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:24.58mm;">
                                            <span class="hrt cs5">참조</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:88.25mm;width:22.59mm;height:28.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:12.04mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:88.25mm;width:20.59mm;height:28.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:12.04mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:117.22mm;width:11.81mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:20.21mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs52">4</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:117.22mm;width:17.80mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:20.21mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs52">보조기기</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:117.22mm;width:70.86mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;재폐로용 LPS 접점 Pass</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs85">최종 가압후 감도 조절 및 3상 전압측정</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○&nbsp;</span><span class="hrt cs79">LPS 79Ry Blocking 미사용 개소 “b"접점</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;&nbsp;&nbsp;&nbsp;Common 확인</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:20.01mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;GIS용 보조계전기 KIT(SSCR)</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:25.06mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○ SSCR 동작상태 및 램프점검</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:30.12mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○ 점검프로그램 활용한 동작상태 점검</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:35.17mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○ GIS 제작사별 Tag Program 확인</span></div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:40.22mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;○ Cable 접속용 Connector 단자 점검</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:117.22mm;width:25.58mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:20.21mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:117.22mm;width:22.59mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:20.21mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:117.22mm;width:20.59mm;height:45.29mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:20.21mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:162.51mm;width:11.81mm;height:69.72mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:32.42mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                            <span class="hrt cs5">5</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.81mm;top:162.51mm;width:17.80mm;height:69.72mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:29.90mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">보호</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">계전기</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:162.51mm;width:70.86mm;height:37.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.32mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;보호계전기 이상유무</span></div>
                                        <div class="hls ps6"
                                             style="line-height:25.40mm;white-space:nowrap;left:0;top:5.05mm;height:25.40mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR"
                                                 style="top:0;left:0;margin-bottom:0;margin-right:0;width:37.52mm;height:25.43mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hde.png') }});"></div>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:31.43mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;</span><span
                                                class="hrt cs52">○ 정정표에 따른 Setting치 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:162.51mm;width:25.58mm;height:37.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.14mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:162.51mm;width:22.59mm;height:37.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.14mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:162.51mm;width:20.59mm;height:37.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:16.14mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:29.62mm;top:199.65mm;width:70.86mm;height:32.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps8" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:69.86mm;">
                                            <span class="hrt cs77">&nbsp;</span>
                                            <span class="hrt cs52">Static Type Noise Filter 설치 여부</span>
                                        </div>
                                        <div class="hls ps8"
                                             style="line-height:25.53mm;white-space:nowrap;left:0;top:5.05mm;height:25.53mm;width:69.86mm;">
                                            <span class="hrt cs52">&nbsp;</span>
                                            <div class="hsR" style="top:0;left:0;margin-bottom:0;margin-right:0;width:37.46mm;height:25.56mm;display:inline-block;position:relative;vertical-align:middle;background-repeat:no-repeat;background-image:url({{ url('/image/ttestt/ttestt_hdf.png') }});"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.48mm;top:199.65mm;width:25.58mm;height:32.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.85mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.58mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:126.06mm;top:199.65mm;width:22.59mm;height:32.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.85mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:148.65mm;top:199.65mm;width:20.59mm;height:32.58mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:13.85mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:236.12mm;height:4.23mm;width:170mm;"></div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs72">6. SF</span><span class="hrt cs44">6</span><span class="hrt cs72">&nbsp;Gas 분석</span>
                    </div>
                    <div class="hls ps11"
                         style="line-height:55.46mm;white-space:nowrap;left:0;top:6.77mm;height:55.46mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:167.82mm;top:0.50mm;height:55.46mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 172.82 60.46"
                                 style="left:-2.50mm;top:-2.50mm;width:172.82mm;height:60.46mm;">
                                <path d="M11.63,0.20 L11.63,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,0.20 L12,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.96 L11.69,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.33 L11.69,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.63,0.20 L11.63,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,0.20 L12,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.94,8.96 L44.70,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.94,9.33 L44.70,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.70,8.96 L67.88,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.70,9.33 L67.88,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.88,8.96 L106.48,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.88,9.33 L106.48,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M106.48,8.96 L133.33,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M106.48,9.33 L133.33,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M133.33,8.96 L151.97,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M133.33,9.33 L151.97,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M151.97,8.96 L166.63,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M151.97,9.33 L166.63,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.63,9.27 L11.63,29.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,9.27 L12,29.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.96 L11.69,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.33 L11.69,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.63,9.27 L11.63,29.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,9.27 L12,29.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.94,8.96 L44.70,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.94,9.33 L44.70,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.65,8.96 L67.88,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M44.65,9.33 L67.88,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.94,8.96 L106.48,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.94,9.33 L106.48,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M106.54,8.96 L133.33,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M106.54,9.33 L133.33,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M133.33,8.96 L151.97,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M133.33,9.33 L151.97,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M151.97,8.96 L166.63,8.96"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M151.97,9.33 L166.63,9.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.63,29.82 L11.63,54.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,29.82 L12,54.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.63,29.82 L11.63,54.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12,29.82 L12,54.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,54.47" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M44.70,9.15 L44.70,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.88,0 L67.88,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M106.48,0 L106.48,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M133.33,0 L133.33,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M151.97,0 L151.97,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M166.82,0 L166.82,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L166.83,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M44.70,16.02 L67.88,16.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M106.48,16.02 L166.83,16.02"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M44.70,22.90 L67.88,22.90"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M106.48,22.90 L166.83,22.90"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,29.77 L166.83,29.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M44.70,37.64 L67.88,37.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M106.48,37.64 L166.83,37.64"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M44.70,45.51 L67.88,45.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M106.48,45.51 L166.83,45.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,54.47 L166.83,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M166.82,0 L166.82,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,54.47" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,54.47 L166.83,54.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L166.83,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.82mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.82mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.82mm;top:0;width:56.06mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.06mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.88mm;top:0;width:38.60mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:37.61mm;">
                                            <span class="hrt cs5">판정기준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:0;width:26.85mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.85mm;">
                                            <span class="hrt cs5">측 정 치</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:0;width:18.64mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">점검</span></div>
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.08mm;height:3.88mm;width:17.64mm;">
                                            <span class="hrt cs5">결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:0;width:14.86mm;height:9.15mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.15mm;width:11.82mm;height:20.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.87mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.82mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.82mm;top:9.15mm;width:32.89mm;height:20.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:7.87mm;">
                                        <div class="hls ps35"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:30.13mm;">
                                            <span class="hrt cs5">SO</span><span class="hrt cs33">2</span><span class="hrt cs5">&nbsp;함유량 측정</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:9.15mm;width:23.17mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs5">CB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.88mm;top:9.15mm;width:38.60mm;height:20.62mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:4.38mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:37.61mm;">
                                            <span class="hrt cs5">1 PPMv</span></div>
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:6.79mm;height:3.88mm;width:37.61mm;">
                                            <span class="hrt cs5">이하</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:9.15mm;width:26.85mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:9.15mm;width:18.64mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:9.15mm;width:14.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:16.02mm;width:23.17mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs5">#1 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:16.02mm;width:26.85mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:16.02mm;width:18.64mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:16.02mm;width:14.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:22.90mm;width:23.17mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs5">#2 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:22.90mm;width:26.85mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:22.90mm;width:18.64mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:22.90mm;width:14.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:29.77mm;width:11.82mm;height:24.70mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.91mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.82mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.82mm;top:29.77mm;width:32.89mm;height:24.70mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:9.91mm;">
                                        <div class="hls ps35"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:30.13mm;">
                                            <span class="hrt cs28">수분 함유량 측정</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:29.77mm;width:23.17mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs52">CB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.88mm;top:29.77mm;width:38.60mm;height:24.70mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.42mm;">
                                        <div class="hls ps71"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:-0.16mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs53">◦CB</span></div>
                                        <div class="hls ps71"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:3.65mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs74">&nbsp;- 관리치 :&nbsp;</span><span class="hrt cs55">200PPMv&nbsp;</span><span
                                                class="hrt cs74">이하</span></div>
                                        <div class="hls ps72"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:7.46mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs74">&nbsp;- 허용치 : 300PPMv 이하</span></div>
                                        <div class="hls ps71"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:11.91mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs53">◦기타</span></div>
                                        <div class="hls ps71"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:15.72mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs74">&nbsp;- 관리치 : 300PPMv 이하</span></div>
                                        <div class="hls ps71"
                                             style="line-height:2.48mm;white-space:nowrap;left:1.06mm;top:19.53mm;height:3.17mm;width:36.55mm;">
                                            <span class="hrt cs74">&nbsp;-&nbsp;</span><span class="hrt cs64">허용치 :</span><span
                                                class="hrt cs57">&nbsp;1,000PPMv 이하&nbsp;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:29.77mm;width:26.85mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:29.77mm;width:18.64mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:29.77mm;width:14.86mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:37.64mm;width:23.17mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs52">#1 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:37.64mm;width:26.85mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:37.64mm;width:18.64mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:37.64mm;width:14.86mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:44.70mm;top:45.51mm;width:23.17mm;height:8.96mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.04mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.17mm;">
                                            <span class="hrt cs52">#2 DS</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:106.48mm;top:45.51mm;width:26.85mm;height:8.96mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.04mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:24.09mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[PPM]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:133.33mm;top:45.51mm;width:18.64mm;height:8.96mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.04mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.87mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:151.97mm;top:45.51mm;width:14.86mm;height:8.96mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.04mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.86mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps57"
                         style="line-height:3.43mm;white-space:nowrap;left:3.53mm;top:65.41mm;height:4.23mm;width:166.47mm;"></div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:73.03mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">7. 각종시험</span></div>
                    <div class="hls ps74"
                         style="line-height:144.00mm;white-space:nowrap;left:0;top:80.86mm;height:144mm;width:170mm;">
                        <div class="htb"
                             style="left:1mm;width:169.24mm;top:1mm;height:144mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.24 149"
                                 style="left:-2.50mm;top:-2.50mm;width:174.24mm;height:149mm;">
                                <path d="M11.46,0.20 L11.46,7.78"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,0.20 L11.83,7.78"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.71 L11.53,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.08 L11.53,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,0.20 L11.46,7.78"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,0.20 L11.83,7.78"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,7.71 L113.44,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,8.08 L113.44,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,7.71 L135.85,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,8.08 L135.85,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,7.71 L167.05,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,8.08 L167.05,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,8.02 L11.46,33.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,8.02 L11.83,33.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.71 L11.53,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.08 L11.53,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,8.02 L11.46,33.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,8.02 L11.83,33.93"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,7.71 L113.44,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,8.08 L113.44,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,7.71 L135.85,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,8.08 L135.85,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,7.71 L167.05,7.71"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,8.08 L167.05,8.08"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,34.03 L11.46,41.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,34.03 L11.83,41.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,34.03 L11.46,41.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,34.03 L11.83,41.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,41.90 L11.46,49.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,41.90 L11.83,49.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,41.90 L11.46,49.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,41.90 L11.83,49.67"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,49.77 L11.46,57.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,49.77 L11.83,57.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,49.77 L11.46,57.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,49.77 L11.83,57.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,57.64 L11.46,65.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,57.64 L11.83,65.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,57.64 L11.46,65.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,57.64 L11.83,65.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,65.51 L11.46,76.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,65.51 L11.83,76.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,65.51 L11.46,76.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,65.51 L11.83,76.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,76.57 L11.46,84.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,76.57 L11.83,84.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,76.57 L11.46,84.38"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,76.57 L11.83,84.38"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,84.44 L11.46,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,84.44 L11.83,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.50,84.50 L11.50,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.80,84.50 L11.80,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.46,96.36 L11.46,104.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,96.36 L11.83,104.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.50,96.36 L11.50,104.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.80,96.36 L11.80,104.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M113.35,96.42 L113.35,104.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.06;"></path>
                                <path d="M113.54,96.42 L113.54,104.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.06;"></path>
                                <path d="M11.46,104.28 L11.46,116.11"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,104.28 L11.83,116.11"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,104.28 L11.46,116.11"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,104.28 L11.83,116.11"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,116.20 L11.46,123.98"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,116.20 L11.83,123.98"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,116.20 L11.46,123.98"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,116.20 L11.83,123.98"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,124.08 L11.46,141.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,124.08 L11.83,141.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,124.08 L11.46,141.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,124.08 L11.83,141.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,142" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M113.44,0 L113.44,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M135.85,0 L135.85,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.24,0 L167.24,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,33.98 L167.25,33.98"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,41.85 L167.25,41.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,49.72 L167.25,49.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,57.59 L167.25,57.59"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,65.46 L167.25,65.46"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,76.57 L113.45,76.57"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.65,76.57 L113.45,76.57"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,76.57 L167.25,76.57"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,84.44 L11.65,84.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.65,84.44 L113.45,84.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,84.44 L167.25,84.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,96.36 L11.65,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.65,96.36 L113.45,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M113.44,96.36 L167.25,96.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,104.23 L11.65,104.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M11.65,104.23 L113.45,104.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.65,104.23 L167.25,104.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,116.16 L167.25,116.16"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,124.03 L167.25,124.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,142 L167.25,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.24,0 L167.24,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,142" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,142 L167.25,142"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.65mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:0;width:101.79mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:0;width:22.41mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:0;width:31.39mm;height:7.90mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.51mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:7.90mm;width:11.65mm;height:26.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.60mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:7.90mm;width:101.79mm;height:26.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.50mm;">
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">CB, DS, ES, 43RC 조작시험 (Indicator 동작 확인)</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">- Local / Remote / SCADA / 수동 조작&nbsp;</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">- 보조계전기 동작상태 (DC24V, 125V)</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">- Inter-Lock, PTX용</span></div>
                                        <div class="hls ps69"
                                             style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:20.01mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">- 조작회로 Diode&nbsp;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:7.90mm;width:22.41mm;height:26.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.60mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:7.90mm;width:31.39mm;height:26.08mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:10.60mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:33.98mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:33.98mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps58"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">&nbsp;CB, DS, ES, Spring Charge Indicator 동작 상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:33.98mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:33.98mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:41.85mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:41.85mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps52"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">Spring Charger 동작 상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:41.85mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:41.85mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:49.72mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">4</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:49.72mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps58"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:100.80mm;">
                                            <span class="hrt cs5">&nbsp;Trip Free 시험</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:49.72mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:49.72mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:57.59mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">5</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:57.59mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">CB Counter 동작상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:57.59mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:57.59mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:65.46mm;width:11.65mm;height:11.11mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.12mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">6</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:65.46mm;width:101.79mm;height:11.11mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.12mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">CB Gas 누기(쇄정)시 동작 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:65.46mm;width:22.41mm;height:11.11mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.12mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:65.46mm;width:31.39mm;height:11.11mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.19mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:30.40mm;">
                                            <span class="hrt cs6">제작사별</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.43mm;white-space:nowrap;left:0;top:5.29mm;height:4.23mm;width:30.40mm;">
                                            <span class="hrt cs6">&nbsp;회로 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:76.57mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">7</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:76.57mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">온․습도계․히터 동작 상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:76.57mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:76.57mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:84.44mm;width:11.65mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">8</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:84.44mm;width:101.79mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs73">43RC ON 상태에서 CB 투입 → 43RC OFF 및 1분 후 재투입 시험</span></div>
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">- 79Ry 사용시</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:84.44mm;width:22.41mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:84.44mm;width:31.39mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:96.36mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">9</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:96.36mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">각종 보조계전기의 동작상태 점검</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:96.36mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:96.36mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:104.23mm;width:11.65mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">10</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:104.23mm;width:101.79mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">보호계전기에 의한 CB 연동시험</span></div>
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">- 79Ry가 있을 경우 재폐로 동작 확인, 순시 Blocking</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:104.23mm;width:22.41mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:104.23mm;width:31.39mm;height:11.92mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;">
                                            <span class="hrt cs5">계전기&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:30.40mm;">
                                            <span class="hrt cs5">시험Set 활용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:116.16mm;width:11.65mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">11</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:116.16mm;width:101.79mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">보호계전기 성능시험 (50, 79)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:116.16mm;width:22.41mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:116.16mm;width:31.39mm;height:7.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:124.03mm;width:11.65mm;height:17.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:6.55mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">12</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:124.03mm;width:101.79mm;height:17.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1.50mm;">
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">경보회로 시험</span></div>
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:4.86mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">&nbsp;- 50, 51, 50N, 51N, 79, Gas Low, 27D, 27A,</span></div>
                                        <div class="hls ps73"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:9.91mm;height:3.88mm;width:99.03mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;PT NFB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:113.44mm;top:124.03mm;width:22.41mm;height:17.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:6.55mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.41mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:135.85mm;top:124.03mm;width:31.39mm;height:17.97mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:6.55mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:225.92mm;height:4.23mm;width:170mm;"></div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs29">8. Gas 밀도 검출기 시험</span></div>
                    <div class="hls ps3"
                         style="line-height:41.32mm;white-space:nowrap;left:0;top:7.62mm;height:41.32mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:169.74mm;top:0.49mm;height:41.32mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.74 46.32"
                                 style="left:-2.50mm;top:-2.50mm;width:174.74mm;height:46.32mm;">
                                <path d="M11.46,0.20 L11.46,13.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,0.20 L11.83,13.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.54 L11.53,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.91 L11.53,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,0.20 L11.46,13.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,0.20 L11.83,13.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,13.54 L47.17,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,13.91 L47.17,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.02,13.54 L134.01,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.02,13.91 L134.01,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.01,13.54 L168.55,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.01,13.91 L168.55,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.17,13.54 L64.13,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.17,13.91 L64.13,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M64.13,13.54 L81.10,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M64.13,13.91 L81.10,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M81.10,13.54 L98.06,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M81.10,13.91 L98.06,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M98.06,13.54 L115.02,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M98.06,13.91 L115.02,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,13.85 L11.46,22.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,13.85 L11.83,22.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.54 L11.53,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.91 L11.53,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,13.85 L11.46,22.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,13.85 L11.83,22.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,13.54 L47.17,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.77,13.91 L47.17,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.17,13.54 L64.13,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.17,13.91 L64.13,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M64.13,13.54 L81.10,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M64.13,13.91 L81.10,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M81.10,13.54 L98.06,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M81.10,13.91 L98.06,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M98.06,13.54 L115.02,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M98.06,13.91 L115.02,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.02,13.54 L134.01,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.02,13.91 L134.01,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.07,13.54 L168.55,13.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.07,13.91 L168.55,13.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,22.66 L11.46,31.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,22.66 L11.83,31.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,22.66 L11.46,31.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,22.66 L11.83,31.41"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,31.53 L11.46,40.14"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,31.53 L11.83,40.14"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.46,31.53 L11.46,40.14"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M11.83,31.53 L11.83,40.14"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,40.34" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M47.17,0 L47.17,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M64.13,6.87 L64.13,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M81.10,0 L81.10,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M98.06,6.87 L98.06,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.02,0 L115.02,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.01,0 L134.01,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M168.75,0 L168.75,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.75,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M47.17,6.87 L115.02,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,22.60 L134.01,22.60"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,31.47 L134.01,31.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,40.34 L168.75,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.75,0 L168.75,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,40.34" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,40.34 L168.75,40.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.75,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:11.65mm;height:13.73mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.43mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:0;width:35.52mm;height:13.73mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.43mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.53mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.17mm;top:0;width:33.92mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.94mm;">
                                            <span class="hrt cs5">기 &nbsp;준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:81.10mm;top:0;width:33.92mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.94mm;">
                                            <span class="hrt cs5">측 정 값</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.02mm;top:0;width:18.99mm;height:13.73mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.90mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.99mm;">
                                            <span class="hrt cs5">점검</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:17.99mm;">
                                            <span class="hrt cs5">결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.01mm;top:0;width:34.74mm;height:13.73mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.43mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.75mm;">
                                            <span class="hrt cs5">비 &nbsp;&nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.17mm;top:6.87mm;width:16.96mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;">
                                            <span class="hrt cs5">ON</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:64.13mm;top:6.87mm;width:16.96mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;">
                                            <span class="hrt cs5">OFF</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:81.10mm;top:6.87mm;width:16.96mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;">
                                            <span class="hrt cs5">ON</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:98.06mm;top:6.87mm;width:16.96mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;">
                                            <span class="hrt cs5">OFF</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:13.73mm;width:11.65mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs32">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:13.73mm;width:35.52mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.53mm;">
                                            <span class="hrt cs32">CB (㎏.f/㎠)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.17mm;top:13.73mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:64.13mm;top:13.73mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:81.10mm;top:13.73mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:98.06mm;top:13.73mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.02mm;top:13.73mm;width:18.99mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.99mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.01mm;top:13.73mm;width:34.74mm;height:26.61mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.29mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.75mm;">
                                            <span class="hrt cs5">제작사별 기준&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:33.75mm;">
                                            <span class="hrt cs5">확인</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:33.75mm;"></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:33.75mm;">
                                            <span class="hrt cs5">오차범위 : ±2.5%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:22.60mm;width:11.65mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs32">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:22.60mm;width:35.52mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.53mm;">
                                            <span class="hrt cs32">#1 DS (㎏.f/㎠)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.17mm;top:22.60mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:64.13mm;top:22.60mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:81.10mm;top:22.60mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:98.06mm;top:22.60mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.02mm;top:22.60mm;width:18.99mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.99mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:31.47mm;width:11.65mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.65mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:11.65mm;top:31.47mm;width:35.52mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:34.53mm;">
                                            <span class="hrt cs5">#2 DS&nbsp;</span><span class="hrt cs32">㎏.f/㎠)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.17mm;top:31.47mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:64.13mm;top:31.47mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:81.10mm;top:31.47mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:98.06mm;top:31.47mm;width:16.96mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:15.97mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.02mm;top:31.47mm;width:18.99mm;height:8.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:17.99mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps20"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:52.12mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:59.74mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs72">9. Gas 누기 점검분석</span></div>
                    <div class="hls ps75"
                         style="line-height:26.38mm;white-space:nowrap;left:0;top:66.72mm;height:26.38mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:169.71mm;top:0.50mm;height:26.38mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.71 31.38"
                                 style="left:-2.50mm;top:-2.50mm;width:174.71mm;height:31.38mm;">
                                <path d="M42.01,0.20 L42.01,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.38,0.20 L42.38,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.97 L42.07,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.34 L42.07,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.01,0.20 L42.01,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.38,0.20 L42.38,9.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.32,8.97 L99.24,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.32,9.34 L99.24,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M99.24,8.97 L127.22,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M99.24,9.34 L127.22,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,8.97 L168.52,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,9.34 L168.52,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.01,9.28 L42.01,25.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.38,9.28 L42.38,25.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.97 L42.07,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.34 L42.07,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.01,9.28 L42.01,25.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.38,9.28 L42.38,25.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.32,8.97 L99.24,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.32,9.34 L99.24,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M99.24,8.97 L127.22,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M99.24,9.34 L127.22,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,8.97 L168.52,8.97"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,9.34 L168.52,9.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,25.39" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M99.24,0 L99.24,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,0 L127.22,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M168.72,0 L168.72,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.72,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,25.39 L168.72,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.72,0 L168.72,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,25.39" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,25.39 L168.72,25.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.72,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:42.19mm;height:9.16mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:41.19mm;">
                                            <span class="hrt cs5">점검내용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.19mm;top:0;width:57.05mm;height:9.16mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:56.05mm;">
                                            <span class="hrt cs5">기 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.24mm;top:0;width:27.98mm;height:9.16mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.98mm;">
                                            <span class="hrt cs5">결 &nbsp;과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:127.22mm;top:0;width:41.50mm;height:9.16mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.14mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:40.50mm;">
                                            <span class="hrt cs5">비 &nbsp;&nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.16mm;width:42.19mm;height:16.23mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.18mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:41.19mm;">
                                            <span class="hrt cs80">점검창 및 각 부분</span></div>
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:6.79mm;height:3.88mm;width:41.19mm;">
                                            <span class="hrt cs80">(비닐로 밀봉한다)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.19mm;top:9.16mm;width:57.05mm;height:16.23mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:0.62mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:56.05mm;">
                                            <span class="hrt cs5">&nbsp;년 1％ 이하&nbsp;</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:56.05mm;">
                                            <span class="hrt cs5">&nbsp;(24시간 이상 경과 후&nbsp;</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:56.05mm;">
                                            <span class="hrt cs5">&nbsp;Check:5PPMv 이하일것)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:99.24mm;top:9.16mm;width:27.98mm;height:16.23mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:5.68mm;">
                                        <div class="hls ps17"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.98mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:127.22mm;top:9.16mm;width:41.50mm;height:16.23mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:3.15mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:40.50mm;">
                                            <span class="hrt cs81">&nbsp;할로겐Gas &nbsp;&nbsp;&nbsp;&nbsp;</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:40.50mm;">
                                            <span class="hrt cs81">Detector 사용</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps17"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:95.43mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:103.05mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs72">10. 절연저항 측정</span></div>
                    <div class="hls ps60"
                         style="line-height:50.74mm;white-space:nowrap;left:0;top:110.04mm;height:50.74mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:169.46mm;top:0.49mm;height:50.74mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.46 55.74"
                                 style="left:-2.50mm;top:-2.50mm;width:174.46mm;height:55.74mm;">
                                <path d="M12.46,0.20 L12.46,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,0.20 L12.83,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.81 L12.52,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.18 L12.52,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,0.20 L12.46,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,0.20 L12.83,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,8.81 L35.51,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,9.18 L35.51,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M35.51,8.81 L57.41,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M35.51,9.18 L57.41,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M57.41,8.81 L86.03,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M57.41,9.18 L86.03,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M86.03,8.81 L115.89,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M86.03,9.18 L115.89,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.89,8.81 L140.68,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.89,9.18 L140.68,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M140.68,8.81 L168.27,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M140.68,9.18 L168.27,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,9.12 L12.46,37.79"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,9.12 L12.83,37.79"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.81 L12.52,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.18 L12.52,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,9.12 L12.46,37.79"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,9.12 L12.83,37.79"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,8.81 L35.51,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,9.18 L35.51,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M35.46,8.81 L57.41,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M35.46,9.18 L57.41,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M57.46,8.81 L86.03,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M57.46,9.18 L86.03,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M86.08,8.81 L115.89,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M86.08,9.18 L115.89,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.89,8.81 L140.68,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M115.89,9.18 L140.68,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M140.73,8.81 L168.27,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M140.73,9.18 L168.27,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,37.88 L12.46,49.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,37.88 L12.83,49.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,37.88 L12.46,49.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,37.88 L12.83,49.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,49.76" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M35.51,9 L35.51,37.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M57.41,0 L57.41,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M86.03,0 L86.03,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M115.89,0 L115.89,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M140.68,0 L140.68,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M168.47,0 L168.47,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.48,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M35.51,18.23 L57.41,18.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M86.03,18.23 L140.68,18.23"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M35.51,28.27 L57.41,28.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M86.03,28.27 L140.68,28.27"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,37.84 L140.68,37.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,49.75 L168.48,49.75"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.47,0 L168.47,49.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,49.76" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,49.75 L168.48,49.75"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.48,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:12.65mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:0;width:44.76mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:43.77mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;&nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:57.41mm;top:0;width:28.62mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.63mm;">
                                            <span class="hrt cs5">판정기준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:86.03mm;top:0;width:29.86mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.87mm;">
                                            <span class="hrt cs5">측정값</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.89mm;top:0;width:24.79mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.79mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:140.68mm;top:0;width:27.79mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.80mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9mm;width:12.65mm;height:28.84mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:11.98mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:9mm;width:22.86mm;height:28.84mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:11.98mm;">
                                        <div class="hls ps56"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:20.11mm;">
                                            <span class="hrt cs5">CT회로</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:35.51mm;top:9mm;width:21.90mm;height:9.23mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.18mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:20.91mm;">
                                            <span class="hrt cs5">A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:57.41mm;top:9mm;width:28.62mm;height:28.84mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:11.98mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.63mm;">
                                            <span class="hrt cs5">5 ㏁이상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:86.03mm;top:9mm;width:29.86mm;height:9.23mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.18mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.11mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[㏁]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.89mm;top:9mm;width:24.79mm;height:9.23mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.18mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.79mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:140.68mm;top:9mm;width:27.79mm;height:40.75mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:15.42mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.80mm;">
                                            <span class="hrt cs5">500V Megger</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:26.80mm;">
                                            <span class="hrt cs5">&nbsp;사용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:35.51mm;top:18.23mm;width:21.90mm;height:10.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.58mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:20.91mm;">
                                            <span class="hrt cs5">B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:86.03mm;top:18.23mm;width:29.86mm;height:10.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.58mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.11mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[㏁]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.89mm;top:18.23mm;width:24.79mm;height:10.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.58mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.79mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:35.51mm;top:28.27mm;width:21.90mm;height:9.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.35mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:20.91mm;">
                                            <span class="hrt cs5">C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:86.03mm;top:28.27mm;width:29.86mm;height:9.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.35mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.11mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[㏁]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.89mm;top:28.27mm;width:24.79mm;height:9.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.35mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.79mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:37.84mm;width:12.65mm;height:11.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:37.84mm;width:44.76mm;height:11.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps56"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:42.01mm;">
                                            <span class="hrt cs5">제어회로</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:57.41mm;top:37.84mm;width:28.62mm;height:11.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.63mm;">
                                            <span class="hrt cs5">2 ㏁이상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:86.03mm;top:37.84mm;width:29.86mm;height:11.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.11mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[㏁]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:115.89mm;top:37.84mm;width:24.79mm;height:11.92mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:3.52mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.79mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps60"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:164.80mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:173.27mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs72">11. 차단기 동작특성 시험</span></div>
                    <div class="hls ps60"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:180.04mm;height:4.23mm;width:0;"></div>
                </div>
            </div>
            <div class="htb" style="left:20.50mm;width:170.24mm;top:230.75mm;height:44.58mm;">
                <svg class="hs" viewBox="-2.50 -2.50 175.24 49.58"
                     style="left:-2.50mm;top:-2.50mm;width:175.24mm;height:49.58mm;">
                    <path d="M0.20,9.68 L11.81,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M0.20,10.05 L11.81,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M11.81,9.68 L29.62,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M11.81,10.05 L29.62,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M29.62,9.68 L78.52,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M29.62,10.05 L78.52,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M78.52,9.68 L101.11,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M78.52,10.05 L101.11,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M101.11,9.68 L148.65,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M101.11,10.05 L148.65,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M148.65,9.68 L169.05,9.68" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M148.65,10.05 L169.05,10.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M0.20,9.82 L11.81,9.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,9.91 L11.81,9.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,22.75 L11.81,22.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,22.83 L11.81,22.83" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,9.82 L29.56,9.82" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,9.91 L29.56,9.91" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,22.75 L29.56,22.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,22.83 L29.56,22.83" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,22.75 L11.81,22.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,22.83 L11.81,22.83" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,35.67 L11.81,35.67" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,35.75 L11.81,35.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,22.75 L29.56,22.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,22.83 L29.56,22.83" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,35.67 L29.56,35.67" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,35.75 L29.56,35.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,35.67 L11.81,35.67" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0.20,35.75 L11.81,35.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,35.67 L29.56,35.67" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M11.81,35.75 L29.56,35.75" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                    <path d="M0,0 L0,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M11.81,0 L11.81,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M29.62,0 L29.62,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M78.52,0 L78.52,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M101.11,0 L101.11,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M148.65,0 L148.65,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M169.24,0 L169.24,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M29.62,9.87 L78.52,9.87" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M78.52,9.87 L169.25,9.87" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                    <path d="M29.62,22.79 L78.52,22.79" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M101.11,22.79 L148.66,22.79" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                    <path d="M29.62,35.71 L78.52,35.71" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                    <path d="M101.11,35.71 L148.66,35.71" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                    <path d="M0,43.58 L169.25,43.58" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M169.24,0 L169.24,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M0,0 L0,43.59" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M0,43.58 L169.25,43.58" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                    <path d="M0,0 L169.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                </svg>
                <div class="hce" style="left:0;top:0;width:11.81mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                <span class="hrt cs52">No</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:11.81mm;top:0;width:17.80mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                <span class="hrt cs52">점검항목</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:29.62mm;top:0;width:48.90mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:78.52mm;top:0;width:22.59mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                <span class="hrt cs52">기 준</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:101.11mm;top:0;width:47.55mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:46.55mm;">
                                <span class="hrt cs52">점검결과</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:148.65mm;top:0;width:20.59mm;height:9.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:2.49mm;">
                            <div class="hls ps11"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                <span class="hrt cs52">비 고</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:0;top:9.87mm;width:11.81mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                <span class="hrt cs52">1</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:11.81mm;top:9.87mm;width:17.80mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                <span class="hrt cs52">동작시험</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:29.62mm;top:9.87mm;width:48.90mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps69"
                                 style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">무부하 투입시간 측정</span></div>
                            <div class="hls ps69"
                                 style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">(정격 동작전압 : 125V)&nbsp;</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:78.52mm;top:9.87mm;width:22.59mm;height:33.71mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:9.37mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                <span class="hrt cs52">최종검수</span></div>
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:21.59mm;">
                                <span class="hrt cs52">시험성적서</span></div>
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:21.59mm;">
                                <span class="hrt cs52">참조</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:101.11mm;top:9.87mm;width:47.55mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:46.55mm;">
                                <span class="hrt cs52">&nbsp;㎳&nbsp;</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:148.65mm;top:9.87mm;width:20.59mm;height:33.71mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:8.21mm;">
                            <div class="hls ps5"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.59mm;">
                                <span class="hrt cs58">변전설비</span></div>
                            <div class="hls ps5"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:6.01mm;height:3.88mm;width:19.59mm;">
                                <span class="hrt cs58">유지보수</span></div>
                            <div class="hls ps5"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:12.22mm;height:3.88mm;width:19.59mm;">
                                <span class="hrt cs58">기준참조</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:0;top:22.79mm;width:11.81mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                <span class="hrt cs52">2</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:11.81mm;top:22.79mm;width:17.80mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                <span class="hrt cs60">“</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:29.62mm;top:22.79mm;width:48.90mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps69"
                                 style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">무부하 개극시간 측정</span></div>
                            <div class="hls ps69"
                                 style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">(정격 동작전압 : 125V)&nbsp;</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:101.11mm;top:22.79mm;width:47.55mm;height:12.92mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:4.02mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:46.55mm;">
                                <span class="hrt cs52">㎳</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:0;top:35.71mm;width:11.81mm;height:7.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:10.81mm;">
                                <span class="hrt cs52">3</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:11.81mm;top:35.71mm;width:17.80mm;height:7.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                <span class="hrt cs60">“</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:29.62mm;top:35.71mm;width:48.90mm;height:7.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps69"
                                 style="padding-left:1.76mm;line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:47.89mm;">
                                <span class="hrt cs52">O-C-O</span></div>
                        </div>
                    </div>
                </div>
                <div class="hce" style="left:101.11mm;top:35.71mm;width:47.55mm;height:7.87mm;">
                    <div class="hcD" style="left:0.50mm;top:0.50mm;">
                        <div class="hcI" style="top:1.50mm;">
                            <div class="hls ps18"
                                 style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:46.55mm;">
                                <span class="hrt cs52">㎳</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs70">12. 변류기 시험</span></div>
                    <div class="hls ps76"
                         style="line-height:90.88mm;white-space:nowrap;left:0;top:6.35mm;height:90.88mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:169.46mm;top:0.49mm;height:90.88mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 174.46 95.88"
                                 style="left:-2.50mm;top:-2.50mm;width:174.46mm;height:95.88mm;">
                                <path d="M12.46,0.20 L12.46,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,0.20 L12.83,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.81 L12.52,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.18 L12.52,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,0.20 L12.46,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,0.20 L12.83,8.88"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,8.81 L34.51,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,9.18 L34.51,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M34.51,8.81 L61.40,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M34.51,9.18 L61.40,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M61.40,8.81 L85.03,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M61.40,9.18 L85.03,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M85.03,8.81 L117.89,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M85.03,9.18 L117.89,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M117.89,8.81 L138.68,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M117.89,9.18 L138.68,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M138.68,8.81 L168.27,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M138.68,9.18 L168.27,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,9.12 L12.46,49.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,9.12 L12.83,49.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,8.81 L12.52,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.18 L12.52,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,9.12 L12.46,49.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,9.12 L12.83,49.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,8.81 L34.51,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.77,9.18 L34.51,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M34.46,8.81 L61.40,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M34.46,9.18 L61.40,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M61.45,8.81 L85.03,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M61.45,9.18 L85.03,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M85.08,8.81 L117.89,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M85.08,9.18 L117.89,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M117.89,8.81 L138.68,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M117.89,9.18 L138.68,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M138.73,8.81 L168.27,8.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M138.73,9.18 L168.27,9.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,49.49 L12.46,89.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,49.49 L12.83,89.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.46,49.49 L12.46,89.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M12.83,49.49 L12.83,89.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,89.89" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M34.51,9 L34.51,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M61.40,0 L61.40,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,0 L85.03,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M117.89,0 L117.89,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M138.68,0 L138.68,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M168.47,0 L168.47,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.48,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M34.51,15.24 L61.41,15.24"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,15.24 L138.69,15.24"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,22.28 L61.41,22.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,22.28 L138.69,22.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,28.85 L138.69,28.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,35.72 L61.41,35.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,35.72 L138.69,35.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,42.58 L61.41,42.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,42.58 L138.69,42.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,49.45 L168.48,49.45"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,55.68 L61.41,55.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,55.68 L138.69,55.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,62.72 L61.41,62.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,62.72 L138.69,62.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,69.30 L138.69,69.30"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,76.16 L61.41,76.16"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,76.16 L138.69,76.16"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M34.51,83.03 L61.41,83.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M85.03,83.03 L138.69,83.03"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,89.89 L168.48,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M168.47,0 L168.47,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,89.89" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,89.89 L168.48,89.89"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L168.48,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:12.65mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:0;width:48.76mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:47.77mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;&nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:61.40mm;top:0;width:23.63mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">판정기준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:0;width:32.86mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.86mm;">
                                            <span class="hrt cs5">측정값</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:0;width:20.79mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:138.68mm;top:0;width:29.79mm;height:9mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.06mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9mm;width:12.65mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:17.79mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:9mm;width:21.87mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:17.79mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:20.87mm;">
                                            <span class="hrt cs5">포화특성</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:9mm;width:26.89mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:61.40mm;top:9mm;width:23.63mm;height:19.85mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.96mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">200V</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">이상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:9mm;width:32.86mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:9mm;width:20.79mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:138.68mm;top:9mm;width:29.79mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:15.26mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">변류기 시험기</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">&nbsp;사용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:15.24mm;width:26.89mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:15.24mm;width:32.86mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:15.24mm;width:20.79mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:22.28mm;width:26.89mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:22.28mm;width:32.86mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:22.28mm;width:20.79mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:28.85mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:61.40mm;top:28.85mm;width:23.63mm;height:20.60mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:5.34mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">50V</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">이상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:28.85mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:28.85mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:35.72mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:35.72mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:35.72mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:42.58mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:42.58mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;&nbsp;&nbsp;[V]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:42.58mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:49.45mm;width:12.65mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:17.79mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:11.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:12.65mm;top:49.45mm;width:21.87mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:17.79mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:20.87mm;">
                                            <span class="hrt cs5">변 류 비</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:49.45mm;width:26.89mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:61.40mm;top:49.45mm;width:23.63mm;height:19.85mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.96mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">120/80/40</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:49.45mm;width:32.86mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:49.45mm;width:20.79mm;height:6.24mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.68mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:138.68mm;top:49.45mm;width:29.79mm;height:40.45mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:7.68mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">변류기 시험기</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">&nbsp;사용</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:9.91mm;height:3.88mm;width:28.80mm;"></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:14.96mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">비오차</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:20.01mm;height:3.88mm;width:28.80mm;">
                                            <span class="hrt cs5">: ±1.2%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:55.68mm;width:26.89mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:55.68mm;width:32.86mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">&nbsp;/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:55.68mm;width:20.79mm;height:7.04mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.09mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:62.72mm;width:26.89mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Ry용 C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:62.72mm;width:32.86mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:62.72mm;width:20.79mm;height:6.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.85mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:69.30mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:61.40mm;top:69.30mm;width:23.63mm;height:20.60mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:5.34mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">120/60</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:22.63mm;">
                                            <span class="hrt cs5">&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:69.30mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:69.30mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:76.16mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:76.16mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:76.16mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:34.51mm;top:83.03mm;width:26.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.89mm;">
                                            <span class="hrt cs5">Meter용 C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:85.03mm;top:83.03mm;width:32.86mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps64"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.10mm;">
                                            <span class="hrt cs5">/ &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;: 1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:117.89mm;top:83.03mm;width:20.79mm;height:6.87mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps40"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:19.80mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps77"
                         style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:100.84mm;height:3.88mm;width:168.23mm;">
                        <span class="hrt cs5">&nbsp;☞ 외장형 CT 및 변류기 시험기 한전 제공시 → C.T 포화시험기로 측정시 측정기록지로</span></div>
                    <div class="hls ps77"
                         style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:106.67mm;height:3.88mm;width:168.23mm;">
                        <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;대신함.</span></div>
                    <div class="hls ps77"
                         style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:112.50mm;height:3.88mm;width:168.23mm;">
                        <span class="hrt cs5">&nbsp;☞ 내장형 CT(현대 旧형) 및 외장형 CT중 CT 내부도체 통과가 불가능한 개소는 시험생략</span></div>
                    <div class="hls ps77"
                         style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:118.33mm;height:3.88mm;width:168.23mm;">
                        <span class="hrt cs5">&nbsp;&nbsp;&nbsp;&nbsp;가능</span></div>
                    <div class="hls ps77"
                         style="line-height:3.43mm;white-space:nowrap;left:1.76mm;top:124.14mm;height:4.23mm;width:168.23mm;"></div>
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:130.49mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs70">13. Close / Trip Coil 저항 측정</span></div>
                    <div class="hls ps78"
                         style="line-height:28.04mm;white-space:nowrap;left:0;top:137.05mm;height:28.04mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:168.87mm;top:0.49mm;height:28.04mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.87 33.04"
                                 style="left:-2.50mm;top:-2.50mm;width:173.87mm;height:33.04mm;">
                                <path d="M13.46,0.20 L13.46,9.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.81 L13.52,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10.18 L13.52,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,0.20 L13.46,9.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.81 L46.41,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10.18 L46.41,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M46.41,9.81 L72.80,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M46.41,10.18 L72.80,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M72.80,9.81 L100.08,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M72.80,10.18 L100.08,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.08,9.81 L127.22,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.08,10.18 L127.22,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,9.81 L167.69,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.22,10.18 L167.69,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,10.12 L13.46,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,10.12 L13.83,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.81 L13.52,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10.18 L13.52,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,10.12 L13.46,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,10.12 L13.83,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.81 L46.41,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10.18 L46.41,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M46.41,9.81 L72.80,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M46.41,10.18 L72.80,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M72.80,9.81 L100.08,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M72.80,10.18 L100.08,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.08,9.81 L127.22,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.08,10.18 L127.22,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.27,9.81 L167.69,9.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M127.27,10.18 L167.69,10.18"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,18.52 L13.46,26.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,18.52 L13.83,26.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,18.52 L13.46,26.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,18.52 L13.83,26.85"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,27.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M46.41,0 L46.41,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M72.80,0 L72.80,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M100.08,0 L100.08,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M127.22,0 L127.22,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M167.89,0 L167.89,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.89,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,18.52 L13.65,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.65,18.52 L127.23,18.52"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,27.05 L167.89,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.89,0 L167.89,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,27.05" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,27.05 L167.89,27.05"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.89,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:13.65mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:0;width:32.77mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.78mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:46.41mm;top:0;width:26.39mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.40mm;">
                                            <span class="hrt cs5">기 준(Ω)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:72.80mm;top:0;width:27.27mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.27mm;">
                                            <span class="hrt cs5">측정치(Ω)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.08mm;top:0;width:27.15mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.15mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:127.22mm;top:0;width:40.66mm;height:10mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.56mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:39.67mm;">
                                            <span class="hrt cs5">비 &nbsp;&nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:10mm;width:13.65mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:10mm;width:32.77mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.78mm;">
                                            <span class="hrt cs86">Close Coil</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:46.41mm;top:10mm;width:26.39mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:72.80mm;top:10mm;width:27.27mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.27mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.08mm;top:10mm;width:27.15mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.15mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:127.22mm;top:10mm;width:40.66mm;height:17.05mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:6.09mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:39.67mm;">
                                            <span class="hrt cs5">제작사별 기준 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:18.52mm;width:13.65mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:18.52mm;width:32.77mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.78mm;">
                                            <span class="hrt cs87">Trip Coil</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:46.41mm;top:18.52mm;width:26.39mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.40mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:72.80mm;top:18.52mm;width:27.27mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.27mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.08mm;top:18.52mm;width:27.15mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.15mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps79"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:168.69mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:175.04mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs70">14. VI 접점 마모량 측정</span></div>
                    <div class="hls ps4"
                         style="line-height:36.38mm;white-space:nowrap;left:0;top:181.60mm;height:36.38mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:168.48mm;top:0.49mm;height:36.38mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.48 41.38"
                                 style="left:-2.50mm;top:-2.50mm;width:173.48mm;height:41.38mm;">
                                <path d="M13.46,0.20 L13.46,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.63 L13.52,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10 L13.52,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,0.20 L13.46,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.63 L47.50,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10 L47.50,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.50,9.63 L82.32,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.50,10 L82.32,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,9.63 L112.13,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,10 L112.13,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M112.13,9.63 L134.95,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M112.13,10 L134.95,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.95,9.63 L167.29,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.95,10 L167.29,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,9.94 L13.46,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,9.94 L13.83,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.63 L13.52,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10 L13.52,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,9.94 L13.46,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,9.94 L13.83,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.63 L47.50,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10 L47.50,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.55,9.63 L82.32,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M47.55,10 L82.32,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.37,9.63 L112.13,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.37,10 L112.13,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M112.13,9.63 L134.95,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M112.13,10 L134.95,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.95,9.63 L167.29,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M134.95,10 L167.29,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,18.34 L13.46,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,18.34 L13.83,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,18.34 L13.46,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,18.34 L13.83,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,26.87 L13.46,35.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,26.87 L13.83,35.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,26.87 L13.46,35.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,26.87 L13.83,35.20"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,35.40" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M47.50,0 L47.50,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M82.32,0 L82.32,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M112.13,0 L112.13,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M134.95,0 L134.95,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M167.49,0 L167.49,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.50,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,18.34 L13.65,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.65,18.34 L47.50,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M82.32,18.34 L167.50,18.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,26.87 L13.65,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.65,26.87 L47.50,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M82.32,26.87 L167.50,26.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,35.39 L167.50,35.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.49,0 L167.49,35.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,35.40" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,35.39 L167.50,35.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.50,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:13.65mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:0;width:33.85mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.86mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.50mm;top:0;width:34.82mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.82mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:0;width:29.81mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:28.81mm;">
                                            <span class="hrt cs5">측정치</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:112.13mm;top:0;width:22.82mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.83mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.95mm;top:0;width:32.54mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.55mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.81mm;width:13.65mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:9.81mm;width:33.85mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.86mm;">
                                            <span class="hrt cs5">A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:47.50mm;top:9.81mm;width:34.82mm;height:25.58mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:10.35mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.82mm;">
                                            <span class="hrt cs5">3mm 이내</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:9.81mm;width:29.81mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.05mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:112.13mm;top:9.81mm;width:22.82mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.83mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.95mm;top:9.81mm;width:32.54mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:18.34mm;width:13.65mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:18.34mm;width:33.85mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.86mm;">
                                            <span class="hrt cs5">B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:18.34mm;width:29.81mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.05mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:112.13mm;top:18.34mm;width:22.82mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.83mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.95mm;top:18.34mm;width:32.54mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:26.87mm;width:13.65mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:26.87mm;width:33.85mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.86mm;">
                                            <span class="hrt cs5">C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:26.87mm;width:29.81mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.05mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:112.13mm;top:26.87mm;width:22.82mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.83mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:134.95mm;top:26.87mm;width:32.54mm;height:8.53mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.83mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:31.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:219.89mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:226.24mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:232.59mm;height:4.23mm;width:170mm;"></div>
                </div>
            </div>
        </div>
        <div class="hpa" style="width:210mm;height:297mm;">
            <div class="hcD" style="left:20mm;top:50mm;">
                <div class="hcI">
                    <div class="hls ps4"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:-0.21mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs70">15. 조작Rod 행정거리 측정 (제작사별 취급설명서 참조)</span></div>
                    <div class="hls ps17"
                         style="line-height:39.38mm;white-space:nowrap;left:0;top:6.35mm;height:39.38mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:168.50mm;top:0.49mm;height:39.38mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.50 44.38"
                                 style="left:-2.50mm;top:-2.50mm;width:173.50mm;height:44.38mm;">
                                <path d="M13.46,0.20 L13.46,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.63 L13.52,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10 L13.52,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,0.20 L13.46,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,9.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.63 L48.50,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10 L48.50,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M48.50,9.63 L82.32,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M48.50,10 L82.32,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,9.63 L110.15,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,10 L110.15,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M110.15,9.63 L136.96,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M110.15,10 L136.96,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,9.63 L167.31,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,10 L167.31,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,9.94 L13.46,19.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,9.94 L13.83,19.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,9.63 L13.52,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,10 L13.52,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,9.94 L13.46,19.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,9.94 L13.83,19.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,9.63 L48.50,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,10 L48.50,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M48.55,9.63 L82.32,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M48.55,10 L82.32,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.37,9.63 L110.15,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.37,10 L110.15,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M110.15,9.63 L136.96,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M110.15,10 L136.96,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,9.63 L167.31,9.63"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,10 L167.31,10"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,19.40 L13.46,28.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,19.40 L13.83,28.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,19.40 L13.46,28.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,19.40 L13.83,28.81"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,28.92 L13.46,38.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,28.92 L13.83,38.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,28.92 L13.46,38.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,28.92 L13.83,38.19"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,38.39" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M48.50,0 L48.50,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M82.32,0 L82.32,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M110.15,0 L110.15,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,0 L136.96,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.51,0 L167.51,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.51,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,19.34 L48.50,19.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,19.34 L136.97,19.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,19.34 L167.51,19.34"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,28.86 L48.50,28.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M82.32,28.86 L136.97,28.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M136.96,28.86 L167.51,28.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,38.39 L167.51,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.51,0 L167.51,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,38.39" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,38.39 L167.51,38.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.51,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:13.65mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:0;width:34.85mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.85mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:48.50mm;top:0;width:33.82mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.82mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:0;width:27.83mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:26.84mm;">
                                            <span class="hrt cs91">Stroke</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:110.15mm;top:0;width:26.81mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.82mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:136.96mm;top:0;width:30.55mm;height:9.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:29.55mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:9.81mm;width:13.65mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:9.81mm;width:34.85mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.85mm;">
                                            <span class="hrt cs5">A상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:48.50mm;top:9.81mm;width:33.82mm;height:28.57mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:11.85mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.82mm;">
                                            <span class="hrt cs5">16 ± 1 mm&nbsp;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:9.81mm;width:27.83mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.08mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:110.15mm;top:9.81mm;width:26.81mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.82mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:136.96mm;top:9.81mm;width:30.55mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:29.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:19.34mm;width:13.65mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:19.34mm;width:34.85mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.85mm;">
                                            <span class="hrt cs5">B상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:19.34mm;width:27.83mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.08mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:110.15mm;top:19.34mm;width:26.81mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.82mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:136.96mm;top:19.34mm;width:30.55mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:29.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:28.86mm;width:13.65mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:28.86mm;width:34.85mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.85mm;">
                                            <span class="hrt cs5">C상</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:82.32mm;top:28.86mm;width:27.83mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.08mm;">
                                            <span class="hrt cs5">[mm]</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:110.15mm;top:28.86mm;width:26.81mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:25.82mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:136.96mm;top:28.86mm;width:30.55mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:29.55mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps17"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:48.90mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps2"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:56.52mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs70">16. 부하전류 측정, LPS Lamp &nbsp;점검</span></div>
                    <div class="hls ps17"
                         style="line-height:33.85mm;white-space:nowrap;left:0;top:63.51mm;height:33.85mm;width:170mm;">
                        <div class="htb"
                             style="left:0.49mm;width:168.50mm;top:0.49mm;height:33.85mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.50 38.84"
                                 style="left:-2.50mm;top:-2.50mm;width:173.50mm;height:38.84mm;">
                                <path d="M13.46,0.20 L13.46,13.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,13.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.62 L13.52,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.99 L13.52,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,0.20 L13.46,13.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,0.20 L13.83,13.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,13.62 L42.51,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,13.99 L42.51,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.56,6.72 L50.96,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.56,7.09 L50.96,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,6.72 L59.41,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,7.09 L59.41,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,6.72 L67.86,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,7.09 L67.86,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,6.72 L76.33,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,7.09 L76.33,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,6.72 L84.28,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,7.09 L84.28,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,6.72 L92.24,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,7.09 L92.24,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,6.72 L100.19,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,7.09 L100.19,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,6.72 L108.09,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,7.09 L108.09,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,13.62 L132.97,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,13.99 L132.97,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,13.62 L167.31,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,13.99 L167.31,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.56,6.72 L50.96,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.56,7.09 L50.96,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.51,13.62 L50.96,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.51,13.99 L50.96,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,6.72 L59.41,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,7.09 L59.41,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,13.62 L59.41,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,13.99 L59.41,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,6.72 L67.86,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,7.09 L67.86,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,13.62 L67.86,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,13.99 L67.86,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,6.72 L76.33,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,7.09 L76.33,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,13.62 L76.33,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,13.99 L76.33,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,6.72 L84.28,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,7.09 L84.28,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,13.62 L84.28,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,13.99 L84.28,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,6.72 L92.24,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,7.09 L92.24,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,13.62 L92.24,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,13.99 L92.24,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,6.72 L100.19,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,7.09 L100.19,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,13.62 L100.19,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,13.99 L100.19,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,6.72 L108.09,6.72"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,7.09 L108.09,7.09"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,13.62 L108.15,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,13.99 L108.15,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,13.93 L13.46,23.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,13.93 L13.83,23.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.62 L13.52,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,13.99 L13.52,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,13.93 L13.46,23.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,13.93 L13.83,23.28"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,13.62 L42.51,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.77,13.99 L42.51,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.51,13.62 L50.96,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M42.51,13.99 L50.96,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,13.62 L59.41,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M50.96,13.99 L59.41,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,13.62 L67.86,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M59.41,13.99 L67.86,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,13.62 L76.33,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M67.86,13.99 L76.33,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,13.62 L84.28,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,13.99 L84.28,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,13.62 L92.24,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M84.28,13.99 L92.24,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,13.62 L100.19,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,13.99 L100.19,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,13.62 L108.15,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,13.99 L108.15,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,13.62 L132.97,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,13.99 L132.97,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,13.62 L167.31,13.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,13.99 L167.31,13.99"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,23.39 L13.46,32.66"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,23.39 L13.83,32.66"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.46,23.39 L13.46,32.66"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M13.83,23.39 L13.83,32.66"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M76.33,23.33 L67.86,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,23.33 L100.19,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0,0 L0,32.86" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M42.51,0 L42.51,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M50.96,6.90 L50.96,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M59.41,6.90 L59.41,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M67.86,6.90 L67.86,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M76.33,0 L76.33,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M84.28,6.90 L84.28,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M92.24,6.90 L92.24,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M100.19,6.90 L100.19,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M108.15,0 L108.15,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,0 L132.97,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.51,0 L167.51,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.51,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,23.33 L132.97,23.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M132.97,23.33 L167.51,23.33"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,32.86 L167.51,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.51,0 L167.51,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,32.86" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,32.86 L167.51,32.86"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.51,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:13.65mm;height:13.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:0;width:28.86mm;height:13.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.87mm;">
                                            <span class="hrt cs5">구 &nbsp;&nbsp;분</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.51mm;top:0;width:33.82mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:32.82mm;">
                                            <span class="hrt cs5">점 검 전</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:76.33mm;top:0;width:31.82mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.83mm;">
                                            <span class="hrt cs91">점 검 후</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:108.15mm;top:0;width:24.82mm;height:13.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.47mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.82mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.97mm;top:0;width:34.54mm;height:13.81mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:4.47mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.54mm;">
                                            <span class="hrt cs5">비 &nbsp;고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.51mm;top:6.90mm;width:8.45mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;">
                                            <span class="hrt cs5">A</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:50.96mm;top:6.90mm;width:8.45mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;">
                                            <span class="hrt cs5">B</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.41mm;top:6.90mm;width:8.45mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;">
                                            <span class="hrt cs5">C</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.86mm;top:6.90mm;width:8.46mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;">
                                            <span class="hrt cs5">N</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:76.33mm;top:6.90mm;width:7.96mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:6.96mm;">
                                            <span class="hrt cs91">A</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:84.28mm;top:6.90mm;width:7.96mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:6.96mm;">
                                            <span class="hrt cs91">B</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:92.24mm;top:6.90mm;width:7.96mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:6.96mm;">
                                            <span class="hrt cs91">C</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.19mm;top:6.90mm;width:7.96mm;height:6.90mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:1.02mm;">
                                        <div class="hls ps38"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:6.97mm;">
                                            <span class="hrt cs91">N</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:13.81mm;width:13.65mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:13.81mm;width:28.86mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.87mm;">
                                            <span class="hrt cs5">부하전류</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.51mm;top:13.81mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:50.96mm;top:13.81mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.41mm;top:13.81mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.86mm;top:13.81mm;width:8.46mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:76.33mm;top:13.81mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps80"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:84.28mm;top:13.81mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps80"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:92.24mm;top:13.81mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps80"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.19mm;top:13.81mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps80"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.21mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:108.15mm;top:13.81mm;width:24.82mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.82mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.97mm;top:13.81mm;width:34.54mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:0.39mm;">
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.54mm;">
                                            <span class="hrt cs5">점검전후</span></div>
                                        <div class="hls ps29"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:3.69mm;height:3.88mm;width:33.54mm;">
                                            <span class="hrt cs5">ACS로 각상확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:23.33mm;width:13.65mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:12.66mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:13.65mm;top:23.33mm;width:28.86mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:27.87mm;">
                                            <span class="hrt cs5">LPS 점등상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:42.51mm;top:23.33mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:50.96mm;top:23.33mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:59.41mm;top:23.33mm;width:8.45mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:67.86mm;top:23.33mm;width:8.46mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11" style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:7.46mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:76.33mm;top:23.33mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:84.28mm;top:23.33mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:92.24mm;top:23.33mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.19mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:100.19mm;top:23.33mm;width:7.96mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps59"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:5.21mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:108.15mm;top:23.33mm;width:24.82mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:23.82mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:132.97mm;top:23.33mm;width:34.54mm;height:9.52mm;">
                                <div class="hcD" style="left:0.49mm;top:0.49mm;">
                                    <div class="hcI" style="top:2.33mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:33.54mm;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:100.53mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:108.15mm;height:4.23mm;width:170mm;"><span
                            class="hrt cs54">17. 최종 확인</span></div>
                    <div class="hls ps3"
                         style="line-height:87.28mm;white-space:nowrap;left:0;top:115.98mm;height:87.28mm;width:170mm;">
                        <div class="htb"
                             style="left:0.50mm;width:168.24mm;top:0.50mm;height:87.28mm;display:inline-block;position:relative;vertical-align:middle;">
                            <svg class="hs" viewBox="-2.50 -2.50 173.24 92.28"
                                 style="left:-2.50mm;top:-2.50mm;width:173.24mm;height:92.28mm;">
                                <path d="M0.20,6.69 L14.81,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,7.06 L14.81,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M14.81,6.69 L32.61,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M14.81,7.06 L32.61,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M32.61,6.69 L89.50,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M32.61,7.06 L89.50,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,6.69 L121.07,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,7.06 L121.07,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M121.07,6.69 L143.66,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M121.07,7.06 L143.66,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M143.66,6.69 L167.05,6.69"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M143.66,7.06 L167.05,7.06"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M0.20,6.83 L14.81,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,6.91 L14.81,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,16.76 L14.81,16.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,16.84 L14.81,16.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,6.83 L32.56,6.83"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,6.91 L32.56,6.91"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,16.76 L32.56,16.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,16.84 L32.56,16.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,16.76 L14.81,16.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,16.84 L14.81,16.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,26.68 L14.81,26.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,26.77 L14.81,26.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,16.76 L32.56,16.76"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,16.84 L32.56,16.84"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,26.68 L32.56,26.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,26.77 L32.56,26.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,26.68 L14.81,26.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,26.77 L14.81,26.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,36.61 L14.81,36.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,36.70 L14.81,36.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,26.68 L32.56,26.68"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,26.77 L32.56,26.77"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,36.61 L32.56,36.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,36.70 L32.56,36.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,36.61 L14.81,36.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,36.70 L14.81,36.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,46.54 L14.81,46.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,46.62 L14.81,46.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,36.61 L32.56,36.61"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,36.70 L32.56,36.70"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,46.54 L32.56,46.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,46.62 L32.56,46.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,46.54 L14.81,46.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,46.62 L14.81,46.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,56.47 L14.81,56.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,56.55 L14.81,56.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,46.54 L32.56,46.54"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,46.62 L32.56,46.62"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,56.47 L32.56,56.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,56.55 L32.56,56.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,56.47 L14.81,56.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,56.55 L14.81,56.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,66.39 L14.81,66.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,66.48 L14.81,66.48"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,56.47 L32.56,56.47"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,56.55 L32.56,56.55"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,66.39 L32.56,66.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,66.48 L32.56,66.48"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,66.39 L14.81,66.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,66.48 L14.81,66.48"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,76.32 L14.81,76.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,76.40 L14.81,76.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,66.39 L32.56,66.39"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,66.48 L32.56,66.48"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,76.32 L32.56,76.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,76.40 L32.56,76.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,76.32 L14.81,76.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0.20,76.40 L14.81,76.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,76.32 L32.56,76.32"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M14.81,76.40 L32.56,76.40"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.03;"></path>
                                <path d="M0,0 L0,86.29" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M14.81,0 L14.81,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M32.61,0 L32.61,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,0 L89.50,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M121.07,0 L121.07,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M143.66,0 L143.66,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M167.25,0 L167.25,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M32.61,6.87 L89.50,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,6.87 L167.25,6.87"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,16.80 L89.50,16.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,16.80 L167.25,16.80"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,26.73 L89.50,26.73"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,26.73 L167.25,26.73"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,36.65 L89.50,36.65"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,36.65 L167.25,36.65"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,46.58 L89.50,46.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,46.58 L167.25,46.58"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,56.51 L89.50,56.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,56.51 L167.25,56.51"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,66.44 L89.50,66.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,66.44 L167.25,66.44"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M32.61,76.36 L89.50,76.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.12;"></path>
                                <path d="M89.50,76.36 L167.25,76.36"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.10;"></path>
                                <path d="M0,86.29 L167.25,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M167.25,0 L167.25,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L0,86.29" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,86.29 L167.25,86.29"
                                      style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                                <path d="M0,0 L167.25,0" style="stroke:#000000;stroke-linecap:butt;stroke-width:0.40;"></path>
                            </svg>
                            <div class="hce" style="left:0;top:0;width:14.81mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">No</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:0;width:17.80mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">점검항목</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:0;width:56.89mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">점 &nbsp;검 &nbsp;내 &nbsp;용</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:0;width:31.57mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">기 준</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:0;width:22.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;">
                                            <span class="hrt cs5">점검결과</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:0;width:23.59mm;height:6.87mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:1mm;">
                                        <div class="hls ps11"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;">
                                            <span class="hrt cs5">비 고</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:6.87mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">1</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:6.87mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">단자결선</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:6.87mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;CT 결선 및 조임상태 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:6.87mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:6.87mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:6.87mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:16.80mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">2</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:16.80mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">가스밸브</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:16.80mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps81"
                                             style="line-height:3.10mm;white-space:nowrap;left:1.76mm;top:-0.19mm;height:3.88mm;width:52.35mm;">
                                            <span class="hrt cs5">Gas Valve 개, 폐 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:16.80mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">개방</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:16.80mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:16.80mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:26.73mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">3</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:26.73mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">전원상태</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:26.73mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;AC, DC전원 ON상태 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:26.73mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">ON</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:26.73mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:26.73mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:36.65mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">4</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:36.65mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">경보유무</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:36.65mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;경보발생 유무 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:36.65mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">경보 미발생</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:36.65mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:36.65mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:46.58mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">5</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:46.58mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">스위치류</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:46.58mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;스위치류 정위치 확인</span></div>
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;(43LRS)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:46.58mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">SCADA</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:46.58mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:46.58mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:56.51mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">6</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:56.51mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">상태확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:56.51mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;CB, DS 개방상태 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:56.51mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">Open</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:56.51mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:56.51mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:66.44mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">7</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:66.44mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">현장정리</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:66.44mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;사용 공기구 방치 여부</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:66.44mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:66.44mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:66.44mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:0;top:76.36mm;width:14.81mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:13.81mm;">
                                            <span class="hrt cs5">8</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:14.81mm;top:76.36mm;width:17.80mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:16.81mm;">
                                            <span class="hrt cs5">부하전류</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:32.61mm;top:76.36mm;width:56.89mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps6"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:55.88mm;">
                                            <span class="hrt cs5">&nbsp;가압후 부하전류 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:89.50mm;top:76.36mm;width:31.57mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:30.58mm;">
                                            <span class="hrt cs5">3상 전류값 확인</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:121.07mm;top:76.36mm;width:22.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI" style="top:2.53mm;">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:21.59mm;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hce" style="left:143.66mm;top:76.36mm;width:23.59mm;height:9.93mm;">
                                <div class="hcD" style="left:0.50mm;top:0.50mm;">
                                    <div class="hcI">
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:-0.19mm;height:3.88mm;width:22.59mm;">
                                            <span class="hrt cs5">15번 항목에</span></div>
                                        <div class="hls ps18"
                                             style="line-height:3.10mm;white-space:nowrap;left:0;top:4.86mm;height:3.88mm;width:22.59mm;">
                                            <span class="hrt cs5">기록</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hls ps3"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:206.16mm;height:4.23mm;width:170mm;"></div>
                    <div class="hls ps53"
                         style="line-height:3.43mm;white-space:nowrap;left:0;top:213.78mm;height:4.23mm;width:170mm;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('js/signature_pad.umd.min.js') !!}
    {!! Html::script('js/html2canvas.min.js') !!}
    {!! Html::script('js/jspdf.min.js') !!}
    {!! Html::script('js/jquery.textarea_autosize.min.js') !!}
@endpush

@push('custom-scripts')
    <script>

    </script>
@endpush
