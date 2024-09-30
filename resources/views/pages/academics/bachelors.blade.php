@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => '',
'value_2' => 'Departments',
'value_3' => 'Bachelors',
'page_title' => 'Bachelor\'s in Engineering' ])

<div class="rts-academic-area rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <h3 class="rts-section-title animated fadeIn">Bachelor's in Engineering</h3>
            </div>
        </div>
        <!-- academic top -->

<div class="all-program-category">
    <div class="row g-5">
        <!-- single item -->
        @foreach ($academics as $course)
    <div class="col-lg-4 col-md-4 col-sm-6">
        <a href="{{ url($course->course_url ?? '') }}" target="_blank" rel="noopener noreferrer">
            <div class="single-cat-item">
                <div class="cat-thumb">
                    <img src="{{ asset($course->image_url) }}" alt="{{ $course->course_name }}">
                    <a href="{{ url($course->course_url ?? '') }}" class="cat-link-btn">{{ $course->course_type }}</a>
                </div>
                <div class="cat-meta">
                    <div class="cat-title">
                        <a href="{{ url($course->course_url ?? '') }}">{{ $course->course_name }}</a>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach





    </div>
    {{-- <div class="rts-load-more-btn ">
        <a href="#" class="rts-theme-btn primary lh-100">Load More</a>
    </div> --}}
</div>
    </div>
</div>


@include('components.cta')


@endsection
