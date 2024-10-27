@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Gallery',
    'value_3' => '',
    'page_title' => 'Gallery'
])



    <h1>Photo Albums</h1>

        @foreach($albums as $album)
            <li>
                <a href="{{ url('/gallery_photo?album=' . $album->id) }}">{{ $album->title }}</a>
                <p>{{ $album->description }}</p>
                <p>Created by: {{ $album->created_by }}</p>
            </li>
        @endforeach



@endsection
