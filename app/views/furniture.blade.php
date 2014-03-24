@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach


{{ var_dump($images) }}

@stop