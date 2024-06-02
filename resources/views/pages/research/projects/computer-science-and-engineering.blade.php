@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => 'Project',
'value_3' => '',
'page_title' => 'Department of Computer Science and Engineering'
])





<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Consultancy</h5>
                   <p>List of Consultancy Projects Undertaken</p>

                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">ACADEMIC YEAR: 2020-2021 </button>
                                <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">ACADEMIC YEAR: 2019-2020</button>
                                <button class="nav-link" id="grade-tution-3-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-3" type="button" role="tab" aria-controls="grade-tution-3" aria-selected="false">ACADEMIC YEAR: 2018-2019</button>
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Medical Lab Data Management System</td>
                                        <td>Selvaa's Diagnostics and Healthcare Private Limited, Nagapattinam</td>
                                        <td>1 year</td>
                                        <td>80000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Travel Booking system</td>
                                        <td>Sundaraman Travels, Nagapattinam</td>
                                        <td>1.3 years</td>
                                        <td>83000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Employee Training Tracking System</td>
                                        <td>RIPE Consultancy Services, Chennai</td>
                                        <td>1 year</td>
                                        <td>108000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Vision based Activity Monitoring for Surveillances Applications</td>
                                        <td>VI Technology, Chennai</td>
                                        <td>8 months</td>
                                        <td>85000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Payroll Processing System</td>
                                        <td>St.Joseph Nursery & Primary School, Vaikaalvettu, Nagapattinam</td>
                                        <td>1 year</td>
                                        <td>50000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Period</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Textile shop Billing System</td>
                                        <td>Rich Trends Men’s Wear, Poraiyar</td>
                                        <td>1 year</td>
                                        <td>85000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Attendance Monitoring System</td>
                                        <td>St.Joseph Nursery & Primary School, Vaikaalvettu, Nagapattinam</td>
                                        <td>1 year</td>
                                        <td>92000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Inventory Management system for Super market</td>
                                        <td>Sri Krishna Supermarket, Nagapattinam</td>
                                        <td>1.3 years</td>
                                        <td>70600</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Hospital Management System</td>
                                        <td>Dr.Murugesan Private Hospital, Sikkal</td>
                                        <td>1 year</td>
                                        <td>85000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Mobile shop management System</td>
                                        <td>JVR Mobile Sales and Services, Kutthalam</td>
                                        <td>1 year</td>
                                        <td>75000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6</td>
                                        <td>Fertilizer stock management System</td>
                                        <td>Amithran Traders,Orathanadu</td>
                                        <td>1.1 years</td>
                                        <td>115000</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="grade-tution-3" role="tabpanel" aria-labelledby="grade-tution-3-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Period</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Textile shop Billing System</td>
                                        <td>Rich Trends Men’s Wear, Poraiyar</td>
                                        <td>1 year</td>
                                        <td>85000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Attendance Monitoring System</td>
                                        <td>St.Joseph Nursery & Primary School, Vaikaalvettu, Nagapattinam</td>
                                        <td>1 year</td>
                                        <td>92000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Inventory Management system for Super market</td>
                                        <td>Sri Krishna Supermarket, Nagapattinam</td>
                                        <td>1.3 years</td>
                                        <td>70600</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Hospital Management System</td>
                                        <td>Dr.Murugesan Private Hospital, Sikkal</td>
                                        <td>1 year</td>
                                        <td>85000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>Mobile shop management System</td>
                                        <td>JVR Mobile Sales and Services, Kutthalam</td>
                                        <td>1 year</td>
                                        <td>75000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6</td>
                                        <td>Fertilizer stock management System</td>
                                        <td>Amithran Traders,Orathanadu</td>
                                        <td>1.1 years</td>
                                        <td>115000</td>
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





<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Rresearch &amp; Development</h5>
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
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="lgrade-tution-2" role="tabpanel" aria-labelledby="lgrade-tution-2-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="lgrade-tution-3" role="tabpanel" aria-labelledby="lgrade-tution-3-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td scope="col">#</td>
                                        <td scope="col">Project Title</td>
                                        <td scope="col">Company</td>
                                        <td scope="col">Duration</td>
                                        <td scope="col">Budget (Rs)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Shoe Store Billing System</td>
                                        <td>Ayya Shoe and Furniture Mart, Thiruthuraipoondi</td>
                                        <td>1 year</td>
                                        <td>95000</td>
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
