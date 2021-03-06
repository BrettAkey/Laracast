@extends('layout')
    @section('content')
        <a href="{{route('post.edit', $post)}}">EDIT</a>
        <h1> {{$post->title}} </h1>
        <p> {{ $post->body }} </p>
        <form method="post" action="{{ route('post.delete', $post) }}">
            @csrf
            @method('delete')
            <ul class="actions">
                <li><input type="submit" value="Delete Post" class="alt" /></li>
            </ul>
        </form>

        <p>
            @foreach ($post->tags as $tag)
                <a href="{{ route('post.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
            @endforeach
        </p>
    @endsection