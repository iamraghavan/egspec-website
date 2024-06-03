@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Skill Development Centre',
'value_2' => '',
'value_3' => '',
'page_title' => 'Pradhan Mantri Kaushal Kendra'
])



<section class="rts-about-university pt--100 pb--80">




    <div class="container">

       <div class="row">
          <div class="rts-section">
             <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                <p class="profile-name">Pradhan Mantri Kaushal Kendra (PMKK)</p>
             </div>
             <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="rts-section-description">
                   <div class="profile-info">
                      <p class="profile-name"><b>Coordinator/Facilitator</b>: Dr. N. Murali, Assoc.Prof./CSE</p>


                   </div>
                </div>
             </div>
          </div>
       </div>


       <div class="row">
        <div class="col-12">
            <div class="admission-content-top">
                <div class="application-deadline">
                    <h5 class="rts-section-title animated fadeIn">Scheme Details</h5>

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped">
                                <thead class="table-theme">
                                    <tr>
                                        <td colspan="2">About PMKK</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Skill development training</td>
                                        <td>Majorly conducted on footloose training infrastructure</td>
                                    </tr>
                                    <tr>
                                        <td>Pradhan Mantri Kaushal Kendra (PMKK)</td>
                                        <td>An exclusive multiple skill development centre with state of art infrastructure</td>
                                    </tr>
                                    <tr>
                                        <td>Focus</td>
                                        <td>Employability and creating aspirational value for skill development training</td>
                                    </tr>
                                    <tr>
                                        <td>Objective</td>
                                        <td>Opening one PMKK in each district with the help of various stakeholders of skill development</td>
                                    </tr>
                                    <tr>
                                        <td>Implementing Agency</td>
                                        <td>National Skill Development Corporation (NSDC)</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="admission-content-top">
                <div class="application-deadline">

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped">
                                <thead class="table-theme">
                                    <tr>
                                        <td colspan="2">Objectives of the Scheme</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Create benchmark institutions</td>
                                        <td>Demonstrate aspirational value for competency-based skill development training</td>
                                    </tr>
                                    <tr>
                                        <td>Focus</td>
                                        <td>On elements of quality, sustainability, and connect with stakeholders in skills delivery process</td>
                                    </tr>
                                    <tr>
                                        <td>Transform</td>
                                        <td>From a mandate-driven footloose model to a sustainable institutional model</td>
                                    </tr>
                                    <tr>
                                        <td>Catalyze</td>
                                        <td>A culture shift to support aspiring youth</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>

    <h6 class="rts-section-title animated fadeIn">PMKK started enrolling students since 19.December.2016, It offers training in Electronics, BFSI, Telecom & Retail.</h6>
    <div class="program-description-area">

        <div class="program-credit-area">

            <div class="program-accordion my-5">
                <div class="accordion" id="rts-accordion">

                    <div class="accordion-item">

                        <div>
                            <div class="accordion-body-content">
                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-download"> </i><a href="https://www.nsdcindia.org/sites/default/files/files/List_of_PMKK_Centres_Allocated_in_Phase_1_&_2.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>Link to Centres Allocated (Sl No.22)</a></td>
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
 </section>




@include('components.cta')
@endsection
