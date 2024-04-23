@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Admissions',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Excess Fee Committee Circular'
])


<div class="rts-page-content rts-section-padding">


    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn" >Excess Fee Committee Circular</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/excess-fee-committee-circular/excess-fee-committee-circular.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Excess Fee Committee Circular </a></td>
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
                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=https://egspec.blob.core.windows.net/egspec-assets/excess-fee-committee-circular/excess-fee-committee-circular.pdf#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                height: 100rem !important;
            "></iframe>
                </div>
            </div>


        </div>

    </div>
</div>

<style>
    .iframe-div {
    width: 100%;
    max-width: 100%;
}

/* Set the iframe to fill the container and adjust height accordingly */
iframe {
    width: 100%;
    height: 100vh; /* Adjust as needed */
    border: none; /* Remove border */
    overflow: auto; /* Allow scrolling */
}
</style>
@include('components.cta')
@endsection
