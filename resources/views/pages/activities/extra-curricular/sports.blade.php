@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Activities',
    'value_2' => 'Extra-Curricular',
    'value_3' => '',
    'page_title' => 'Sports'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                    <img src="https://egspec.blob.core.windows.net/egspec-assets/profile/d-velavan-director-physical-education-department.webp" alt="egspec_d_velavan_director_physical_education_department" class="img-fluid rounded-circle" style="max-width: 200px;">
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <h5 class="profile-name">Mr. D. Velavan</h5>
                            <p class="profile-role">Director – Physical Education Department</p>
                            <p class="profile-location">EGS Pillay Engineering College, Nagapattinam</p>
                            <p class="profile-contact">Phone: 9942997667 | Email: velavan157@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title animated fadeIn">Vision</h3>
                    <p class="desc">

                        Sports is an essential and integral part of every human being Not only do the students excel in studies, their sporting achievements are also worthy. In, Cricket, Basketball, Badminton, Hockey, Tennis, Volleyball and other Sports. If sports & games are properly instituted in every organization, there will not be much physical suffering in this world keeping in mind; we encourage every student to take part in sports. We give special attention and training to students who want to build their career in any sports field.
                    </p>

                </div>
            </div>
        </div>





    </div>
</section>


<div class="semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Achievements</h5>
                <p class="rt-regular"> <span style="color: var(--rt-theme);"> #egspian </span> Achievements in Sports</p>
                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @php $years = []; @endphp
                                @foreach($sportsData as $sport)
                                    @unless(in_array($sport->year, $years))
                                        <button class="nav-link" id="year-{{$sport->year}}-tab" data-bs-toggle="tab" data-bs-target="#year-{{$sport->year}}" type="button" role="tab" aria-controls="year-{{ $sport->year }}" aria-selected="true">{{ implode(' - ', explode('-', $sport->year)) }}
                                        </button>
                                        @php $years[] = $sport->year; @endphp
                                    @endunless
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-content">
                            @foreach($years as $key => $year)
                                <div class="tab-pane fade @if($key === 0) active show @endif" id="year-{{ $year }}" role="tabpanel" aria-labelledby="year-{{ $year }}-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>Events</th>
                                                <th>Venue</th>
                                                <th>Achieved</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sportsData as $sport)
                                                @if($sport->year == $year)
                                                    <tr>
                                                        <td>{{ $sport->event }}</td>
                                                        <td>{{ $sport->venue }}</td>
                                                        <td>{{ $sport->achieved }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Athletes And Achievements</h5>
                <p class="rt-regular"> <span style="color: var(--rt-theme);"> #egspian </span> Athletes And Achievements</p>
                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist"> <!-- Updated id attribute -->
                                @php $years = []; @endphp
                                @foreach($A3 as $b)
                                    @unless(in_array($b->year, $years))
                                        <button class="nav-link" id="a-{{$b->year}}-tab" data-bs-toggle="tab" data-bs-target="#a-{{$b->year}}" type="button" role="tab" aria-controls="a-{{ $b->year }}" aria-selected="true">{{ implode(' - ', explode('-', $b->year)) }}</button>
                                        @php $years[] = $b->year; @endphp
                                    @endunless
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent2"> <!-- Updated id attribute -->
                        <div class="tab-content">
                            @foreach($years as $key => $year)
                                <div class="tab-pane fade @if($key === 0) show active @endif" id="a-{{ $year }}" role="tabpanel" aria-labelledby="a-{{ $year }}-tab">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    @foreach($A3 as $b)
                                                                        @if($b->year == $year)
                                                                        <tr>
                                                                            <td><a href="{{ $b->pdf_url }}" target="_blank" type="application/pdf" rel="alternate" media='print'> {{ $b->year }} </a></td>
                                                                            <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                                        </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iframe-div">
                                        @foreach($A3 as $b)
                                            @if($b->year == $year)
                                            <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url={{ $b->pdf_url }}#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    // Add JavaScript to handle tab navigation and displaying corresponding data
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.nav-link');
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const targetId = this.getAttribute('data-bs-target');
                const tabPane = document.querySelector(targetId);
                const activeTab = document.querySelector('.nav-link.active');
                const activeTabPane = document.querySelector('.tab-pane.active');

                activeTab.classList.remove('active');
                activeTab.setAttribute('aria-selected', 'false');
                activeTabPane.classList.remove('active', 'show');

                this.classList.add('active');
                this.setAttribute('aria-selected', 'true');
                tabPane.classList.add('active', 'show');
            });
        });
    });
</script>
@include('components.cta')
@endsection
