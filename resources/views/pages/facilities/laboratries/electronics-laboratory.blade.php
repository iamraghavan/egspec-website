@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => 'Laboratries',
    'value_3' => '',
    'page_title' => 'Electronics Laboratory'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h3 class="rts-section-title animated fadeIn">Laboratories and Facilities</h3>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <p class="rts-section-description">
                        The Department of Electronics and Communication Engineering, established in 2004 with an intake of 30 students, has since expanded to 120 undergraduates and offers a postgraduate program in Communication Systems. Recognized as a Research Center by Anna University in 2015, it boasts NAAC A grade and autonomous status, providing updated courses, state-of-the-art laboratories, and a faculty versed in diverse specialties including Analog Electronics, Digital Signal Processing, and Embedded Systems.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="academic-picture">
                    <div class="swiper-container desktop-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://img.freepik.com/free-photo/closeup-image-computer-microchip-surrounded-by-green-leaves_125540-4826.jpg" alt="1">
                            </div>
                            {{-- <div class="swiper-slide">
                                <img src="https://img.freepik.com/premium-photo/printed-circuit-board-fabrication-with-smt-tecnology-operators-working-with-esd-personal-protective-gloves-machines-are-working-full-speed-fully-automated_692702-28270.jpg" alt="2">
                            </div> --}}
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>

<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name of the Laboratory</th>
                                            <th>Faculty Incharge</th>
                                            <th>Laboratory Administrator</th>
                                            <th>Equipment / Specification</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>COMMUNICATION SYSTEMS LAB</td>
                                            <td>Mrs.R.S.Koteeshwari</td>
                                            <td>Ms.S.Shapna priya</td>
                                            <td>(1) MATLAB -2013(25 USER) <br><br> (2) VECTOR NETWORK ANALYSER <br><br>
                                                (3) BASIC MICROSTRIP COMPONENT TRAINER (MCT-B) <br><br>
                                                 (4) DIGITAL STORAGE OSCILLOSCOPE <br><br>
                                                 (5) ACTIVE COMPONENT SOURCE MODEL (MCT-A)-S <br><br>
                                                 (6) ACTIVE COMPONENT DETECTOR MODEL (MCT-A)-D <br><br>(7) PASSIVE MICROSTRIP COMPONENT</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>DIGITAL ELECTRONICS & LIC LAB</td>
                                            <td>Mrs.S.CHITRA</td>
                                            <td>Mr.D.Venkatesan</td>
                                            <td>(1)CRO <br><br>
                                                (2)REGULATED POWER SUPPLY <br><br>
                                                (3)AUTO TRANSFORMER <br><br>
                                                (4)RANGE FINDER <br><br>
                                                (5)VOLTAGE ALERT</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>MICROPROCESSOR LAB</td>
                                            <td>Dr.V. Sathiya</td>
                                            <td>Mr.D.Venkatesan</td>
                                            <td>(1) 8085 MICROPROCESSOR TRAINER KIT <br><br>
                                                (2) 8086 MICROPROCESSOR TRAINER KIT <br><br>
                                                (3) 8051 MICROCONTROLLER TRAINER KIT-1/6 & 2/6 <br><br>
                                                (4) 8051MICROCONTROLLER TRAINER KIT-3/6 <br><br>
                                                (5) 8051MICROCONTROLLER TRAINER KIT-4/6 TO 6/6</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>DIGITAL SIGNAL PROCESSING(DSP ) LAB</td>
                                            <td>Mr. M. NUTHAL SRINIVASAN</td>
                                            <td>Mr.A.Vignesh Kumar</td>
                                            <td>(1)TMS 320C50 BASED STARTER KIT <br><br>
                                                (2) TMS 320C5416 BASED DSP STARTER KIT <br><br>
                                                (3) MATLAB -2019(10 USER) <br><br>
                                                (4) Personal Computer 60 Nos.</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>VLSI DESIGN LAB</td>
                                            <td>Mrs.M.Selvasundary</td>
                                            <td>Mr.A.Vignesh Kumar</td>
                                            <td>(1) XILINX SPARTAN 3E FPGA TRAINER KIT <br><br>
                                                (2) SPARTAN 3E TRAINER KIT<br><br>
                                                (3) 6 DIGIT 7 SEGMENT DISPLAY BOARD<br><br>
                                                (4) TRAFFIC LIGHT CONTROLLER<br><br>
                                                (5) PARALLEL PORT ADAPTER</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>OPTICAL and MICROWAVE LAB</td>
                                            <td>Mrs.R.Deepa</td>
                                            <td>Ms.M.Nandhini</td>
                                            <td>(1) FIBER OPTIC POWER METER MODEL PTN 6585 (660NM/850NM) <br><br>
                                                (2) BASIC FIBER OPTIC TRAINER PTN-850 NM (GLASS FIBER LED) <br><br>
                                                (3) FIBER OPTIC DIGITAL LINK TRAINER QIS-FO-1002 PTN 2002 <br><br>
                                                (4) MICROWAVE BENCH-1<br><br>
                                                (5) LINK B ADVANCED FIBER OPTIC COMMUNICATION TRAINER KIT PTN 3003-660NM VISIBLE</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>ELECTRONIC DEVICES LAB</td>
                                            <td>Mr.T.SENTHIL KUMAR</td>
                                            <td>Mr.K.RAJU</td>
                                            <td>(1) CRO <br><br>
                                                (2) FLY BACK CONVERTER KIT <br><br>
                                                (3) AFO <br><br>
                                                (4) FUNCTION GENERATOR <br><br>
                                                (5) DSO <br><br>
                                                (6) BUCK BOOST CONVERTER KIT <br><br>
                                                (7) DIB <br><br>
                                                (8) DCB<br><br>
                                                (9) RPS</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>PROJECT LAB</td>
                                            <td>Dr.V.Parthasaradi</td>
                                            <td>Mr.K.RAJU</td>
                                            <td>(1)LAB VIEW SOFTWARE <br><br>
                                                (2)USRP KIT<br><br>
                                                (3)MATLAB AND SIMULINK SOFTWARES</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<style>
    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        padding: 1rem;
    }
</style>

{{-- <script>
      document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 2000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    });
</script> --}}


@include('components.cta')
@endsection
