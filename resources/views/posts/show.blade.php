@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
        <a href="/posts" class="btn btn-primary">Go Back</a>
        @if(!Auth::guest() && Auth::user()->id === $post->user_id)<a class="btn btn-primary mr-auto" href="/posts/{{$post->id}}/edit">Edit</a>@endif
        </div>
        <div class="col-md-10 col-12 mx-auto p-2">
            <div class="card">
                <div class="card-header">
                <img class="img-fluid card-img" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="card-body">
                    <small class="text-muted">Created At: {{date('F j, Y h:i:s a', strtotime($post->created_at))}}</small>
                    <p class="text-primary">{{$post->body}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted pull-left">Last updated at: {{date('F j, Y h:i:s a', strtotime($post->updated_at))}}</small>
                    @if(!Auth::guest() && Auth::user()->id === $post->user_id)
                        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection