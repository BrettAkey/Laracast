@extends('layout')
    @section('content')
    <p><a href="{{route('post.create')}}">CLICK HERE</a> to create a post.</p>
    <h2>Posts</h2>
        <p>Tags: 
            @foreach ($tags as $tag)
                <a href="{{ route('post.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>  
            @endforeach
        </p>
        @forelse ($posts as $post)
            <a href="{{ route('post.show', $post->title) }}">{{ $post->title }}</a>
            <p>Last upadted at: {{ $post->updated_at }}</p>
            @empty
                <p> No posts to show for given tag.</p>
        @endforelse       
    @endsection