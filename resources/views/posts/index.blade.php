@extends('layout')
    @section('content')
        @foreach ($posts as $post)
            <h1><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
            <p>Last upadted at: {{ $post->updated_at }}</p>
        @endforeach       
    @endsection