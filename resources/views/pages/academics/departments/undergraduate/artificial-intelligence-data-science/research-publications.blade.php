@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'Research & Publications'
])

<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <div class="admission-content-top">
                       <div class="application-deadline">
                          <h5 class="rts-section-title animated fadeIn">Research &amp; Publications</h5>
                          <div class="application-deadline__content mt-5">
                             <div class="application-deadline__content--table">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S.No</td>
                                            <td>Title of the Publication</td>
                                            <td>Journal/Publisher Name</td>
                                            <td>Authors</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>An Efficient On Demand Access Protocol In MANETS Using Network Simulator -2</td>
                                            <td>International Conference on Computing for sustainable global development (INDIACom)</td>
                                            <td>Dr. S. Palani Murugan</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Smart Commodities Public Distribution System Using IoT</td>
                                            <td>Sistema inteligente de distribution publica de productos basicos mediante IoT</td>
                                            <td>Dr. S. Palani Murugan</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>A GPS – Based Face Attendance Register System using Android Applications stored in the Cloud</td>
                                            <td>IEEE Xplore</td>
                                            <td>Dr. S. Palani Murugan</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>P2CA-GAM-ID: Coupling of probabilistic principal components analysis with generalised additive model to predict the 𝑘−barriers for intrusion detection</td>
                                            <td>Elsevier, SCI<br>Impact Factor:8</td>
                                            <td>Dr. J. Amutha</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Reliability of Clustering Algorithm in Wireless sensor Networks using Supervised Machine Learning Classification Approaches</td>
                                            <td>AIP Conference Proceedings</td>
                                            <td>Dr. J. Amutha</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Transformative Influence of AI-Powered Conversational Interfaces on Data Science: Exploring New Frontiers</td>
                                            <td>International Conference on Computing Communication and Sustainable Energy System</td>
                                            <td>Dr. J. Amutha</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Leveraging IoT and AI for Smart City Environments: Exploring Potential Applications and Challenges</td>
                                            <td>International Conference on Computing Communication and Sustainable Energy System</td>
                                            <td>Dr. J. Amutha</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Machine Learning – Based skin disease detection and classification: An Automated approach</td>
                                            <td>International Conference on Computing Communication and Sustainable Energy System</td>
                                            <td>Mrs. S. Akilandeswari</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Book Publication: Python for Data Science</td>
                                            <td>Lielani Katie Publisher</td>
                                            <td>Mrs. S. Akilandeswari</td>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>

                        <x-dept-contact-info
                            name="Dr. S. Palani Murugan"
                            :phones="['']"
                            :emails="['palanimurugan@egspec.org']"
                        />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
