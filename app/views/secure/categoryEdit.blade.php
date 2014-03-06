@extends('templates.master')

@section('content')


{{ Form::open(array('action'=>'CategoryController@update')) }}

{{ Form::hidden('id', $category['name']) }}
{{ Form::textarea('name', $category['name']) }}
<br />

{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop