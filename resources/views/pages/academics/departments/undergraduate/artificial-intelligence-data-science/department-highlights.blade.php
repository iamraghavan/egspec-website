@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'Department Highlights'
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
                                                <td>Department Features</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Industry Collaboration:</strong> Partnered with Altair and Rapid Miner.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Virtual Internship:</strong> AICTE – EduSkills program offered.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Advanced Facilities:</strong> Latest computing laboratories available.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Personal Growth:</strong> Focus on skill development and strong mentor-mentee system.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Value Added Programs:</strong> Various academic and extracurricular initiatives.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Qualified Faculty:</strong> Well-qualified and experienced teaching staff.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Project-Based Learning:</strong> Emphasis on hands-on projects.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Certifications:</strong> Certified courses through NPTEL.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Industry-Oriented Curriculum:</strong> Includes Robotics Process Automation, Adversarial Machine Learning, Data Analytics, and more.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Student Engagement</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Clubs:</strong> Active clubs like INTELLEXIA (AI) and ZENTICS (Data).</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Events:</strong> Organized international symposiums such as ARTIWHIZ by the department association “SKYLARK.”</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Community Service:</strong> Involvement in NSS activities, including blood donation and awareness programs.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. S. Palani Murugan"
                            :phones="['']"
                            :emails="['palanimurugan@egspec.org']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
