@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Works and Implementation'
])


<div class="page-content-top rts-event-details pt--120">
    <div class="container">
        <div class="row justify-content-md-center justify-content-start">
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">EGSPEC IQAC Works & Implementation</h4>
                                <p class="description">EGSPEC IQAC outlines its comprehensive plan for improving quality teaching, student development, faculty growth, and internal quality audits.</p>
                            </div>
                        </div>

                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            <div class="single-feature">
                                <p class="feature-heading">1. Quality Teaching & Learning Process</p>
                                <p class="feature-description">Ensuring effective teaching and learning at both course and domain levels through classroom sessions, laboratory activities, and various related programs.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">2. Documentation Process</p>
                                <p class="feature-description">Maintaining a single file that covers NBA, NAAC, and ISO requirements, as well as managing online documents and databases at both institutional and departmental levels, with centralized access.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">3. Academic Audits</p>
                                <p class="feature-description">Conducting four internal audits (two per post every semester) and one external audit per year for each post during the even semester. Action taken reports will be generated for all institutional committees, offices, and departments (UG & PG).</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">4. Students Development Programs & Activities</p>
                                <p class="feature-description">Facilitating skill-based training programs for students, with a requirement that each student participate in at least one event per semester to foster overall development.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">5. Faculty Development Activities</p>
                                <p class="feature-description">Planning faculty development initiatives under the Margha Dharshan scheme, with a requirement for all faculty members to participate in at least one event per year to enhance their skills and knowledge.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">6. IQAC Sponsored Programs</p>
                                <p class="feature-description">Organizing programs such as Outcome-Based Education (OBE), auditing, and action-based programs. A minimum of four or five such programs will be conducted annually to ensure consistent quality improvement.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">7. AQAR Fill-up & Submission</p>
                                <p class="feature-description">The Annual Quality Assurance Report (AQAR) will be filled out and submitted online by December 31st each year, with the necessary evidence included for compliance and transparency.</p>
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
