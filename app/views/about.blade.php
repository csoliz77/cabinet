@extends('templates.master')

@section('content')

@foreach($section as $s)
<p>{{ $s->content }}</p>
@endforeach
@stop
