@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Cells',
'value_3' => '',
'page_title' => 'Women Empowerment Cell'
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
                     <h5 class="profile-name">Convener : Dr.A.R.Deepa</h5>
                     <p class="profile-role">Head of Department / Science &amp; Humanities</p>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="carousel-frame">
        <div class="carousel-slide">
            @foreach ($wec_slider as $index => $slide)
          <img src="{{ asset($slide->desktop_image_url) }}" alt="{{ $slide->alt_name }}" />
          @endforeach
        </div>
        <i class="carousel-prev fas fa-chevron-left"></i>
        <i class="carousel-next fas fa-chevron-right"></i>
        <ol class="carousel-dots">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ol>
      </div>










      <div class="row">
         <div class="container">


<div class="blog-details">
    <blockquote class="rts-blockquote">
        <h4>Aim</h4>
        <p>To endorse an ethnicity of esteem, egalitarianism and protection for female gender.</p>

    </blockquote>
</div>


<div class="blog-details">
    <blockquote class="rts-blockquote">

        <p>Empowering women is a prerequisite for creating a good nation, when women are empowered, society with stability is assured. Empowerment of women essential as their thoughts and their value systems lead to development of a good family, good society and ultimately a good nation.</p>
        <span>Dr.A.P.J.Abdul Kalam</span>
    </blockquote>
</div>


            <div class="row">
               {{-- <h3 class="rts-section-title animated fadeIn">Vision</h3> --}}
               <p class="desc">
                Our Institution has developed WEC in the year 2010 as believes in empowerment of girl students. The effort to provide equal status for women in the Indian Society began with the formation of our Constitution. It has been clearly written in the preamble of the Indian Constitution that there would be no disparity and discrimination on the basis of sex or gender of a person living in India. The Fundamental Rights, Duties and the Directive Principles which are described in our Constitution also repeat the above mentioned feelings and vision. The Indian Constitution not only satisfies by giving equal rights to the women but also empowers the states by giving them the right to provide some special rights to the women for their empowerment


            </p>
            </div>
         </div>
      </div>


      <div class="row">
        <div class="col-12">

            <div class="admission-content-top">
                <div class="application-deadline">

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped">

                                <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Name</td>
                                        <td>Role</td>
                                        <td>Department</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $index = 1; @endphp
                                    @foreach($wec as $wecs)
                                        @if ($wecs->role == 'Convener' || $wecs->role == 'Member' || $wecs->role == 'Student Representative')
                                            <tr class="{{ $wecs->role == 'Student Representative' ? 'student-rep-row' : '' }}">
                                                <td>{{ $index++ }}</td>
                                                <td>{{ $wecs->name }}</td>
                                                <td>{{ $wecs->role }}</td>
                                                <td>{{ $wecs->department }}</td>
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


        <div class="program-description-area">

            <div class="program-credit-area">
                <h5 class=" animated fadeIn" >PDF File / View &amp; Download</h5>

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/minutes-of-meeting-academic-year-2023-24-even-semester.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> MINUTES OF MEETING Academic Year : 2023-24 (Even Semester) </a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/women-empowerment-cell/womens-day-2024.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Women's day 2024 </a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
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

   </div>
   </div>
</section>






@include('components.cta')
@endsection
