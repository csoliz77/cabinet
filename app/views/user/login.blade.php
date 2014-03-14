@extends('templates.master')

@section('content')
{{ Form::open(array('url'=>'user/login', 'autocomplete'=>'off', 'class'=>'form', 'role'=>'form')) }}

<div class="form-group">
{{ Form::label('username', 'Username') }}
{{ Form::text('username', Input::old('username'), array('placeholder'=>'carlos.soliz', 'class'=>'form-control'))}}
</div>

<div class="form-group">
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('placeholder'=>'*********', 'class'=>'form-control')) }}
</div>

{{ Form::submit('Login') }}

{{ Form::close() }}

@stop
