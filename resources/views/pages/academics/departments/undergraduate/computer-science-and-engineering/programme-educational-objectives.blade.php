@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Computer Science and Engineering',
'page_title' => 'Programme Educational Objectives' ])






<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">


            <div class="col-lg-8">
                <div class="admission-content-top">
                    <div class="application-deadline">
                        <h5 class="rts-section-title animated fadeIn">Program Educational Outcomes (PEOs)</h5>
                        <div class="application-deadline__content mt-5">
                            <div class="application-deadline__content--table">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>##</td>
                                            <td>Program Educational Outcomes</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>PEO1</strong></td>
                                            <td>To develop strong knowledge and skills in the domain of Computer Science and Engineering for leading a successful career in industries or entrepreneurial endeavours.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PEO2</strong></td>
                                            <td>To prepare and assist the graduates to be successful in higher education and research activities in the theory and application of computing related engineering fields.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PEO3</strong></td>
                                            <td>To train the graduates to learn and adapt to the ever-changing world of technology.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <x-accordion-links :links="[
                    'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform',
                    'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                    'Employer Survey' => 'https://drive.google.com/open?id=1HEiaH5PgHxLyVgnH7FSEORGARxRvA2iv2FL8gBpnU8Q',
                    'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform'
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
                                <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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

<script>
    function openMiniTab(event, url) {
        event.preventDefault(); // Prevent the default behavior of the link
        var features = "toolbar=no,menubar=no,resizable=yes,scrollbars=yes,status=no,width=1400,height=900";
        window.open(url, "_blank", features);
    }
</script>

@include('components.cta')
@endsection
