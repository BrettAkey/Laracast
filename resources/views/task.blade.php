@extends('layout')
    @section('content')
        @foreach ($tasks as $task)
            <h1>{{ $task->title }}</h1>
            <p>{{ $task->description }}</p>
            <p>created at: {{ $task->created_at }}</p>
        @endforeach
    @endsection