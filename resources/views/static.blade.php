@extends('layouts.base')

@section('content')
    <div class="crumb">
        <ul>
            <li class="here_text txtcufon">You are here:</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Information</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <h2>{{$text->name}}</h2>
    {!! $text->body !!}
@endsection