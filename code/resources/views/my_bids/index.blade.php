@extends('templates.layout')

@section('title', 'MyBids')

@section('content')

    @if(count($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest ])

    @endif

    <div class="container">
        {!! Breadcrumbs::render( 'my-bids' , Auth::user() ) !!}
    </div>

    <div class="container">

        <h1 class="heading heading__weight--normal heading__padding--top--medium heading__color--grey--mid heading__padding--bottom--small-between-medium">
            {{ trans('my-bids.my-bids') }}
        </h1>


            @if(count($auctions))

                @include('my_bids.partials.table', [ 'auctions' => $auctions ])

            @else

                <p>You currently have no bids</p>

            @endif


    </div>

@stop