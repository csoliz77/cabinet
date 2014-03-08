@extends('templates.master')

@section('content')
<h1>List of Images: </h1>
@foreach($images as $i)
<ul>
    <li>{{ $i->name }} <a href="{{ URL::to('images/'.$c->id .'/edit') }}">Edit</a>


        {{ Form::open(array('route' => array('images.destroy', $i->id), 'method' => 'delete')) }}
        <button type="submit" href="{{ URL::route('images.destroy', $c->id) }}" class="btn btn-danger btn-mini">Delete</button>
        {{ Form::close() }}

</ul>
@endforeach

@stop