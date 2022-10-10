@extends('layouts.app')
@section('content')
    <div class="container">

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
                    <a href="#" class="btn btn-outline-success">Show</a>
                    <a href="#" class="btn btn-outline-warning">Modify</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>
    
@endsection