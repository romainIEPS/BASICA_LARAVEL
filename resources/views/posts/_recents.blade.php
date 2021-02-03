{{--
    Variable disponible:
    $posts Array(Post)
--}}
<h4>Recent Posts</h4>
<ul class="recent-posts">
    @foreach ($posts as $post)
        <li><a href="#">{{ $post->title }}</a></li>
    @endforeach
</ul>