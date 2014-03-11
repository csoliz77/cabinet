@extends('templates.master')

@section('content')

<div class="form-container">
{{ Form::model($section, array('route'=> array('sections.update', $section->id) , 'method'=>'PUT')) }}

<div class="form-group">
{{ Form::hidden('id', $section->id) }}
{{ Form::label('content', 'Edit Content') }}
{{ Form::textarea('content', $section->content, array('class'=>'form-control', 'rows'=>'7', 'cols'=>'170')) }}
</div>
<div class="form-group">
{{ Form::submit('Submit', array('class'=>'btn btn-default') )}}
</div>
{{ Form::close() }}
</div>
@stop