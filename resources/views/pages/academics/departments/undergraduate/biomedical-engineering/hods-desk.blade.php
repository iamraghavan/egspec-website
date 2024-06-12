@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Biomedical Engineering',
'page_title' => 'HOD’s Desk' ])




<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <section class="rts-about-university pt--100 pb--80">
                        <div class="container">
                            <div class="row">
                                <div class="rts-section">
                                    <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                                        <img src="@blob('profile/a-sundar-raj.webp')" alt="egspec_dr_a_sundar_raj" class="img-fluid rounded" style="max-width: 200px;">
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. A. Sundar Raj</h5>
                                                <p class="profile-role">Head of the Department</p>
                                                <p class="profile-location">Biomedical Engineering</p>
                                                <p class="profile-contact">E.G.S. Pillay Engineering College</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            Dr. A. Sundar Raj is currently serving as the Head of the Department of Biomedical Engineering at E.G.S. Pillay Engineering College. He completed his Ph.D. from [University Name] in [Year], [Other Degree Information]. He is a member of several professional organizations and is actively involved in research in the field of [Research Area]. He has contributed significantly to the field through his publications and research projects.
                                        </p>
                                    </div>
                                </div>
                            </div> --}}


                            {{-- <div class="program-description-area">
                                <div class="program-credit-area">
                                    <div class="program-accordion ">
                                        <div class="accordion" id="rts-accordion">
                                            <div class="accordion-item">
                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="[LinkedIn Profile URL]" target="_blank">LinkedIn Profile</a></td>
                                                                    <td><i class="fab fa-linkedin-in"></i> / LinkedIn</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="[Google Scholar Citation URL]" target="_blank">Google Scholar Citation</a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="[Research Gate URL]" target="_blank">Research Gate</a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </section>



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
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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
