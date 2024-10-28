@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Gallery',
    'value_3' => 'Album',
    'page_title' => $album->title
])

<div class="rts-blog v_3 rts-section-padding">
    <div class="container">
        <h1>{{ $album->title }}</h1>
        <p>{{ $album->description }}</p>
        <p>Created by: {{ $album->user ? $album->user->name : 'Unknown User' }}</p>

        <div class="photos">
            @foreach($photos as $photo)
                <div>
                    <img src="{{ asset($photo->image_url) }}" alt="{{ $photo->caption }}">
                    <p>{{ $photo->caption }}</p>
                    <p>Credits: {{ $photo->credits }}</p>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="pagination mt-4">
            {{ $photos->links() }} <!-- Laravel's pagination links -->
        </div>
    </div>
</div>

@endsection
