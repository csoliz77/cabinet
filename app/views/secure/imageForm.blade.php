@extends('templates.master')
@section('content')

<div class="form-container">
{{ Form::open(array('action'=>'ImageController@store', 'class'=>'form', 'role'=>'form', 'image'=> true, 'enctype' => 'multipart/form-data')) }}
<fieldset>
<div class="form-group">
{{ Form::label('image', 'Upload Image') }}

{{ Form::file('image') }}
</div>

<div class="form-group">
    {{ Form::label ('name', 'Image Name ') }}
    {{ Form::text('name', null); }}
</div>

<div class="form-group">
    {{ Form::label ('caption', 'Caption: ') }}
    {{ Form::textarea('caption', null, array('class'=> 'form-control','rows'=>'2')); }}

</div>

<div class="form-group">
    {{ Form::label ('category', 'Choose a category') }}

    <select name="category">
        @foreach($sections as $s)
        <option value="{{ $s->name}}"> {{ $s->name }} </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-default">Submit</button>

</fieldset>
{{ Form::close() }}
</div>

@stop
