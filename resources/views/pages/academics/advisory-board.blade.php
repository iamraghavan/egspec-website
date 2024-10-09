@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Industry Certification Programs' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->


<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Idea</h3>
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Advisory Committee aiming to discuss on Formulating / Redefining the Vision, Mission, Programme Educational Objectives, Programme Outcomes, Student performance, Improving facilities, looking after technical support and analyze on Teaching methods that currently put in place.</li>
                                <li class="single-requirement">Board meets once in semester/year to discuss what needed intact.</li>
                                {{-- <li class="single-requirement">Certification is highly recognized in the industry</li> --}}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>

    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn" >Members of Autonomous Board</h5>

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/academic-council-meeting-minutes.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Academic Council Meeting Minutes </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <table class="table">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th style="max-width: 100%;" >Budget Proposals & Utilization</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/2023-2024-budget-proposal.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                            2023-2024 Budget Proposal
                                                        </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/2022-2023-budget-proposal.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                            2022-2023 Budget Proposal
                                                        </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/2021-2022-budget-proposal.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                            2021-2022 Budget Proposal
                                                        </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/2020-2021-budget-proposal.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                            2020-2021 Budget Proposal
                                                        </a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="https://egspec.blob.core.windows.net/egspec-assets/advisory-board/2019-2020-budget-proposal.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                            2019-2020 Budget Proposal
                                                        </a></td>
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
            </div>


        </div>

    </div>
</div>



@include('components.cta')

@endsection

