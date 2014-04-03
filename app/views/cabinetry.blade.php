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

<hr/>

<div class="categories" id="sortable">
@foreach($images as $i)
<div class="boxes" id="page_{{$i->id}}"><a href="assets/imgs/{{$i->filename }}" rel="lightbox-cabinetry" title="{{$i->caption }}"> <img src="assets/imgs/{{$i->thumbs }}"></a></div>
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
