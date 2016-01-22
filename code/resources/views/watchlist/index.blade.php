@extends('templates.layout')

@section('title', 'Watchlist')

@section('content')

    <main id="my-auctions">

        @if(count($newest))

            @include('partials.spotlight-header', [ 'auction' => $newest ])

        @endif

        <div class="container">
            {!! Breadcrumbs::render( 'watchlist' , Auth::user() ) !!}
        </div>

        <div class="clearfix">

            <div class="container">

                <h1 class="heading heading__padding--bottom--small-between-medium heading__weight--normal heading__padding--top--medium heading__color--grey--mid">
                    {{ trans('my-watchlist.my-watchlist') }}
                </h1>

                <!--
                <a href="{{ route( 'newAuction', $parameters = array(), $attributes = array() ) }}"
                   class="button button--light button__pull--right">
                    {{ trans('my-watchlist.clear-watchlist') }} <i class="sprite sprite sprite-detail-visitauction-arrow"></i>
                </a>

                -->

                <div class="clearfix">

                    @if(count($auctions))

                        @include('my_auctions.partials.table', [ 'auctions' => $auctions ])

                    @else

                        <p>You currently have no auctions to your watchlist</p>

                    @endif


                </div>

            </div>

        </div>

    </main>



@stop