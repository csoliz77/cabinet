@extends('templates.master')

@section('content')



<table class="table table-bordered">
    <tr>
        <th>Section ID: </th>
        <th>Section: </th>
        <th>Paragraph</th>
    </tr>

    <tr>
        <td>{{ $section->id }}</td>
        <td>{{ $section->category }}</td>
        <td>{{ $section->content }}</td>
    </tr>
</table>
@stop