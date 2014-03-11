@extends('templates.master')
@section('content')

<div class="form-container">
{{ Form::open(array('action'=>'CategoryController@store', 'class'=>'form', 'role'=>'form')) }}
<fieldset>
    <div class="form-group">

{{ Form::label ('name', 'Category Name ', array('class'=>'sr-only')) }}
{{ Form::text('name', 'Enter Category Name', array('class'=>'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('navbar' , 'Menu Name', array('class'=>'sr-only')) }}
        {{ Form::text('navbar', 'Enter Menu Name', array('class'=>'form-control')) }}
    </div>
    <button type="submit" class="btn btn-default">
Submit

    </button>

</fieldset>
{{ Form::close() }}

</div>
@stop
