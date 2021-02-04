{{-- 
  Variable disponible: 
  $work Work  
--}}

@extends('templates.admin')

@section('adminTitle')
    Modification d'un work
@endsection

@section('adminContent')
<div class="page-header">
    <h1>Modification d'un post</h1>
</div>
<div>
  <a href="posts">Retour à la liste des posts</a>
</div>
  
  <form action="{{ route('admin.portfolio.edit', ['work' => $work->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
      <div>
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $work->title }}" />
      </div>
  
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="3">{{ $work->content }}</textarea>
    </div>
    
    {{-- <div class="form-group">
      <input type="file" name="image" id="image" >
    </div> --}}
    
    @include('admin.tags._checkbox_edit', ['tags' => \App\Models\Tag::all(), 'workTags' => $work->tags])
    
    @include('admin.clients._scrollingMenu_edit', ['clients' => \App\Models\Client::all(), 'work' => $work])
  
    <div>
      <input type="submit" />
    </div>
  
  </form>
@endsection
