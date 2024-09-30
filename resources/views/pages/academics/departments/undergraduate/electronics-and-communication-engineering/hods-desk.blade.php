@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electronics And Communication Engineering',
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
                                            <source srcset="@blob('profile/dr-m-malathi.webp')" type="image/webp">
                                            <img src="@blob('profile/dr-m-malathi.webp')" class="img-fluid rounded" alt="egspec_dr_m_malathi" style="max-width: 200px;">
                                        </picture>

                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. M. Malathi, M.E., Ph.D</h5>
                                                <p class="profile-role">Professor & Head</p>
                                                <p class="profile-contact">Department of Electronics and Communication Engineering</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            I, Dr. Malathi Murugesan, born in Namakkal, India, completed my B.E in Electronics and Communication Engineering from Government College of Engineering, Salem. I pursued my M.E. in Communication Systems, where I was honored with the Anna University Gold Medal, from Kumaraguru College of Technology, Coimbatore, and earned my Ph.D. from Annamalai University, Chidhambaram. Presently, I serve as Professor & Head in the Department of Electronics and Communication Engineering at E.G.S Pillay Engineering College, Nagapattinam. With 19 years of teaching experience, I have contributed extensively to research in Image Processing, Antennas, Communication Systems, and Wireless Networks. I am a recognized Supervisor (Ref. No.: 4190004) by Anna University and have published papers in numerous international and national journals and patents.
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
                                                                    <td><a href="mailto:hodece@egspec.org, malathi@egspec.org">Mail id</a></td>
                                                                    <td><i class="far fa-envelope"></i> / hodece@egspec.org, malathi@egspec.org</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="tel:+919443101712">Cell</a></td>
                                                                    <td><i class="fas fa-phone"></i> / +91 9443101712</td>
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
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                            name="Dr. M. Malathi, M.E., Ph.D"
                            :phones="['+91 9443 101 712']"
                            :emails="['hodece@egspec.org', 'malathi@egspec.org']"
                        />


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
