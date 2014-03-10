@extends('templates.master')

@section('content')
<ul>

    <li>ID: {{ $image->id }}</li>
    <li>Section: {{ $image->category }}</li>
    <li>Caption: {{ $image->caption }}</li>
    <li>Name: {{ $image->name }}</li>
    <li>Image: <img src="/assets/imgs/{{ $image->filename}}"/> </li>




</ul>


@stop