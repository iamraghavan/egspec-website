@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Professional Bodies',
'value_3' => '',
'page_title' => 'Institution of Engineers'
])

@php
$highlights = [
    "Fetched the funded research project of Rs. 20,000/- by Prof. G.Ganesan, AP/EEE under R&D grant-in-aid scheme for the title \"Renewable Energy based air conditioning system for public transports in green environment\" during April 2015.[1][5]",
    "Around 460 student members from all the departments joined in ECSC (Engineering College Students Chapter) during September 2014.",
    "Every year 10 members from EGSP is selected and a scholarship amount of Rs.7,000 for each student members."
];

@endphp


<section class="rts-about-university pt--100 pb--80">
    <div class="container">



     <div class="row">
        <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                <div class="profile-info">
                    <h5 class="profile-name">Welcome to IEI Corner</h5>


                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                    <div class="profile-info">
                        <h5 class="profile-role">Name of the Chapter : Institution of Engineers (India)</h5>
                        <p class="profile-role">Membership ID : IM 000343-5</p>
                        <p class="profile-role">Students Chapter ID : AB/ ECSC/ 611002/ EGSP</p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="admission-content-top">










            <div class="application-deadline mt-5">

                    <h5 class="rts-section-desc animated fadeIn">Coordinators</h5>

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.NO</td>
                                    <td>FACULTY NAME</td>
                                    <td>DEPARTMENT</td>
                                    <td>RESPONSIBILITY</td>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Prof.G.Sundaravadivel</td>
                                        <td>Mechanical</td>
                                        <td>Adviser – IEI students Chapter</td>
                                      </tr>
                                      <tr>
                                        <td>02</td>
                                        <td>Prof.G.Ganesan@ Subramanian</td>
                                        <td>EEE</td>
                                        <td>Adviser – IEI Institution chapter</td>
                                      </tr>
                                      <tr>
                                        <td>03</td>
                                        <td>Prof.Nuthal Srinivasan</td>
                                        <td>ECE</td>
                                        <td>Adviser – Dept. of ECE</td>
                                      </tr>
                                      <tr>
                                        <td>04</td>
                                        <td>Prof.J.Noorul Ameen</td>
                                        <td>CSE</td>
                                        <td>Adviser – Dept. of CSE</td>
                                      </tr>
                                      <tr>
                                        <td>05</td>
                                        <td>Prof.Arjunan</td>
                                        <td>CIVIL</td>
                                        <td>Adviser – Dept. of Civil</td>
                                      </tr>
                                      <tr>
                                        <td>06</td>
                                        <td>Prof.S.Palanimurugan</td>
                                        <td>IT</td>
                                        <td>Adviser – Dept. of IT</td>
                                      </tr>
                            </tbody>
                        </table>
                        </div>
                </div>








            </div>


            <div class="application-deadline mt-5">

                <h5 class="rts-section-desc animated fadeIn">List of activities conducted</h5>

            <div class="application-deadline__content">
                <div class="application-deadline__content--table">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="table-theme">
                            <tr>
                                <td>S.NO</td>
                                <td>NAME OF THE ACTIVITY</td>
                                <td>CATEGORY</td>
                                <td>DATE</td>
                                <td>COORDINATORS</td>
                                <td>VENUE</td>
                                <td>RESOURCE PERSONS</td>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>ENERGY AUDITING</td>
                                    <td>One day workshop</td>
                                    <td>27.09.2012</td>
                                    <td>Mr.G.Ganesan, AP/EEE<br>Mr.G.Sundaravadivel,AP/MECH</td>
                                    <td>EGSPEC</td>
                                    <td>A.ThangamuthuDGM-Mechanical, NLC Ltd., Neyveli</td>
                                  </tr>
                                  <tr>
                                    <td>02</td>
                                    <td>ENERGY CONSERVATION AND ELECTRICAL SAFETY</td>
                                    <td>One day awareness program</td>
                                    <td>19.03.2014</td>
                                    <td>Mr.G.Ganesan, AP/EEE<br>Mr.G.Sundaravadivel,AP/MECH</td>
                                    <td>G.B.H.S.S, Nannilam</td>
                                    <td>Mr.G.Ganesan, AP/EEE<br>Mr.G.Sundaravadivel,AP/MECH</td>
                                  </tr>
                                  <tr>
                                    <td>03</td>
                                    <td>PROSPECTS OF POWER PLANTS IN ENGINEERING LIFE</td>
                                    <td>One day seminar</td>
                                    <td>21.01.2015</td>
                                    <td>Mr.G.Ganesan, AP/EEE<br>Mr.G.Sundaravadivel,AP/MECH</td>
                                    <td>EGSPEC</td>
                                    <td>R.Periyasamy, Council Memeber- IEI<br>A.ThangamuthuDGM-Mechanical, NLC Ltd., Neyveli</td>
                                  </tr>
                                  <tr>
                                    <td>04</td>
                                    <td>EMBEDDED SYSTEMS</td>
                                    <td>One day workshop</td>
                                    <td>23.01.15</td>
                                    <td>Mr.C.Mathuvanesan<br>Mr.Nuthalsrinivasan AP/ECE</td>
                                    <td>EGSPEC</td>
                                    <td>Mrs. R. Lakshmi rekha,HOD/ECE, EGSPEC</td>
                                  </tr>
                                  <tr>
                                    <td>05</td>
                                    <td>HANDS ON EXPERIENCE IN SIMULATION OF CIRCUITS(HOINS)</td>
                                    <td>One day workshop</td>
                                    <td>31.01.15</td>
                                    <td>Mr.Ramachandran<br>Ms.Deepa AP/ECE</td>
                                    <td>EGSPEC</td>
                                    <td>Prof.A.Prabakaran, AP/ECE, AVCCE, Mayiladuthurai<br>Mr.D.Devarajan,AP/ECE</td>
                                  </tr>
                                  <tr>
                                    <td>06</td>
                                    <td>NATIONAL CONGRESS ON ENGINEERING ,TECHNOLOGY,MANAGEMENT,SCINCE AND HUMANITIES</td>
                                    <td>National conference</td>
                                    <td>27.03.2015</td>
                                    <td>Mr.S.Palanimurugan AP/CSE</td>
                                    <td>EGSPEC</td>
                                    <td>Shri.R.Ganapathy,Advisor, MARG port, Karaikal</td>
                                  </tr>
                        </tbody>
                    </table>
                    </div>
            </div>








        </div>





        <h5 class="title">Highlights</h5>
                    <div class="row g-5">
                        <div class="col-lg-12">


                            <div class="rts-scholarship-description">
                                <div class="repeating-content">
                                    <div class="single-information-box" style="background-color:#ececec !important;">
                                        <div class="rts-event-details">
                                            <div class="event-details__content--feature">


                                                @foreach($highlights as $highlight)
                                                <div class="single-feature">
                                                    <p class="feature-heading">{{ $highlight }}</p>
                                                </div>
                                            @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

        </div>


    </div>


    </div>


    </div>
 </section>





@include('components.cta')
@endsection
