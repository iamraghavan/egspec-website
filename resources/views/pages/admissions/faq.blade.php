@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'FAQ`s',
'value_2' => '',
'value_3' => '',
'page_title' => 'FAQ`s' ])

<div class="rts-scholarship rts-section-padding">
    <div class="container">
        <div class="rts-scholarship-description">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-12 col-md-11">
                    <div class="program-description-area">

                        <!-- faq -->
                        <div class="program-credit-area faq mt--50">
                            <h4 class="title">Frequently Asked Questions (FAQ)</h4>
                            <div class="program-accordion">
                                <div class="accordion" id="rts-accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What are the admission requirements for EGS Pillay Engineering College?
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Admission requirements for EGS Pillay Engineering College vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do I apply for financial aid at EGS Pillay Engineering College?
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Financial aid application processes for EGS Pillay Engineering College vary. Please refer to the Financial Aid section on our website for detailed information or contact the Financial Aid Office for assistance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How do I contact EGS Pillay Engineering College?
                                        </button>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    For inquiries or assistance, you can contact EGS Pillay Engineering College through the contact information provided on our website or visit the campus in person during office hours.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Are online courses available at EGS Pillay Engineering College?
                                        </button>
                                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    EGS Pillay Engineering College offers a range of online courses. Please visit our website or contact the Admissions Office for more information on available online programs.
                                                </p>
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
</div>


@endsection



