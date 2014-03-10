@extends('templates.master')
@section('content')

<div class="form-container">
{{ Form::open(array('action'=>'CategoryController@store', 'class'=>'form-inline', 'role'=>'form')) }}
<fieldset>
    <div class="form-group">

{{ Form::label ('name', 'Category Name ', array('class'=>'sr-only')) }}
{{ Form::text('name', 'Enter Category Name', array('class'=>'form-control')); }}

    </div>
    <button type="submit" class="btn btn-default">
Submit

    </button>

</fieldset>
{{ Form::close() }}

</div>
@stop
