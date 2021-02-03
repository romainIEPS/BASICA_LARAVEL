@extends('templates.admin')

@section('adminTitle')
    Liste des works
@endsection

@section('adminContent')
<div class="page-header">
    <h1>Titre</h1>
  </div>
  <div class="row">
    <div class="col-md-8">
      <a href="posts/add/form">Ajouter un post</a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Image</th>
            <th>In Slider</th>
            <th>Client</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>
                <td>{{ $work->id }}</td>
                <td>{{ $work->title }}</td>
                <td>{{ $work->content }}</td>
                <td>{{\Carbon\Carbon::parse($work->created_at)->format('d F Y')}}</td>
                <td><img src="{{ asset('assets/img/portfolio/' . $work->image) }}" alt="{{ $work->title }}" width="50"></td>
                <td>{{ $work->inSlider == 0 ? 'No' : 'Yes'}}</td>
                <td>{{ $work->client->name }}</td>
                <td>
                    <a href="#">Edit</a>
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