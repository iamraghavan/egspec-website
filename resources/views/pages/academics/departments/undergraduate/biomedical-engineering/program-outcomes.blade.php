@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Biomedical Engineering',
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
                                            <td>Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to solve complex engineering problems.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO2</strong></td>
                                            <td>Problem analysis: Identify, formulate, review research literature, and analyze complex engineering problems using first principles of mathematics, natural sciences, and engineering sciences to reach substantiated conclusions.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO3</strong></td>
                                            <td>Design/development of solutions: Design solutions for complex engineering problems and system components or processes that meet specified needs while considering public health, safety, and cultural, societal, and environmental impacts.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO4</strong></td>
                                            <td>Conduct investigations of complex problems: Utilize research-based knowledge and methodologies, including experiment design, data analysis, and information synthesis, to draw valid conclusions.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO5</strong></td>
                                            <td>Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools, including prediction and modeling, to complex engineering activities, with an understanding of their limitations.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO6</strong></td>
                                            <td>The engineer and society: Apply contextual knowledge to assess societal, health, safety, legal, and cultural issues and responsibilities relevant to professional engineering practice.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO7</strong></td>
                                            <td>Environment and sustainability: Understand the impact of professional engineering solutions in societal and environmental contexts and demonstrate knowledge of the need for sustainable development.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO8</strong></td>
                                            <td>Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of engineering practice.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO9</strong></td>
                                            <td>Individual and team work: Function effectively as an individual and as a member or leader in diverse teams and multidisciplinary settings.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO10</strong></td>
                                            <td>Communication: Communicate effectively on complex engineering activities with the engineering community and society at large, including writing effective reports and design documentation, making effective presentations, and giving and receiving clear instructions.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO11</strong></td>
                                            <td>Project management and finance: Demonstrate knowledge and understanding of engineering and management principles and apply these to one's own work, as a member and leader in a team, to manage projects and multidisciplinary environments.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PO12</strong></td>
                                            <td>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning amidst technological changes.</td>
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
                   <!-- curriculum -->
                   <div class="program-curriculum">
                      <h6 class="heading-title">Department Quick Links</h6>
                      <div class="program-menu">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                            <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                            <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                      </div>
                   </div>
                   <!-- contact info -->
                   <x-dept-contact-info
                   name="Dr. A. SUNDAR RAJ, M.E., Ph.D"
                   :phones="['+91 75986 90233', '+91 98651 73406']"
                   :emails="['hodbme@egspec.org','jimhawkinson@egspec.org']"/>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@include('components.cta')
@endsection
