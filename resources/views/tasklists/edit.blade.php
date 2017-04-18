@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} のタスクリスト編集ページ</h1>

    <div class="row">
        <div class="col-xs-12 col-md-8 col-lg-6">

    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status',null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'タスクリスト:') !!}
        {!! Form::text('content',null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}



    </div>
</div>

@endsection