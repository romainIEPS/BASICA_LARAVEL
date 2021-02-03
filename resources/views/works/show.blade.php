{{--
    Variable disponible:
    $work Work
    $similarWorks Array(Work)
--}}
@extends('templates.index')

@section('title')
    {{ $work->title }}
@endsection

@section('content')
 <!-- Page Title -->
 <div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Product Details</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Product Image & Available Colors -->
            <div class="col-sm-6">
                <div class="product-image-large">
                    <img src="{{ asset('assets/img/portfolio/' . $work->image) }}" alt="Item Name">
                </div>
                <div class="colors">
                    <span class="color-white"></span>
                    <span class="color-black"></span>
                    <span class="color-blue"></span>
                    <span class="color-orange"></span>
                    <span class="color-green"></span>
                </div>
            </div>
            <!-- End Product Image & Available Colors -->
            <!-- Product Summary & Options -->
            <div class="col-sm-6 product-details">
                <h2>{{ $work->title }}</h2>
                <h3>Quick Overview</h3>
                <p>
                  {{ $work->content }}
                </p>
                <h3>Project Details</h3>
                <p><strong>Client: </strong>{{ $work->client->name }}</p>
                <p><strong>Date: </strong>{{ \Carbon\Carbon::parse($work->created_at)->format('F d, Y') }}</p>
                <p><strong>Tags: </strong>
                    @foreach ($work->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </p>
            </div>
            <!-- End Product Summary & Options -->

        </div>
    </div>
</div>

<hr>

@include('works._related_works', ['relatedWorks' => $similarWorks])

@endsection