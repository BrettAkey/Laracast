@extends('layout')
    @section('content')
        <a href="/posts/{{ $post->id }}/edit">EDIT</a>
        <h1> {{$post->title}} </h1>
        <p> {{ $post->body }} </p>       
    @endsection