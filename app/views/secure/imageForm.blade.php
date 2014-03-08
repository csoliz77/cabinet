@extends('templates.master')
@section('content')


{{ Form::open(array('action'=>'ImageController@store')) }}
<div class="form-group">
    {{ Form::label ('name', 'Image Name ') }}
    {{ Form::text('content', null); }}
</div>
<div class="form-group">
    {{ Form::label ('caption', 'Caption: ') }}
    {{ Form::text('caption', null); }}

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
