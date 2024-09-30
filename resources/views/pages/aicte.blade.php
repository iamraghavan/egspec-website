@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Home',
'value_2' => '',
'value_3' => '',
'page_title' => 'All India Council for Technical Education'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>AICTE</u></h4>


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
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2023-2024.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2023-2024 </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2022-2023.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2022-2023 </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2021-2022.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2021-2022 </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2020-2021.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2020-2021 </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2019-2020.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2019-2020</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2018-2019.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2018-2019</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('aicte/aicte-report-2016-2017.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> EOA Report 2016-2017</a></td>
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
    </div>
 </section>





@include('components.cta')
@endsection
