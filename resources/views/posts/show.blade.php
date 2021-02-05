@extends('templates.index')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
@extends('templates.partials.public._banner')
@section('bannerTitle')
    Blog Post
@endsection

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Blog Post -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h2>{{ $post->title }}</h2>
                    </div>

                    <div class="single-post-image">
                        <img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>
                    <div class="single-post-content">
                        <p>
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
            <!-- Sidebar -->
            <div class="col-sm-4 blog-sidebar">

                @include('posts._recents', ['posts' => \App\Models\Post::orderBy('created_at', 'desc')->take(4)->get()])

                @include('categories._index', ['categories' => \App\Models\Categorie::orderBy('created_at', 'desc')->take(5)->get()])
                
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</div>
@endsection