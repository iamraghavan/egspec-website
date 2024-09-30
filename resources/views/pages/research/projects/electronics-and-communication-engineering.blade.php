@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => 'Project',
'value_3' => '',
'page_title' => 'Department of Electronics and Communication Engineering'
])



<section class="rts-about-university pt--100 pb--80">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn" >Research Publications</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('project/electronics-and-communication-engineering/research-publications.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Research Publications</a></td>
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
                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('project/electronics-and-communication-engineering/research-publications.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                height: 100rem !important;
            "></iframe>
                </div>
            </div>



            <div class="col-lg-6 col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn" >Proposal Details</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="@blob('project/electronics-and-communication-engineering/proposal-details.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Proposal Details</a></td>
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
                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('project/electronics-and-communication-engineering/proposal-details.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
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
