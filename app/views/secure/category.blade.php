@extends('templates.master')

@section('content')
<ul>

    <li>ID: {{ $category['id'] }}</li>
    <li>Name: {{ $category['name'] }}</li>
</ul>

@stop