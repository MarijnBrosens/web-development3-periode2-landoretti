@extends('templates.layout')

@section('title', 'MyBids')

@section('content')

    <main id="my-auctions">

        @if(count($newest))

            @include('partials.spotlight-header', [ 'auction' => $newest ])

        @endif

        <div class="container">
            {!! Breadcrumbs::render( 'my-auctions' , Auth::user() ) !!}
        </div>

        <div class="clearfix">

            <div class="container">

                <h1 class="heading heading__weight--normal heading__padding--top--medium heading__color--grey--mid">
                    {{ trans('my-auctions.my-auctions') }}
                </h1>

                <a href="{{ route( 'newAuction', $parameters = array(), $attributes = array() ) }}"
                   class="button button--light button__pull--right">
                    {{ trans('my-auctions.add-new-auction') }} <i class="sprite sprite sprite-detail-visitauction-arrow"></i>
                </a>

                <div class="clearfix">
                    <h3 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.pending') }}
                    </h3>


                    @if(count($pending))

                        @include('my_auctions.partials.table', [ 'auctions' => $pending ])

                    @else

                        <p>You currently have no auctions pending</p>

                    @endif


                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.refused') }}
                    </h3>


                    @if(count($refused))

                        @include('my_auctions.partials.table', [ 'auctions' => $refused ])

                    @else

                        <p>You currently have no auctions refused</p>

                    @endif

                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.active') }}
                    </h3>

                    @if(count($active))

                        @include('my_auctions.partials.table', [ 'auctions' => $active ])

                    @else

                        <p>You currently have no auctions refused</p>

                    @endif

                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.expired') }}
                    </h3>


                    @if(count($expired))

                        @include('my_auctions.partials.table', [ 'auctions' => $expired ])

                    @else

                        <p>You currently have no auctions expired</p>

                    @endif

                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.sold') }}
                    </h3>

                    @if(count($sold))

                        @include('my_auctions.partials.table', [ 'auctions' => $sold ])

                    @else

                        <p>You currently have no auctions expired</p>

                    @endif




                </div>

            </div>

        </div>

    </main>



@stop