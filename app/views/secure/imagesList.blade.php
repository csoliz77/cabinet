@extends('templates.master')

@section('content')


<table class="table table-bordered">
    <caption><h3>List of Images</h3></caption>
    <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>

    @foreach($images as $i)
    <tr>
        <td>{{ $i->name }}</td>
        <td><img src="/assets/imgs/{{ $i->thumbs}}" /></td>
        <td><a href="{{ URL::to('images/'.$i->id .'/edit') }}">Edit</a></td>
        <td>{{ Form::open(array('route' => array('images.destroy', $i->id), 'method' => 'delete')) }}
            <button type="submit" href="{{ URL::route('images.destroy', $i->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}
        </td>
    </tr>
  @endforeach
</table>
@stop