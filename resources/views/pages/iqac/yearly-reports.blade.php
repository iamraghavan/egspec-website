@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => 'IQAC Yearly Reports',
'value_3' => '',
'page_title' => 'Yearly Reports'
])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">IQAC Yearly Reports</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2016-17.pdf" target="_blank">AQAR 2016-2017</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2017-18.pdf" target="_blank">AQAR 2017-2018</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2018-19.pdf" target="_blank">AQAR 2018-2019</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2019-20.pdf" target="_blank">AQAR 2019-2020</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2020-21.pdf" target="_blank">AQAR 2020-2021</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2021-2022.pdf" target="_blank">AQAR 2021-2022</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/iqac/annual-quality-assurance-report/aqar-2022-2023.pdf" target="_blank">AQAR 2022-2023</a></td>
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
