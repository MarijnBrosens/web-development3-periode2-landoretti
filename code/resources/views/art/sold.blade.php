@extends('templates.layout')

@section('title', $auction->title)

@section('content')

    <main id="detail">

        @include('partials.spotlight-header', [ 'auction' => $newest])


        <div class="container">
            <h1>{{ trans('detail.sold') }}</h1>
        </div>


    </main>

@stop