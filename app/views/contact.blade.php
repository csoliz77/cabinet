@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach



<script>
$(document).ready(function(){
    $( "ul:last" ).addClass( "contact" );
    $("ul").addClass("contact");
});
</script>
@stop


