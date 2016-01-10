@extends('templates.layout')

@section('title', 'Register')

@section('content')

<div class="container">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}


        <div class="col-6">
            <div>
                <label for="name"> Company or name</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <label for="country">Country</label>
                <select name="country" id="country">
                    <option value="1">Belgium</option>
                    <option value="2">England</option>
                </select>
            </div>

            <div>
                <label for="address">Address</label>
                <input type="address" name="address" id="address">
            </div>

            <div>
                <label for="account_number">Account number</label>
                <input type="tel" name="accountnumber" id="account_number" placeholder="XX XXX XX XX">
            </div>
        </div>

        <hr>

        <div class="col-6">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="password_confirmation">Password confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div>
                <label for="zip">Zip Code</label>
                <input type="text" name="zip" id="zip">
            </div>

            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city">
            </div>

            <div>
                <label for="phone_number">Phone number</label>
                <input type="phone_number_prefix" name="phone_number_prefix" id="phone_number_prefix" placeholder="+32">
                <input type="tel" name="phone_number" id="phone_number" placeholder="XX XXX XX XX">
            </div>

            <div>
                <label for="vat_number">VAT-number</label>
                <input type="tel" name="vat_number" id="vat_number" placeholder="XX XXX XX XX">
            </div>
        </div>

        <div>

            <h2>alternative payment methods</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe sit veniam. Ab aliquam atque commodi consectetur dignissimos impedit in laborum libero, magni, molestiae natus nihil obcaecati possimus quia sapiente.</p>
        </div>
        
        <div>
            <label for="terms_of_use">
                <input type="checkbox" name="terms_conditions" id="terms_conditions">
                I agree to <a href="/terms-conditions">the terms & conditions</a></label>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>







    </form>
</div>

@stop()