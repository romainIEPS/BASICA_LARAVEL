{{-- 
    Varibales disponible:
    $categories Array(Categorie)     
--}}
<h4>Categories</h4>
<ul class="blog-categories">
    @foreach ($categories as $categorie)
        <li><a href="#">{{ $categorie->name }} [{{ count($categorie->posts) }}]</a></li>
    @endforeach
</ul>