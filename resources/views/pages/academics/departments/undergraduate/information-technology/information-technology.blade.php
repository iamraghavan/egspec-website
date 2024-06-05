@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Undergraduate',
'page_title' => 'Information Technology' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">

                <div class="col-lg-12">
                    <h4 class="rts-section-title">About Information Technology</h4>
                    <p class="rts-section-description mt-5 text-justify">The department of Information technology stared in the year of 2000, offered B.Tech – Information Technology with intake of 60, approved by AICTE and Permanently Affiliated to Anna University. The B.Tech – Information Technology programme Accredited by NBA (Tier-1)(2022–2025) And (2019-2022).The department has well qualified and experienced staff and it continually updates it's laboratories with modern facilities. As per university norms, semester system is being followed. Currently department follows EGSPEC Regulation 2019 & 2023. The department conducts various seminars and workshop periodically. Various associations are formed related to the department. The students are given different mini- projects .in the pre-final year so that their individual ideas can be implemented. The staff and students are encouraged to present papers at various colleges and many have won prizes in the face of stiff competitions. The Department has faculty members specialized in Data mining, Computer Networks, Soft Computing, Evolutionary Computing, Network Security, Cyber Security, Digital Signal Processing, Big Data Analytics, Artificial Intelligence, Image Processing, Cloud Computing and Mobile Computing. The department prepares the students to be ready on day one in the industry. The curriculum is well rounded and well defined to cater to the requirements of both industry deployment and research activities. The department have very good industry institute linkage with Top Freshers, Ampisoft, DataNerdz.AI, ICT Academy, Oracle Academy, Linxpert Systems, IBM, EMC Corporation, VMWare IT Acdemy, Palo Alto Networks, CISCO Academy, Sales Force, DellEMC and provide various value added & certification course.</p>
                </div>
            </div>
        </div>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">

                    <div class="rts-scholarship-description">

                        <div class="repeating-content">
                            <div class="single-information-box rt-theme-bg">
                                <div class="single-info">
                                    <h4 class="title">Vision</h4>
                                    <p class="amount">To produce globally competent information technologist and to inculcate values of leadership and research qualities in them.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rts-scholarship-description mt-5">

                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>

                                    <p class="amount">To provide high quality Education to the students by our competent faculty members, effective teaching learning process and value added courses.</p>
                                    <p class="amount">To create centres of excellence by interacting with industries for better employability and to contribute to the society through consultancy and R&D works.</p>
                                    <p class="amount">To improve the soft skill, interpersonal skill, ethical behavior and communication skill of students by involving them in team works and technical events.</p>

                                </div>
                            </div>
                        </div>

                    </div>




                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">MCA Department Events</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#curriculum"><span><i class="fa-light fa-arrow-right"></i></span>
                                        Sample Event 1</a></li>
                                    <li><a href="faculty-details.html"><span><i
                                                    class="fa-light fa-arrow-right"></i></span>Sample Event 2</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <div class="program-info">
                            <h5>Contact Info</h5>
                            <p>Masters of Computer Applications</p>
                            <div class="contact-info">
                                <h5>Contact:</h5>
                                <a href="mailto:barry.studyhub@info.com">mca@egspec.org</a>
                                <a href="callto:">+91 99425 02245</a>
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
