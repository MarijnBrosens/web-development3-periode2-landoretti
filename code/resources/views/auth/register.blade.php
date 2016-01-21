@extends('templates.layout')

@section('title', 'Register')

@section('content')

    @if(isset($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest])

    @endif

    <div class="container">
        <div class="clearfix">
            {!! Breadcrumbs::render('register') !!}
        </div>
    </div>

    <div class="container">

        <h1 class="text--grey text__weight--light">Register</h1>

        @include('errors.message')

        {!! Form::open(array('route' => 'postRegister', 'method' => 'post','class' => 'form--primary')) !!}
            {!! csrf_field() !!}

        <div class="row">

            <div class="col col-6">
                <div>
                    <label for="name"> Company or name</label>
                    <input class="input--primary" type="text" name="name" value="{{ old('name') }}" id="name">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input class="input--primary" type="password" name="password" id="password">
                </div>

                <div>
                    <label for="country_id">Country</label>
                    <select class="input--primary" name="country_id" id="country_id">
                        <option value="1">Belgium</option>
                        <option value="2">England</option>
                    </select>
                </div>

                <div>
                    <label for="address">Address</label>
                    <input class="input--primary" type="address" name="address" id="address" value="{{ old('address') }}">
                </div>

                <div>
                    <label for="account_number">Account number</label>
                    <input class="input--primary" type="tel" name="account_number" id="account_number" placeholder="XX XXX XX XX"  value="{{ old('account_number') }}">
                </div>
            </div>

            <div class="col col-6">
                <div>
                    <label for="email">Email</label>
                    <input class="input--primary" type="email" name="email" id="email" value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password_confirmation">Password confirmation</label>
                    <input class="input--primary" type="password" name="password_confirmation" id="password_confirmation">
                </div>

                <div class="row">
                    <div class="col col-6">
                        <label for="zip">Zip Code</label>
                        <input class="input--primary" type="text" name="zip" id="zip" value="{{ old('zip') }}">
                    </div>

                    <div class="col col-6">
                        <label for="city">City</label>
                        <input class="input--primary" type="text" name="city" id="city" value="{{ old('city') }}">
                    </div>
                </div>


                <div>
                    <label class="clearfix" for="phone_number">Phone number</label>
                    <input class="input--prefix" type="phone_number_prefix" name="phone_number_prefix" id="phone_number_prefix" placeholder="+32" value="{{ old('phone_number_prefix') }}">
                    <input class="input--phone" type="tel" name="phone_number" id="phone_number" placeholder="XX XXX XX XX" value="{{ old('phone_number') }}">
                </div>

                <div>
                    <label for="vat_number">VAT-number</label>
                    <input class="input--primary" type="tel" name="vat_number" id="vat_number" placeholder="XX XXX XX XX" value="{{ old('vat_number') }}">
                </div>
            </div>


        </div>

        <div class="clearfix">
            <h2 class="label--primary">alternative payment methods</h2>
            <p class="input--primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe sit veniam. Ab aliquam atque commodi consectetur dignissimos impedit in laborum libero, magni, molestiae natus nihil obcaecati possimus quia sapiente.</p>
        </div>

        <div>
            <label class="label--thin" for="terms_conditions">
                <input type="checkbox" name="terms_conditions" id="terms_conditions">
                I agree to <a href="/terms-conditions">the terms & conditions</a>
            </label>
        </div>

        <div>
            <button class="button--primary" type="submit">Register</button>
        </div>

        {!! Form::close() !!}

    </div>

@stop()