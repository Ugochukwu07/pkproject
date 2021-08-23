@extends('layouts.app')
    @section('content')
        <h1>Wellcome to Laravel/Services</h1>
        <p>This is the services page.</p>
        <p>{{$title}}</p>
        @if(count($services) > 0)
            <ul>
                @foreach($services as $service)
                    <li>{{$service}}</li>
                @endforeach
            </ul>
        @endif
    @endsection
