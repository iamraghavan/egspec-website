@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Mechanical Engineering',
'page_title' => 'Infrastructure' ])






<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            {{-- <div class="col-lg-8"></div> --}}
            {{-- <div class="col-lg-8 mx-auto" id="mechContainer"></div> --}}
            <!-- sidebar -->
            <div class="col-lg-8">
                <div x-data="imageLoader()" x-init="fetchImages('/egspec-assets/mech-gallery', 'mechContainer')">
                    <div id="mechContainer">
                        <!-- Images will be injected here -->
                        <template x-if="loading">
                            <div class="row mx-0">
                                <div class="col-md-6 mb-4" x-for="n in 6" :key="n">
                                    <div class="skeleton"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>



<style>
#mechContainer img,.skeleton{width:100%;border-radius:4px}#mechContainer{display:flex;flex-wrap:wrap}#mechContainer .col-md-6{padding-left:.5rem;padding-right:.5rem}#mechContainer img{height:auto;object-fit:cover}.skeleton{background:#e0e0e0;height:200px;animation:1.5s ease-in-out infinite skeleton-loading}@keyframes skeleton-loading{0%{background-position:-100px 0}100%{background-position:100px 0}}

</style>

            <div class="col-lg-4">
                <div class="program-sidebar">
                    <!-- curriculum -->
                    <div class="program-curriculum">
                        <h6 class="heading-title">Department Quick Links</h6>
                        <div class="program-menu">
                            <ul class="list-unstyled">
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- contact info -->
                    <x-dept-contact-info
                    name="x"
                    :phones="['y']"
                    :emails="['z']"/>


                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
