@extends('templates.master')

@section('content')


<div class="form-container">{{ Form::model( $category, array('route'=> array('categories.update', $category->id) , 'method'=>'PUT'), array('class'=>'form-inline') )}}
<fieldset>
{{ Form::hidden('id', $category->id) }}


<div class="form-group">
    <div class="form-control">
{{ Form::label('name', 'Category Name: ') }}

{{ Form::text('name', $category->name) }}

</div>

<br />
{{ Form::submit('Change', array('class'=>'btn')) }}



</fieldset>
{{ Form::close() }}
</div>
@stop