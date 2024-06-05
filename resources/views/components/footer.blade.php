@php
$footerLinks = [
'Quick Links' => [
'EGSPEC Mail' => 'https://mail.google.com/a/egspec.org',
'Student Login' => '#',
'Staff Login' => '#',
'Contact Us' => '#',
'ERP' => '#',
'Pay Fees Online' => '#',
'IT Policy' => '#',
'Careers' => '#',
'FAQ' => '#',
],
'Placement' => [
'Industry Partnership' => '#',
'MoU' => url('/placements/memorandum-of-understanding'),
'Recruiters' => url('/placements/our-top-recruiters'),
'Training Cell' => '#',
'Placement Gallery' => url('/placements/placement-gallery'),
'Placement Team' => url('/placements/placement-team'),
'Placement Statistics' => url('/placements/statistics'),
],
'Important Links' => [
'AntiRagging' => url('/activities/anti-ragging-committee'),
'EGSP Transport' => 'http://example.com/transport',
'Privacy Policy' => 'http://example.com/privacy-policy',
'Terms & Conditions' => 'http://example.com/terms-conditions',
'Downloads' => 'http://example.com/downloads',
'Sitemap' => 'http://example.com/sitemap',
'Blog & Articles' => 'http://example.com/blog',
'Alumni' => 'http://example.com/alumni',
'Gallery & Media' => 'http://example.com/gallery-media',
'Social Media' => 'http://example.com/social-media',
],
'Feedback' => [
'Feedback on Curriculum' => 'http://example.com/feedback-curriculum',
'Students Feedbacks' => 'http://example.com/students-feedback',
'Staff Feedback' => 'http://example.com/staff-feedback',
'Grievance & Redressal' => 'http://example.com/grievance-redressal',
'Admission' => 'http://example.com/admission',
],
];
@endphp




<footer class="rts-footer v_1 pt--100 pb--80">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <!-- footer widget -->
                <div class="row gy-5 gy-lg-0">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="rts-footer-widget w-320">
                            <a href="index.html" class="d-block rts-footer-logo mb--40">
                                <img src="{{ asset('/assets/images/logo-white.svg') }}" alt="EGSPEC">
                            </a>

                            <div class="rts-contact-link">
                                <a href="mailto:principal@egspec.org"><i class="fa-sharp fa-light fa-envelope"></i>
                                    principal@egspec.org </a>
                                <a href="callto:121"><i class="fa-thin fa-phone"></i> 04365 251112 | 04365 251114 </a>

                                <div class="social-copyright">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>
                    </div>

                    @foreach($footerLinks as $title => $links)
                    <div class="col-md-6 col-sm-6 col-lg-2">
                        <div class="rts-footer-widget">
                            <h6 class="rt-semi">{{ $title }}</h6>
                            <div class="rts-footer-menu">
                                <ul>
                                    @foreach($links as $linkTitle => $url)
                                    <li><a href="{{ $url }}" target="_parent">{{ $linkTitle }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-md-12 col-sm-6 col-lg-12">
                        <div class="custom-footer-widget">
                            <div class="custom-footer-menu">
                                <ul class="custom-footer-list">
                                    <li><a href="{{url('/right-to-information')}}">RTI</a></li>
                                    <li><a href="{{url('/iqac/committe-members')}}">IQAC</a></li>
                                    <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-kendra')}}">PMKK</a></li>
                                    <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana')}}">PMKVY</a></li>
                                    <li><a href="{{url('/affiliation/approved/aicte')}}">AICTE</a></li>
                                    <li><a href="{{url('/mandatory-disclosure')}}">Mandatory Disclosure</a></li>
                                    <li><a href="{{url('/national-institutional-ranking-framework')}}">NIRF Engineering Ranking</a></li>
                                    <li><a href="{{url('/affiliation/approved/accreditation-status')}}">Accreditation Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-lg-12">
                        <div class="custom-footer-widget ser">
                            <div class="custom-footer-menu">
                                <ul class="custom-footer-list">
                                    <li><a href="{{url('/activities/cells/internal-complaints-committee')}}">Internal Complaints Committee</a></li>
                                    <li><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FM_AiCTE_Approval.pdf?alt=media&token=20146981-a33f-4b95-bd49-3567ac5c207d" target="_blank" rel="noopener noreferrer">All AICTE Approval Documents</a></li>
                                    <li><a href="{{url('/affiliation/aicte-egspec-video')}}">AICTE EGSPEC Video</a></li>
                                    <li><a href="{{url('/meeting-minutes/governing-body')}}">Governing Body Meeting</a></li>
                                    {{-- <li><a href="">Mandatory Disclosure</a></li>
                                    <li><a href="">NIRF Engineering Ranking</a></li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<div class="rts-footer-copy-right v_1">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p style="font-weight: 600;" class="--p-xs">Copyright © 2006 - {{ date('Y') }} All
                    Rights Reserved by
                    <a href="https://egspgroup.in/" target="_blank">EGS Pillay Group of Institutions</a> | Developed By
                    <a href=""> Raghavan Jeeva </a>
                </p>
            </div>
        </div>
    </div>
</div>


