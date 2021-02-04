{{-- 
  Variable disponible: 
  $post Post  
--}}

@extends('templates.admin')

@section('adminTitle')
    Modification d'un post
@endsection

@section('adminContent')
<div class="page-header">
    <h1>Modification d'un post</h1>
</div>
<div>
  <a href="{{ route('admin.posts.index') }}">Retour à la liste des posts</a>
</div>
  
  <form action="{{ route('admin.posts.edit', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
      <div>
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
      </div>
  
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="3">{{ $post->content }}</textarea>
    </div>
    
    {{-- <div class="form-group">
      <input type="file" name="image" id="image" >
    </div> --}}
    
    @include('admin.categories._scrollingMenu_edit', ['categories' => \App\Models\Categorie::all(), 'post' => $post])
  
    <div>
      <input type="submit" />
    </div>
  
  </form>
@endsection
