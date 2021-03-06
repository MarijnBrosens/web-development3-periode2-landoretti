@extends('templates.layout')

@section('title', 'New auction')

@section('content')

    @if(count($newest))

        @include('partials.spotlight-header', [ 'auction' => $newest ])

    @endif

    <div class="container">
        <div class="clearfix">
            {!! Breadcrumbs::render( 'new-auction' , Auth::user() ) !!}
        </div>
    </div>

    <div class="container">

        <h1 class="text--grey text__weight--light">Add a new acution</h1>

        @include('errors.message')

        {!! Form::open( array(
            'route' => 'storeAuction',
            'method' => 'post',
            'class' => 'form--primary',
             'files' => true ))!!}

        {!! csrf_field() !!}

        <div class="row clearfix">
            <div class="col col-6">
                <select class="input--primary" name="style_id" id="style_id">
                    <option value="1">Abstract</option>
                    <option value="2">African American</option>
                </select>
            </div>


        </div>

        <div class="row">

            <div class="col col-3">
                <div>
                    <label for="title"> Auction title</label>
                    <input class="input--primary @if ($errors->has('title')) input--error @endif " type="text" name="title" value="{{ old('title') }}" id="title">
                </div>
            </div>

            <div class="col col-3">
                <div>
                    <label for="artist"> Artist</label>
                    <input class="input--primary @if ($errors->has('artist')) input--error @endif" type="text" name="artist" value="{{ old('artist') }}" id="artist" >
                </div>
            </div>

            <div class="col col-3">
                <div>
                    <label for="year"> Year</label>
                    <input class="input--primary @if ($errors->has('year')) input--error @endif" type="text" name="year" value="{{ old('year') }}" id="year" placeholder="XXXX">
                </div>
            </div>

        </div>

        <div class="row clearfix">

            <div class="col col-3">

                <label for="width"> Width</label>
                <input class="input--primary @if ($errors->has('width')) input--error @endif" type="text" name="width" value="{{ old('width') }}" id="width" placeholder="XXXX">

            </div>

            <div class="col col-3">

                <label for="height"> Height</label>
                <input class="input--primary @if ($errors->has('height')) input--error @endif" type="text" name="height" value="{{ old('height') }}" id="height" placeholder="XXXX">

            </div>

            <div class="col col-3">

                <label for="depth"> Depth <span>(optional)</span></label>
                <input class="input--primary" type="text" name="depth" value="{{ old('depth') }}" id="depth" placeholder="XXXX">

            </div>

            <div class="col col-9">

                <label for="description">Description</label>
                <textarea class="input--primary @if ($errors->has('description')) input--error @endif" name="description" id="description">{{ old('description') }}</textarea>

            </div>

            <div class="col col-9">

                <label for="condition">Condition</label>
                <textarea class="input--primary @if ($errors->has('condition')) input--error @endif" name="condition" id="condition">{{ old('condition') }}</textarea>

            </div>

            <div class="col col-9">

                <label for="origin">Origin</label>
                <input class="input--primary @if ($errors->has('origin')) input--error @endif" type="text" name="origin" id="origin" value="{{ old('origin') }}">

            </div>

            <div class="col col-9">

                <label>Photos</label>
                <p>
                    Please upload one picture...
                </p>
            </div>

            <div class="clearfix">
                <div class="col col-3">
                    <div class="file_upload btn btn-primary">
                        <span>UPLOAD IMAGE OF THE ARTWORK</span>
                        <input id="image_artwork" name="image_artwork" type="file" class="upload" />
                    </div>
                </div>

                <div class="col col-3">
                    <div class="file_upload btn btn-primary">
                        <span>UPLOAD IMAGE OF THE SIGNATURE</span>
                        <input id="image_signature" name="image_signature" type="file" class="upload" />
                    </div>
                </div>

                <div class="col col-3">
                    <div class="file_upload btn btn-primary">
                        <span>OPTIONAL IMAGE</span>
                        <input id="image_optional" name="image_optional" type="file" class="upload" />
                    </div>
                </div>
            </div>

        </div>

        <h1 class="heading__color--grey--mid heading__size--medium heading__weight--normal">Pricing</h1>


        <div class="row">
            <div class="col col-3">

                <label for="minimum_price"> Minimum estimate price</label>
                <input class="input--primary @if ($errors->has('minimum_price')) input--error @endif" type="text" name="minimum_price" value="{{ old('minimum_price') }}" id="minimum_price" placeholder="&#8364; XXXX">

            </div>

            <div class="col col-3">

                <label for="maximum_price"> Maximum estimate price</label>
                <input class="input--primary @if ($errors->has('maximum_price')) input--error @endif" type="text" name="maximum_price" value="{{ old('maximum_price') }}" id="maximum_price" placeholder="&#8364; XXXX">

            </div>

            <div class="col col-3">

                <label for="buyout_price"> Buyout price <span>(optional)</span> </label>
                <input class="input--primary" type="text" name="buyout_price" value="{{ old('buyout_price') }}" id="buyout_price" placeholder="&#8364; XXXX">

            </div>
        </div>

        <div class="row clearfix">
            <div class="col col-3">

                <label for="end_date"> End Date</label>
                <input class="input--primary @if ($errors->has('end_date')) input--error @endif" type="date" name="end_date" value="{{ old('end_date') }}" id="end_date">

            </div>

            <div class="col col-6">

                <label> Attention</label>
                <p>
                    some info
                </p>

            </div>

        </div>


        <div>
            <label class="label--thin @if ($errors->has('title')) input--error @endif" for="terms_conditions">
                <input type="checkbox" name="terms_conditions" id="terms_conditions">
                I agree to <a href="#">the terms & conditions</a>
            </label>
        </div>

        <div>
            <button class="button--primary" type="submit">ADD AUCTION</button>
        </div>

        {!! Form::close() !!}

    </div>

@stop()