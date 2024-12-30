@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'Faculty Development Programme (FDP)'
])








<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <div class="semister-fee__content">
                        <h5 class="rts-section-title">Faculty Development Programme (FDP)</h5>

                        <div class="col-12 my-5">
                            <div class="program-description-area">

                                <div class="program-credit-area">


                                    <div class="program-accordion my-5">
                                        <div class="accordion" id="rts-accordion">

                                            <div class="accordion-item">

                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">

                                                            <tbody>
                                                                <tr>
                                                                    <td><i class="fa fa-download"> </i><a href="https://firebasestorage.googleapis.com/v0/b/portfolio-4bf1c.appspot.com/o/faculty-development-programmes-aids.pdf?alt=media&token=ab7106f9-fde1-4eae-a05a-3b3bab7b0ef6" target="_blank" type="application/pdf" rel="alternate" media='print'> Faculty Development Programme (FDP) </a></td>
                                                                    <td><i class="fa fa-file-pdf"></i> / PDF File</td>
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

                            <div class="iframe-div">
                                <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=https%3A%2F%2Ffirebasestorage.googleapis.com%2Fv0%2Fb%2Fportfolio-4bf1c.appspot.com%2Fo%2Ffaculty-development-programmes-aids.pdf%3Falt%3Dmedia%26token%3Dab7106f9-fde1-4eae-a05a-3b3bab7b0ef6#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                            height: 100rem !important;
                        "></iframe>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>

                        <x-dept-contact-info
                            name="Dr. S. Palani Murugan"
                            :phones="['']"
                            :emails="['palanimurugan@egspec.org']"
                        />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('components.cta')

@endsection
