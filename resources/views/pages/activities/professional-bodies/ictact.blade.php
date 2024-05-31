@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Professional Bodies',
'value_3' => '',
'page_title' => 'ICT Academy'
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
                    <h5 class="profile-name">Welcome to ICT Academy</h5>


                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                    <div class="profile-info">
                        <h5 class="profile-role">Name of the Academy : ICT Academy (Industry – Institute)</h5>
                        <p class="profile-role">Membership Number : 020131</p>
                        <p class="profile-role">Inauguration : December’2013</p>
                        <p class="profile-location">Coordinator : Prof.S.Manikandan HoD/IT</p>

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
                                    <td>Privileged Associate Membership since 2015</td>

                                </tr>

                                <tr>
                                    <td>ICT Academy Best Academic Partner Award - 2015,2016</td>

                                </tr>

                                <tr>
                                    <td>ICT Academy Best Practices Award : Student Engagement - 2018</td>

                                </tr>



                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


            <div class="application-deadline mt-5">

                    <h5 class="rts-section-desc animated fadeIn">Certifications</h5>

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>List of Courses</td>
                                    <td>Faculty Certification</td>
                                    <td>Student Certification</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>EMC Academic Associate on Cloud Infrastructure and Services</td>
                                    <td>30</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>VMWare IT Academy for Data Centre and Virtualization</td>
                                    <td>10</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>PHP and MySQL</td>
                                    <td>02</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Oracle Java Programming and Java Fundamentals</td>
                                    <td>20</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Campus to Corporate</td>
                                    <td>20</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>IBM Blue MIX</td>
                                    <td>03</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>ICTACT Context</td>
                                    <td>--</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Oracle Day</td>
                                    <td>02</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Sales Force - Trail Head - Learnathon - 2018</td>
                                    <td>20</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>HR Conclave</td>
                                    <td>30</td>
                                    <td>750</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                </div>


                <div class="repeating-content mt--50">
                    <h5 class="title">Proposal</h5>
                    <div class="row g-5">
                        <div class="col-lg-6">


                            <div class="rts-scholarship-description">
                                <div class="repeating-content">
                                    <div class="single-information-box" style="background-color:#ececec !important;">
                                        <div class="rts-event-details">
                                            <div class="event-details__content--feature">


                                                @foreach($international_conferences as $conference)
                                                    <div class="single-feature">
                                                        <p class="feature-heading">{{ $conference }}</p>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">


                            <div class="rts-scholarship-description">
                                <div class="repeating-content">
                                    <div class="single-information-box" style="background-color:#ececec !important;">
                                        <div class="rts-event-details">
                                            <div class="event-details__content--feature">


                                                @foreach($social_responsibility_programmes as $programme)
                                                <div class="single-feature">
                                                    <p class="feature-heading">{{ $programme }}</p>
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


                <h5 class="rts-section-desc animated fadeIn mt-3">Project Funding</h5>

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>Name of the Project</td>
                                    <td>Funding Agency</td>
                                    <td>Amount (in Lakhs)</td>
                                    <td>Year of Completion</td>
                                    <td>Beneficiary</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Banking Financial Services and Insurance (Batch – 1)</td>
                                    <td>Tamil Nadu Skill Development Corporation & ICTACT</td>
                                    <td>0.50</td>
                                    <td>2015</td>
                                    <td>2013,2014 passed out unemployed Youth</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Banking Financial Services and Insurance (Batch – 1)</td>
                                    <td>Tamil Nadu Skill Development Corporation & ICTACT</td>
                                    <td>0.58</td>
                                    <td>2015</td>
                                    <td>(ongoing) 2014,2015 passed out unemployed Youth</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Digital Literacy Programme</td>
                                    <td>Govt. of India & ICTACT</td>
                                    <td>--</td>
                                    <td>2016</td>
                                    <td>Unliterary Peoples</td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>English Literacy Programme for School Teachers</td>
                                    <td>TADCHO</td>
                                    <td>--</td>
                                    <td>2017</td>
                                    <td>SC/ST School Teachers</td>
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



                <div class="repeating-content mt--50">
                    <h5 class="title">Proposal</h5>
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="application-deadline__content--table">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S.No</td>
                                            <td>List of Valued added course and Skill Development courses</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>EMC Academic Associate on Cloud Infrastructure and Services</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>VMWare IT Academy for Data Centre and Virtualization</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Autodesk Certification on CAD/CAM and Civil</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Oracle Java Programming and Java Fundamentals</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Campus to Corporate</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>National Instruments Certification on Digital Communications</td>
                                        </tr>
                                    </tbody>
                                </table>


                                </div>






                        </div>
                        <div class="col-lg-6">
                            <div class="application-deadline__content--table">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S.No</th>
                                            <td>Faculty Development Programme</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Faculty Development Program - IIMBx</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Faculty Development Centre - NMTT</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Faculty Development Programme - Research Foundation of India</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Faculty Development Programme - IIM Indore</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>National Faculty Development Programme - NMC</td>
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


    </div>
 </section>





@include('components.cta')
@endsection
