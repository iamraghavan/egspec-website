@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Industry Certification Programs' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->


<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Idea</h3>
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Companies offer a comprehensive portfolio of training and professional certification designed for individuals, companies, and public organizations to acquire, maintain, optimize and validate their IT skills.</li>
                                <li class="single-requirement">Enhanced career advancement and opportunities</li>
                                <li class="single-requirement">Certification is highly recognized in the industry</li>
                            </ul>
                        </div>
                    </div>
                    <div class="application-deadline">
                        <h3 class="rts-section-title animated fadeIn">Training and Certification</h3>
                        <div class="application-deadline__content">
                            <div class="application-deadline__content--table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Name of the Certification</td>
                                                <td>Name of the Industry</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($certifications as $index => $certification)
                                                @if($certification->page_section === 'certifications')
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $certification->name }}</td>
                                                        <td>{{ $certification->industry }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="loader">
                                 <p> The content will be updated shortly. Thank you for your patience <span>...</span> </p>
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

<style>
    .loader {
  display: inline-block;
}

.loader span {
  animation: loading 1s infinite;
}

@keyframes loading {
  0% {
    content: ".";
  }
  33% {
    content: "..";
  }
  66% {
    content: "...";
  }
}

</style>
