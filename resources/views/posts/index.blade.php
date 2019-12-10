@extends('layout')
    @section('content')
    <p><a href="/posts/create">CLICK HERE</a> to create a post.</p>
    <h2>Posts</h2>
        @foreach ($posts as $post)
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            <p>Last upadted at: {{ $post->updated_at }}</p>
        @endforeach       
    @endsection