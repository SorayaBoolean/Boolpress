@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="title" required max="255" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        
        <div class="mb-3">
            <label for="title" class="form-label">Content</label>
            <input type="text" class="form-control" id="title">
        </div>
        
          
        <button type="submit" class="btn btn-primary">Save Post!</button>
    </form>

</div>

    
@endsection
