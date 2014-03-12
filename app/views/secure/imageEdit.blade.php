@extends('templates.master')

@section('content')
<table class="table table-hover">
    <caption><h3>Edit Image</h3></caption>
    <tr>
        <th>Image</th>
    </tr>
    <tr>
        <td><img src="/assets/imgs/{{ $image->thumbs}}"/></td>
    </tr>
</table>


{{ Form::model($image, array('route'=> array('images.update', $image->id) , 'method'=>'PUT', 'name'=>'form', 'role'=>'form')) }}

{{ Form::hidden('id', $image->id) }}

{{ Form::hidden('category', $image->category) }}
<div class="form-group">
{{ Form::label('name', 'Image Name: ') }}
{{ Form::text('name', $image->name, array('class'=>'form-control')) }}
</div>
<div class="form-group">
{{ Form::label ('caption', 'Caption ') }}
{{ Form::textarea('caption', $image->caption, array('class'=>'ckeditor', 'rows'=>'2', 'id'=>'editor1')) }}
</div>
{{ Form::submit('Submit') }}

{{ Form::close() }}

 <script>
 CKEDITOR.replace('editor1');
 </script>

@stop