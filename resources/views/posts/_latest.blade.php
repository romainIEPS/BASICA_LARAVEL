<!-- Our Articles -->
<div class="section">
    <div class="container">
    <div class="row">
      <!-- Featured News -->
      <div class="col-sm-6 featured-news">
        <h2>Latest Blog Posts</h2>
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-xs-4"><a href="{{ route('blog.show', ['post' => $post->id, 'slug'=> Str::slug($post->title, '-')])}}"><img src="{{ asset('assets/img/blog/' . $post->image)}}" alt="Post Title"></a></div>
                <div class="col-xs-8">
                    <div class="caption"><a href="{{ route('blog.show', ['post' => $post->id, 'slug'=> Str::slug($post->title, '-')])}}">{{ $post->title }}</a></div>
                    <div class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</div>
                    <div class="intro">{{ Str::limit($post->content, 150) }}<a href="{{ route('blog.show', ['post' => $post->id, 'slug'=> Str::slug($post->title, '-')])}}">Read more.</a></div>
                </div>
            </div>
        @endforeach
      </div>
      <!-- End Featured News -->
      
      @inject('tweets', 'App\Http\Controllers\Tweets')
      @include('twitter._latest_tweets', ['data' => $tweets->twitterUserTimeLine()])
    </div>
    </div>
    </div>