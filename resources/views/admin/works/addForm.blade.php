@extends('templates.admin')

@section('adminTitle')
    Ajout d'un work
@endsection

@section('adminContent')
<div>
  <a href="{{ route('admin.portfolio.index') }}">Retour à la liste des works</a>
</div>
<div class="page-header">
    <h1>Ajout d'un work</h1>
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
    
    @include('admin.tags._checkbox_add', ['tags' => \App\Models\Tag::all()])
    
    @include('admin.clients._scrollingMenu_add', ['clients' => \App\Models\Client::all()])
  
    <div>
      <input type="submit" />
    </div>
  
  </form>
@endsection
