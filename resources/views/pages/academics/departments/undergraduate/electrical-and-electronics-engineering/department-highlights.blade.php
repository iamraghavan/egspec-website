@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Electrical and Electronics Engineering',
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
                                                <td>Year of Establishment</td>
                                                <td>2000 (B.E - EEE) & 2015 (M.E - PED)</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Alumni Employment</td>
                                                <td>TNEB, Southern Railway, CSIR, TCS, CTS, Schneider, L&T, Tata ELXSI, etc.</td>
                                            </tr>
                                            <tr>
                                                <td>Student Placement Rate</td>
                                                <td>90% of eligible students</td>
                                            </tr>
                                            <tr>
                                                <td>NBA Accreditation</td>
                                                <td>UG program accredited</td>
                                            </tr>
                                            <tr>
                                                <td>Research Centre Recognition</td>
                                                <td>Anna University approved research centre</td>
                                            </tr>
                                            <tr>
                                                <td>Industry MoUs</td>
                                                <td>NI, INDGAURD, L&T, estaar MAX, Interlogix, etc.</td>
                                            </tr>
                                            <tr>
                                                <td>International MoUs</td>
                                                <td>Multimedia University-Malaysia, South Eastern University of Srilanka, Tamilnadu Fisheries University</td>
                                            </tr>
                                            <tr>
                                                <td>Faculty Qualifications</td>
                                                <td>6 doctorates, others nearing Ph.D. completion</td>
                                            </tr>
                                            <tr>
                                                <td>Student Achievements</td>
                                                <td>Regular participation and prizes in curricular/co-curricular activities</td>
                                            </tr>
                                            <tr>
                                                <td>Department Popularity</td>
                                                <td>Highly preferred choice for student admission over the decade</td>
                                            </tr>
                                            <tr>
                                                <td>Success Rate</td>
                                                <td>High success rate in degree awarded, placements, and higher studies</td>
                                            </tr>
                                            <tr>
                                                <td>Conferences/Symposiums</td>
                                                <td>Regular international conferences/symposiums</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="rts-scholarship-description">
                                    <div class="repeating-content">
                                        <div class="single-information-box rt-theme-bg">
                                            <div class="single-info text-justify">
                                                <h4 class="title">Department Overview</h4>
                                                <p class="amount">The Electrical and Electronics Engineering department is committed to providing a high-quality education and research environment. The curriculum is regularly updated to meet industry standards and research demands. The department boasts state-of-the-art lab facilities, including specialized labs for image processing, RF system design, and computer vision, equipped with the latest tools and software. Our alumni are employed in prestigious organizations worldwide, and our faculty members are experts in various fields, including Analog Electronics, Digital Signal Processing, and Embedded Systems. We follow an Outcome Based Education (OBE) system, ensuring our students are well-prepared for their careers. The department also encourages faculty and student participation in international collaborations, research publications, and skill enhancement programs.</p>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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
