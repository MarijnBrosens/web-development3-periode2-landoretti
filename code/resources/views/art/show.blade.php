@extends('templates.layout')

@section('title', $auction->title)

@section('content')

    <main id="detail">

        @include('partials.spotlight-header', [ 'auction' => $newest])

        <div class="container">
            <div class="clearfix">
                <div class="breadcrumb--padding-top">
                    {!! Breadcrumbs::render('art-detail') !!}
                </div>

                <div class="lot-id">
                    Lot ID:
                    {{$auction->id}}
                </div>

            </div>

        </div>

        <div class="container">

            @include('errors.message')

            <h1 class="heading heading__padding--top--small-medium heading__color--grey--mid heading__size--bigger">
                {{$auction->title}}
            </h1>
            <h3 class=" heading
                        heading__padding--top--small-between-medium
                        heading__padding--bottom--small-between-medium
                        heading__color--theme--dark
                        heading__size--small-between-medium
            ">
                25d 24u 25m
                <span>(7bids) <i class="sprite sprite-detail-addtowishlist"></i></span>
            </h3>

            <div class="clearfix">

                <div class="detail-upper-wrapper">

                <div class="detail-slider-wrap">
                    <ul class="detail-slider bxslider">
                        <li style="background-image: url({{ asset('img/'.$auction->image_artwork)}});"></li>
                        <li style="background-image: url({{ asset('img/'.$auction->image_signature)}});"></li>

                        @if( count( $auction->image_optional ) )

                            <li style="background-image: url({{ asset('img/'.$auction->image_optional)}});"></li>

                        @endif
                    </ul>

                    <div id="detail-pager">
                        <a data-slide-index="0" href="" style="background-image: url({{  asset('img/'.$auction->image_artwork )}});"></a>
                        <a data-slide-index="1" href="" style="background-image: url({{  asset('img/'.$auction->image_signature )}});"></a>

                        @if( count( $auction->image_optional ) )

                            <a data-slide-index="2" href="" style="background-image: url( {{ asset('img/'. $auction->image_optional) }});"></a>

                        @endif
                    </div>
                </div>



                <div class="detail__content--right">

                    <h1 class="heading heading__color--grey--mid heading__size--medium-between-big">{{$auction->title}}</h1>
                    <h3 class=" heading
                                heading__color--theme--dark
                                heading__padding--bottom--small-between-medium
                                heading__color--theme--dark
                                heading__size--small-between-medium
                                heading__weight--normal"
                    >
                        {{$auction->artist}}
                    </h3>

                    <span class="hr-line"></span>

                        <p class="  heading
                                    heading__padding--top--small-between-medium
                                    heading__size--small-between-medium
                                    heading__color--theme--light
                                    heading__size--small-between-medium
                                    heading__weight--bold ">
                            25d 14u 44m left
                        </p>

                        <p class="  heading
                                    heading__size--small-between-medium
                                    heading__color--grey--light
                                    heading__padding--bottom--small-between-medium
                                    heading__size--small-between-medium
                                    heading__weight--normal ">
                            September 09,2013,13.00 p.m. (EST)
                        </p>

                    <span class="hr-line"></span>

                    <p style="font-size: 13px;">
                        {{
                            str_limit(
                                $auction->condition,
                                $limit = 100,
                                $end = '...'
                            )
                        }}
                        <a style="display: none">{{ trans('detail.more') }}</a>
                    </p>


                    @if( $auction->status_id != 4 )




                    <div class="jumbotron jumbotron__margin--top--small">

                        <div class="jumbotron__inner--small">

                            <h3 class=" heading
                                        heading__size--small-between-medium-medium
                                        heading__weight--normal
                                        heading__color--theme--dark
                            ">
                                {{ trans('detail.estimated-price') }}:
                            </h3>

                            <h1 class=" heading
                                        heading__size--medium-big
                                        heading__weight--bold
                                        heading__color--theme--dark
                            ">
                                &#8364; {{$auction->minimum_price}} - &#8364; {{$auction->maximum_price}}
                            </h1>



                            {!! Form::open( array(
                                'route' => 'buyOutAuction',
                                'method' => 'post',
                                'class' => '',
                                'id' => 'buy_out_form'))!!}

                                {!! Form::hidden('id', $auction->id) !!}

                                <a class="link--buy-now" href="javascript:{}" onclick="document.getElementById('buy_out_form').submit(); return false;">{{ trans('detail.buy-now-for') }} &#8364; {{$auction->buyout_price}}</a>

                            {!! Form::close() !!}

                            <div class="bids-count">
                                {{ trans('detail.bids') }}: 7
                            </div>

                        </div>

                        {!! Form::open( array(
                            'route' => 'bid',
                            'method' => 'post',
                            'class' => 'bid_now_form',
                            'id' => 'bid_now_form'))!!}

                            {!! Form::hidden('id', $auction->id) !!}

                            <div class="bid-now-wrapper clearfix">
                                <input type="number" name="bid" id="bid"/>
                                <button class="button--bid" type="submit">{{ trans('detail.bid-now') }} <i class="sprite sprite-detail-bid-arrow-right"></i></button>
                            </div>

                        {!! Form::close() !!}

                        <div class="jumbotron__inner--smaller">
                            <a href="#" class="link--add-to-favourites">
                                <i class="sprite sprite-detail-addtowishlist sprite__margin--right"></i>{{ trans('detail.add-to-watchlist') }}
                            </a>
                        </div>


                    </div>

                    @else

                        <h1>
                            {{ trans('detail.sold') }}
                        </h1>

                    @endif

                </div>

                </div>


                <div class="jumbotron jumbotron__margin--top--medium clearfix">

                    <div class="jumbotron__inner--medium">
                        <h3 class=" heading
                                    heading__size--small-between-medium
                        ">
                            {{ trans('detail.description') }}
                        </h3>
                        <p class="  heading
                                    heading__color--grey--light
                                    heading__size--small
                        ">
                            {{$auction->description}}
                        </p>

                        <h3 class=" heading
                                    heading__padding--top--small-between-medium
                                    heading__size--small-between-medium
                        ">
                            {{ trans('detail.origin') }}
                        </h3>
                        <p class="  heading
                                    heading__color--grey--light
                                    heading__size--small
                        ">
                            {{$auction->origin}}
                        </p>
                    </div>

                </div>


            </div>


            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>


        </div>

    </main>

@stop