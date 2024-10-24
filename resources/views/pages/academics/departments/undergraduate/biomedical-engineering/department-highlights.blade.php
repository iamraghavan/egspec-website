@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Biomedical Engineering',
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
                                                <td>Highlights</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>The department constitutes skilled faculty professionals with high academic records.</td>
                                            </tr>
                                            <tr>
                                                <td>Biochemistry & Human Physiology Laboratory with advanced equipment.</td>
                                            </tr>
                                            <tr>
                                                <td>Pathology and Microbiology Laboratory with state-of-the-art infrastructure.</td>
                                            </tr>
                                            <tr>
                                                <td>Biomedical Instrumentation Laboratory featuring high-end devices.</td>
                                            </tr>
                                            <tr>
                                                <td>Digital Signal Processing Laboratory equipped with the latest technology.</td>
                                            </tr>
                                            <tr>
                                                <td>Diagnostic and Therapeutic Equipments Laboratory providing top-notch facilities.</td>
                                            </tr>
                                            <tr>
                                                <td>Excellent infrastructure facilities enhancing the learning experience for students.</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>


                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>

                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                        name="Dr. A. SUNDAR RAJ, M.E., Ph.D"
                        :phones="['+91 75986 90233', '+91 98651 73406']"
                        :emails="['hodbme@egspec.org','jimhawkinson@egspec.org']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@include('components.cta')





@endsection
