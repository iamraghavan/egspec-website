@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Professional Bodies',
'value_3' => '',
'page_title' => 'Institute of Electrical and Electronics Engineers'
])




<section class="rts-about-university pt--100 pb--80">
    <div class="container">



     <div class="row">
        <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                <div class="profile-info">
                    <h5 class="profile-name">Welcome to IEEE Corner</h5>
                    <p class="profile-role">Student Branch No : <b> STB98301 </b></p>

                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                    <div class="profile-info">
                        <h5 class="profile-role">Name of the Chapter : IEEE STUDENT BRANCH</h5>
                        <p class="profile-role">Branch Counselor : Dr.G. GANESAN @ SUBRAMANIAN,Associate Professer/EEE</p>
                        <p class="profile-location">Chair : Mr.M DHARIK MOHAMMED</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="admission-content-top">
            <div class="application-deadline mt-5">

                    <h5 class="rts-section-desc animated fadeIn">Event Details  [2012 – 2017]</h5>

                <div class="application-deadline__content">
                    <div class="application-deadline__content--table">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>NAME OF THE PROGRAM</td>
                                    <td>DURATION</td>
                                    <td>DATE</td>
                                    <td>ORGANIZED BY</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>IEEE - International Conference on Advances in Engineering & Technology</td>
                                    <td>2 days</td>
                                    <td>02 & 03.05.2012</td>
                                    <td>Department of CSE/IT/ECE/EEE/MECH/MCA</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IEEE - International Conference on Research and Development Prospects in Engineering & Technology</td>
                                    <td>2 days</td>
                                    <td>29 & 30.03.2013</td>
                                    <td>Department of CSE/IT/ECE/EEE/MECH/MCA</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>IEEE - International Conference on Advances in Engineering & Technology</td>
                                    <td>2 days</td>
                                    <td>02 & 03.05.2014</td>
                                    <td>Department of CSE/IT/ECE/EEE/MECH/MCA</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>IEEE - International Conference on Innovative Research in Engineering & Technology</td>
                                    <td>2 days</td>
                                    <td>02 & 03.05.2014</td>
                                    <td>Department of CSE/IT/ECE/EEE/MECH/MCA</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>IEEE - International Conference on IOT and its Applications</td>
                                    <td>2 days</td>
                                    <td>19 & 20.05.2017</td>
                                    <td>Department of IT/CSE/MCA</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IEEE - International Conference on Innovative Research in Electrical Sciences</td>
                                    <td>2 days</td>
                                    <td>19 & 20.05.2017</td>
                                    <td>Department of EEE/ECE</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                </div>
{{-- Raghavan  --}}

<div style="display: none">upldate</div>

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td><a href="{{ asset('/assets/images/placement/ieee.pdf')}}" target="_blank" type="application/pdf" rel="alternate" media='print'> IEEE Members Details 2017 </a></td>
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


    </div>


    </div>


    </div>
 </section>





@include('components.cta')
@endsection
