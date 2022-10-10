@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('admin.posts.update', ['post'=>$post])}}" method="POST">

        @csrf
        @method('PUT')

        <h1>Edit post</h1>

        <div class="mb-3">
            <label for="title" required max="255">Title</label>
            <input type="text" class="form-control" id="title"  value="{{old('title'), $post->title}}">
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content">{{old('content'), $post->content}}</textarea>
        </div>
        
          
        <button type="submit" class="btn btn-primary">Save Post!</button>
    </form>

</div>

    
@endsection