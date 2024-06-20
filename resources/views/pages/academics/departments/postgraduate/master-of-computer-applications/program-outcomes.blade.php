@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Computer Applications',
'page_title' => 'Program Outcomes' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">

                    <div class="admission-content-top">
                        <div class="application-deadline">
                           <h5 class="rts-section-title animated fadeIn">Program Outcomes (POs)</h5>
                           <div class="application-deadline__content mt-5">
                              <div class="application-deadline__content--table">
                                 <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                       <tr>
                                          <td>##</td>
                                          <td>Program Outcomes</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><strong>PO1</strong></td>
                                          <td>Computational Knowledge: Apply knowledge of computing fundamentals, computing specialization, mathematics, and domain knowledge appropriate for the computing specialization to the abstraction and conceptualization of computing models from defined problems and requirements.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO2</strong></td>
                                          <td>Problem Analysis: Identify, formulate, research literature, and solve complex computing problems reaching substantiated conclusions using fundamental principles of mathematics, computing sciences, and relevant domain disciplines.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO3</strong></td>
                                          <td>Design /Development of Solutions: Design and evaluate solutions for complex computing problems, and design and evaluate systems, components, or processes that meet specified needs with appropriate consideration for public health and safety, cultural, societal, and environmental considerations.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO4</strong></td>
                                          <td>Conduct Investigations of Complex Computing Problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO5</strong></td>
                                          <td>Modern Tool Usage: Create, select, adapt and apply appropriate techniques, resources, and modern computing tools to complex computing activities, with an understanding of the limitations.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO6</strong></td>
                                          <td>Professional Ethics: Understand and commit to professional ethics and cyber regulations, responsibilities, and norms of professional computing practice.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO7</strong></td>
                                          <td>Life-long Learning: Recognize the need, and have the ability, to engage in independent learning for continual development as a computing professional.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO8</strong></td>
                                          <td>Project management and finance: Demonstrate knowledge and understanding of the computing and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO9</strong></td>
                                          <td>Communication Efficacy: Communicate effectively with the computing community, and with society at large, about complex computing activities by being able to comprehend and write effective reports, design documentation, make effective presentations, and give and understand clear instructions.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO10</strong></td>
                                          <td>Societal and Environmental Concern: Understand and assess societal, environmental, health, safety, legal, and cultural issues within local and global contexts, and the consequential responsibilities relevant to professional computing practice.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO11</strong></td>
                                          <td>Individual and Team Work: Function effectively as an individual and as a member or leader in diverse teams and in multidisciplinary environments.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PO12</strong></td>
                                          <td>Innovation and Entrepreneurship: Identify a timely opportunity and using innovation to pursue that opportunity to create value and wealth for the betterment of the individual and society at large.</td>
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
        <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/industry-collabration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
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
