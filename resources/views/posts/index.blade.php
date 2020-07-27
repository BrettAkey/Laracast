@extends('layout')
    @section('content')
    <p><a href="{{route('post.create')}}">CLICK HERE</a> to create a post.</p>
    <h2>Posts</h2>
        @forelse ($posts as $post)
            <a href="{{ route('post.show', $post->title) }}">{{ $post->title }}</a>
            <p>Last upadted at: {{ $post->updated_at }}</p>
            @empty
                <p> No posts to show for given tag.</p>
        @endforelse       
    @endsection