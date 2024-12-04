@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Research Supervisor'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>Research Supervisor Details</u></h4>


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
                                                        <td><i class="fa fa-download"> </i><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/ACFrOgC8sUg0yPdWNWQk_EMwkgoB1XoqSVXMrAgNCcQ5ji3EC_g9EByFxt212V1KfTU59Cg7xYqG0vjho-QhxAm3tfXIQiKI251UeAVQNb9g0sNYO5dmQUk7agr3CzOmGXJ7PKVlvwg2INjLmv86.pdf?alt=media&token=79171063-19b8-4847-b2fe-6438e8ff514e" target="_blank" type="application/pdf" rel="alternate" media='print'> Recognized Research Supervisor List &amp; Scholar Details</a></td>
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

                <div class="iframe-div">
                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=https://egspec.blob.core.windows.net/egspec-assets/research/research-supervisor-and-scholar-details.pdf#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                height: 100rem !important;
            "></iframe>
                </div>
            </div>


        </div>

    </div>
    </div>
 </section>





@include('components.cta')
@endsection
