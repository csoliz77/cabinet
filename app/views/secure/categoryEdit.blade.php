@extends('templates.master')

@section('content')


<div class="form-container">
 {{ Form::model( $category, array('route'=> array('categories.update', $category->id) , 'method'=>'PUT') )}}

<fieldset>


{{ Form::hidden('id', $category->id) }}



<div class="form-group">
{{ Form::label('name', 'Category Name: ', array('class'=>'form-control') )}}

{{ Form::text('name', $category->name, array('class'=>'form-control')) }}

</div>


<div class="form-group">
    {{ Form::label('navbar', 'Menu Name: ', array('class'=>'form-control')) }}
    {{ Form::text('navbar', $category->navbar, array('class'=>'form-control')) }}

</div>

<br />
{{ Form::submit('Change', array('class'=>'btn btn-default')) }}



</fieldset>
{{ Form::close() }}
</div>
@stop