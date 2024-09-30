@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electronics And Communication Engineering',
'page_title' => 'Department Highlights' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="admission-content-top">
                        <div class="application-deadline">
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Year of Establishment</td>
                                                <td>2004 (ECE)</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Intake at Establishment</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Intake increased</td>
                                                <td>60 at 2005 & 120 at 2013</td>
                                            </tr>
                                            <tr>
                                                <td>M.E Established</td>
                                                <td>2013 (Communication Systems)</td>
                                            </tr>
                                            <tr>
                                                <td>M.E Intake</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td>Research Centre Recognition</td>
                                                <td>2015 (Research Center under Anna University, Chennai)</td>
                                            </tr>
                                            <tr>
                                                <td>NBA Accreditation</td>
                                                <td>2019 (3 years - Tier 2)</td>
                                            </tr>
                                            <tr>
                                                <td>NIRF Ranking</td>
                                                <td>2018 (Below 200) & 2022 (251-300 range)</td>
                                            </tr>
                                            <tr>
                                                <td>NBA Accreditation</td>
                                                <td>2022 (3 years - Tier 1)</td>
                                            </tr>
                                            <tr>
                                                <td>NAAC Accreditation</td>
                                                <td>2016 (A grade - Cycle 1) & 2023 (A++ grade - Cycle 2)</td>
                                            </tr>
                                        </tbody>
                                    </table>



                                </div>

                                <div class="rts-scholarship-description">
                                    <div class="repeating-content">
                                        <div class="single-information-box rt-theme-bg">
                                            <div class="single-info text-justify">
                                                <h4 class="title">Department Overview</h4>
                                                <p class="amount">The courses offered are updated regularly to keep pace with the growing demands of the industry and the research community. The laboratories consist of all the latest equipment to meet the dynamic changes in the curriculum. Apart from the regular labs, the department is setting up labs in image processing, RF system design, Computer vision with the MATLAB campus wide license. The passed-out students are working in various reputed industries in India and many foreign countries. The Department faculty members are specialized in Analog Electronics, Advanced Digital System Design, Digital Signal and Image Processing, Medical Electronics, Embedded system, Nano technology, VLSI technology, Wired and wireless Networking, Analog and Digital Communication, Fuzzy control and Neural Networks, Software tools like MATLAB, LabVIEW, Mentor Graphics, NS2, Keil, SPICE, Circuit maker, Open source software, etc. The department has a team of committed faculty members who are not only well qualified but are also backed by rich industrial / research / teaching experience. For students we follow Outcome based education as per the NBA norms. The teaching and learning process are in such a way to follow OBE. The value added courses, workshop, seminars, Conference and symposium are regularly conducted for students to attain all the program outcomes. For faculty members and non-teaching faculty members special training for skill up gradation program like NPTEL, other MOOC courses were encouraged to complete in every semester. Also, the FDP, workshop or seminar were encouraged to attend. We are also encourage our staff member to do research work by publishing high impact factor journals and conference papers, more no. of funded projects and patents.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. M. Malathi, M.E., Ph.D"
                            :phones="['+91 9443 101 712']"
                            :emails="['hodece@egspec.org', 'malathi@egspec.org']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('components.cta')





@endsection
