@extends('layout')
    @section('content')
        @foreach ($tasks as $task)
            <h1>{{ $task->title }}</h1>
            <p>{{ $task->description }}</p>
            <p>last updated at: {{ $task->updated_at }}</p>
            <p>Complete: {{$task->completed_at}}
        @endforeach
    @endsection