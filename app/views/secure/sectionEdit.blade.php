@extends('templates.master')

@section('content')


{{ Form::model($section, array('route'=> array('sections.update', $section->id) , 'method'=>'PUT')) }}

{{ Form::hidden('id', $section->id) }}
{{ Form::textarea('content', $section->content) }}
<br />

{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop