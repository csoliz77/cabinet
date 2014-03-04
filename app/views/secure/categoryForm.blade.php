@extends('templates.master')
@section('content')
<form role = "form">

{{ Form::open(array('action' => 'CategoryController@store') ); }}
    <div class="form-group">
{{ Form::label ('name', 'Category Name ') }}
{{ Form::text('name'); }}
    </div>
    <button type="submit" class="btn btn-default">
Submit

    </button>
{{ Form::close(); }}


</form>
@stop
