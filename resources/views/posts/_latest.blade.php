<!-- Our Articles -->
<div class="section">
    <div class="container">
    <div class="row">
      <!-- Featured News -->
      <div class="col-sm-6 featured-news">
        <h2>Latest Blog Posts</h2>
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-xs-4"><a href="blog-post.html"><img src="{{ asset('assets/img/blog/' . $post->image)}}" alt="Post Title"></a></div>
                <div class="col-xs-8">
                    <div class="caption"><a href="blog-post.html">{{ $post->title }}</a></div>
                    <div class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</div>
                    <div class="intro">{{ Str::limit($post->content, 150) }}<a href="blog-post.html">Read more.</a></div>
                </div>
            </div>
        @endforeach
      </div>
      <!-- End Featured News -->
    
    
      <!-- Latest News FB -->
      <div class="col-sm-6 latest-news">
        <h2>Lastest FaceBook/Twitter News</h2>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html">Donec elementum mi vitae enim fermentum lobortis.</a></div>
            <div class="date">16 May 2013 </div>
            <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html">In hac habitasse platea dictumst.</a></div>
            <div class="date">14 May 2013 </div>
            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="caption"><a href="full-width.html"> Nam condimentum laoreet sagittis.</a></div>
            <div class="date">14 May 2013 </div>
            <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
          </div>
        </div>
      </div>
      <!-- End Featured News -->
    </div>
    </div>
    </div>