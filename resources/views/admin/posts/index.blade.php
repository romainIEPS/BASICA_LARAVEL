@extends('templates.admin')

@section('adminTitle')
    Liste des posts
@endsection

@section('adminContent')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="page-header">
    <h1>Titre</h1>
  </div>
  <div class="row">
    <div class="col-md-8">
      <a href="{{ route('admin.posts.add.form') }}">Ajouter un post</a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Image</th>
            <th>Categorie</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->content, 300) }}</td>
                <td>{{\Carbon\Carbon::parse($post->created_at)->format('d F Y')}}</td>
                <td>{{$post->updated_at === null ?'-':\Carbon\Carbon::parse($post->udated_at)->format('d F Y')}}</td>
                <td><img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="{{ $post->title }}" width="50"></td>
                <td>{{ $post->categorie->name }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit.form', ['post' => $post->id]) }}">Edit</a>
                </td>
                <td>
                    <a href="#">Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection