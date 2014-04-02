@extends('templates.master')


@section('content')



@foreach($section as $s)
{{ $s->content }}
@endforeach

<hr>
<div class="bxsliderwrap">
<ul class="bxslider"> 
@foreach($images as $i) 
 <li><img src="/assets/imgs/slideshow/{{ $i->slideshow }}" ></li> 
 @endforeach 
 </ul>  
</div>

<script>
$(document).ready(function() {
    $('.bxslider').bxSlider({
	mode: 'fade',
        auto: true,
	infiniteLoop:true
   });
    });

</script>

<script>

$( "p" ).addClass( "intro" );
</script>

<script>

    $("p:eq(0)").append($('.bxslider'));
</script>
@stop
