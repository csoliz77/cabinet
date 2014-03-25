@extends('templates.master')

@section('content')

@foreach($section as $s)
<p>{{ $s->content }}</p>
@endforeach

<hr>

<ul class="bxslider">
@foreach($images as $i)
<li><img src="/assets/imgs/{{ $i->filename }}" ></li>
@endforeach
</ul>

<script>
$(document).ready(function() {
    $('.bxslider').bxSlider({
	mode: 'fade',
    auto: true,
	infiniteLoop: false,
	autoControls: true,
	hideControlOnEnd: true
   });
    });

</script>

@stop
