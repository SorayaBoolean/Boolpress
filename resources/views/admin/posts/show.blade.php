@extends ('layouts.app')
@section('content')

    <div class="container">
        <div class="">
            <strong>Title:</strong>
            <p>{{$post->title}}</p>
        </div>
        <div class="">
            <strong>Description:</strong>
            <p>{{$post->description}}</p>
        </div>
        <div class="">
            <strong>Slug:</strong>
            <p>{{$post->slug}}</p>
        </div>
    </div>

@endsection