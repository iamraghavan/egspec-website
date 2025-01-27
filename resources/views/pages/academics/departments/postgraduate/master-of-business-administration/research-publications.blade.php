@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Business Administration',
'page_title' => 'Research and Publications' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="page-content-top semister-fee">
                        <div class="semister-fee__content mt-5">
                            <h5 class="rts-section-title">Research and Publications</h5>
                            <!-- tab item -->
                            {{-- <div class="rts-fee-chart">
                                <div class="rts-fee-chart__tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="rd-consultancy-tab1" data-bs-toggle="tab" data-bs-target="#rd-consultancy1" type="button" role="tab" aria-controls="rd-consultancy1" aria-selected="true">R&D / Consultancy 1</button>
                                            <button class="nav-link" id="rd-consultancy-tab2" data-bs-toggle="tab" data-bs-target="#rd-consultancy2" type="button" role="tab" aria-controls="rd-consultancy2" aria-selected="false">R&D / Consultancy 2</button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="rts-fee-chart__content" id="nav-tabContent">
                                    <!-- First Table -->
                                    <div class="tab-pane fade active show" id="rd-consultancy1" role="tabpanel" aria-labelledby="rd-consultancy-tab1">
                                        <div class="table-responsive">
                                            <table class="table table-responsive">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Project</th>
                                                        <th>Agency</th>
                                                        <th>Coordinator</th>
                                                        <th>Amount(rs)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Rural Education System with reference to specific village in Nagapattinam district</td>
                                                        <td>TNSCST</td>
                                                        <td>S. Mohamed Naina Maraicar Coordinator: Dr. R. Karthi</td>
                                                        <td>10000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>A survey on digitalization system of education in government school at Nagapattinam region</td>
                                                        <td>TNSCST</td>
                                                        <td>A. Buchiya Coordinator: Ms. P. Vinotha</td>
                                                        <td>7500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Challenges faced by the MSME (Micro Small and Medium Enterprise) while COVID crisis</td>
                                                        <td>TNSCST</td>
                                                        <td>R.Sriram Prakash Coordinator: Dr. R. Karthi</td>
                                                        <td>7500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>Improving Personal Hygiene and inculcating good practices among SC/ST adolescent girl students during their menstrual cycle</td>
                                                        <td>NCSTC</td>
                                                        <td>Dr. S. Chandrasekar</td>
                                                        <td>24,50,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>Innovative Practices in Management Education in India</td>
                                                        <td>EGSPEC Seed Money</td>
                                                        <td>Dr. R. Karthi</td>
                                                        <td>5500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td>Awareness among SC and ST children towards water conservation</td>
                                                        <td>NCSTC</td>
                                                        <td>Dr. S. Chandrasekar</td>
                                                        <td>21,30,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>07</td>
                                                        <td>Impact of COVID19 on Indian Economy</td>
                                                        <td>EGSPEC Seed Money</td>
                                                        <td>Mr. SK. Sudhan</td>
                                                        <td>21,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>08</td>
                                                        <td>The impact of labour welfare measures on employee satisfaction</td>
                                                        <td>EGSPEC Seed Money</td>
                                                        <td>Ms. L. Aarthi</td>
                                                        <td>19,600</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Second Table -->
                                    <div class="tab-pane fade" id="rd-consultancy2" role="tabpanel" aria-labelledby="rd-consultancy-tab2">
                                        <div class="table-responsive">
                                            <table class="table table-responsive">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Project</th>
                                                        <th>Agency</th>
                                                        <th>Coordinator</th>
                                                        <th>Amount(rs)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>A study on Employee Attrition</td>
                                                        <td>RKN Praveen Chem Industries, Karaikal</td>
                                                        <td>Dr.R.Karthi Ms.B.Asha Daisy</td>
                                                        <td>30,899</td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>A study on customer satisfaction and services in Petrol Bunk</td>
                                                        <td>Venkateswara Agencies, Thiruvarur</td>
                                                        <td>Dr.R.Karthi Ms.B.Asha Daisy</td>
                                                        <td>40,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>A study on Market positioning of Maruti</td>
                                                        <td>APKS Oil Industry</td>
                                                        <td>Mr.P.Kalaiselvan Ms.M.Ganga</td>
                                                        <td>30,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>ASSESSING THE PERFORMANCE OF SERVICE IN CABLE TV AND AWARENESS AMONG THE PEOPLE IN TRANSITION FROM CABLE TO DIGITIZATION TECHNOLOGY</td>
                                                        <td>G.L.GOPU, PROPRIETOR KTN PLUS 1, GOPU CABLE VISION, Nagapattinam</td>
                                                        <td>Dr.R.Karthi, MS.G.MIDHUNALAKHSMI</td>
                                                        <td>20,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>Computer literacy programme</td>
                                                        <td>Popularisation of Science Activity, TNSCST, Chennai</td>
                                                        <td>Dr.R.Karthi</td>
                                                        <td>15,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>06</td>
                                                        <td>Pollution Free Environment</td>
                                                        <td>Popularisation of Science Activity, TNSCST,Chennai</td>
                                                        <td>Dr.R.Karthi</td>
                                                        <td>15,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>07</td>
                                                        <td>Personality Development Programme</td>
                                                        <td>AICTE, New Delhi</td>
                                                        <td>Dr.R.Karthi</td>
                                                        <td>80,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">

                                    <div class="accordion-item">

                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">

                                                    <tbody>
                                                        <tr>
                                                            <td><a href="@blob('academics/departments/postgraduate/master-of-business-administration/research-publications.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Research &amp; Publications </a></td>
                                                            <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                        </tr>

                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>


                                    </div>

                                    <div class="iframe-div">
                                        <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('academics/departments/postgraduate/master-of-business-administration/research-publications.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                                    height: 100rem !important;
                                "></iframe>
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
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
    name="Dr. R. Karthi"
    :phones="['+91 9842774807']"
    :emails="['karthi@egspec.org']"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')




@endsection
