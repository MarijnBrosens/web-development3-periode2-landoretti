@extends('templates.layout')

@section('title', 'Art')

@section('content')

<main id="art">
    @if(count($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest])

    @endif

    <div class="filter-wrapper">
        <div class="container">
            <div class="filter__inner-container">

                <div class="sort-by">
                    <span class="sort-by__title">{{ trans('art.sort-by') }}: </span>
                    <ul class="sort-by__list">
                        <li class="sort-by__text active">{{ trans('art.endings-soonest') }}</li>
                        <li class="sort-by__text">{{ trans('art.endings-latest') }}</li>
                        <li class="sort-by__text">{{ trans('art.new-auctions') }}</li>
                        <li class="sort-by__text">{{ trans('art.popular-auctions') }}</li>
                    </ul>
                </div>

                <div class="advanced-options">
                    {{ trans('art.advanced-options') }}
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
        <div class="clearfix">
            {!! Breadcrumbs::render('art') !!}

            @include('partials.pagination', ['paginator' => $auctions])
        </div>

    </div>



    <div class="grid-all-auctions">

        <div class="container">

            @if(count( $auctions ) )

                <div class="row--full-width">

                    <div class="grid-all-auctions__item grid-all-auctions__first-item">
                        <figure class="grid-all-auctions__first-item--img" style="background-image: url( {{asset( 'img/'. $newest->image_artwork )}});">
                            <div class="featured">
                                <h1 class="featured--title">{{$newest->title}}</h1>
                                <p class="featured--description">{{$newest->description}}</p>
                            </div>

                        </figure>


                    </div>

                    @foreach($auctions as $key=>$item)

                        <div class="grid-all-auctions__item">
                            <a href="{{ route( 'show', $parameters = array( $item->slug ), $attributes = array() ) }}">
                                <figure class="auction grid-all-auctions__item--img" style="background-image: url(  {{asset( 'img/'. $item->image_artwork )}} );">
                                    <div class="overlay">
                                        <i class="sprite sprite-home-hover-search-icon-big"></i>
                                    </div>
                                </figure>
                            </a>
                            <div class="auction--info">
                                <h3 class="auction--artist">{{$item->artist}}</h3>
                                <h2 class="auction--title">{{$item->title}}</h2>
                                <h1 class="auction--price">&#8364; {{$item->current_price}}</h1>

                                <div class="auction auction--button-time clearfix">
                                    <h2 class="auction--end-counter">25d 14u 44m</h2>
                                    <a class="button button--small button__pull--right button--light" href="{{ route( 'show', $parameters = array( $item->slug ), $attributes = array() ) }}">
                                        {{trans('art.visit-auction')}} <i class="sprite sprite sprite-detail-visitauction-arrow"></i>
                                    </a>


                                </div>

                            </div>

                        </div>

                    @endforeach
                </div>

            @else

                <h1>{{ trans('art.no-auction')}}</h1>

            @endif

        </div>

    </div>

    <div class="container">
        @include('partials.pagination', ['paginator' => $auctions])
    </div>



</main>

@stop