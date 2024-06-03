@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Copyrights'
])




<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Copyrights Details</h5>

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
                                                            <td><i class="fa fa-download"> </i><a href="@blob('publication-details/research-copyright.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Copyrights Details</a></td>
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
                        <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/research-copyright.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                    height: 100rem !important;
                "></iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>




@include('components.cta')
@endsection
