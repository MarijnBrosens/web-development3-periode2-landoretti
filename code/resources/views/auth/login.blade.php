@extends('templates.layout')

@section('title', 'Register')

@section('content')

    @include('partials.spotlight-header')

    <div class="container">
        <div class="clearfix">
            {!! Breadcrumbs::render('login') !!}
        </div>
    </div>


    <div class="container">

        <h1 class="text--grey">Login</h1>

        @include('errors.message')

        {!! Form::open(array('route' => 'postLogin', 'method' => 'post', 'class' => 'form--primary')) !!}
            {!! csrf_field() !!}
            <div class="row">
                    <div class="col col-6">
                        <input class="input--primary" type="text" name="email" value="{{ old('email') }}" placeholder="{{ trans('nav.user') }}">

                        <button class="button--primary" type="submit">Login</button>
                    </div>

                    <div class="col col-6">
                        <input class="input--primary" type="password" name="password" id="password" placeholder="{{ trans('nav.password') }}">
                    </div>
            </div>

        {!! Form::close() !!}



    </div>



@stop