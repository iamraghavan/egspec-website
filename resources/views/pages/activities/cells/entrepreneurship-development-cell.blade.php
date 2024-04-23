@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Cells',
'value_3' => '',
'page_title' => 'Entrepreneurship Development Cell'
])


<section class="rts-about-university pt--100 pb--80">
   <div class="container">
      <div class="row">
         <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
               <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="egspec_d_velavan_director_physical_education_department" class="img-fluid rounded-circle" style="max-width: 200px;">
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
               <div class="rts-section-description">
                  <div class="profile-info">
                     <h5 class="profile-name">Mr. S.Selvaganapathy - Professor</h5>
                     <p class="profile-role"> Assistant Professor / MCA</p>
                     {{--
                     <p class="profile-location">EGS Pillay Engineering College, Nagapattinam</p>
                     <p class="profile-contact">Phone: 9942997667 | Email: velavan157@gmail.com</p>
                     --}}
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
                Enterpreneurship Development Cell(EDC) was initiated with a vision to promote "Enterpreneurship amongst the students".The cell strives to transform the job seekers into job providers.The EDC creates an entrepreurial culture in the institution by conducting entrepreneurship motivation camps,entrepreneurship awareness camps and entrepreneurship development programmes.The EDC of the college associated member of National Entrepreneurship network (NEN) to enhance entrepreneurial skills among students and to provide the right orientation,training and counseling for the students.
                </p>
            </div>
         </div>
      </div>




   </div>
   </div>
</section>


<div class="rts-scholarship rts-section-padding">
    <div class="container">
        <div class="rts-scholarship-description">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-12 col-md-11">
                    <div class="program-description-area">


                        <div class="repeating-content">
                            <h5 class="title">Highlights</h5>
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="single-information-box rt-theme-bg">
                                        <div class="single-info">
                                            <h4 class="title">Inaugural</h4>
                                            <p class="amount">Our college EDC cell inaugurated on 22nd september 2014 in association with National Entrepreneurship Network(NEN). Our EDC cell mainly focuses towards the constant motivation and proper guidance for initiation and support of Entrepreneurial activities among students.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-information-box" style="background-color: #3eb75ec9 !important;">
                                        <div class="single-info">
                                            <h4 class="title">IEDP</h4>
                                            <p class="amount">
                                                Became Member of Entrepreneurship Development Institute (EDI)-Tamil Nadu with NEN, for providing support for student community.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-information-box rt-primary-bg">
                                        <div class="single-info">
                                            <h4 class="title">PM Yuva Yojana</h4>
                                            <p class="amount">
                                                Empanelled project institute under PM Yuva Yojana, grant worth Rs. 9.2 Lakhs for conducting Entrepreneurial Classes for Students.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-information-box rt-secondary-bg big-box">
                                        <div class="single-info">
                                            <h4 class="title">Innovation Scholarships</h4>
                                            <div class="single-info-content">
                                                <div class="left-item">
                                                    <p class="amount"><u>Amount:</u>$6,142per academic year</p>
                                                    <u class="application">Application Process:</u>
                                                    <p>Apply through the respective department.
                                                    </p>
                                                </div>
                                                <div class="right-item">
                                                    <u class="eligibility">Eligibility:</u>
                                                    <p>Awarded to students with exceptional academic achievements.</p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second item -->
                        <div class="repeating-content mt--50">
                            <h5 class="title">Specialized Scholarships</h5>
                            <div class="row g-5">
                                <div class="col-lg-6">
                                    <div class="single-information-box rt-primary-bg">
                                        <div class="single-info">
                                            <h4 class="title">Financial Excellence Scholarship</h4>
                                            <p class="amount"><u>Amount:</u>$6,142per academic year</p>
                                            <u class="eligibility">Eligibility:</u>
                                            <p>Awarded to students with exceptional academic achievements.</p>
                                            <u class="application">Application Process:</u>
                                            <p>Automatically considered during
                                                the admissions process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-information-box rt-theme-bg">
                                        <div class="single-info">
                                            <h4 class="title">Athletic Scholarships</h4>
                                            <p class="amount"><u>Amount:</u>$6,142per academic year</p>
                                            <u class="eligibility">Eligibility:</u>
                                            <p>Awarded to students with exceptional academic achievements.</p>
                                            <u class="application">Application Process:</u>
                                            <p>Automatically considered during
                                                the admissions process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-information-box rt-secondary-bg big-box">
                                        <div class="single-info">
                                            <h4 class="title">[Diversity/Inclusion] Scholarship</h4>
                                            <div class="single-info-content">
                                                <div class="left-item">
                                                    <p class="amount"><u>Amount:</u>$6,142per academic year</p>
                                                    <u class="application">Application Process:</u>
                                                    <p>Apply through the respective department.
                                                    </p>
                                                </div>
                                                <div class="right-item">
                                                    <u class="eligibility">Eligibility:</u>
                                                    <p>Awarded to students with exceptional academic achievements.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="desc mt--40">
                                For detailed information on eligibility criteria, application deadlines, and the application process for each scholarship, please visit our [Scholarships] page or contact the Studyhub University Financial Aid Office.
                            </p>
                        </div>

                        <!-- scholarship requirement -->
                        <!-- si = scholarship-information -->
                        <div class="si">
                            <h4 class="title">Scholarship Requirements at
                                Studyhub University
                            </h4>
                            <p>
                                At Studyhub University, we believe in recognizing and supporting exceptional talent and achievements. Our scholarship programs aim to provide financial assistance
                            </p>
                            <div class="si__list">
                                <ul class="list-unstyled">
                                    <li class="si__list--single">
                                        Outstanding academic achievements.
                                    </li>
                                    <li class="si__list--single">
                                        High school GPA of [3.4 GPA].
                                    </li>
                                    <li class="si__list--single">
                                        Exceptional standardized test scores (SAT/ACT).
                                    </li>
                                    <li class="si__list--single">
                                        Active involvement in extracurricular activities.
                                    </li>
                                    <li class="si__list--single">
                                        Exceptional standardized test scores (SAT/ACT).
                                    </li>
                                    <li class="si__list--single">
                                        Active involvement in extracurricular activities.
                                    </li>
                                    <li class="si__list--single">
                                        Exceptional standardized test scores (SAT/ACT).
                                    </li>
                                    <li class="si__list--single">
                                        Active involvement in extracurricular activities.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- faq -->
                        <div class="program-credit-area faq mt--50">
                            <h4 class="title">Frequently Asked Questions (FAQ)</h4>
                            <div class="program-accordion">
                                <div class="accordion" id="rts-accordion">
                                    <div class="accordion-item">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are the admission requirements for Studyhub University?
                                        </button>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do I apply for financial aid?
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How do I contact Studyhub University?
                                        </button>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Are online courses available?
                                        </button>
                                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                            <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- scholarship application -->
                        <div class="scholarship-form">
                            <h3 class="title animated fadeIn">Scholarship Application Form</h3>
                            <div class="scholarship-form__application">
                                <form action="#" class="apply-form">
                                    <div class="single-input">
                                        <input type="text" placeholder="First name">
                                        <input type="text" placeholder="Last name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Email Address">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" id="datepicker" placeholder="dd/mm/yy" required="" class="hasDatepicker">
                                        <select name="gender" id="gender">
                                            <option value="*">Gender</option>
                                            <option value="*">Male</option>
                                            <option value="*">Female</option>
                                        </select>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" placeholder="Country">
                                        <input type="text" placeholder="Citizenship">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" placeholder="Current Collage">
                                        <input type="text" placeholder="Current GPA">
                                    </div>

                                    <button type="submit" class="rts-theme-btn primary with-arrow">Submit Now <span><i class="fa-thin fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- <div class="semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Athletes And Achievements</h5>
                <p class="rt-regular"> <span style="color: var(--rt-theme);"> #egspian </span> Athletes And Achievements</p>

                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                @php $years = []; @endphp
                                @foreach($NssandRRC as $b)
                                    @unless(in_array($b->year, $years))
                                        <button class="nav-link" id="a-{{$b->year}}-tab" data-bs-toggle="tab" data-bs-target="#a-{{$b->year}}" type="button" role="tab" aria-controls="a-{{ $b->year }}" aria-selected="true">{{ implode(' - ', explode('-', $b->year)) }}</button>
                                        @php $years[] = $b->year; @endphp
                                    @endunless
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent2">
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
                                                                    @foreach($NssandRRC as $b)
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
                                        @foreach($NssandRRC as $b)
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
</div> --}}



@include('components.cta')
@endsection
