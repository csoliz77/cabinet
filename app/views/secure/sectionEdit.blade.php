@extends('templates.master')

@section('content')

<div class="form-container">
{{ Form::model($section, array('route'=> array('sections.update', $section->id) , 'method'=>'PUT')) }}

<div class="form-group">
{{ Form::hidden('id', $section->id) }}
{{ Form::label('content', 'Edit Content') }}
{{ Form::textarea('content', $section->content, array('class'=>'ckeditor', 'rows'=>'7', 'cols'=>'170', 'id'=>'editor1')) }}
</div>
<div class="form-group">
{{ Form::submit('Submit', array('class'=>'btn btn-default') )}}
</div>
{{ Form::close() }}
</div>

 <script>
 CKEDITOR.replace('editor1');
 </script>
@stop