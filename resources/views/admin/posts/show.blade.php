@extends ('layouts.app')
@section('content')

    <div class="container">
        <div class="">
            <strong>Title:</strong>
            <p>{{$post->title}}</p>
        </div>
        <div class="">
            <strong>Content:</strong>
            <p>{{$post->content}}</p>
        </div>
        <div class="">
            <strong>Slug:</strong>
            <p>{{$post->slug}}</p>
        </div>
    </div>

@endsection