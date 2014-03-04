<!DOCTYPE html>
<html>
<head>
<title>{{ $title }}</title>
@include('partials.head')
</head>
<body>
<div class="wrapper">
    <div class="masthead">
    <a href="http://cb2.local/">{{ HTML::image('/assets/imgs/masthead.jpg') }} </a>
</div>


<div class="content">

@yield ('content')

</div>


</div>

@include('partials.footer')
</body>

</html>

