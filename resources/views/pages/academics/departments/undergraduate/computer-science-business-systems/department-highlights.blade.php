@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Computer Science & Business Systems',
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
                                                <td>Highlights</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Industry Demand</td>
                                                <td>High demand for graduates in IT and business sectors</td>
                                            </tr>
                                            <tr>
                                                <td>Placement Rate</td>
                                                <td>85% of eligible students</td>
                                            </tr>
                                            <tr>
                                                <td>Research Initiatives</td>
                                                <td>Focus on Analytics, Machine Learning, and IoT</td>
                                            </tr>
                                            <tr>
                                                <td>Accreditations</td>
                                                <td>Recognized by industry leaders for curriculum relevance</td>
                                            </tr>
                                            <tr>
                                                <td>Faculty Expertise</td>
                                                <td>Experienced faculty with industry and research backgrounds</td>
                                            </tr>
                                            <tr>
                                                <td>Collaborations</td>
                                                <td>Partnerships with leading tech companies and research institutions</td>
                                            </tr>
                                            <tr>
                                                <td>Student Achievements</td>
                                                <td>Active participation in hackathons and tech competitions</td>
                                            </tr>
                                            <tr>
                                                <td>Innovation Focus</td>
                                                <td>Encourages entrepreneurial projects and start-up initiatives</td>
                                            </tr>
                                            <tr>
                                                <td>Community Engagement</td>
                                                <td>Outreach programs with local schools and organizations</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="rts-scholarship-description">
                                    <div class="repeating-content">
                                        <div class="single-information-box rt-theme-bg">
                                            <div class="single-info text-justify">
                                                <h4 class="title">Department Overview</h4>
                                                <p class="amount">The Computer Science & Business Systems department prepares students for the dynamic IT landscape through a curriculum that incorporates emerging technologies and business strategies. Our graduates are well-equipped to meet industry demands, ensuring they are productive and sought after. The department emphasizes lifelong learning and innovation, fostering both technical skills and an appreciation for interdisciplinary subjects.</p>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                        name="Dr. Anandaraj P"
                        :phones="['']"
                        :emails="['']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
