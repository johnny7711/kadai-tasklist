@extends('layouts.app')

@section('content')

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステイタス: ') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('追加') !!}
        
    
    {!! Form::close() !!}

@endsection