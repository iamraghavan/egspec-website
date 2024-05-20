@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'ISO',
'value_3' => '',
'page_title' => 'ISO Manual'
])




<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>ISO Manual</u></h4>


            </div>


         </div>




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
                                                        <td><i class="fa fa-download"> </i><a href="https://egspec.blob.core.windows.net/egspec-assets/manual/quality-manual.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Quality Manual </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>


                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="https://egspec.blob.core.windows.net/egspec-assets/manual/procedure-manual.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Procedure Manual </a></td>
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
