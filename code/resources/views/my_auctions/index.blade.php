@extends('templates.layout')

@section('title', 'MyBids')

@section('content')

    <main id="my-auctions">

        @include('partials.spotlight-header')

        <div class="container">
            {!! Breadcrumbs::render( 'my-auctions' , Auth::user() ) !!}

            @include('partials.pagination', ['paginator' => $auctions])
        </div>

        <div class="clearfix">

            <div class="container">

                <h1 class="heading heading__weight--light heading__padding--top--medium heading__color--grey--mid">{{ trans('my-auctions.my-auctions') }}</h1>

                <a href="{{ route( 'newAuction', $parameters = array(), $attributes = array() ) }}"
                   class="button button--light button__pull--right">
                    {{ trans('my-auctions.add-new-auction') }} <i class="sprite sprite sprite-detail-visitauction-arrow"></i>
                </a>




                <div class="clearfix">
                    <h3>{{ trans('my-auctions.pending') }}</h3>


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

            </div>

        </div>

    </main>



@stop