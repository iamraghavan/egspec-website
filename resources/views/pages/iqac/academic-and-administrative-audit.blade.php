@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'ACADEMIC AND ADMINISTRATIVE AUDIT'
])

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">
                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">ACADEMIC AND ADMINISTRATIVE AUDIT</h3>
                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">
                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" onclick="loadPDF('https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2Facademic-and-administrative-audit-aaa.pdf?alt=media&token=e2d1bd79-48bc-4923-8e7a-d652ccdc8b0e')">ACADEMIC AND ADMINISTRATIVE AUDIT TEMPLATE</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" data-hystmodal="#auditReportsModal">Audit reports</a></td>
                                                        <td><i class="fa fa-external-link"></i> / Open Link</td>
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

                <div id="loader">Loading...</div>
                <div class="iframe-div">
                    <iframe id="pdfIframe" src="" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to load the PDF into the iframe
    function loadPDF(pdfUrl) {
        var iframe = document.getElementById('pdfIframe');
        var loader = document.getElementById('loader');

        // Show loader
        loader.style.display = 'block';

        // Hide iframe initially
        iframe.style.display = 'none';

        // Format the URL for Google Docs Viewer
        iframe.src = 'https://drive.google.com/viewerng/viewer?embedded=true&url=' + encodeURIComponent(pdfUrl);

        // When the iframe loads, hide the loader and show the iframe
        iframe.onload = function() {
            loader.style.display = 'none';
            iframe.style.display = 'block';
        };
    }

    // Assign the loadPDF function to the onclick event
    document.querySelectorAll('a[href="javascript:void(0);"]').forEach(function(link) {
        link.onclick = function() {
            var pdfUrl = this.getAttribute('onclick').match(/loadPDF\('([^']+)'\)/)[1];
            loadPDF(pdfUrl);
        };
    });
});
</script>

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


<link rel="stylesheet" href="https://unpkg.com/hystmodal/dist/hystmodal.min.css">
<script src="https://unpkg.com/hystmodal/dist/hystmodal.min.js"></script>
<div class="hystmodal rj_iqac" id="auditReportsModal" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button class="hystmodal__close" data-hystclose>&times;</button>
            <h2>Audit Reports</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>File Size</th>
                        <th>Open</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IT External Audit Report</td>
                        <td>1.2 MB</td>
                        <td><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2Fit-external-audit-report.pdf?alt=media&token=8ad6046f-497d-42bf-a32e-01cd79b027ca" target="_blank"><i class="fa fa-external-link"></i> Open</a></td>
                    </tr>
                    <tr>
                        <td>ECE External Audit Report</td>
                        <td>850 KB</td>
                        <td><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2Fece-external-audit-report.pdf?alt=media&token=4ad4fbca-2502-4427-9c4b-44a172d3e244" target="_blank"><i class="fa fa-external-link"></i> Open</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .rj_iqac .hystmodal__window {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .rj_iqac .hystmodal__close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
    }

    .rj_iqac h2 {
        margin-top: 0;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .rj_iqac table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .rj_iqac th, .rj_iqac td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    .rj_iqac th {
        background-color: #f4f4f4;
    }

    .rj_iqac a {
        color: #007bff;
        text-decoration: none;
    }

    .rj_iqac a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .rj_iqac th, .rj_iqac td {
            display: block;
            text-align: right;
        }

        .rj_iqac th {
            text-align: left;
            background-color: transparent;
        }

        .rj_iqac th::after {
            content: ":";
        }

        .rj_iqac td {
            text-align: left;
            padding: 10px 0;
        }

        .rj_iqac tr {
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const auditReportsLink = document.querySelector('a[data-hystmodal="#auditReportsModal"]');
        const modal = new HystModal({
            linkAttributeName: "data-hystmodal",
        });

        auditReportsLink.addEventListener('click', function () {
            modal.open('#auditReportsModal');
        });
    });
</script>


@include('components.cta')
@endsection
