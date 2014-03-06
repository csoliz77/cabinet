@extends('templates.master')
@section('content')


{{ Form::open(array('action'=>'CategoryController@store')) }}
    <div class="form-group">
{{ Form::label ('name', 'Category Name ') }}
{{ Form::text('name', null); }}
    </div>
    <button type="submit" class="btn btn-default">
Submit

    </button>
{{ Form::close() }}


@stop
