@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Information Technology',
'page_title' => 'Research and Publications' ])





<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn" >Research &amp; Publications</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><a href="@blob('academics/departments/undergraduate/information-technology/research-publications/it-research-publications.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> IT Research and Publication </a></td>
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
                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('academics/departments/undergraduate/information-technology/research-publications/it-research-publications.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                height: 100rem !important;
            "></iframe>
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
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                           <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collabration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                           <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- contact info -->
                  <x-dept-contact-info
                     name="Dr. S. Manikandan, M.E., Ph.D"
                     :phones="['+919047902685', '+919500707894']"
                     :emails="['manikandan@egspec.org', 'profmaninvp@gmail.com']"
                     />
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection