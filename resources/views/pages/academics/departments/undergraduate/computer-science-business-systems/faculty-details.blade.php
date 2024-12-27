@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Computer Science & Business Systems',
    'page_title' => 'Faculty'
])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="admission-content-top">

            <div class="rts-program-description">
                <div class="row">
                    <div class="col-lg-8">

                        <h5 class="rts-section-title animated fadeIn">Faculty</h5>
                        <div class="application-deadline__content mt-5">
                            <div class="application-deadline__content--table">

                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. No</td>
                                            <td>Name of the Faculty Member</td>
                                            <td>Designation</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dr. Anandaraj P</td>
                                            <td>Assistant Professor / Head</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mr. Murugan G</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mrs. Shajathi Begam S</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mr. Markco M</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mr. Rajesh A</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mrs. Kanagadurga</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Mrs. S. Angelin Nivedita</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Mrs. Viji</td>
                                            <td>Assistant Professor CSBS</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="rts-section-title animated fadeIn mt-5">Non-Teaching Staff</h5>
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. No</td>
                                            <td>Name of the Staff Member</td>
                                            <td>Designation</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr. Rajesh S</td>
                                            <td>Lab Assistant CSBS</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mrs. Kayalvizhi S</td>
                                            <td>Office Assistant CSBS</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4">
                        <div class="program-sidebar">
                            <!-- curriculum -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Department Quick Links</h6>
                                <div class="program-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                        <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                        <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                        <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- contact info -->
                            <x-dept-contact-info
                            name="Dr. Anandaraj P"
                            :phones="['']"
                            :emails="['']"/>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@include('components.cta')

@endsection
