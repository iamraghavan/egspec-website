@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Computer Applications',
'page_title' => 'Faculty Details' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="admission-content-top">
                        <div class="application-deadline">
                            <h5 class="rts-section-title animated fadeIn">Faculty</h5>
                            <div class="application-deadline__content mt-5">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Name of the Faculty Member</td>
                                                <td>Designation</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dr. A. Chandra Bose</td>
                                                <td>Professor</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Dr. J. Vanitha</td>
                                                <td>Associate Professor</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dr. C. Mallika</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Mrs. A. Hema</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Mr. S. Selvaganapathy</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mrs. N. Ilakkiya</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mr. M. Rajeshwar</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Ms. D. Kamalaveni</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Ms. S. Thamaraiselvi</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="application-deadline">
                            <h5 class="rts-section-title animated fadeIn">(Faculty Members Details)-Non-Teaching Staffs</h5>
                            <div class="application-deadline__content mt-5">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Name of the Faculty Member</td>
                                                <td>Designation</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mr.R.Srikrishnababu</td>
                                                <td>Lab Assistant</td>
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
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
        <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
        <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
    </ul>
</div>

                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. J. Vanitha"
                        :phones="['+919443728519']"
                        :emails="['vanitha@egspec.org']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
