@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'IQAC - Events'
])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">EGSPEC IQAC Events</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2FAwareness%20about%20Gate%20exam%20preparations-Civil%20Dept%20-15.9.24.pdf?alt=media&token=7ef61582-5b67-4886-b903-439bc565d6dc')">Awareness about Gate Exam Preparations - Civil Dept - 15.9.24</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2FAwareness%20program%20on%20online%20certification%20MCA.pdf?alt=media&token=545fad1d-817f-4030-b279-dc0a691dda1d')">Awareness Program on Online Certification - MCA</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2FBest%20Practices%20for%20Cleaning%20and%20Preparing%20Data%20for%20Analysis-CSE%20Program-7.9.24.pdf?alt=media&token=8af719b0-59c3-4515-99d4-2af24d6f487b')">Best Practices for Cleaning and Preparing Data for Analysis - CSE Program - 7.9.24</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2FEffective%20Course%20Planning%20Strategies-IT%20Dept-2.9.24.pdf?alt=media&token=5bb483ce-c97c-4cf7-b55f-815022cff69f')">Effective Course Planning Strategies - IT Dept - 2.9.24</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2FOBE%20AIDS%20Program%20-14.8.24.pdf?alt=media&token=25a22fbf-12d3-4a84-967d-2a05bfb10ada')">OBE AIDS Program - 14.8.24</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fwebinar-Modeling%20Electrothermal%20effects%20in%20semiconductor%20devices%20-%20ECE-29.09.2024.pdf?alt=media&token=06677985-5a9d-44c0-956e-8c8d1e452dc6')">Webinar - Modeling Electrothermal Effects in Semiconductor Devices - ECE - 29.09.2024</a></td>
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
