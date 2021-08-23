@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="row">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card  br mx-auto col-md-4 p-1">
                    <div class="card-header">
                       <h3 class="title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class="text-muted">Created At: {{date('F j, Y h:i:s a', strtotime($post->created_at))}}</small>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-primary">{{substr($post->body, 0, 150) . '...'}}</p>
                    </div>
                        <div class="card-footer">
                           <small class="text-muted ml-auto">Last updated at: {{date('F j, Y h:i:s a', strtotime($post->updated_at))}}</small>
                        </div>
                </div>
            @endforeach
        @else
        @endif
    </div>

@endsection