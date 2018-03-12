@extends('layouts.base')
@section('styles')
    @parent
    <link href="main.page.css"/>

@stop

@section('content')
    <h2>{{$text->name}}</h2>
    {!! $text->body !!}
@endsection