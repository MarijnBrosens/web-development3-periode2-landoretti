@extends('templates.layout')

@section('title', 'MyBids')

@section('content')

    <main id="my-auctions">

        @include('partials.spotlight-header', [ 'auction' => $newest])

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

                    <table>
                        <tr>
                            <th></th>
                            <th class="heading__weight--normal heading__color--grey--mid td__padding--left td__text--left"> {{ trans('my-auctions.auction-details') }}</th>
                            <th class="heading__weight--normal heading__color--grey--mid"> {{ trans('my-auctions.estimated-price') }}</th>
                            <th class="heading__weight--normal heading__color--grey--mid"> {{ trans('my-auctions.end-time') }}</th>
                            <th class="heading__weight--normal heading__color--grey--mid td__text--center"> {{ trans('my-auctions.remaining-time') }}</th>
                        </tr>

                        @foreach($auctions as $item)

                            <tr>
                                <td class="td--xs bg-img" style="background-image: url( {{ $item->image_artwork }} );">

                                </td>
                                <td class="td--md td__padding--left">
                                    <h2 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">{{$item->title}}</h2>
                                    <h3 class="heading heading__size--small heading__weight--bold heading__color--theme--dark">1979, Salvador Dali</h3>
                                </td>
                                <td class="td--sm td__text--center">
                                    <h2 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">&#8364; 8.900</h2>
                                </td>
                                <td class="td--sm td__text--center td__padding--around">
                                    <h3 class="heading heading__size--small heading__weight--bold heading__color--grey--mid">September 09, 2013 13:00 p.m. (EST)</h3>
                                </td>
                                <td class="td--sm td__text--center td__padding--around">
                                    <h3 class="heading heading__size--small-medium heading__weight--normal heading__color--grey--mid">25d 14u 44m</h3>
                                </td>
                            </tr>

                        @endforeach

                    </table>


                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.refused') }}
                    </h3>

                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.active') }}
                    </h3>

                    <h3 class="heading heading__padding--top--medium heading__size--small-medium heading__weight--normal heading__color--grey--mid heading__padding--bottom--small-medium">
                        {{ trans('my-auctions.expired') }}
                    </h3>



                </div>

            </div>

        </div>

    </main>



@stop