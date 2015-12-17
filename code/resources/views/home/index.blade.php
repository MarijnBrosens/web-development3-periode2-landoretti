@extends('templates.layout')

@section('title', 'Home')

@section('content')

    <main id="home">

        <ul class="bxslider home-slider">
            <li><img src="http://www.fillmurray.com/g/1920/800" alt="chillzooi" title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a."/></li>
            <li><img src="http://www.fillmurray.com/g/1921/800" alt="chillzooi" title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a."/></li>
            <li><img src="http://www.fillmurray.com/1922/800" alt="chillzooi" title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a."/></li>
            <li><img src="http://www.fillmurray.com/g/1923/800" alt="chillzooi" title="Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a."/></li>
        </ul>


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

        <div class="wrapper wrapper-most-popular">
            <div class="container">
                <h1>{{ trans('home.title-most-popular') }} <i class="sprite sprite-home-arrow-down-popular"></i></h1>

                <div class="clearfix">

                    <ul class="grid-most-popular">

                        <li class="item" style="background-image: url(http://www.fillmurray.com/g/1921/800);">

                            <div class="overlay">
                                <i class="sprite sprite-home-hover-search-icon-big"></i>
                            </div>

                        </li>
                        <li class="item" style="background-image: url(http://www.fillmurray.com/g/1922/800);">

                            <div class="overlay">
                                <i class="sprite sprite-home-hover-search-icon-big"></i>
                            </div>

                        </li>
                        <li class="item" style="background-image: url(http://www.fillmurray.com/g/1923/800);">

                            <div class="overlay">
                                <i class="sprite sprite-home-hover-search-icon-big"></i>
                            </div>

                        </li>

                    </ul>
                </div>

            </div>
        </div>

    </main>

@stop