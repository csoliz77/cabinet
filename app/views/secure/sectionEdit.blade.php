@extends('templates.master')

@section('content')

<div class="form-container">
{{ Form::model($section, array('route'=> array('sections.update', $section->id, 'class'=>'form') , 'method'=>'PUT')) }}

<div class="form-group">
{{ Form::hidden('id', $section->id) }}
{{ Form::label('content', 'Edit Content') }}
{{ Form::textarea('content', $section->content, array('class'=>'form-control', 'rows'=>'6', 'cols'=>'100')) }}
</div>

{{ Form::submit('Submit', array('class'=>'btn btn-default') )}}

{{ Form::close() }}
</div>
@stop