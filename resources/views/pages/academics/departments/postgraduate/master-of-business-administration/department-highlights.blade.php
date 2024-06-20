@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Business Administration',
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
                                                <td>Accredited by NAAC with an 'A' grade</td>
                                            </tr>
                                            <tr>
                                                <td>Autonomous Institution with a focus on Outcome-based Education</td>
                                            </tr>
                                            <tr>
                                                <td>Consistently high placement records with top recruiters</td>
                                            </tr>
                                            <tr>
                                                <td>Well-equipped laboratories with the latest technology</td>
                                            </tr>
                                            <tr>
                                                <td>Experienced faculty with industry and academic expertise</td>
                                            </tr>
                                            <tr>
                                                <td>Active industry collaboration and MOUs with leading companies</td>
                                            </tr>
                                            <tr>
                                                <td>Regular industrial visits and internships for practical exposure</td>
                                            </tr>
                                            <tr>
                                                <td>State-of-the-art library with vast resources and e-learning facilities</td>
                                            </tr>
                                            <tr>
                                                <td>Comprehensive student support services including mentorship programs</td>
                                            </tr>
                                            <tr>
                                                <td>Focus on research and innovation with numerous publications and patents</td>
                                            </tr>
                                            <tr>
                                                <td>Active participation in national and international conferences</td>
                                            </tr>
                                            <tr>
                                                <td>Extracurricular and co-curricular activities for holistic development</td>
                                            </tr>
                                            <tr>
                                                <td>Robust alumni network providing continuous support and opportunities</td>
                                            </tr>
                                            <tr>
                                                <td>Strong emphasis on ethical values and community service</td>
                                            </tr>
                                            <tr>
                                                <td>Comprehensive career guidance and placement training programs</td>
                                            </tr>
                                            <tr>
                                                <td>ICT-enabled classrooms for interactive and effective learning</td>
                                            </tr>
                                            <tr>
                                                <td>Regular guest lectures and workshops by industry experts</td>
                                            </tr>
                                            <tr>
                                                <td>Innovative teaching methods and continuous curriculum updates</td>
                                            </tr>
                                            <tr>
                                                <td>Support for entrepreneurial ventures through incubation centers</td>
                                            </tr>
                                            <tr>
                                                <td>Student clubs and associations fostering leadership and teamwork</td>
                                            </tr>
                                            <tr>
                                                <td>Comprehensive grievance redressal mechanism and student welfare schemes</td>
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
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. R. Karthi"
                        :phones="[' ']"
                        :emails="[' ']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
