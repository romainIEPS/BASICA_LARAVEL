@extends('templates.admin')

@section('adminTitle')
    Ajout d'un post
@endsection

@section('adminContent')
<div class="page-header">
    <h1>Ajout d'un post</h1>
  </div>
  
  <form action="{{ route('admin.portfolio.add')}}" method="post" enctype="multipart/form-data">
    @csrf
  
    <div class="form-group">
      <div>
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" />
      </div>
  
      <label for="content">Content</label>
      <textarea name="content" class="form-control" rows="3"></textarea>
    </div>
    
    <div class="form-group">
      <input type="file" name="image" id="image">
    </div>
    
    @include('admin.categories._scrollingMenu_add', ['categories' => \App\Models\Categorie::all()])
  
    <div>
      <input type="submit" />
    </div>
  
  </form>
@endsection
