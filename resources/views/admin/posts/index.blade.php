@extends('layouts.app')
@section('content')
    <div class="container">

        <div>
            <a href="{{route('admin.posts.create')}}" method="GET" class="btn btn-primary my-2">Add+</a>
        </div>

        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
               
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    <a href="{{route('admin.posts.show', ['post'=> $post->id])}}" class="btn btn-success mx-2">Show</a>
                    <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}" class="btn btn-warning">Modify</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>
    
@endsection