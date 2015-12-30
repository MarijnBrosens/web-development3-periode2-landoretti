@extends('templates.layout')

@section('title', 'Art')

@section('content')

<main id="art">
    <header class="spotlight-header" style="background-image: url(http://www.fillmurray.com/g/1920/800);">
        <div class="container">
            <article class="spotlight-header__info">
                <h1 class="spotlight-header__info--title">Lorum Ipsum</h1>
                <p  class="spotlight-header__info--text">
                    {{
                        str_limit(
                            "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mussdfsdfsdfsdf",
                            $limit = 158,
                            $end = '...'
                        )
                    }}
                </p>
                <span class="spotlight-header__info--price-text">
                    Price: <span class="spotlight-header__info--price">&euro;320</span>
                </span>
                <a href="#" class="spotlight-header__info--btn">
                    Visit Auction <i class="sprite sprite-banner-info-arrow-right"></i>
                </a>

            </article>
        </div>
    </header>
    <div class="filter-wrapper">
        <div class="container">
            <div class="filter__inner-container">

                <div class="sort-by">
                    <span class="sort-by__title">Sort By: </span>
                    <ul class="sort-by__list">
                        <li class="sort-by__text active">ending soonest</li>
                        <li class="sort-by__text">ending latest</li>
                        <li class="sort-by__text">new auctions</li>
                        <li class="sort-by__text">popular auctions</li>
                    </ul>
                </div>

                <div class="advanced-options">
                    Advanced Options
                    <i class="sprite sprite-filter-advanced-options-arrow"></i>
                </div>

            </div>

        </div>

        http://sachinchoolur.github.io/lightslider/index.html

        https://github.com/czim/laravel-filter

        http://codepen.io/javve/pen/bBfgD

        http://www.listjs.com/examples/pagination

        http://stackoverflow.com/questions/27673115/change-update-page-content-without-reloading-page-by-ajax-laravel
    </div>

    <div class="container">
        {!! Breadcrumbs::render('art') !!}

        {!! $auctions->render() !!}
    </div>



    <div class="grid-all-auctions">

        <div class="container">

            <div class="row">

                @foreach($auctions as $key=>$item)

                    @if($key == 0)

                        <div class="grid-all-auctions__item grid-all-auctions__first-item">
                            <figure class="grid-all-auctions__first-item--img" style="background-image: url(http://www.fillmurray.com/g/1920/800);">
                                <h2>{{$item->title}}</h2>
                                <p>dit is wss een info vak, navragen aan sam</p>
                            </figure>
                        </div>

                    @else

                        <div class="grid-all-auctions__item">
                            <figure class="grid-all-auctions__item--img" style="background-image: url(http://www.fillmurray.com/g/1920/800);">
                            </figure>
                            <h2>{{$item->title}}</h2>
                        </div>

                    @endif

                @endforeach

            </div>

        </div>

    </div>

    <div class="container">
        {!! $auctions->render() !!}
    </div>



</main>

@stop