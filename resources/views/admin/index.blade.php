@extends('app')
@section('content')
    <h1>Админ Создание</h1>
    {!! Form::open(array('route'=>'save' ,'method' => 'get')) !!}
    <div class="form-group">
        {!! Form::label('slug') !!}
        {!! Form::text('TITLE',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('preview_text') !!}
        {!! Form::text('PREVIEW_TEXT',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('detail_text') !!}
        {!! Form::text('DETAIL_TEXT',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Добавить',['class'=>'btn btn-primary']) !!}
    </div>

    {!!Form::close() !!}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection