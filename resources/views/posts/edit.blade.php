@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
            {{-- <?php $arr = $errors->all();?> --}}
    {!! Form::open(['method' => 'POST', 'action' => ['App\Http\Controllers\PostsController@update', $post->id], 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
           {{--  <div class="alert alert-danger" role="alert">
                {{$arr[0]}}
            </div> --}}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body']) }}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image', ['class' => 'form-control-file']) !!}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{-- {{method_field('PUT')}} --}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection