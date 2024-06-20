@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Computer Applications',
'page_title' => 'Students Achievements' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">



<div class="page-content-top semister-fee">
    <div class="semister-fee__content mt-5">
        <h5 class="rts-section-title">Students Achievements</h5>

        <!-- tab item -->
        <div class="rts-fee-chart">
            <div class="rts-fee-chart__tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="year-2014-2015-tab" data-bs-toggle="tab" data-bs-target="#year-2014-2015" type="button" role="tab" aria-controls="year-2014-2015" aria-selected="true">2014-2015</button>
                        <button class="nav-link" id="year-2013-2014-tab" data-bs-toggle="tab" data-bs-target="#year-2013-2014" type="button" role="tab" aria-controls="year-2013-2014" aria-selected="false">2013-2014</button>
                        <button class="nav-link" id="year-2012-2013-tab" data-bs-toggle="tab" data-bs-target="#year-2012-2013" type="button" role="tab" aria-controls="year-2012-2013" aria-selected="false">2012-2013</button>
                    </div>
                </nav>
            </div>
            <div class="rts-fee-chart__content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="year-2014-2015" role="tabpanel" aria-labelledby="year-2014-2015-tab">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>Event Name</td>
                                    <td>Name Of The Institution</td>
                                    <td>Name Of The Student</td>
                                    <td>Prize Won</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mcast14 as $index => $sts)
                                    @if($sts->department == 'MCA' && $sts->year == '2014-2015')
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $sts->event_name }}</td>
                                            <td>{{ $sts->institution_name }}</td>
                                            <td>{{ $sts->student_name }}</td>
                                            <td>{{ $sts->prize_won }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Debugging: Check if any data is being rendered -->
                        @if($mcast14->isEmpty())
                            <p>No data available.</p>
                        @endif
                    </div>


                </div>
                <div class="tab-pane fade" id="year-2013-2014" role="tabpanel" aria-labelledby="year-2013-2014-tab">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-theme">
                                <tr>
                                    <th>S.No</th>
                                    <th>Event Name</th>
                                    <th>Name Of The Institution</th>
                                    <th>Name Of The Student</th>
                                    <th>Prize Won</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @foreach($mcast14 as $sts)
                                    @if($sts->department == 'MCA' && $sts->year == '2013-2014')
                                        <tr>
                                            <td>{{ $serialNumber }}</td>
                                            <td>{{ $sts->event_name }}</td>
                                            <td>{{ $sts->institution_name }}</td>
                                            <td>{{ $sts->student_name }}</td>
                                            <td>{{ $sts->prize_won }}</td>
                                        </tr>
                                        @php
                                            $serialNumber++;
                                        @endphp
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Debugging: Check if any data is being rendered -->
                        @if($mcast14->isEmpty())
                            <p>No data available.</p>
                        @endif
                    </div>


                </div>
                <div class="tab-pane fade" id="year-2012-2013" role="tabpanel" aria-labelledby="year-2012-2013-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-theme">
                                <tr>
                                    <th>S.No</th>
                                    <th>Event Name</th>
                                    <th>Name Of The Institution</th>
                                    <th>Name Of The Student</th>
                                    <th>Prize Won</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @foreach($mcast14 as $sts)
                                    @if($sts->department == 'MCA' && $sts->year == '2012-2013')
                                        <tr>
                                            <td>{{ $serialNumber }}</td>
                                            <td>{{ $sts->event_name }}</td>
                                            <td>{{ $sts->institution_name }}</td>
                                            <td>{{ $sts->student_name }}</td>
                                            <td>{{ $sts->prize_won }}</td>
                                        </tr>
                                        @php
                                            $serialNumber++;
                                        @endphp
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Debugging: Check if any data is being rendered -->
                        @if($mcast14->isEmpty())
                            <p>No data available.</p>
                        @endif
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
