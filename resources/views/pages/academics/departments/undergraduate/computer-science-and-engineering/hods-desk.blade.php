@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Computer Science and Engineering',
    'page_title' => 'HoD’s Desk'
])

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
                                            <source srcset="@blob('profile/dr-t-ganesan.webp')" type="image/webp">
                                            <img src="@blob('profile/dr-t-ganesan.webp')" class="img-fluid rounded" alt="Dr. T. Ganesan" style="max-width: 200px;">
                                        </picture>
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. T. Ganesan</h5>
                                                <p class="profile-role">Head of Department</p>
                                                <p class="profile-contact">Department of Computer Science and Engineering</p>
                                                <p class="profile-email">Email: <a href="mailto:hodcse@egspec.org">hodcse@egspec.org</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            Welcome to the Department of Computer Science and Engineering (CSE). I believe that the field of computer science and engineering (CSE) has gained widespread recognition as a vital resource and methodology for enhancing human activities, both past and present. The Department's delivery of a top-notch education and preparation of students for global competency has significantly aided in the development of the nation. Our faculty members have a fantastic sense of teamwork to produce domain experts in technology for the industry and enable learners to deal with global concerns. As part of Industry Institute Collaboration, our department has already signed a Memorandum of Understanding (MOU) with various reputed industries, to provide a platform for the students to work with companies for internships and projects and build technology products that influence industry and society to enhance their employment skills. Entrepreneurial–minded students should use this opportunity to become successful entrepreneurs.
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

                    <x-accordion-links :links="[
                        'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform',
                        'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                        'Employer Survey' => 'https://drive.google.com/open?id=1HEiaH5PgHxLyVgnH7FSEORGARxRvA2iv2FL8gBpnU8Q',
                        'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform',

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
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                            name="Dr. T. Ganesan"
                            :phones="['+91 99407 42877']"
                            :emails="['Ganesan21@gmail.com']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
