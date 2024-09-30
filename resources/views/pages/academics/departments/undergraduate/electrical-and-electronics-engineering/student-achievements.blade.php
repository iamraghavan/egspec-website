@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electrical and Electronics Engineering',
'page_title' => 'Students Achievements' ])






<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
                <div class="program-credit-area">
                    <h3 class="rts-section-title animated fadeIn">Student Achievements</h3>
                    <div class="program-accordion my-5">
                        <div class="accordion" id="rts-accordion">
                            <div class="accordion-item">
                                <div>
                                    <div class="accordion-body-content">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                           onclick="openMiniTab(event, '{{ url('/students-achievements?project=student-achievements&department=electrical-and-electronics-engineering') }}')"
                                                           title="Student Achievements">
                                                           Student Achievements
                                                        </a>
                                                    </td>

                                                    <td><i class="fa fa-external-link"></i> / Student Achievements Link Source </td>
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

<script>
    function openMiniTab(event, url) {
        event.preventDefault(); // Prevent the default behavior of the link
        var features = "toolbar=no,menubar=no,resizable=yes,scrollbars=yes,status=no,width=1400,height=900";
        window.open(url, "_blank", features);
    }
</script>

@include('components.cta')
@endsection
