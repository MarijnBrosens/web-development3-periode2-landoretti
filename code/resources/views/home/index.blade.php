@extends('templates.layout')

@section('title', 'Home')

@section('content')

    <main id="home">

        @if( count( $auctions ) )

            <ul class="bxslider home-slider">

                @foreach($auctions as $auction)

                    <li>
                        <img src="{{$auction->image_artwork}}" alt="{{$auction->title}}" title="{{$auction->description}}"/>
                    </li>

                @endforeach

            </ul>

        @endif


        <div class="wrapper wrapper-how-does-it-work">
            <div class="container">
                <h1>{{ trans('home.title-how-does-it-work') }}</h1>

                <div class="row text-center">
                    <div class="col-4">
                        <i class="sprite sprite-home-signup"></i>
                        <h2>{{ trans('home.sign-up') }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-4">
                        <i class="sprite sprite-home-makedeals"></i>
                        <h2>{{ trans('home.make-deals') }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-4">
                        <i class="sprite sprite-home-everyonehappy"></i>
                        <h2>{{ trans('home.everyone-happy') }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>



        @if( count( $popular ) )

            <div class="wrapper wrapper-most-popular">
                <div class="container">
                    <h1>{{ trans('home.title-most-popular') }} <i class="sprite sprite-home-arrow-down-popular"></i></h1>

                    <div class="clearfix">

                        <ul class="grid-most-popular">

                            @foreach($popular as $auction)

                                <a href="{{ route( 'show', $parameters = array( $auction->slug ), $attributes = array() ) }}" class="item" style="background-image: url({{$auction->image_artwork}}});">

                                    <div class="overlay">
                                        <i class="sprite sprite-home-hover-search-icon-big"></i>
                                    </div>

                                </a>

                            @endforeach

                        </ul>
                    </div>
                </div>

            @endif

        </div>

    </main>

@stop