@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'IQAC - Functions'
])

<div class="page-content-top rts-event-details pt--120">
    <div class="container">
        <div class="row justify-content-md-center justify-content-start">
            <div class="col-lg-10 col-md-10 mb-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">Promote Quality Culture in EGSPEC through Quality Enhancing &amp; Sustaining Initiatives</h4>
                                <p class="description">EGSPEC IQAC (EGSPEC Internal Quality Cell - EIQC) is committed to promoting and sustaining quality education through strategic initiatives with both internal and external support.</p>
                            </div>
                        </div>

                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            <div class="single-feature">
                                <p class="feature-heading">Greetings from EGSPEC IQAC!</p>
                                <p class="feature-description">We express our gratitude to the management for establishing the IQAC, which plays a key role in implementing and ensuring qualitative education in our institution. The IQAC team is instrumental in carrying out the following strategic functions:</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">1. Quality Benchmarks Setting</p>
                                <p class="feature-description">Establishing academic quality benchmarks and continuously monitoring and following up on their implementation to ensure excellence in teaching and learning.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">2. Parameter Setting for Academic & Administration Goals</p>
                                <p class="feature-description">Setting clear parameters for both academic and administrative goals, ensuring that they align with the institution's long-term objectives.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">3. Learn-Centric Environment</p>
                                <p class="feature-description">Creating and maintaining a learning-centric environment that encourages student engagement, participation, and the development of critical thinking and problem-solving skills.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">4. Faculty Development</p>
                                <p class="feature-description">Planning and organizing faculty development programs aimed at enhancing the skills and knowledge of teaching staff, supporting them in their professional growth.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">5. Feedback Analysis and Follow-up</p>
                                <p class="feature-description">Analyzing feedback from various stakeholders, including students, faculty, and external partners, and taking actionable steps to address any concerns or improvements.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">6. Workshops for Quality Improvement</p>
                                <p class="feature-description">Conducting inter-intra workshops aimed at improving the quality of education, faculty development, and effective documentation practices.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">7. Acting as Nodal Agency for Quality Initiatives</p>
                                <p class="feature-description">Serving as the primary agency responsible for coordinating all quality-related activities within the institution, ensuring that all departments adhere to established standards.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">8. Institutional Database Maintenance</p>
                                <p class="feature-description">Maintaining an institutional database to facilitate effective sharing of information, promoting transparency and enhancing overall quality across departments.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">9. Academic & Administrative Audits</p>
                                <p class="feature-description">Conducting regular audits of both academic and administrative processes to identify areas for improvement and ensure alignment with institutional goals.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">10. AQAR Preparation and Submission</p>
                                <p class="feature-description">Preparing the Annual Quality Assurance Report (AQAR) in accordance with NAAC guidelines and submitting it annually by December 31st, ensuring compliance and transparency in quality management.</p>
                            </div>

                            <div class="single-feature">
                                <p class="feature-heading">11. Implementation of Projects</p>
                                <p class="feature-description">Implementing effective academic and curricular strategies in areas such as CoE, R&D, and other projects, ensuring their successful execution across all departments.</p>
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
