@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Home',
'value_2' => '',
'value_3' => '',
'page_title' => 'Accreditation Status'
])



<section class="rts-about-university pt--100 pb--80">

    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        {{-- <h3 class="rts-section-title animated fadeIn" >ISO Manual</h3> --}}

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table table-striped">
                                                <thead class="table-theme">
                                                  <tr>
                                                    <th>Accrediting Organization</th>
                                                    <th>NAAC</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>GRADE</td>
                                                    <td>'A++' Grade</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Accreditation Period</td>
                                                    <td>5 years (02-08-2023 to 01-08-2028)</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Accreditation Certificate</td>
                                                    <td> <a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FNAAC%20CERTI%201.jpg?alt=media&token=adb87a8c-e1d2-4acb-b7ec-390bf12d67a0" target="_blank">NAAC Certificate </a> </td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                              <table class="table table-striped">
                                                <thead class="table-theme">
                                                  <tr>
                                                    <th>Accrediting Organization</th>
                                                    <th>NBA</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Accredited Programmes</td>
                                                    <td>UG-B.E (CSE, IT and ECE)</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Accreditation Period</td>
                                                    <td>Academic years 2022-2023 to 2024-2025 upto 30-06-2025</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Accreditation Certificate</td>
                                                    <td> <a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FNBA%20Result%20CSE%20IT%20ECE%20%20Decem%202022.pdf?alt=media&token=eca3be82-d365-4363-b395-bbe4180327b9" target="_blank"> NBA Certificate </a></td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                              <table class="table table-striped">
                                                <thead class="table-theme">
                                                  <tr>
                                                    <th>Autonomous Granting Body</th>
                                                    <td>UGC</td>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Affiliated University</td>
                                                    <td>Anna University, Chennai</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Autonomous Duration</td>
                                                    <td>10 Years</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Autonomous Period</td>
                                                    <td>2023-2024 to 2032-2033</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Approval Documents</td>
                                                    <td> <a target="_blank" href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FAutonomous%20Extension%20Order%20UGC%20Order%20Jan%202024.pdf?alt=media&token=600128d2-4def-4ea0-b639-1ce39dcbe25d"> UGC Approval </a><br>

                                                        <a  target="_blank" href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FANNA%20Autonomous%20Extension%20%20Status%202024.pdf?alt=media&token=5c580978-f662-47fa-a4e7-e6d01743846a"> Anna University Approval </a>

                                                        <br> <a  target="_blank" href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2F2f-12b-approval.pdf?alt=media&token=c04690ea-f109-4d1f-9a83-0056a93359e1"> UGC 2(f) and 12(B) Approval </a> </td>
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
 </section>





@include('components.cta')
@endsection
