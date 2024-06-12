@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electronics And Communication Engineering',
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
                                      <td>Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO2</strong></td>
                                      <td>Problem analysis: Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO3</strong></td>
                                      <td>Design/development of solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO4</strong></td>
                                      <td>Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO5</strong></td>
                                      <td>Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO6</strong></td>
                                      <td>The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO7</strong></td>
                                      <td>Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO8</strong></td>
                                      <td>Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO9</strong></td>
                                      <td>Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO10</strong></td>
                                      <td>Communication: Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO11</strong></td>
                                      <td>Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>PO12</strong></td>
                                      <td>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</td>
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
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                            <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                            <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- contact info -->
                  <x-dept-contact-info
                            name="Dr. M. Malathi, M.E., Ph.D"
                            :phones="['+91 9443 101 712']"
                            :emails="['hodece@egspec.org', 'malathi@egspec.org']"
                        />
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
