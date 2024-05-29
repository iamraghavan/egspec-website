@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Adminstrative Organization' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">

<div class="page-content-top semister-fee">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">HR Policy</h5>

                <!-- tab item -->

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td><a href="@blob('/hr-policy/hr-policy-c.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>HR Policy HandBook</a></td>
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

