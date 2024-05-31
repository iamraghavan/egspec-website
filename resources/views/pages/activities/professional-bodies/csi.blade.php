@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Professional Bodies',
'value_3' => '',
'page_title' => 'Computer Society of India'
])


@php

$action_plan = [
    "Planned to register maximum of 150 students in every year.",
    "Planned to get permanent membership for faculty member’s atleast 5 per year.",
    "To publish Staff/Students research papers or problem in every month CSI magazine issue.",
    "Planned to organize CSI Sponsored 2 events in every semester.",
    "To arrange Guest Lecture, Implant Training, Industrial Visit through CSI Institute – Interaction Cell.",
    "Instructed to all Staff/Students to attend CSI Sponsored Symposium, Seminars, Workshops, Conference etc in every semester (atleast any 2 events).",
    "Recommended to all Research scholars to publish their research papers in CSI Chapter and receives grants from CSI.",
    "Planned to get minimum of 2 grants from CSI for different events.",
    "Planned to organize CSI annual meet in our institution."
];

@endphp


<section class="rts-about-university pt--100 pb--80">
    <div class="container">



     <div class="row">
        <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                <div class="profile-info">
                    <h5 class="profile-name">Welcome to CSI Student Branch</h5>


                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                    <div class="profile-info">
                        <h5 class="profile-role">Name of the Chapter : CSI Student Branch</h5>
                        <p class="profile-role">Membership Number : I 01720</p>
                        <p class="profile-role">Inauguration : May’2013</p>
                        <p class="profile-location">Counselor : Prof.M.Chinnadurai, HOD/CSE</p>
                        <p class="profile-location">Convener : Prof.S.Manikandan, HOD/IT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="admission-content-top">

            <div class="application-deadline">

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped">
                            <thead class="table-theme">
                                <tr>
                                    <td>Special Mention</td>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Received certificate of Institutional Accerdidation to engage in Knowledge Sharing, Technology Promotion and Skill Upgration in the academic year of 2014-2015</td>

                                </tr>





                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


            <div class="application-deadline mt-5">

                    <h5 class="rts-section-desc animated fadeIn">Event Details  [June’2014 – December’2015]</h5>

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>Date</td>
                                    <td>Name of the Event</td>
                                    <td>Department</td>
                                    <td>Organizing Coordinator(s)</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>16/06/2014 – 21/06/2014</td>
                                    <td>One week value added course on Cloud Infrastructure and Services</td>
                                    <td>IT&CSE</td>
                                    <td>Mr.S.Manikandan, AP/IT, Mr.S.Palanimurugan, AP/IT, Mr.J.Noorul Ameen, AP/CSE, Ms.Sindoori, AP/CSE</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>18/07/2014 – 19/07/2014</td>
                                    <td>Two days Hands-On Cloud Infrastructure and Services</td>
                                    <td>IT</td>
                                    <td>Mr.S.Manikandan, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>19/07/2014</td>
                                    <td>One day Seminar on Prime Skills for Engineering Professionals</td>
                                    <td>CSE</td>
                                    <td>Mr.K.Balasubramaniyan, AP/CSE, Mr.G.Arul Selvan, AP/CSE</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>09/08/2014</td>
                                    <td>One day Guest Lecture on An Insight on Academic Projects</td>
                                    <td>CSE & IT</td>
                                    <td>Mr.Sudhir Shenai, AP/CSE, Mr.Prabhakaran, AP/CSE, Mr.A.Javed Sultan, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>09/08/2014</td>
                                    <td>One day workshop on Water and Waste Management</td>
                                    <td>R&D</td>
                                    <td>Dr.M.K.Mizhra, Director/R&D</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>23/08/2014</td>
                                    <td>National Level Technical Symposium</td>
                                    <td>IT</td>
                                    <td>Mr.S.Palanimurugan, AP/IT, Ms.E.Vijayavani, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>06/09/2014 - 07/09/2014</td>
                                    <td>National Level Technical Symposium</td>
                                    <td>MCA</td>
                                    <td>Mr.C.Mallika, AP/MCA, Mr.Selvaganapathy, AP/MCA</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>13/09/2014</td>
                                    <td>One day Hands-On workshop on Database Administration and Management</td>
                                    <td>IT</td>
                                    <td>Ms.E.Vijayavani, AP/IT, Ms.S.Lavanya, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td>20/09/2014</td>
                                    <td>National Level Technical Symposium</td>
                                    <td>CSE</td>
                                    <td>Mr.M.Marcko, AP/CSE, Mr.S.Aravindhan, AP/CSE</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td>27/09/2014</td>
                                    <td>One day Hands-On workshop on Android Mobile Apps</td>
                                    <td>IT</td>
                                    <td>Mr.S.Palanimurugan, AP/IT, Mr.K.Manikanda Kumaran, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>11</td>
                                    <td>28/02/2015</td>
                                    <td>Appdhoom – 2 Event Android Mobile Apps Development</td>
                                    <td>CSE & IT</td>
                                    <td>Prof.S.Manikandan, AP/IT</td>
                                  </tr>
                                  <tr>
                                    <td>12</td>
                                    <td>08/06/2015 - 13/06/2015</td>
                                    <td>Value Added Course and EMC Online Test</td>
                                    <td>CSE & IT</td>
                                    <td>Prof.S.Aravinthan, AP/CSE, Prof.S.Praveenkumar, AP/CSE</td>
                                  </tr>
                                  <tr>
                                    <td>13</td>
                                    <td>08/06/2015 - 13/06/2015</td>
                                    <td>Value Added Course on Java Fundamentals and Java Programming</td>
                                    <td>CSE & IT</td>
                                    <td>Prof.S.Manikandan, AP/IT, Prof.V.M.Suresh, AP/IT, Prof.S.Mahalakshmi, AP/CSE, Prof.Vennila, AP/CSE</td>
                                  </tr>
                            </tbody>
                        </table>
                        </div>
                </div>







                <div class="repeating-content mt--50">
                    <h5 class="title">Action Plan</h5>
                    <div class="row g-5">
                        <div class="col-lg-12">


                            <div class="rts-scholarship-description">
                                <div class="repeating-content">


                                    <div div style="background-color: #3eb75ec9 !important;" class="single-information-box rt-secondary-bg big-box">
                                        <div class="rts-event-details">
                                            <div class="event-details__content--feature">


                                                @foreach($action_plan as $action)
                                                    <div class="single-feature">
                                                        <p class="feature-heading">{{ $action }}</p>
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


    </div>


    </div>


    </div>
 </section>





@include('components.cta')
@endsection
