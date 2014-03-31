@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach



<script>

    $( "ul" )eq(1).addClass( "contact" );
    $("li").addClass("contact");
</script>
@stop


