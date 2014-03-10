@extends('templates.master')

@section('content')



<table class="table table-bordered">
    <caption><h3>List of Sections</h3></caption>
    @foreach($sections as $c)

    <tr>
        <th>Category</th>



        <th>Content</th>
    </tr>
    <tr>
        <td>{{ $c->category }}</td>
        <td>{{ $c->content }}</td>
     </tr>



    <tr>

        <td><a href="{{ URL::to('sections/'.$c->id .'/edit') }}">Edit</a></td>
        <td>{{ Form::open(array('route' => array('categories.destroy', $c->id), 'method' => 'delete')) }}
            <button type="submit" href="{{ URL::route('sections.destroy', $c->id) }}" class="btn btn-danger btn-mini">Delete</button>
            {{ Form::close() }}</td>

    </tr>
    @endforeach
</table>

@stop