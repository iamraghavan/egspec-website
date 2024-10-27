@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Gallery',
    'value_3' => 'Album',
    'page_title' => $album->title
])

<h1>{{ $album->title }}</h1>
<p>{{ $album->description }}</p>
<p>Created by: {{ $album->created_by }}</p>
<div class="photos">
    @foreach($album->photos as $photo)
        <div>
            <img src="{{ $photo->image_url }}" alt="{{ $photo->caption }}" style="width: 200px;">
            <p>{{ $photo->caption }}</p>
            <p>Credits: {{ $photo->credits }}</p>
        </div>
    @endforeach
</div>

@endsection
