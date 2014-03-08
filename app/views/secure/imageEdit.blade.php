@extends('templates.master')

@section('content')


{{ Form::model($image, array('route'=> array('images.update', $image->id) , 'method'=>'PUT')) }}

{{ Form::hidden('id', $image->id) }}
{{ Form::textarea('name', $image->content) }}
{{ Form::textarea('caption', $image->caption) }}

<div class="form-group">

    {{ Form::label ('category', 'Choose a category') }}

    <select name="category">
        @foreach($sections as $s)
        <option value="{{ $s->name}}"> {{ $s->name }} </option>
        @endforeach
    </select>

</div>

<br />

{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop