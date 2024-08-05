@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Science and Humanities',
'page_title' => 'HoD’s Desk' ])



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
                                        <picture>
                                            <source srcset="@blob('profile/dr-r-deepa.webp')" type="image/webp">
                                            <img src="@blob('profile/dr-r-deepa.webp')" class="img-fluid rounded" alt="Dr. R. Deepa" style="max-width: 200px;">
                                        </picture>
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. R. Deepa</h5>
                                                <p class="profile-role">Head of Department</p>
                                                <p class="profile-contact">Department of Science and Humanities</p>
                                                <p class="profile-email">Email: <a href="mailto:deepa.ar@egspec.org">deepa.ar@egspec.org</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            {{-- Please Update  --}}
                                            Update HoD'S Message
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="program-description-area">
                                <div class="program-credit-area">
                                    <div class="program-accordion">
                                        <div class="accordion" id="rts-accordion">
                                            <div class="accordion-item">
                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="https://www.linkedin.com/in/" target="_blank">LinkedIn Profile</a></td>
                                                                    <td><i class="fab fa-linkedin-in"></i> / LinkedIn</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>






                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/science-humanities')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/science-humanities/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')




@endsection
