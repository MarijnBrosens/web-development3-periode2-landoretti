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
        {!! Breadcrumbs::render('art') !!}

        @include('partials.pagination', ['paginator' => $auctions])
    </div>



    <div class="grid-all-auctions">

        <div class="container">

            @if(count( $auctions ) )

                <div class="row--full-width">

                    @foreach($auctions as $key=>$item)

                        @if( $key == 0 )

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
                                {!! link_to_route('show', $title = trans('art.visit-auction') , $parameters = array($item->slug), $attributes = array()) !!}
                            </div>

                        @endif

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