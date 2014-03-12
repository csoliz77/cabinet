@extends('templates.master')

@section('content')
<h3>Edit Category Name</h3>

<div class="form-container">
 {{ Form::model( $category, array('route'=> array('categories.update', $category->id) ,
 'method'=>'PUT','class'=>'form-horizontal','role'=>'form') )}}

<fieldset>


{{ Form::hidden('id', $category->id) }}



<div class="form-group">
{{ Form::label('name', 'Category Name: ', array('class'=>'col-sm-2 control-label') )}}
<div class="col-sm-10">
{{ Form::text('name', $category->name, array('class'=>'form-control')) }}

</div>

</div>
<div class="form-group">
    {{ Form::label('navbar', 'Menu Name: ', array('class'=>'col-sm-2 control-label')) }}
<div class="col-sm-10">
    {{ Form::text('navbar', $category->navbar, array('class'=>'form-control')) }}

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
{{ Form::submit('Change', array('class'=>'btn btn-default')) }}
</div>
</div>


</fieldset>
{{ Form::close() }}
</div>
@stop
