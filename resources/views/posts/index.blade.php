@extends('layout')
    @section('content')
        @foreach ($posts as $post)
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            <p>Last upadted at: {{ $post->updated_at }}</p>
        @endforeach       
    @endsection