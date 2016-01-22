<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    {!! Html::style('css/app.css') !!}

</head>
<body>

@include('partials.nav')

<div id="main" class="main-layout">
    @yield('content')
</div>

@include('partials.footer')

{!! Html::script('js/app.js') !!}
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-553c17ad0c6ef836" async="async"></script>

</body>
</html>