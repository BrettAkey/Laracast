@extends('layout')
    @section('content')
        <a href="{{route('post.edit', $post)}}">EDIT</a>
        <h1> {{$post->title}} </h1>
        <p> {{ $post->body }} </p>       
    @endsection