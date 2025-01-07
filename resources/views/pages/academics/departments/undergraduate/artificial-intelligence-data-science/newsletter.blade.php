@extends('layouts.app')

@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'Newsletters'
])

<div class="rts-blog v_4 rts-section-padding">
    <div class="container">
        <div class="row justify-content-center g-5">
            @foreach ($newsletters as $newsletter)
    <div class="col-lg-10 col-md-11 col-xl-6">
        <div class="single-blog">
            <div class="blog single-blog__content">
                <div class="blog__thumb">
                    <img src="{{ $newsletter->thumbnail }}" alt="blog thumbnail" onerror="this.onerror=null; this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSrXMoYuEw_ddvQgnkK90JZPa2emhMBPxVZg&s'">
                </div>


                <div class="blog__meta">
                    <div class="blog__meta--da">
                        <div class="blog-date">
                            <span><i class="fal fa-calendar"></i></span>
                            <span>{{ \Carbon\Carbon::parse($newsletter->created_at)->format('M d, Y') }}</span>
                        </div>
                        <div class="blog-author">
                            <span><i class="far fa-user"></i></span>
                            <span><a href="#">{{ $newsletter->author->name ?? 'Unknown' }}</a></span>
                        </div>
                    </div>
                    <h5 class="blog__title">
                        <a href="{{ route('newsletter.show', ['id' => $newsletter->id, 'slug' => $newsletter->slug]) }}">
                            {{ $newsletter->title }}
                        </a>

                    </h5>
                    <a href="{{ route('newsletter.show', ['id' => $newsletter->id, 'slug' => $newsletter->slug]) }}" class="about-btn rts-nbg-btn btn-arrow">
                        Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach

        </div>

        <!-- Load More Button (optional) -->
        <div class="rts-load-more-btn rt-center mt--60">
            <a href="#" class="rts-theme-btn primary primary lh-100">Load More</a>
        </div>
    </div>
</div>

@endsection
