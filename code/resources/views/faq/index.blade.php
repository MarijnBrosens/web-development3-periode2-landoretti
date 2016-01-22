@extends('templates.layout')

@section('title', 'Contact')

@section('content')

    @if(isset($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest])

    @endif

    <div class="container">
        <div class="clearfix">
            {!! Breadcrumbs::render('faq') !!}
        </div>
    </div>


    <div class="container">

        <h1 class="text--grey">Find what you're looking for?</h1>

        <div class="jumbotron jumbotron__margin--bottom--large">
            <div class="jumbotron__inner--big clearfix faq--jumbo">
                <div class="col col-3">
                    <a href="#">How to bid?</a>
                    <a href="#">How to sell?</a>
                </div>

                <div class="col col-3">
                    <a href="#">How to buy?</a>
                    <a href="#">How to register?</a>
                </div>

                <div class="col col-3">
                    <a href="#">How to ask a question?</a>
                    <a href="#">What is a watchlist?</a>
                </div>

                <div class="col col-3">
                    <a href="#">How to use a watchlist?</a>
                </div>

            </div>

        </div>

        @include('errors.message')

        <ul class="faq">
            <li>
                <div>
                    <span class="clearfix">
                        <span class="question-tag">
                            Q
                        </span>
                        <p class="question">
                            How to bid?
                        </p>
                    </span>
                </div>
                <div>
                    <span class="clearfix">
                        <span class="answer-tag">A</span>
                        <p class="answer">
                            Yuccie banh mi hammock, health goth ennui helvetica occupy slow-carb listicle austin man bun tumblr.
                            Brooklyn food truck photo booth, mlkshk gochujang pork belly quinoa. Deep v lumbersexual freegan kogi single-origin coffee.
                            Roof party marfa you probably haven't heard of them, etsy irony swag sriracha craft beer. Gastropub farm-to-table pinterest pickled,
                            locavore seitan mumblecore forage vinyl sriracha bushwick health goth poutine mlkshk schlitz.
                            You probably haven't heard of them flannel hashtag, skateboard polaroid ramps pork belly stumptown organic mixtape ugh forage fap typewriter +
                            1. Blue bottle single-origin coffee pickled,
                            green juice raw denim celiac kinfolk 3 wolf moon YOLO 8-bit kitsch fingerstache roof party bushwick.
                        </p>
                    </span>
                </div>
            </li>



            <li>
                <div>
                    <span class="clearfix">
                        <span class="question-tag">
                            Q
                        </span>
                        <p class="question">
                            How to bid?
                        </p>
                    </span>
                </div>
                <div>
                    <span class="clearfix">
                        <span class="answer-tag">A</span>
                        <p class="answer">
                            Yuccie banh mi hammock, health goth ennui helvetica occupy slow-carb listicle austin man bun tumblr.
                            Brooklyn food truck photo booth, mlkshk gochujang pork belly quinoa. Deep v lumbersexual freegan kogi single-origin coffee.
                            Roof party marfa you probably haven't heard of them, etsy irony swag sriracha craft beer. Gastropub farm-to-table pinterest pickled,
                            locavore seitan mumblecore forage vinyl sriracha bushwick health goth poutine mlkshk schlitz.
                            You probably haven't heard of them flannel hashtag, skateboard polaroid ramps pork belly stumptown organic mixtape ugh forage fap typewriter +
                            1. Blue bottle single-origin coffee pickled,
                            green juice raw denim celiac kinfolk 3 wolf moon YOLO 8-bit kitsch fingerstache roof party bushwick.
                        </p>
                    </span>
                </div>
            </li>
        </ul>

    </div>



@stop