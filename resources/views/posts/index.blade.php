@extends('layout')
    @section('content')
        @foreach ($posts as $post)
            <h1><a href="/post/{{ $post->id }}">{{ $post->input }}</a></h1>
            <p>{{ $post->output }}</p>
        @endforeach       
    @endsection