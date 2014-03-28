@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach
<hr/>


<div class="categories" id="sortable">
@foreach($images as $i)
<div class="boxes" id="page_{{$i->id}}"> <img src="assets/imgs/{{ $i->thumbs }}"></div>
@endforeach
</div>


<script>
$(function(){
    $("#sortable").sortable({
    	update: function(event, ui) {
    	    $.post("ajax.php", {
    	    	type: "orderPages",
    	    	pages: $('#sortable').sortable('serialize') });
	}
    	});
});
</script>




@stop
