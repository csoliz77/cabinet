@extends('templates.master')
@section('head')
@parent
{{ HTML::style('assets/css/slimbox2.css')}}

<!--js section -->
{{ HTML::script('assets/js/jquery-2.1.0.js') }}
{{ HTML::script('assets/js/slimbox2.js') }}
{{ HTML::script('assets/js/bootstrap.js') }}
{{ HTML::script('assets/js/jquery-ui-1.10.4.custom.js') }}
@stop

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


