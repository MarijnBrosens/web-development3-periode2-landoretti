<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    {!! Html::style('css/app.css') !!}

</head>
<body>

@include('partials.nav')

<div id="main">
    @yield('content')
</div>

<h2>todo</h2>
<ol>
    <li>translate</li>
    <li>trans routes</li>
    <li>angular https://www.youtube.com/watch?v=QBdudSQ1aLg</li>
</ol>

<h2>sprites</h2>
<i class="sprite sprite-banner-info-arrow-right"></i>
<i class="sprite sprite-circle-icon"></i>
<i class="sprite sprite-detail-addtowishlist"></i>
<i class="sprite sprite-detail-bid-arrow-right"></i>
<i class="sprite sprite-detail-bids"></i>
<i class="sprite sprite-detail-related-hover"></i>
<i class="sprite sprite-detail-visitauction-arrow"></i>
<i class="sprite sprite-faq-isearch"></i>
<i class="sprite sprite-filter-advanced-options-arrow"></i>
<i class="sprite sprite-footer-email"></i>
<i class="sprite sprite-footer-phone"></i>
<i class="sprite sprite-footer-search"></i>
<i class="sprite sprite-footer-social"></i>
<i class="sprite sprite-home-arrow-down-popular"></i>
<i class="sprite sprite-home-carousel-bullet-empty"></i>
<i class="sprite sprite-home-carousel-bullet-full"></i>
<i class="sprite sprite-home-carousel-next"></i>
<i class="sprite sprite-home-carousel-previous"></i>
<i class="sprite sprite-home-everyonehappy"></i>
<i class="sprite sprite-home-hover-search-icon-big"></i>
<i class="sprite sprite-home-makedeals"></i>
<i class="sprite sprite-home-signup"></i>
<i class="sprite sprite-nav-logo-no-shadow"></i>
<i class="sprite sprite-nav-menu"></i>
<i class="sprite sprite-nav-search"></i>
<i class="sprite sprite-nav-user"></i>

<h1>used plugins</h1>
<h3>laravel</h3>
<ul>
    <li>"intervention/image"</li>
    <li>"barryvdh/laravel-debugbar"</li>
    <li>"davejamesmiller/laravel-breadcrumbs"</li>
    <li>"dimsav/laravel-translatable"</li>
    <li>"mcamara/laravel-localization"</li>
</ul>
<h3>js</h3>
<ul>
    <li>http://bxslider.com</li>
</ul>


@include('partials.footer')

{!! Html::script('js/app.js') !!}

</body>
</html>