@extends('app')

@section('content')
    @foreach($showNews as $item)
        <article style="border: 1px solid #ccc">
            <h1>{{$item->TITLE}}</h1>
            <p>{{$item->DETAIL_TEXT}}</p>
            <a href="show/{{$item->ID}}">Подробнее</a>
        </article>
    @endforeach
@endsection