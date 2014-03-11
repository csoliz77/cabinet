<div class="navbarstyle">
    <ul class="list-inline">
        @foreach(Category::orderBy('id','ASC')->get() as $c)
        <li><a class="fontchange" href="http://cb2.local/{{$c->name}}">{{ ($c->navbar) }}</a> </li>
        @endforeach
    </ul>
</div>
