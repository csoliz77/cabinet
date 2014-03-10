@extends('templates.master')

@section('content')

Image: <img src="/assets/imgs/{{ $image->thumbs}}"/>

{{ Form::model($image, array('route'=> array('images.update', $image->id) , 'method'=>'PUT')) }}

{{ Form::hidden('id', $image->id) }}

{{ Form::hidden('category', $image->category) }}
{{ Form::label('name', 'Image Name: ') }}
{{ Form::text('name', $image->name) }}
<br />
{{ Form::label ('caption', 'Caption ') }}
{{ Form::textarea('caption', $image->caption) }}
<br />
{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop