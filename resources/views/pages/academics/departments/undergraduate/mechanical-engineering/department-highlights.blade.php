@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Mechanical Engineering',
    'page_title' => 'Highlights'
])

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
                                                <td>Highlights</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Accredited by NBA (National Board of Accreditation) – Tier 1</td>
                                            </tr>
                                            <tr>
                                                <td>Autonomous System and Outcome Based Education – The curriculum is designed to meet industry standards</td>
                                            </tr>
                                            <tr>
                                                <td>100% admission rate over the last 5 years</td>
                                            </tr>
                                            <tr>
                                                <td>Consistent Placement record with an average of 85%</td>
                                            </tr>
                                            <tr>
                                                <td>15:1 student-faculty ratio, comprehensive mentoring programs, and state-of-the-art facilities</td>
                                            </tr>
                                            <tr>
                                                <td>Experienced faculty members with industry training</td>
                                            </tr>
                                            <tr>
                                                <td>Regular recruiters include Inforview, TCS, Wipro, ILM, Amazon, and others</td>
                                            </tr>
                                            <tr>
                                                <td>Industry Tie-ups and Supported Laboratories with AWS, Dell EMC, VMware, Oracle, and more</td>
                                            </tr>
                                            <tr>
                                                <td>Internships, industrial visits, and credit-based certification courses</td>
                                            </tr>
                                            <tr>
                                                <td>Winners of AICTE Smart India Hackathon and Chatra Viswakarama Award</td>
                                            </tr>
                                            <tr>
                                                <td>ISTE and TNSCST Student Project award winners</td>
                                            </tr>
                                            <tr>
                                                <td>Industry awards including VMWare IT Academy VTIA, Oracle Academy CoE, and others</td>
                                            </tr>
                                            <tr>
                                                <td>Active participation in extracurricular and co-curricular activities</td>
                                            </tr>
                                            <tr>
                                                <td>In-house training for placements, higher studies, competitive exams, and life skills</td>
                                            </tr>
                                            <tr>
                                                <td>Online and self-learning tools including Google Classrooms, GUVI, and others</td>
                                            </tr>
                                            <tr>
                                                <td>Student clubs such as Programmers Paradise Club, Designers Domain Club, and others</td>
                                            </tr>
                                            <tr>
                                                <td>Association with Federal Association for Information Technology Honours (FAITH)</td>
                                            </tr>
                                            <tr>
                                                <td>Active Alumni Association</td>
                                            </tr>
                                            <tr>
                                                <td>ICT-enabled classrooms and laboratories</td>
                                            </tr>
                                            <tr>
                                                <td>Research and development facilities with student projects, patents, and copyrights</td>
                                            </tr>
                                            <tr>
                                                <td>Support for publications, conferences, and consultancy</td>
                                            </tr>
                                            <tr>
                                                <td>Grievance Redressal System, Mentor-Mentee Scheme, and Women Empowerment Cell</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/infrastructure') }}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/mechanical-engineering/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                            name="x"
                            :phones="['y']"
                            :emails="['z']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
