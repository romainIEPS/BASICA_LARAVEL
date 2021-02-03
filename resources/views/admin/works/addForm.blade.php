@extends('templates.admin')

@section('adminTitle')
    Ajout d'un work
@endsection

@section('adminContent')
<div class="page-header">
    <h1>Ajout d'un post</h1>
  </div>
  
  <form action="posts/add/insert" method="post">
  
    <div class="form-group">
      <div>
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" />
      </div>
  
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="3"></textarea>
    </div>
    
    
    @include('admin.tags._checkbox', ['tags' => \App\Models\Tag::all()])
    
    @include('admin.categories._scrollingMenu', ['categories' => \App\Models\Categorie::all()])
    
    @include('admin.clients._scrollingMenu', ['clients' => \App\Models\Client::all()])
  
    <div>
      <input type="submit" />
    </div>
  
  </form>
@endsection
