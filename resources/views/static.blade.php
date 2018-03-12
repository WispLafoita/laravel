@extends('layouts.base')

@section('content')
{{$text->name}}
{!! $text->body !!}
@endsection