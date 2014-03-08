@extends('templates.master')

@section('content')
<h1>List of Categories: </h1>
@foreach($category as $c)
<ul>
<li>{{ $c->name }} <a href="{{ URL::to('categories/'.$c->id .'/edit') }}">Edit</a>


    {{ Form::open(array('route' => array('categories.destroy', $c->id), 'method' => 'delete')) }}
    <button type="submit" href="{{ URL::route('categories.destroy', $c->id) }}" class="btn btn-danger btn-mini">Delete</button>
    {{ Form::close() }}

</ul>
@endforeach

@stop