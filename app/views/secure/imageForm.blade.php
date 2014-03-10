@extends('templates.master')
@section('content')


{{ Form::open(array('action'=>'ImageController@store', 'image'=> true, 'enctype' => 'multipart/form-data')) }}

<div class="form-group">
{{ Form::label('image', 'Image Upload') }}
</div>

<div class="form-group">
{{ Form::file('image') }}
</div>

<div class="form-group">
    {{ Form::label ('name', 'Image Name ') }}
    {{ Form::text('name', null); }}
</div>

<div class="form-group">
    {{ Form::label ('caption', 'Caption: ') }}
    {{ Form::textarea('caption', null, array('cols'=> '100', 'rows'=>'5')); }}

</div>

<div class="form-group">
    {{ Form::label ('category', 'Choose a category') }}

    <select name="category">
        @foreach($sections as $s)
        <option value="{{ $s->name}}"> {{ $s->name }} </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-default">
    Submit

</button>
{{ Form::close() }}


@stop
