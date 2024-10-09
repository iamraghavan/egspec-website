@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Audit Statement' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">

<div class="page-content-top semister-fee">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Audit Statement</h5>

                <!-- tab item -->

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-17-18.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2017-2018</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-18-19.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2018-2019</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>

                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-19-20.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2019-2020</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>

                                              <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-20-21.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2020-2021</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-21-22.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2021-2022</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>



                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-22-23.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2022-2023</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>

                                            <tr>
                                                <td><a href="@blob('/audit-statement/audit-statement-23-24.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>FY 2023-2024</a></td>
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
</section>


@include('components.cta')
@endsection

