@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Library'
])


<section class="rts-about-university pt--100 pb--10">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5 class="rts-section-title animated fadeIn">
                        Central Library </h5>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <p class="rts-section-description">
                        Our Library is a paradise for those who have a passion for reading Books and enthusiasm for widening their knowledge base in depth and extent. The library has an carpet area of 10,520 sq.ft. and reading space of 1800 sq.ft(includes no of seats is 150) of built-up Facilities. Strength of Library and Services provided in the Library include:
                    </p>
                </div>
            </div>
        </div>






    </div>
</section>


<div class="rts-athletics pb--30">
    <div class="container">
        <div class="rts-athletics__content">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="left-content">


                        <div class="rts-event-details">
                            <div class="event-details__content--feature">
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading">Fully computerized working Systems.</p>


                                </div>

                                <div class="single-feature">
                                    <p class="feature-heading">21478 Titles and 54406 Volumes.</p>


                                </div>

                                <div class="single-feature">
                                    <p class="feature-heading">Book Bank Books 1246 Volumes.</p>


                                </div>

                                <div class="single-feature">
                                    <p class="feature-heading">106 print Indian / Foreign Journals / Magazines.</p>


                                </div>

                                <div class="single-feature">
                                    <p class="feature-heading">Online journals databases from IEEE,ASCE,ASME,DELNET and other journals.</p>

                                </div>






                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 2rem !important">
                    <div class="right-content">
                        <div class="right-content__section">

                            <div class="athletics-image">
                                <img src="/assets/images/campus/11.jpg" alt="campus-single">
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
                <h5 class="rts-section-title">To Access OPAC Search of Books: <a href="#" target="_blank" rel="noopener noreferrer">Click to OPAC</a></h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Year</th>
                                        <th>Number of New Titles Added</th>
                                        <th>Number of New Volumes Added</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>2021 - 2022</td>
                                        <td>231</td>
                                        <td>424</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2020 - 2021</td>
                                        <td>51</td>
                                        <td>86</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2019 - 2020</td>
                                        <td>491</td>
                                        <td>1030</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2018 - 2019</td>
                                        <td>74</td>
                                        <td>782</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2017 - 2018</td>
                                        <td>249</td>
                                        <td>908</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>2016 - 2017</td>
                                        <td>242</td>
                                        <td>6153</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>2015 - 2016</td>
                                        <td>614</td>
                                        <td>8353</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>2014 - 2015</td>
                                        <td>1419</td>
                                        <td>2216</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>2013 - 2014</td>
                                        <td>245</td>
                                        <td>406</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>2012 - 2013</td>
                                        <td>2058</td>
                                        <td>3479</td>
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

<section class="rts-faculty pt--30 pb--30">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <div class="rts-section mb--50">
                    <h3 class="rts-section-title animated fadeIn"> Library Administration</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center g-5">
            <!-- single staff item -->
            @php
    $staffMembers = [
        'Head' => 'Dr. B. Shanmugam',
        'Librarian' => [
            'Mrs. R. Mathurabashini',
            'Mr. G. Muruganandam'
        ],
        'Assistant Librarian' => [
            'Mrs. R. Sumathi',
            'Mrs. R. Lakshmi'
        ],
        'Library Assistant' => 'Mrs. M. Hemalatha'
    ];
@endphp

<div class="row">
    @foreach($staffMembers as $designation => $staff)
        @if(is_array($staff))
            @foreach($staff as $person)
                <div class="col-lg-4 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-info">
                                <h5 class="name">{{ $person }}</h5>
                                <span class="designation">{{ $designation }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else

            <div class="col-lg-4 col-md-11">
                <div class="single-staff">
                    <div class="single-staff__content">
                        <div class="staf-info">
                            <h5 class="name">{{ $staff }}</h5>
                            <span class="designation">{{ $designation }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>


        </div>

    </div>
</section>



<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Facilities
                </h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>


                                    </tr>
                                </thead>
                                <tbody>



                                    <tr>
                                        <td>Computerization for search, indexing issue/return & record</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Bar Codings Used</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Library services on internet/intranet INDEST or other similar membership archives</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Users (issue book) per day</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Users (reading space) per day</td>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <td>Timings during working day</td>
                                        <td>8.00am to 6.00pm</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Library staff</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Library staff with a degree in library management</td>
                                        <td>5</td>
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



<div class="rts-page-content pt--20 pb--70">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="admission-content-top">

                    <div class="application-deadline">
                        {{-- <h3 class="rts-section-title animated fadeIn">Application Deadlines</h3> --}}
                        <div class="application-deadline__content">

                            <p> Facilities to receive Anna University Training Development and Communication Channel (AUTDCC) through EDUSAT: for special lectures by Experts.</p>

                        </div>
                    </div>
                    <div class="requirement-deadline">
                        {{-- <h3 class="rts-section-title animated fadeIn">Requirements and Deadlines</h3> --}}
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Lending, Reference and Reprographic facilities.</li>
                                <li class="single-requirement">Study halls with a capacity for 150 students/ Faculty.</li>
                                <li class="single-requirement">2 air-conditioned Audio and Video Halls.</li>
                                <li class="single-requirement">Internet browsing</li>
                                <li class="single-requirement">CD Library, CD ROMs, CD writing and Scanning</li>
                                <li class="single-requirement">NPTEL Video course materials developed by IIT’s & IISc.</li>
                                <li class="single-requirement">Digital Library with 68 Systems.</li>
                            </ul>

                        </div>
                    </div>
<br>
<br>
                    <div class="application-deadline__content">

                        <p class="w-95 mx-0">Dedicated Areas for PG Students, Project Work and air-conditioned reading halls. We are member in DELNET as Institutional Membership for resource sharing: Library membership is compulsory for staff and students. All members are expected to follow the ‘Regulations’ as laid down.</p>
                    </div>

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Regulations for Use of Library
                        </h3>
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">One should realize ‘the power of silence’ in the Library and make it an Abode for Academic pursuit and for dissemination of knowledge.</li>
                                <li class="single-requirement">Members should produce their Identity card at the Entrance/ while borrowing books/ and whenever so demanded by Security Personnel/ Faculty.</li>
                                <li class="single-requirement">Members should ‘sign in’ the Gate Register/ Scan Id card in the Computer kept at the Entrance.</li>
                                <li class="single-requirement">On no account personal books, files, lab coat / apron and articles will be allowed inside. (Such items are to be handed over to the security in charges in the personal Bag section at the Entrance).</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


@include('components.cta')
@endsection
