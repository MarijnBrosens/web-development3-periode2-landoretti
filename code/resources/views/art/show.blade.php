@extends('templates.layout')

@section('title', 'Art')

@section('content')

    <main id="detail">

        <header class="spotlight-header" style="background-image: url(http://www.fillmurray.com/g/1920/800);">
            <div class="container">
                <article class="spotlight-header__info">
                    <h1 class="spotlight-header__info--title">Lorum Ipsum</h1>
                    <p  class="spotlight-header__info--text">
                        {{
                            str_limit(
                                "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mussdfsdfsdfsdf",
                                $limit = 158,
                                $end = '...'
                            )
                        }}
                    </p>
                <span class="spotlight-header__info--price-text">
                    {{ trans('art.price') }}: <span class="spotlight-header__info--price">&euro;320</span>
                </span>
                    <a href="#" class="spotlight-header__info--btn">
                        {{ trans('art.visit-auction') }} <i class="sprite sprite-banner-info-arrow-right"></i>
                    </a>

                </article>
            </div>
        </header>

        <div class="container">
            {!! Breadcrumbs::render('art-detail') !!}
        </div>

        <div class="container">

            <div class="detail-slider-wrap">
                <ul class="detail-slider bxslider">
                    <li style="background-image: url({{$auction->image_artwork}});"></li>
                    <li style="background-image: url({{$auction->image_signature}});"></li>

                    @if( count( $auction->image_optional ) )

                        <li style="background-image: url({{$auction->image_optional}});"></li>

                    @endif
                </ul>

                <div id="detail-pager">
                    <a data-slide-index="0" href="" style="background-image: url({{$auction->image_artwork}});"></a>
                    <a data-slide-index="1" href="" style="background-image: url({{$auction->image_signature}});"></a>

                    @if( count( $auction->image_optional ) )

                        <a data-slide-index="2" href="" style="background-image: url({{$auction->image_optional}});"></a>

                    @endif
                </div>
            </div>



            {{$auction->slug}}
            <h1>{{$auction->artist_id}}</h1>


        </div>

    </main>


@stop