@extends('layout')
    @section('content')
        @foreach ($posts as $post)
            <a href="/post/{{ $post->id }}">{{ $post->input }}</a>
            <p>{{ $post->output }}</p>
        @endforeach       
    @endsection