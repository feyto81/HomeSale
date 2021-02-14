
<!DOCTYPE html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
@include('frontend.partials.css')
</head>
<body>
<div id="wrapper">

@include('frontend.partials.header')
@yield('content')

@include('frontend.partials.footer')
<div id="backtotop"><a href="#"></a></div>
@include('frontend.partials.script')
</div>
</body>
</html>