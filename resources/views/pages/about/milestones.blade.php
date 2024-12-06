@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Milestones' ])



<!--====================  About us / Our Focus  ====================-->

<section class="rts-about-university pt--100 pb--80">

    <div class="page-content-top semister-fee">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content mt-5">
                    <h5 class="rts-section-title">Milestone</h5>

                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                       <tr>
                                          <th>Year</th>
                                          <th>Achievement</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2024</td>
                                            <td>NBA Accreditation [Tier 1] (Mech, EEE and Civil), NIRF Ranked Institute [250-300], Anna University Sports Zonal Winner</td>
                                         </tr>
                                         <tr>
                                            <td>2023</td>
                                            <td> Anna University Sports Zonal Winner, Accredited by NAAC with A++ Grade, Best NSS Unit Award </td>
                                         </tr>
                                       <tr>
                                          <td>2022</td>
                                          <td>NIRF(251-300), B.Tech. - AI&DS, NBA-(CSE,ECE,IT) - 2022-2025, Educational Award</td>
                                       </tr>
                                       <tr>
                                          <td>2021</td>
                                          <td>Sports Champion of Anna University Zone 14 Level</td>
                                       </tr>
                                       <tr>
                                          <td>2020</td>
                                          <td>B.Tech. - CSBS, Best NSS Unit Award, MHRD Green Champion Award, Best social activities Institution award</td>
                                       </tr>
                                       <tr>
                                          <td>2019</td>
                                          <td>NBA-(CIVIL,ECE,IT)-2019-2022, B.E. - Biomedical Engg.</td>
                                       </tr>
                                       <tr>
                                          <td>2018</td>
                                          <td>NIRF(151-200), ISO-2000 renewal, Best NSS Unit Award</td>
                                       </tr>
                                       <tr>
                                          <td>2017</td>
                                          <td>Empanelled project institute under PM YUVA YOJANA</td>
                                       </tr>
                                       <tr>
                                          <td>2016</td>
                                          <td>Recognized as a Centre for Pradhan Mantri Schemes PMKK, PMKVY, Received Centre of Excellence from DellEMC Corporation, ICT Academy, Paloalto netrorks, UTL Technologies Ltd & Oracle Academy, Accredited by NBA for 3 UG Programmes (B.E-CSE, EEE and Mechanical), Signed MoU with Multimedia University, Malaysia & Tamil Nadu Fisheries University, Research Centre Recognition –CSE, ECE and EEE departments, ECE Permanent Affiliation, Accredited by NAAC with 'A' Grade</td>
                                       </tr>
                                       <tr>
                                          <td>2015</td>
                                          <td>UGC Recognized - 2(f) and 12(B) status , VMWare IT Academy Excellence, Research Centre Recognition – Mech department</td>
                                       </tr>
                                       <tr>
                                          <td>2014</td>
                                          <td>Dr.APJ Abdul Kalam block and Auditorium Constructed, CSI Accredited to engaged in Knowledge sharing, Technology and Skill Upgradation, CSE, IT, EEE and MECH Permanent Affiliation, Indoor Stadium Constructed, Industry – Institute Interaction : Privileged Associate Member of ICTACT</td>
                                       </tr>
                                       <tr>
                                          <td>2013</td>
                                          <td>MBA & MCA Permanent Affiliation, SJ Block Constructed, Anna University Nodal Centre for QIC, M.E (PED)& M.E (CS)</td>
                                       </tr>
                                       <tr>
                                          <td>2012</td>
                                          <td>M.E (CSE )</td>
                                       </tr>
                                       <tr>
                                          <td>2011</td>
                                          <td>B.E (Civil) & GG Block constructed</td>
                                       </tr>
                                       <tr>
                                          <td>2009</td>
                                          <td>Recertified with ISO 9001:2008</td>
                                       </tr>
                                       <tr>
                                          <td>2006</td>
                                          <td>M.E (Manufacturing Engineering)</td>
                                       </tr>
                                       <tr>
                                          <td>2004</td>
                                          <td>B.E (ECE)</td>
                                       </tr>
                                       <tr>
                                          <td>2003</td>
                                          <td>ISO 9001:2000 Certification</td>
                                       </tr>
                                       <tr>
                                          <td>2001</td>
                                          <td>MBA and MCA</td>
                                       </tr>
                                       <tr>
                                          <td>2000</td>
                                          <td>B.Tech (Information Technology) and B.E (EEE)</td>
                                       </tr>
                                       <tr>
                                          <td>1995</td>
                                          <td>Establishment with three Courses (Mech, Chemical & CSE)</td>
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
    </section>



@include('components.cta')
@endsection

