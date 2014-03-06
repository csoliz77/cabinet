@extends('templates.master')

@section('content')
<h1>List of Categories: </h1>
@foreach($category as $c)
<ul>
<li>{{ $c->name }} <a href="#">Edit</a> <a href="#">Delete</a></li>
</ul>
@endforeach

@stop