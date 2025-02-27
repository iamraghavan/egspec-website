@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Students Mentor Mentee details'
])

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">
                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">Students Mentor Mentee details</h3>
                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">
                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>

                                                    <tr>
                                                        <td><a href="javascript:void(0);" data-hystmodal="#studentMentorMenteeModal2024-2025">2024-2025</a></td>
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
<div class="hystmodal rj_iqac" id="studentMentorMenteeModal2024-2025" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button class="hystmodal__close" data-hystclose>&times;</button>
            <h2>2024-2025</h2>
            <table>
                <thead>
                    <tr>
                        <th>Departments</th>
                        <th>Open</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                    <tr>
                        <td>{{ $file['department'] }}</td>
                        <td><a href="{{ $file['url'] }}" target="_blank" type="application/pdf" rel="alternate" media="print">
                            <i class="fa fa-external-link"></i> / Open Link
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/hystmodal/dist/hystmodal.min.css">
<script src="https://unpkg.com/hystmodal/dist/hystmodal.min.js"></script>
<div class="hystmodal rj_iqac" id="studentMentorMenteeModal2024-2025" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button class="hystmodal__close" data-hystclose>&times;</button>
            <h2>2024-2025</h2>
            <table>
                <thead>
                    <tr>
                        <th>Departments</th>
                        <th>Open</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                    <tr>
                        <td>{{ $file['department'] }}</td>
                        <td><a href="{{ $file['url'] }}" target="_blank" type="application/pdf" rel="alternate" media="print">
                            <i class="fa fa-external-link"></i> / Open Link
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .rj_iqac .hystmodal__window {
        max-width: 100%;
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
    .rj_iqac .hystmodal__window {
        padding: 15px;
        width: 90%;
        max-width: 90%;
        margin: 0 auto; /* Center the modal */
        box-sizing: border-box; /* Ensure padding is included in width */
    }

    .rj_iqac h2 {
        font-size: 18px;
        margin-bottom: 15px; /* Add some space below the heading */
    }

    .rj_iqac table {
        width: 100%;
        border-collapse: collapse; /* Remove space between table cells */
    }

    .rj_iqac th, .rj_iqac td {
        padding: 8px;
        display: block;
        text-align: right;
        white-space: nowrap;
        box-sizing: border-box; /* Ensure padding is included in width */
    }

    .rj_iqac th {
        text-align: left;
        background-color: transparent;
        font-weight: bold; /* Make headers stand out */
    }

    .rj_iqac th::after {
        content: ":";
    }

    .rj_iqac td {
        text-align: left;
        padding: 8px 0;
        border-bottom: 1px solid #ddd; /* Add a border to separate rows */
    }

    .rj_iqac tr {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .rj_iqac tr:last-child {
        margin-bottom: 0;
        border-bottom: none; /* Remove border from the last row */
    }

    .rj_iqac tbody tr {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .rj_iqac th, .rj_iqac td {
        flex: 1 1 45%;
    }

    /* Additional improvements for better readability and touch interaction */
    .rj_iqac a {
        color: #007BFF; /* Make links stand out */
        text-decoration: none; /* Remove underline */
    }

    .rj_iqac a:hover {
        text-decoration: underline; /* Add underline on hover */
    }

    .rj_iqac button {
        padding: 10px 15px; /* Make buttons easier to tap */
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
    }

    .rj_iqac button:hover {
        background-color: #0056b3; /* Darken button on hover */
    }
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const auditReportsLink = document.querySelector('a[data-hystmodal="#studentMentorMenteeModal2024-2025"]');
        const modal = new HystModal({
            linkAttributeName: "data-hystmodal",
        });

        auditReportsLink.addEventListener('click', function () {
            modal.open('#studentMentorMenteeModal2024-2025');
        });
    });
</script>


@include('components.cta')
@endsection
