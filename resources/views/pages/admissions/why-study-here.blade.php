@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Admissions',
'value_2' => '',
'value_3' => '',
'page_title' => 'Why Study Here' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-6">
                    <h3 class="rts-section-title animated fadeIn">Why Choose EGS Pillay Engineering College?</h3>
                </div>
                <div class="col-lg-6">
                    <p class="rts-section-description">EGS Pillay Engineering College stands as a beacon of academic excellence in Nagapattinam, offering a dynamic learning environment that nurtures innovation, creativity, and holistic development.</p>
                </div>
            </div>
        </div>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-12">
                    <div class="program-description-area" id="curriculum">
                        <div class="program-big-thumb">
                            <img src="https://egspec.blob.core.windows.net/egspec-assets/engineering_college.webp" alt="EGSPEC">
                        </div>
                        <div class="program-about">
                            <h4 class="title">EGS Pillay Engineering College</h4>
                            <ul class="text-justify">
                                <li class="text-justify">Academic Excellence: EGS Pillay Engineering College is known for its strong emphasis on academic excellence, providing students with a rigorous and comprehensive curriculum that prepares them for success in their chosen fields.</li>
                                <li>Industry-Aligned Curriculum: The college offers an industry-aligned curriculum designed in collaboration with leading companies and professionals, ensuring that students acquire the skills and knowledge demanded by the industry.</li>
                                <li>Experienced Faculty: EGS Pillay Engineering College boasts a team of experienced faculty members who are experts in their respective fields. They provide mentorship, guidance, and support to students throughout their academic journey.</li>
                                <li>State-of-the-Art Facilities: The college is equipped with state-of-the-art facilities, including modern laboratories, libraries, and research centers, providing students with access to the latest technology and resources to enhance their learning experience.</li>
                                <li>Practical Learning Opportunities: EGS Pillay Engineering College emphasizes practical learning, offering students opportunities to apply theoretical knowledge in real-world settings through internships, projects, and industry collaborations.</li>
                                <li>Soft Skill Development: In addition to technical skills, the college focuses on developing students' soft skills such as communication, teamwork, and leadership, essential for their professional growth and success.</li>
                                <li>Innovation and Entrepreneurship: The college fosters a culture of innovation and entrepreneurship, encouraging students to think creatively, explore new ideas, and develop innovative solutions to real-world problems.</li>
                                <li>Extracurricular Activities: EGS Pillay Engineering College offers a vibrant campus life with a wide range of extracurricular activities, including sports, cultural events, and clubs, providing students with opportunities to explore their interests and talents beyond academics.</li>
                                <li>Alumni Network: The college has a strong alumni network consisting of successful professionals and entrepreneurs who serve as mentors and role models for current students, offering guidance and support in their career endeavors.</li>
                                <li>Career Opportunities: Graduates of EGS Pillay Engineering College are highly sought after by top companies and organizations, thanks to the college's strong reputation, industry connections, and alumni network, providing excellent career opportunities upon graduation.</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- sidebar -->
            </div>
        </div>
    </div>
</div>

@endsection
