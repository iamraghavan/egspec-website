@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => 'IQAC Yearly Reports',
'value_3' => '',
'page_title' => 'General Files'
])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">General Files</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Faudit-file-details.pdf?alt=media&token=02d10a6a-dea3-435e-a28d-0fa463bc7c6c')">Audit File Details</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fcode-of-conduct-files.pdf?alt=media&token=1d4e10e7-e390-4ed0-b14c-88d97796df82')">Code of Conduct File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fdivyaang-file-details.pdf?alt=media&token=d6b52f62-be01-4327-8823-bafbb2c1feef')">Divyaang File Details</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fe-governance-file.pdf?alt=media&token=3403ce36-ee45-42ee-a3fa-e6146a6cadaf')">E-Governance File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fenergy-and-conservation-file.pdf?alt=media&token=1ed44299-262c-4d14-8b98-8449f10265fb')">Energy and Conservation File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fevent-for-social-media-networks.pdf?alt=media&token=be853e0e-d474-470f-999c-bf8f1b978aee')">Event for Social Media Networks</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fgreen-campus-file.pdf?alt=media&token=850ae783-1bbe-4cca-82de-53b249cff1ef')">Green Campus File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fhostel-files.pdf?alt=media&token=6a7c1809-1067-4b31-8ab7-ae814c025d0d')">Hostel Files</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fit-infrastructure-files.pdf?alt=media&token=543e61ac-3265-47bb-bd1d-78e31da5cd26')">IT Infrastructure Files</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fprofessional-bodies-cells-file.pdf?alt=media&token=cc0ca682-a8b3-4d96-bf04-5bc87b343614')">Professional Bodies &amp; Cells File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fsafety-and-security-office-files.pdf?alt=media&token=6b3fc4d8-6bdb-4314-9d8e-239fa9675590')">Safety and Security Office Files</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fwaste-managment-file.pdf?alt=media&token=dbc5abf2-01f7-4059-834f-f0bbe40c4303')">Waste Management File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Fgeneral-files%2Fwater-conservation-files.pdf?alt=media&token=85e9e52d-cbb4-423b-a2a5-d7fe5fe1f8c6')">Water Conservation Files</a></td>
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
