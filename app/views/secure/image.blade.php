@extends('templates.master')

@section('content')
<ul>

    <li>ID: {{ $image->id }}</li>
    <li>Section: {{ $image->category }}</li>
    <li>Caption: {{ $image->caption }}</li>
    <li>Name: {{ $image->content }}</li>
</ul>

@stop