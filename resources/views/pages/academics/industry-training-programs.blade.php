@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Industry Training Programs' ])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">

                    <div class="program-description-area">

                        <div class="program-credit-area">
                            <h3 class="rts-section-title animated fadeIn">Industry Training Programs</h3>

                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">

                                    <div class="accordion-item">

                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">

                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-download"> </i><a href="https://egspec.blob.core.windows.net/egspec-assets/industry-training-programs/industry-academic-partnering.pdf" target="_blank" type="application/pdf" rel="alternate" media="print"> Industry Training Programs</a></td>
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
                        <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=https://egspec.blob.core.windows.net/egspec-assets/industry-training-programs/industry-academic-partnering.pdf#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
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

<style>
    .loader {
  display: inline-block;
}

.loader span {
  animation: loading 1s infinite;
}

@keyframes loading {
  0% {
    content: ".";
  }
  33% {
    content: "..";
  }
  66% {
    content: "...";
  }
}

</style>
