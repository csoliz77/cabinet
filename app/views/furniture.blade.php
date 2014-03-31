@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach
<hr/>


<div class="categories" id="sortable">
@foreach($images as $i)
<div class="boxes" id="page_{{$i->id}}"><a href="assets/imgs/{{ $i->filename }}" rel="lightbox-furniture" title="{{$i->caption}}"> <img src="assets/imgs/{{ $i->thumbs }}"></a></div>
@endforeach
</div>

<div id="example"></div>
<div class="pagination-div">
{{ $images->links() }}
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
