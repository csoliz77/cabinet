@extends('templates.master')

@section('content')


{{ Form::model($category, array('route'=> array('categories.update', $category->id) , 'method'=>'PUT')) }}

{{ Form::hidden('id', $category->id) }}
{{ Form::textarea('name', $category->name) }}
<br />

{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop