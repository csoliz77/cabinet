@extends('templates.master')

@section('content')
<h2>List of Sections: </h2>
@foreach($sections as $c)
<ul>
    <li>Section: <b>{{ $c->category }}</b></li>
    <li>{{ $c->content }} <a href="{{ URL::to('sections/'.$c->id .'/edit') }}">Edit</a>


        {{ Form::open(array('route' => array('categories.destroy', $c->id), 'method' => 'delete')) }}
        <button type="submit" href="{{ URL::route('sections.destroy', $c->id) }}" class="btn btn-danger btn-mini">Delete</button>
        {{ Form::close() }}

</ul>
@endforeach

@stop