@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Publication Details'
])




<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Publication Details</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">2021 - 2022</button>
                                <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">2020 - 2021</button>
                                <button class="nav-link" id="grade-tution-3-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-3" type="button" role="tab" aria-controls="grade-tution-3" aria-selected="false">2019 - 2020</button>
                                <button class="nav-link" id="grade-tution-4-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-4" type="button" role="tab" aria-controls="grade-tution-4" aria-selected="false">2018 - 2019</button>
                                <button class="nav-link" id="grade-tution-5-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-5" type="button" role="tab" aria-controls="grade-tution-5" aria-selected="false">2017 - 2018</button>
                                <!-- New Tab Items -->
                                <button class="nav-link" id="grade-tution-6-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-6" type="button" role="tab" aria-controls="grade-tution-6" aria-selected="false">2022 - 2023</button>
                                <button class="nav-link" id="grade-tution-7-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-7" type="button" role="tab" aria-controls="grade-tution-7" aria-selected="false">2023 - 2024</button>
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <!-- Existing Tab Content -->
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/21-22.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2021 - 2022 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/21-22.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- 2020-2021 Tab -->
                        <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/20-21.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2020 - 2021 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/20-21.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- 2019-2020 Tab -->
                        <div class="tab-pane fade" id="grade-tution-3" role="tabpanel" aria-labelledby="grade-tution-3-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/19-20.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2019 - 2020 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/19-20.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- 2018-2019 Tab -->
                        <div class="tab-pane fade" id="grade-tution-4" role="tabpanel" aria-labelledby="grade-tution-4-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/18-19.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2018 - 2019 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/18-19.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- 2017-2018 Tab -->
                        <div class="tab-pane fade" id="grade-tution-5" role="tabpanel" aria-labelledby="grade-tution-5-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/17-18.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2017 - 2018 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/17-18.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- New 2022-2023 Tab -->
                        <div class="tab-pane fade" id="grade-tution-6" role="tabpanel" aria-labelledby="grade-tution-6-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/22-23.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2022 - 2023 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/22-23.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- New 2023-2024 Tab -->
                        <div class="tab-pane fade" id="grade-tution-7" role="tabpanel" aria-labelledby="grade-tution-7-tab">
                            <div class="col-12 my-5">
                                <div class="program-description-area">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="@blob('publication-details/23-24.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> Publication Details ( 2023 - 2024 ) </a></td>
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
                                    <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('publication-details/23-24.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include('components.cta')
@endsection
