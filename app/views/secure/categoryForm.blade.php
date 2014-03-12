@extends('templates.master')
@section('content')

<h3>Add a New Category</h3>
<div class="form-container">
{{ Form::open(array('action'=>'CategoryController@store', 'class'=>'form-horizontal', 'role'=>'form')) }}
<fieldset>
    <div class="form-group">

{{ Form::label ('name', 'Category Name ', array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-10">
{{ Form::text('name', null, array('class'=>'form-control')) }}
    </div>
    </div>

    <div class="form-group">
        {{ Form::label('navbar' , 'Menu Name', array('class'=>'col-sm-2 control-label')) }}
        <div class="col-sm-10">
        {{ Form::text('navbar', null, array('class'=>'form-control')) }}
        </div>
    </div>
    <button type="submit" class="btn btn-default">
Submit

    </button>

</fieldset>
{{ Form::close() }}

</div>
@stop
