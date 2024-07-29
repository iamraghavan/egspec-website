@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Computer Science and Engineering',
'page_title' => 'Research and Publications' ])






<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
                <div class="program-description-area">

                    <div class="semister-fee">

                        <div class="semister-fee__content">
                            <h3 class="rts-section-title animated fadeIn " >Research &amp; Publications</h3>

                            <br>

                            @if(isset($consultancyProjects['ConsultancyProjects']) && count($consultancyProjects['ConsultancyProjects']) > 0)


                            <div class="rts-fee-chart__tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach($consultancyProjects['ConsultancyProjects'] as $index => $academicYear)
                                            <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="year-{{ $index }}-tab" data-bs-toggle="tab" data-bs-target="#year-{{ $index }}" type="button" role="tab" aria-controls="year-{{ $index }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                                {{ $academicYear['AcademicYear'] }}
                                            </button>
                                        @endforeach
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach($consultancyProjects['ConsultancyProjects'] as $index => $academicYear)
                                        <div class="tab-pane application-deadline__content--table fade {{ $index == 0 ? 'show active' : '' }}" id="year-{{ $index }}" role="tabpanel" aria-labelledby="year-{{ $index }}-tab">
                                            @if(count($academicYear['Projects']) > 0)
                                            <table class="table table-striped table-hover table-bordered mt-3">
                                                <thead class="table-theme">
                                                        <tr>
                                                            <th>Project Title</th>
                                                            <th>Company</th>
                                                            <th>Duration/Period</th>
                                                            <th>Budget (Rs)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($academicYear['Projects'] as $project)
                                                            <tr>
                                                                <td>{{ $project['ProjectTitle'] }}</td>
                                                                <td>{{ $project['Company'] }}</td>
                                                                <td>{{ $project['Duration'] ?? $project['Period'] }}</td>
                                                                <td>{{ number_format($project['Budget'], 0) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p>No consultancy projects available for this academic year.</p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p>No consultancy projects available.</p>
                        @endif
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
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                           <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

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
