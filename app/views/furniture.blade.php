@extends('templates.master')

@section('content')

@foreach($section as $s)
{{ $s->content }}
@endforeach
<style>
#sortable { list-style-type:none;
margin:0;
padding:0;
width:750px;
}
#sortable li{
margin: 3px 3px 3px 0;
padding: 1px;
float:left;
width: 200px;
height:200px;
font-size: 4em;
text-align:center;
}
</style>

<hr/>
<ul id="sortable">
@foreach($images as $i)
<li class="ui-state-default"><img src="assets/imgs/{{ $i->thumbs }}"></li>
@endforeach
</ul>
<script>

$(function(){
    $("#sortable").sortable({
    	handle: '.handle',
    	tolerance: 'pointer'});
    $("#sortable").disableSelection();
});
</script>

@stop
