@extends('templates.layout')

@section('title', 'Register')

@section('content')

    @include('partials.spotlight-header')

    <div class="container">

        <h1>Login</h1>

        @include('errors.message')

        <ul class="alert alert__danger">

            <li class="alert__text">Please</li>
            <li class="alert__text">test</li>
            <li class="alert__text">test</li>

        </ul>

        {!! Form::open(array('route' => 'postLogin', 'method' => 'post')) !!}
        <!--<form method="POST" action="/login">-->
            {!! csrf_field() !!}
            <input class="input--standard" type="text" name="email" value="{{ old('email') }}" placeholder="{{ trans('nav.user') }}">
            <input class="input--standard" type="password" name="password" id="password" placeholder="{{ trans('nav.password') }}">
            <button class="button--standard" type="submit">Login</button>
        <!--</form>-->
        {!! Form::close() !!}

        <h1>lol dees werkt ofwa?</h1>
    </div>



@stop