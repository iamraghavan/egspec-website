@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'Programme Specific Outcomes'
])

<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="admission-content-top">
                        <div class="application-deadline">
                            <h5 class="rts-section-title animated fadeIn">Programme Specific Outcomes (PSOs)</h5>
                            <div class="application-deadline__content mt-5">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>PSO</td>
                                                <td>Description</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>PSO-1</strong></td>
                                                <td>Demonstrate proficiency by applying concepts, and methodologies of Artificial Intelligence & Data Science and its subdomains to solve engineering, real-world, social or industry problems.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>PSO-2</strong></td>
                                                <td>Ability to choose, select & identify relevant Artificial Intelligence & Data Science tools to develop solutions for engineering or industry problems.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>PSO-3</strong></td>
                                                <td>Ability to develop software-driven solutions and design system components or processes that meet the specified requirements for solving complex engineering problems or industry problems.</td>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>

                        <x-dept-contact-info
                            name="Dr. S. Palani Murugan"
                            :phones="['']"
                            :emails="['palanimurugan@egspec.org']"
                        />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection