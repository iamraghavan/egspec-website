@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Information Technology',
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
                                            <source srcset="@blob('profile/dr-s-manikandan.webp')" type="image/webp">
                                            <img src="@blob('profile/dr-s-manikandan.webp')" class="img-fluid rounded" alt="egspec_dr_s_manikandan" style="max-width: 200px;">
                                        </picture>

                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. S. Manikandan, M.E., Ph.D</h5>
                                                <p class="profile-role">Associate Professor & Head</p>
                                                <p class="profile-location">Chairman - Board of Studies</p>
                                                <p class="profile-contact">Department of Information Technology</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="container">
                                    <div class="row">

                                        <p class="desc text-justify">

                                            I am (Manikandan.S) as Associate & Head/ Chairman (Board of Studies) of Information Technology in E.G.S Pillay Engineering College (Autonomous), Nagapattinam. I completed Ph.D from Anna University in the year of 2020, M.E(CSE) with University Rank Holder and Distinction from Annamalai University in the year of 2012 and B.Tech (IT) with Distinction from E.G.S. Pillay Engineering College in Nagapattinam in the year of 2010. Also member in IEEE, ACM, MIE, CSTA,IAENG, CSI and ISTE. Currently I am doing research in Artificial Intelligence, Deep Learning and Data Analytics. Recognized Supervisor (Ref. No.:4040100) from Anna University.
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
                                                                    <td><a href="https://www.linkedin.com/in/manikandan-sridharan-6b303778/" target="_blank" type="application/pdf" rel="alternate" media='print'> LinkedIn Profile </a></td>
                                                                    <td><i class="fab fa-linkedin-in"></i> / LinkedIn</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a href="https://scholar.google.co.in/citations?user=VnCEqLgAAAAJ&hl=en" target="_blank" type="application/pdf" rel="alternate" media='print'> Google Scholar Citation </a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a href="https://www.researchgate.net/profile/Manikandan-Sridharan" target="_blank" type="application/pdf" rel="alternate" media='print'> Research Gate </a></td>
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

                            </div>



                        </div>
                    </section>

                    <x-accordion-links :links="[

                    'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform?usp=sf_link',
                    'Students Feedback' => 'https://docs.google.com/forms/d/e/1FAIpQLSdhWwmjf965CW6NkNSVwzZ41IlceBgTRAAaaxswqQb2p6WW-Q/viewform?usp=sf_link',
                    'Grievances' => 'https://docs.google.com/forms/d/e/1FAIpQLScQ3xc3O8iAswJs9MChu5Kd_nunV5wBmS7a6T0YKEPA8NnS3w/viewform?usp=sf_link',
                    'Employer Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSd_lJlYkKDrivGp9rYsqyLVcmWV-2F86-VaclLOiIhHvPyAQQ/viewform?usp=sf_link',
                    'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                    'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform?usp=sf_link',
                    'Department Forms' => 'https://sites.google.com/site/profmaniit/department?authuser=0'

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

                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collabration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

<li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>


                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                            name="Dr. S. Manikandan, M.E., Ph.D"
                            :phones="['+919047902685', '+919500707894']"
                            :emails="['manikandan@egspec.org', 'profmaninvp@gmail.com']"
                        />


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
