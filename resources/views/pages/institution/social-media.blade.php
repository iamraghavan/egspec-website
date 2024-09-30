@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Institution',
    'value_3' => '',
    'page_title' => 'Social Media'
])

<div class="container">
    <div class="row">
        <!-- Instagram Section -->
        <div class="col-md-4">
            <h5>Instagram</h5>
            @foreach($instagramPosts['data'] as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post['caption'] ?? 'Instagram Post' }}</h6>
                        <p class="card-text">{{ $post['media_url'] ?? '' }}</p>
                        <img src="{{ $post['media_url'] ?? '' }}" class="img-fluid" alt="Instagram Image">
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Facebook Section -->
        <div class="col-md-4">
            <h5>Facebook</h5>
            @foreach($facebookPosts['data'] as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post['message'] ?? 'Facebook Post' }}</h6>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- LinkedIn Section -->
        <div class="col-md-4">
            <h5>LinkedIn</h5>
            @foreach($linkedinPosts['elements'] as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post['specificContent']['com.linkedin.ugc.ShareContent']['shareCommentary']['text'] ?? 'LinkedIn Post' }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
