@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Computer Applications',
'page_title' => 'Laboratories and Facilities' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="semister-fee">
                        <div class="semister-fee__content">
                            <h5 class="rts-section-title">Laboratories and Facilities</h5>

                            <!-- tab item -->
                            <div class="rts-fee-chart">
                                <div class="rts-fee-chart__tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">SOFTWARE DETAILS</button>
                                            <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">HARDWARE DETAILS</button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="rts-fee-chart__content" id="nav-tabContent">

                                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                        <table class="table">
                                            <thead class="table-theme">
                                                <tr>
                                                    <th>#</th>
                                                    <th>SOFTWARE DETAILS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Turbo C++</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Java 1.7</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Oracle 11G</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Visual Studio Dot Net 2010</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Ms-Office 2007</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Windows 7</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Winrar 2013</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Adobe Reader 10X</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>McafeeAnti virus</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>SPSS</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>DORA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                                        <table class="table">
                                            <thead class="table-theme">
                                                <tr>
                                                    <th>#</th>
                                                    <th>NAME OF THE EQUIPMENT</th>
                                                    <th>QUANTITY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LCD -LENOVO-TERMINAL,a58,intel core2Duo,2.80GHZ,processor Intel G41,CHISET,Mothrboard, 1GB DDR2 RAM,@800MHZ RAM, GB @7200RPM SATA HDD, Keyboard, Mouse</td>
                                                    <td>30</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>HP SYSTEM –Terminal HP intelcore ™ i3 -2120 CPU HP LCD monitor 2GB RAM ,500GB HDD</td>
                                                    <td>40</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>24-Port Ethernet switch</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Printer-TVS ELECTRONICS MSP 245 Series 120 columns</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Printer-TVS ELECTRONICS MSP 250 Series 80 columns</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>UPS-(20kva)</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Vintron speaker</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Head phone</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>WEB Camera</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
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
