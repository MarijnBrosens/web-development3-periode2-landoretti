@extends('templates.layout')

@section('title', 'Register')

@section('content')

    @if(isset($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest])

    @endif

    <div class="container">
        <div class="clearfix">
            {!! Breadcrumbs::render('contact') !!}
        </div>
    </div>


    <div class="container">

        <h1 class="text--grey">Contact</h1>

        @include('errors.message')

        {!! Form::open(array('route' => 'sendMail', 'method' => 'post', 'class' => 'form--primary')) !!}
        {!! csrf_field() !!}
        <div class="row">

            <div class="col col-6">
                @if(count($auctions))

                    <label for="chosen">{{trans('contact.auction')}}</label>

                    <select id="chosen" name="auction">
                        <option value="{{trans('contact.none')}}">{{trans('contact.none')}}</option>


                        @foreach($auctions as $auction)

                            <option
                                @if(isset($selected))
                                    @if($selected == $auction->id) selected @endif
                                @endif
                                value="{{$auction->title}}">{{$auction->title}}
                            </option>

                        @endforeach
                    </select>

                @endif

                <label for="email">{{trans('contact.email')}}</label>
                <input class="input--primary" type="text" name="email" value="{{ old('email') }}" placeholder="{{ trans('contact.email') }}">

                <label for="content">{{trans('contact.text')}}</label>
                <textarea class="input--primary" name="content" id="content" cols="30" rows="10"></textarea>

                <button class="button--primary" type="submit">{{ trans('contact.send') }}</button>
            </div>
        </div>

        {!! Form::close() !!}



    </div>



@stop