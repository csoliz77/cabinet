@extends('templates.master')
@section('content')

<div class="form-container">

{{ Form::open(array('action'=>'SectionController@store', 'role'=>'form', 'class'=>'form')) }}
<div class="form-group">
    {{ Form::label ('content', 'Add Content ') }}
    {{ Form::textarea('content', 'Enter text here', array('class'=>'form-control', 'rows'=>'3')) }}

 </div>
    <div class="form-control">
    {{ Form::label ('category', 'Choose a category') }}
    <select name="category">
     @foreach($sections as $s)
        <option value="{{ $s->name}}"> {{ $s->name }} </option>
     @endforeach
    </select>

</div>
<br />
<button type="submit" class="btn btn-default">Submit</button>

{{ Form::close() }}

</div>
@stop
