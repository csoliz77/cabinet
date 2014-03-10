@extends('templates.master')

@section('content')




<table class="table table-bordered">
    <caption><h3>List of Categories</h3></caption>

   <tr>
       <th>Category Name</th>
       <th>Edit</th>
       <th>Delete</th>
   </tr>
    @foreach($category as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td><a href="{{ URL::to('categories/'.$c->id .'/edit') }}">Edit</a></td>
        <td>{{ Form::open(array('route' => array('categories.destroy', $c->id), 'method' => 'delete')) }}
            <button type="submit" href="{{ URL::route('categories.destroy', $c->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}</td>
    </tr>
    @endforeach
</table>

@stop