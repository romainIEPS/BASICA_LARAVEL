@extends('templates.index')

@section('title')
    Home
@endsection

@section('content')
{{-- SLIDER --}}
@include('home._slider')

{{-- RECENT WORKS --}}
@include('works._recent')

<hr>

{{-- LATEST POSTS --}}
@include('posts._latest')
@endsection