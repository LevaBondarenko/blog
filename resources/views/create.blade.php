@extends('app')
@section('content')
    <h1>Создание</h1>
    {!! Form::open(array('url'=>'create')) !!}
    <div class="form-group">
        {!! Form::label('slug') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('preview_text') !!}
        {!! Form::text('preview_text',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('detail_text') !!}
        {!! Form::text('detail_text',null,['class'=>'form-control']) !!}
    </div>

    {!!Form::close() !!}

@endsection