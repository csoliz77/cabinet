@extends('templates.master')

@section('content')

<table class="table table-bordered">
<tr>
<th>Categories</th>
<th>Sections</th>
<th>Images</th>
</tr>


<tr>
<td>
<a href="{{ URL::to('categories')}}">List of Categories</a>
</td>
<td>
<a href="{{ URL::to('sections')}}">List of Sections</a>
</td>
<td>
<a href="{{ URL::to('images')}}">List of Images</a>
</td>
</tr>



<tr>
<td>
<a href="{{ URL::to('categories/create')}}">Add Category</a>
</td>
<td>
<a href="{{ URL::to('sections/create')}}">Add Section</a>
</td>
<td>
<a href="{{ URL::to('images/create')}}">Add Image</a>
</td>
</tr>

</table>
@stop
