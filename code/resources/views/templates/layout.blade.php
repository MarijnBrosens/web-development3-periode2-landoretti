<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    {!! Html::style('css/app.css') !!}
    {!! Html::script('js/app.js') !!}
</head>
<body>

@include('partials.nav')
@yield('content')

<h2>todo</h2>
<ul>
    <li>translate</li>
    <li>trans routes</li>
    <li>angular https://www.youtube.com/watch?v=QBdudSQ1aLg</li>
</ul>

</body>
</html>