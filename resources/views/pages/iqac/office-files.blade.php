@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => 'IQAC Yearly Reports',
'value_3' => '',
'page_title' => 'Office Files'
])



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">Office Files</h3>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Faccount-office-files.pdf?alt=media&token=e8ff1caf-ecd8-42aa-932a-5e2c624cbeb6')">Account Office File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Fadmission-office-files.pdf?alt=media&token=c61e231c-f817-4f4a-b5ac-2cfd7d032285')">Admission Office File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Fcoe-files.pdf?alt=media&token=cdfbbe06-c369-4085-b94c-6c31767c223a')">COE File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Flibrary-files.pdf?alt=media&token=4cb5fa28-d104-46ea-a33b-f1e87d98f194')">Library File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Flist-of-offices.pdf?alt=media&token=c4a136ad-0cd7-470f-8b5d-5cd3bacb4789')">List of Offices File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Fpurchase-and-maintanence-files.pdf?alt=media&token=9baf9c3f-784a-4b97-b22b-2996fe767025')">Purchase and Maintanance File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Fr-and-d-files.pdf?alt=media&token=05f58982-6f05-4678-be53-d797436fbf84')">R &amp; D File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Fsports-office-files.pdf?alt=media&token=604c111f-ef84-41fe-9a21-cde227d8012f')">Sports Office File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Ft-and-p-office-files.pdf?alt=media&token=3021d2a2-ccbf-44db-bb1b-6fd169e39ba7')">T &amp; P Office File</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fiqac%2Fiqac-yearly-reports%2Foffice-files%2Ftransport-office-files.pdf?alt=media&token=4fe6b93e-5240-4309-ac0f-0c737f0c99cb')">Transport Office File</a></td>
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
