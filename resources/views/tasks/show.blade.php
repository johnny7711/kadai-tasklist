@extends('layouts.app')

@section('content')

    <h1>id = {{$task->id}} のタスクの詳細ページ</h1>
    
    <p>Task: {{$task->content}}</p>
    <p>Status: {{$task->status}}</p>
    {!! link_to_route('tasks.edit', 'このタスクの編集', ['id' => $task->id]) !!}


@endsection