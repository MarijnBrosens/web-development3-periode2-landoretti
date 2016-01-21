@extends('templates.layout')

@section('title', $auction->title)

@section('content')

    <main id="detail">

        @include('partials.spotlight-header', [ 'auction' => $newest])

        <div class="container">
            <div class="clearfix">
                {!! Breadcrumbs::render('art-detail') !!}
            </div>

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

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>



            {{$auction->slug}}
            <h1>{{$auction->artist_id}}</h1>


        </div>

    </main>

@stop