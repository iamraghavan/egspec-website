@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Professional Bodies',
'value_3' => '',
'page_title' => 'Institution of Electronics and Telecommunication Engineering (IETE)'
])

@php
 $international_conferences = [
    "International Conference on Research and Development in Information and Communication Technology (ICRDICT-2015)",
    "International Conference on Innovative Research in Electrical Sciences (ICIRES-2015)",
    "International Conference on Innovative Research in Management Studies (ICIRMS-2015)",
    "International Conference on Research and Development in Information and Communication Technology (ICRDICT-2016)"
];

$social_responsibility_programmes = [
    "Banking Financial Services and Insurance – Short term skill development programme on passed out graduate students",
    "Digital Literacy programme",
    "English Literacy Programme",
    "Entrepreneurship Programme"
];

$action_plan = [
    "Every year 100 students to attend ICTACT bridge course.",
    "Every year minimum of 2 faculties from each department to attend Faculty development programme and get International Certification from reputed industries like EMC2, National Instruments etc..",
    "Planned to attend at least 2 Student development programmes per year.",
    "To publish Staff/Students research papers or problem in ICTACT International Journal.",
    "Planned to organize ICTACT Sponsored 2 events in every semester.",
    "To arrange Guest Lecture, Implant Training, Industrial Visit through ICTACT Institute – Interaction Cell.",
    "Instructed to all Staff/Students to attend ICTACT Sponsored Symposium, Seminars, Workshops, Conference etc in every semester (at least any 2 events).",
    "Recommended to all Research scholars to publish their research papers in ICATCT and receive grants from ICTACT.",
    "Recommended to all faculties to train and encourage the students to attend Quiz, Project Expo, Poster Presentation etc."
];

@endphp


<section class="rts-about-university pt--100 pb--80">
    <div class="container">



     <div class="row">
        <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                <div class="profile-info">
                    <h5 class="profile-name">Institution of Electronics and Telecommunication Engineering (IETE)</h5>


                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                    <div class="profile-info">
                        <h5 class="profile-role">Name of the Academy  : Institution of Electronics and Telecommunication Engineering (IETE)</h5>
                        <p class="profile-role">Convener : Prof. D. Devarajan, M.E – Asst.Prof/ECE</p>


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
                                    <td>ABOUT IETE</td>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>The Institution of Electronics and Telecommunication Engineers (IETE) is India’s leading recognised professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT. Founded in 1953. The IETE is the National Apex Professional body of Electronics and Telecommunication, Computer and IT Professionals. It serves more than 60,000 members through various 65 Centres, spread all over India and abroad. The Institution provides leadership in Scientific and Technical areas of direct importance to the national development and economy. Government of India has recognised IETE as a Scientific and Industrial Research Organization (SIRO) and also notified as an educational Institution of national eminence. The objectives of IETE focus on advancing electro-technology. The IETE conducts and sponsors technical meetings, conferences, symposia, and exhibitions all over India, publishes technical journals and provides continuing education as well as career advancement opportunities to its members.</td>

                                </tr>




                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


            <div class="application-deadline">

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped">
                            <thead class="table-theme">
                                <tr>
                                    <td>VISION</td>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Reaching the un-reached and empowering the youth through Technical Education and Skill Development.</td>

                                </tr>




                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


            <div class="application-deadline">

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped">
                            <thead class="table-theme">
                                <tr>
                                    <td>MISSION</td>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Advancement of Electronics, Telecommunication, Information Technology & other related disciplines to contribute in Nation’s Human Resource & Infrastructure Development through our Engineers.</td>

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
                                    <td>DATE</td>
                                    <td>COORDINATORS</td>
                                    <td>RESOURCE PERSONS</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>01</td>
                                    <td>Inauguration of IETE Students Forum( ISF) & Guest Lecture on Evolution of Wireless and Mobile Communnication</td>
                                    <td>20/02/2015</td>
                                    <td>-</td>
                                    <td>Col K.S Chakravarthi (Retd),Chairman IETE Chennai Centre</td>
                                  </tr>
                                  <tr>
                                    <td>02</td>
                                    <td>IETE sponsored One Week Program on Sharpen Your Pencil</td>
                                    <td>14.03.2015 - 19-03-2015</td>
                                    <td>S.Palanimurugan AP/IT</td>
                                    <td>Mr.S.Ramabalan,Principal,EGSPEC</td>
                                  </tr>
                                  <tr>
                                    <td>03</td>
                                    <td>IETE sponsored Two days workshop in software defined Radio using NI USRP</td>
                                    <td>01/08/2015 - 02/08/2015</td>
                                    <td>M.Nuthal Srinivasan AP/ECE</td>
                                    <td>S.Senthil Kumar AP/ECE, Mr.A.Manimaran ,NI Instructor,Bangalore</td>
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
 </section>





@include('components.cta')
@endsection
