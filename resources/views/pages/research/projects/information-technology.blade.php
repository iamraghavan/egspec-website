@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => 'Project',
'value_3' => '',
'page_title' => 'Department of Information Technology'
])







<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">R&D / Consultancy</h5>
                   <p>List of Consultancy Projects Undertaken</p>

                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="lundergrade-1-tab" data-bs-toggle="tab" data-bs-target="#lundergrade-1" type="button" role="tab" aria-controls="lundergrade-1" aria-selected="true">ACADEMIC YEAR: 2020-2021 </button>
                                <button class="nav-link" id="lgrade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#lgrade-tution-2" type="button" role="tab" aria-controls="lgrade-tution-2" aria-selected="false">ACADEMIC YEAR: 2019-2020</button>
                                <button class="nav-link" id="lgrade-tution-3-tab" data-bs-toggle="tab" data-bs-target="#lgrade-tution-3" type="button" role="tab" aria-controls="lgrade-tution-3" aria-selected="false">ACADEMIC YEAR: 2018-2019</button>
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="lundergrade-1" role="tabpanel" aria-labelledby="lundergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td>#</td>
                                        <td>Investigators</td>
                                        <td>Project Title</td>
                                        <td>Company</td>
                                        <td>Period</td>
                                        <td>Duration</td>
                                        <td>Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td>Network Computing and Cloudlet Services</td>
                                        <td>Oliver Academy of Education initiative, Vedharanyam</td>
                                        <td>2 years</td>
                                        <td>1.18</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td>Diesel Filing and Mileage Record System</td>
                                        <td>R.S.Mani Transport, Vedharanyam</td>
                                        <td>6 Months</td>
                                        <td>0.84</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td>Mahatma Gandhi National Rural Employment Registration</td>
                                        <td>Nagapattinam Block Development Officer</td>
                                        <td>3 Months</td>
                                        <td>0.50</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td>National Electoral Roll Purification and Authentication Programme (NERPAP)</td>
                                        <td>Nagapattinam Assembly – Tahsildar Office</td>
                                        <td>6 Months</td>
                                        <td>1.00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td></td>
                                        <td>Banking Financial Service and Insurance for Unemployed Graduates</td>
                                        <td>Tamil Nadu Skill Development and Mission Corporation</td>
                                        <td>3 Months</td>
                                        <td>0.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="lgrade-tution-2" role="tabpanel" aria-labelledby="lgrade-tution-2-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Investigators</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Period</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Lakhs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mr. M. Chinnadurai, Mr. S. Manikandan</td>
                                        <td>Measuring The Performance Of Computer’s</td>
                                        <td>Annai Computer’s Velankanni</td>
                                        <td>Aug 2014 to July 2015</td>
                                        <td>2 years</td>
                                        <td>0.92</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>M. Chinnadurai, Mr. S. Manikandan, Mr. S. Palanimurugan</td>
                                        <td>Conference Website</td>
                                        <td>E.G.S. Pillay Engineering College</td>
                                        <td>July 2014 to Aug 2015</td>
                                        <td>1.2 years</td>
                                        <td>0.42</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mr. K. Manikanda Kumaran</td>
                                        <td>Mahatma Gandhi National Rural Employment Registration</td>
                                        <td>Nagapattinam Block Development Officer</td>
                                        <td>Nov 2014 to Oct 2015</td>
                                        <td>1 year</td>
                                        <td>0.05</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mr. S. Manikandan, Ms. P. Suganya</td>
                                        <td>Science Olympiad Foundation World Largest Olympiads</td>
                                        <td>Aptech, Mumbai</td>
                                        <td>July 2014 to July 2015</td>
                                        <td>1.1 year</td>
                                        <td>0.012</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mr. K. Manikanda Kumaran</td>
                                        <td>Aadhaar Card Entry</td>
                                        <td>Nagapattinam Assembly – Thasildhar Office</td>
                                        <td>Nov 2014 to Oct 2015</td>
                                        <td>1 year</td>
                                        <td>1.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="lgrade-tution-3" role="tabpanel" aria-labelledby="lgrade-tution-3-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Investigators</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Period</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Lakhs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mr. M. Chinnadurai, Mr. S. Manikandan</td>
                                        <td>Measuring The Performance Of Computer's</td>
                                        <td>Annai Computer's Velankanni</td>
                                        <td>Aug 2014 to July 2015</td>
                                        <td>2 years</td>
                                        <td>0.92</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mr. S. Palanimurugan, Mr. K. Manikanda Kumaran</td>
                                        <td>E-Learning</td>
                                        <td>E.G.S.P.E.C, Nagapatinam</td>
                                        <td>Aug 2013 to July 2014</td>
                                        <td>1 year</td>
                                        <td>0.38</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. M. Chinnadurai, Mr. S. Manikandan, Mr. S. Palanimurugan</td>
                                        <td>Conference Website</td>
                                        <td>E.G.S.P.E.C, Nagapatinam</td>
                                        <td>Sep 2013 To Aug 2014</td>
                                        <td>1 year</td>
                                        <td>0.42</td>
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



@include('components.cta')
@endsection
