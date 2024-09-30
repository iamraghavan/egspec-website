@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => 'Laboratries',
    'value_3' => '',
    'page_title' => 'Computer Laboratory'
])


<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Computing Centre -3</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name of the Laboratory</th>
                                            <th>No of students per setup</th>
                                            <th>Name of the Important equipment</th>
                                            <th>Weekly utilization status</th>
                                            <th>Name of the technical staff</th>
                                            <th>Designation</th>
                                            <th>Qualification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Open Source Lab</td>
                                            <td>33</td>
                                            <td>Dell optiplex 3080-Intel i5 Processor, 8GB DDR4 RAM, 1 TB HDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</td>
                                            <td>1. 1702IT404 & 1902IT453 - Operating Systems Lab - 4hrs <br><br> 2. 1702IT753 & 1902IT701 - Cloud Computing Lab - 4hrs <br><br> 3. 1702IT651 & 1902IT651 Mobile Application Development – 6hrs</td>
                                            <td>Mr. P. Muthunayakam</td>
                                            <td>Technical Assistant</td>
                                            <td>DIT</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Networks Lab</td>
                                            <td>33</td>
                                            <td>Dell optiplex 3080-Intel i5 Processor, 8GB DDR4 RAM, 1 TB HDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</td>
                                            <td>1. 1702IT451 & 1902451 - Networks Lab - 4hrs <br><br> 2. 1702IT402 & 1902IT452 - Java Lab - 4hrs <br><br> 3. 1702IT403 & 1902IT504 - IoT - 4hrs Total Hours: 12hrs</td>
                                            <td>Mr.P.Muthunayakam</td>
                                            <td>Technical Assistant</td>
                                            <td>DIT</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Data Science Lab</td>
                                            <td>33</td>
                                            <td>Dell optiplex 3080-Intel i5 Processor, 8GB DDR4 RAM, 1 TB HDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</td>
                                            <td>1. 17CSX52 & 1902IT451 & DBMS Lab – 4hrs <br><br> 2. 1702IT603 & 1902IT651 - Data Mining – 4hrs <br><br> 3. 1702IT401 - Data Analytics - 4hrs Total Hours: 12hrs</td>
                                            <td>Mr.R.Balaji</td>
                                            <td>Technical Assistant</td>
                                            <td>M.Sc</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Programming Lab</td>
                                            <td>33</td>
                                            <td>Dell optiplex 3080-Intel i5 Processor, 8GB DDR4 RAM, 1 TB HDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</td>
                                            <td>1. 1702IT301 & 1902IT351 - Data Structure and Algorithms Lab - 4hrs <br><br> 2. 1902IT352 - Python Programming Lab – 4hrs <br><br> 3. 1702IT504 & 1902IT502 - Web Programming Lab – 4hrs <br><br> 4. 1702IT551 & 1902IT551 - CASE Tools – 6hrs Total Hours: 18hrs</td>
                                            <td>Mr.R.Balaji</td>
                                            <td>Technical Assistant</td>
                                            <td>M.Sc</td>
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


<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Additional facilities created for improving the quality of learning experience in laboratories</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Facility Name</th>
                                            <th>Details</th>
                                            <th>Reason(s) for creating facility</th>
                                            <th>Utilization</th>
                                            <th>Areas in which students are expected to have enhanced learning</th>
                                            <th>Relevance to POs/PSOs</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Open Source Lab</td>
                                            <td>Operating Systems, Compiler Design, Distributed Systems, Cloud Computing</td>
                                            <td>Created open source environment for doing networking, cloud and design based applications</td>
                                            <td>Staff and Students for Laboratory Experiments, Projects, Simulation</td>
                                            <td>Open Source Environment</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Intranet File Sharing (192.168.21.100)</td>
                                            <td>Intranet File sharing</td>
                                            <td>Sharing materials, lab manuals, documents etc via Intranet</td>
                                            <td>Staff and Students</td>
                                            <td>Networking Case Study</td>
                                            <td>PO5, PO6, PO8 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Oracle Academy</td>
                                            <td>Java, PL/SQL</td>
                                            <td>Oracle iLearning Platforms</td>
                                            <td>Staff and Students training and certification</td>
                                            <td>Self-Learning</td>
                                            <td>PO5, PO6, PO8, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>VMWare IT Academy</td>
                                            <td>Cloud Computing, Data Centre Virtualization</td>
                                            <td>VMWare Platform for developing and simulating cloud and virtualization environments</td>
                                            <td>Staff and Students for Laboratory Experiments, Projects, Simulation</td>
                                            <td>Working Environment</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Palo Alto</td>
                                            <td>Cyber Security, Cryptography and Network security</td>
                                            <td>Learning cyber forensic courses</td>
                                            <td>Staff and Students training and certification</td>
                                            <td>Self-Learning</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Dell EMC Data Analytics</td>
                                            <td>Data warehousing and Data mining, Data Analytics</td>
                                            <td>Learning and working environment</td>
                                            <td>Staff and Students training and certification</td>
                                            <td>Working Environment</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Amazon Web Services</td>
                                            <td>Amazon learning center</td>
                                            <td>Learning and working environment</td>
                                            <td>Staff and Students training and certification</td>
                                            <td>Self-Learning and Working Environment</td>
                                            <td>PO5, PO6, PO8, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Mobile App Lab</td>
                                            <td>Mobile Application Development</td>
                                            <td>Mobile App development</td>
                                            <td>Staff and Students for Laboratory Experiments, Projects, Simulation</td>
                                            <td>App Development</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Redhat Academy</td>
                                            <td>Red hat learning platform</td>
                                            <td>Learning and working environment</td>
                                            <td>Staff and Students training and certification</td>
                                            <td>Self-Learning and Working Environment</td>
                                            <td>PO5, PO8, PO9, PO11, PO12 / PSO1, 2, 3</td>
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


@include('components.cta')
@endsection
