@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Home',
'value_2' => '',
'value_3' => '',
'page_title' => 'National Institutional Ranking Framework'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>NIRF - E.G.S. PILLAY ENGINEERING COLLEGE (ENGINEERING) 2024</u></h4>


            </div>



         </div>


 {{-- <h3 class="rts-section-title animated fadeIn" >ISO Manual</h3> --}}

     </div>

    </div>
    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        {{-- <h3 class="rts-section-title animated fadeIn" >ISO Manual</h3> --}}

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table table-striped">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <td>Institute Name</td>
                                                        <td>E.G.S. PILLAY ENGINEERING COLLEGE</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>India Rankings 2024 ID</td>
                                                        <td>IR-E-C-24989</td>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('nirf/engineering-nirf-2025.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Full Report </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discipline</td>
                                                        <td>ENGINEERING</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suggestions / Feedback - Contact</td>
                                                        <td>principal@egspec.org, mchinnadurai@egspec.org</td>
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
    </div>
 </section>





@include('components.cta')
@endsection
