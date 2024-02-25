@extends('layouts.app')

@section('title','The list of task')

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task -> id]) }}">{{ $task -> title }}</a>
        </div>
    @empty
        <p>No task</p>
    @endforelse 
@endsection

