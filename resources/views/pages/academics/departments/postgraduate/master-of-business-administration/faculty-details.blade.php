@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Business Administration',
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
                                                <td>Dr. R. Karthi</td>
                                                <td>Professor/HOD</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Dr. S. Chandrasekar</td>
                                                <td>Professor</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dr. B. Asha Daisy</td>
                                                <td>Associate Professor</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Dr. S. Sakthi Kamal Nathan</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Mr. I. Arulprakash</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mr. S. Mohamed Naina Maricar</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mr. S. Sathish Kumar</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Ms. P. Tamilazhaghi</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Mrs. K. Suganthi</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Mr. S. N. Kanagarathinam</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Ms. R. Sangeetha</td>
                                                <td>Assistant Professor</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Ms. R. Shalini</td>
                                                <td>Assistant Professor</td>
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
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. R. Karthi"
                        :phones="[' ']"
                        :emails="[' ']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
