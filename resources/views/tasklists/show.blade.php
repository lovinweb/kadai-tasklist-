@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスクリスト詳細ページ</h1>

    <p>タイトル: {{ $tasklist->title }}</p>
    <p>{{ $tasklist->id }} {{ $tasklist->content }}</p>

    {!! link_to_route('tasklists.edit', 'このタスクリスト編集', ['id' => $tasklist->id]) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
    
@endsection