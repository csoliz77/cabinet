@extends('templates.master')

@section('content')


<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Section</th>
        <th>Caption</th>
        <th>Name</th>
        <th>Image</th>

    </tr>

    <tr>
        <td>{{ $image->id }}</td>
        <td>{{ $image->category }}</td>
        <td>{{ $image->caption }}</td>
        <td>{{ $image->name }}</td>
        <td><img src="/assets/imgs/{{ $image->thumbs }}" /> </td>
    </tr>


</table>


@stop