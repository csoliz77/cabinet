@extends('templates.master')

@section('content')

<table class="table table-bordered">
    <tr>
        <th>Category ID: </th>
        <th>Category Name: </th>
    </tr>
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
    </tr>
</table>

@stop
