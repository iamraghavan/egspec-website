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
                                                <td>Autonomous System and Outcome based Education – The curriculum is well defined to cater to the requirements of both industry deployment</td>
                                            </tr>
                                            <tr>
                                                <td>Last 5 years 100% admission</td>
                                            </tr>
                                            <tr>
                                                <td>Consistent Placement record of 85%</td>
                                            </tr>
                                            <tr>
                                                <td>15:1 student-faculty ratio, faculty-student mentoring, peer mentoring, communicare facility</td>
                                            </tr>
                                            <tr>
                                                <td>Experienced and Industry trained faculty members</td>
                                            </tr>
                                            <tr>
                                                <td>Regular recruiters – Inforview, TCS, Wipro, ILM, Amazon, Soft Squre, Tech Mahindra, Zoho, Cognizant, Touchmark, Wahimi, DesiCrew, Ampisoft</td>
                                            </tr>
                                            <tr>
                                                <td>Industry Tie-up and Industry Supported Laboratories - Amazon Web Services, Dell EMC, VMware IT Academy, Oracle Academy, Sales force, Red Hat, UiPath, ICT Academy, CISCO, Palo Alto Academy, Linuxpert Systems</td>
                                            </tr>
                                            <tr>
                                                <td>Internship, Industrial Visit and Credit based Certification courses</td>
                                            </tr>
                                            <tr>
                                                <td>AICTE Smart India Hackathon, Chatra Viswakarama Award winners</td>
                                            </tr>
                                            <tr>
                                                <td>ISTE and TNSCST Student Project winners</td>
                                            </tr>
                                            <tr>
                                                <td>Industry Award – VMWare IT Academy VTIA, Oracle Academy CoE, Dell EMC CoE, ICT Academy Student Engagement, Sales force Trail Head Learnathon, AWS Cloud Day, CISCO Year of Service</td>
                                            </tr>
                                            <tr>
                                                <td>Highest number of students participated in various extracurricular and co-curricular activities</td>
                                            </tr>
                                            <tr>
                                                <td>In-house training for Placements, Higher studies, competitive examination and Life skill courses</td>
                                            </tr>
                                            <tr>
                                                <td>Online and Self Learning practices- Google Class Rooms, GUVI, Skill rack, Ampisoft training, Internshela</td>
                                            </tr>
                                            <tr>
                                                <td>Students Clubs : Programmers Paradise Club, Designers Domain Club, Learners and Earners Club, App Development Club</td>
                                            </tr>
                                            <tr>
                                                <td>Association : Federal Association for Information Technology Honours (FAITH)</td>
                                            </tr>
                                            <tr>
                                                <td>Active Alumni Association</td>
                                            </tr>
                                            <tr>
                                                <td>ICT Enabled Class rooms and Laboratories</td>
                                            </tr>
                                            <tr>
                                                <td>Research and Development facility – 20 Student Project, 6 Patent, 15 Copyright are filed</td>
                                            </tr>
                                            <tr>
                                                <td>Support for Publications, Conferences and Consultancy works</td>
                                            </tr>
                                            <tr>
                                                <td>Grievance Redressal System, Mentor-Mentee Scheme, Women Empowerment Cell for student development</td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>

                    </div>

                    <x-accordion-links :links="[

                'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform?usp=sf_link',
                'Students Feedback' => 'https://docs.google.com/forms/d/e/1FAIpQLSdhWwmjf965CW6NkNSVwzZ41IlceBgTRAAaaxswqQb2p6WW-Q/viewform?usp=sf_link',
                'Grievances' => 'https://docs.google.com/forms/d/e/1FAIpQLScQ3xc3O8iAswJs9MChu5Kd_nunV5wBmS7a6T0YKEPA8NnS3w/viewform?usp=sf_link',
                'Employer Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSd_lJlYkKDrivGp9rYsqyLVcmWV-2F86-VaclLOiIhHvPyAQQ/viewform?usp=sf_link',
                'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform?usp=sf_link',
                'Department Forms' => 'https://sites.google.com/site/profmaniit/department?authuser=0'

               ]"/>


                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">

                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collabration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

<li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>


                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                            name="Dr. S. Manikandan, M.E., Ph.D"
                            :phones="['+919047902685', '+919500707894']"
                            :emails="['manikandan@egspec.org', 'profmaninvp@gmail.com']"
                        />


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
