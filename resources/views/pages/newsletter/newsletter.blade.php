@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'NewsLetters'
])

<div class="rts-blog-details rts-section-padding">
    <div class="container">
        <div class="row justify-content-center g-5">
            <div class="col-lg-11 col-md-10">
                <article class="blog-details">
                    <div class="blog-details__featured-image">
                        <!-- Check if the newsletter has a thumbnail, otherwise use a default image -->
                        <img src="{{ $newsletter->thumbnail }}" alt="blog thumbnail" onerror="this.onerror=null; this.src='https://egspec.blob.core.windows.net/egspec-assets/og_image.webp'" alt="blog post">
                    </div>

                    <div class="blog-details__article-meta mt--40">
                        <!-- Author Name -->
                        <a href="#"><span><i class="fa-light fa-user"></i></span>{{ $newsletter->author->name ?? 'Unknown' }}</a>

                        <!-- Date -->
                        <span><span><i class="fa-light fa-clock"></i></span>{{ \Carbon\Carbon::parse($newsletter->created_at)->format('M d, Y, h:i A') }}</span>

                        <!-- Tags (Optional) -->
                        @if($newsletter->keywords)
                            <a href="#"><span><i class="fa-sharp fa-light fa-tags"></i></span>{{ $newsletter->keywords }}</a>
                        @endif
                    </div>

                    <div class="blog-details__content">
                        <!-- Render the content (assumes the content is stored as HTML) -->
                        {!! $newsletter->content !!}
                    </div>
                </article>

                <div class="blog-info">
                    <!-- Tags (Optional) -->
                    @if($newsletter->keywords)
                        <div class="blog-tags">
                            <div class="tags-title">tags:</div>
                            <div class="blog-tags__list">
                                <span>{{ $newsletter->keywords }}</span>
                            </div>
                        </div>
                    @endif

                    <!-- Share buttons (optional) -->
                    <div class="blog-share">
                        <div class="share">Share:</div>
                        <div class="social__media--list">
                            <a href="#" class="media"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
