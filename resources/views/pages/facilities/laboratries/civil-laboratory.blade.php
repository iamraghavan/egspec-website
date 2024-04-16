@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => 'Laboratries',
    'value_3' => '',
    'page_title' => 'Civil Laboratory'
])


@include('components.cta')
@endsection
