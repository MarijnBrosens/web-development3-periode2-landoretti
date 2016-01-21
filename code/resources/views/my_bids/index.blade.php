@extends('templates.layout')

@section('title', 'MyBids')

@section('content')

    @include('partials.spotlight-header', [ 'auction' => $newest])

    <div class="container">

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

@stop