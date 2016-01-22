@extends('templates.layout')

@section('title', 'Search')

@section('content')


    @if(count($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest ])

    @endif

    <div class="container">

    <h1>Search results for : {{$query}}</h1>

        @if(count($results))



            @include('my_auctions.partials.table', [ 'auctions' => $results ])

            @else

                <p>No result found</p>

            @endif

        @stop

    </div>