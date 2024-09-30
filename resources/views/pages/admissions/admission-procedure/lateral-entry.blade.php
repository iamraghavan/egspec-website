@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Admissions',
'value_2' => 'Admission Procedure',
'value_3' => 'Lateral Entry ',
'page_title' => 'Admission Procedure - Lateral Entry ' ])

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">
                    <h3 class="rts-section-title animated fadeIn">
                        Lateral Entry Programmes
                    </h3>



                    <div class="requirement-deadline">

                        <div class="requirement-deadline__content">
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Requirement</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Diploma Holders (various branches) are eligible for II year of the four years B.E. / B.Tech Degree courses:</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Category</td>
                                                <td>Average of fifth & sixth semesters</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Open</td>
                                                <td>45%</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>BC / BCM / MBC / SC / SCA / ST</td>
                                                <td>40%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Certificate</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>SSLC Certificate with marks (for evidence of Date of Birth)</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Higher Secondary Mark Sheet</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Transfer Certificate from the Institution last studied</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Original Community Certificate</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Sports Certificates of achievement, if allotted under Sports Quota</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Extra Curricular Certificates, if any</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Medical Fitness Certificate</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Nativity Certificate</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Conduct Certificate</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Eligibility Certificate (other State Candidates only)</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Fifteen Passport size photos</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Note</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Candidates belonging to communities other than SC/ST should have passed the qualifying examination within two attempts.</td>
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



@endsection
