@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electrical and Electronics Engineering',
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
                                        <picture>
                                            <source srcset="@blob('profile/dr-p-j-suresh-babu.webp')" type="image/webp">
                                            <img src="@blob('profile/dr-p-j-suresh-babu.webp')" class="img-fluid rounded" alt="egspec_dr_p_j_suresh_babu" style="max-width: 200px;">
                                        </picture>

                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. P. J. Suresh babu</h5>
                                                <p class="profile-role">Head of Department</p>
                                                <p class="profile-contact">Department of Electrical and Electronics Engineering</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            This past term, our department has witnessed remarkable accomplishments. Our students have excelled in various competitions, showcasing their talents and ingenuity. Faculty members have made significant contributions to research, with several groundbreaking projects gaining recognition on national and international stages. Our collective efforts continue to drive innovation, foster academic excellence, and create a vibrant community.

<br>
<br>
Looking ahead, we have an array of events and initiatives planned. Our department will host several workshops and seminars, providing opportunities for students and faculty to engage with industry leaders and alumni. We are also excited to announce the launch of new research projects and collaborative ventures that promise to push the boundaries of engineering knowledge.

<br>
<br>
I encourage each of you to take full advantage of the opportunities available and to continue striving for excellence in all your endeavors. Your dedication and hard work are what make our department a hub of innovation and learning. Thank you for your continued support and enthusiasm. Together, we will continue to achieve great things.


                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="program-description-area">
                                <div class="program-credit-area">
                                    <div class="program-accordion ">
                                        <div class="accordion" id="rts-accordion">
                                            <div class="accordion-item">
                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="mailto:sureshbabu@egspec.org">Mail id</a></td>
                                                                    <td><i class="far fa-envelope"></i> / sureshbabu@egspec.org </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="tel:+919585160544">Cell</a></td>
                                                                    <td><i class="fas fa-phone"></i> / +91 9585 160 544 </td>
                                                                </tr>
                                                                <!-- You can add more rows here if needed -->
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
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. P. J. Suresh babu"
                            :phones="['+91 9585 160 544']"
                            :emails="['sureshbabu@egspec.org']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
