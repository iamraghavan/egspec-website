@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'IQAC - Activities'
])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">EGSPEC IQAC Activities</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2Factivities-in-2024-2025-odd-semester.pdf?alt=media&token=8d261eed-17a7-4cec-b3cc-0c1ad7a2dc29')">Activities in 2024-2025 Odd Semester</a></td>
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
                    <iframe id="pdfIframe" src="" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                </div>

                <script>
                    // Function to load the PDF into the iframe
                    function loadPDF(pdfUrl) {
    var iframe = document.getElementById('pdfIframe');
    // Format the URL for Google Docs Viewer
    iframe.src = 'https://drive.google.com/viewerng/viewer?embedded=true&url=' + encodeURIComponent(pdfUrl);
}

                </script>
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
