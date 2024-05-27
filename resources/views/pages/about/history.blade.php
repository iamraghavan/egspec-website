@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'History' ])

@php
$features = [
    "Established in the year 1995 with 3 courses CSE, Mechanical and Chemical, affiliated to Bharathidasan University. (First in Nagapattinam district)",
    "Established by the G.S. Pillay & Sons Charitable and Educational Trust, Nagapattinam.",
    "Affiliated to Anna University, Chennai in the year 2002.",
    "UGC Recognized institution under 2(f) and 12(B)",
    "Recognized Research Centre for Mechanical Engineering, EEE, ECE, CSE and Civil Departments by Anna University, Chennai for doing Ph.D./M.S.(By Research).",
    "Nodal Centre for QIC of Anna University, Chennai",
    "Associate Member of ICTACT, Govt. of Tamilnadu for Industry Institute Interaction",
    "NBA Accredited for 6 Programmes upto 30.06.2022 by NBA, New Delhi",
    "Autonomous status from 2017 onwards approved by UGC and Anna University, Chennai",
    "NIRF Ranking top 200 in India in 2018.",
    "Now, 8 UG Courses, 7 PG Courses and 5 Ph.D. Recognized Research Departments"
];
@endphp

<!--====================  About us / Our Focus  ====================-->


<div class="page-content-top rts-event-details pt--120">
    <div class="container">
        <div class="row justify-content-md-center justify-content-start">
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">History</h4>
                                <p class="description">E.G.S. Pillay Engineering College is a self – financing educational institution situated in Nagapattinam, Nagapattinam District. EGSPEC is the vision of Chevalier. Dr.G.S.Pillay, whose determination and dynamism made possible the realization of this institution of excellence.</p>
                            </div>
                        </div>
                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            @foreach($features as $feature)
                            <div class="single-feature">

                                <p class="feature-heading">{{ $feature }}</p>

                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


@include('components.cta')
@endsection

