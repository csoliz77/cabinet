@extends('templates.master')

@section('content')
<ul>

    <li>ID: {{ $section->id}}</li>
    <li>Section: {{ $section->category }}</li>
    <li>Paragraph: {{ $section->content }}</li>
</ul>

@stop