@extends('templates.master')

@section('content')

@foreach($section as $s)
<p>{{ $s->id }}</p>
@endforeach
@stop
