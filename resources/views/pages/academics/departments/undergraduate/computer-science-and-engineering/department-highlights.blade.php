@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Information Technology',
'page_title' => 'Highlights' ])


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
                                                <td>Autonomous System and Outcome based Education</td>
                                            </tr>
                                            <tr>
                                                <td>Industry-oriented curriculum</td>
                                            </tr>
                                            <tr>
                                                <td>Last 4 years 100% admission</td>
                                            </tr>
                                            <tr>
                                                <td>Consistent Placement record of 82%</td>
                                            </tr>
                                            <tr>
                                                <td>15:1 student-faculty ratio, faculty-student mentoring, peer mentoring</td>
                                            </tr>
                                            <tr>
                                                <td>Experienced and Industry - trained faculty members</td>
                                            </tr>
                                            <tr>
                                                <td>Offering industrial trainings</td>
                                            </tr>
                                            <tr>
                                                <td>Our privileged recruiters – Accenture, Inforview, TCS, Aveon Infotech, Seval Software Solutions, Vinayak Infotech, Tech Mahindra, Zoho, Cognizant, Zealous</td>
                                            </tr>
                                            <tr>
                                                <td>Industry Tie-up and Industry Supported Laboratories – Amazon Web Services, Dell EMC, VMware IT Academy, Oracle Academy, Sales Force, Red Hat, UiPath, ICT Academy, CISCO, Palo Alto Academy, Linuxpert Systems</td>
                                            </tr>
                                            <tr>
                                                <td>Internship, Industrial Visit, and Credit-based Certification courses</td>
                                            </tr>
                                            <tr>
                                                <td>Highest number of students participated in various extracurricular and co-curricular activities</td>
                                            </tr>
                                            <tr>
                                                <td>In-house training for Placements, Higher studies, Competitive examinations, and Life skill courses</td>
                                            </tr>
                                            <tr>
                                                <td>Online and Self-Learning practices – Google Classrooms, GUVI, Skill Rack, Ampisoft training, Internshela</td>
                                            </tr>
                                            <tr>
                                                <td>Students Clubs – Programmers Paradise Club, Designers Domain Club, Networking Club</td>
                                            </tr>
                                            <tr>
                                                <td>Association – Computer Engineers Association (CEA)</td>
                                            </tr>
                                            <tr>
                                                <td>Active Alumni Association</td>
                                            </tr>
                                            <tr>
                                                <td>ICT Enabled Classrooms and Laboratories</td>
                                            </tr>
                                            <tr>
                                                <td>Research and Development facility</td>
                                            </tr>
                                            <tr>
                                                <td>Support for Publications, Conferences, and Consultancy works</td>
                                            </tr>
                                            <tr>
                                                <td>Grievance Redressal System, Internal Complaints Cell, Women Empowerment Cell for student development</td>
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
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. T.Ganesan"
                            :phones="['+91 99407 42877']"
                            :emails="['Ganesan21@gmail.com']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
