@extends('templates.master')

@section('content')
<table class="table table-responsive">
    <tr>
        <th>Image</th>
    </tr>
    <tr>
        <td><img src="/assets/imgs/{{ $image->thumbs}}"/></td>
    </tr>
</table>


{{ Form::model($image, array('route'=> array('images.update', $image->id) , 'method'=>'PUT')) }}

{{ Form::hidden('id', $image->id) }}

{{ Form::hidden('category', $image->category) }}
<div class="form-group">
{{ Form::label('name', 'Image Name: ') }}
{{ Form::text('name', $image->name, array('class'=>'form-control')) }}
</div>
<div class="form-group">
{{ Form::label ('caption', 'Caption ') }}
{{ Form::textarea('caption', $image->caption, array('class'=>'form-control', 'rows'=>'2')) }}
</div>
{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop