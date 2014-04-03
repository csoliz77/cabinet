<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title }}</title>

    @section('head')
	{{ HTML::style('assets/css/style.css') }}
	{{ HTML::style('assets/css/bootstrap.css') }}
    @show
</head>
<body>
<div class="wrapper">
    <div class="masthead">
    <a href="http://cb2.local/">{{ HTML::image('/assets/imgs/masthead.jpg') }} </a>
</div>

@include('partials.navigation')

<div class="content">

@yield ('content')

</div>


</div>

@include('partials.footer')
</body>

</html>

