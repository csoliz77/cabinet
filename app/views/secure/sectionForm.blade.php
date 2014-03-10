@extends('templates.master')
@section('content')


{{ Form::open(array('action'=>'SectionController@store')) }}
<div class="form-group">
    {{ Form::label ('content', 'Content ') }}
    {{ Form::textarea('content', 'Paragraph') }}
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
