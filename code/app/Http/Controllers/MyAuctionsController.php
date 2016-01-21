<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Auction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\Facades\Image;

class MyAuctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        /**
         * Return all acutions from current user
         */
        $pending = Auction::translatedIn($locale)
            ->where( 'user_id' , Auth::user()->id )
            ->where( 'status_id', 0 )
            ->orderBy( 'end_date','DESC' )
            ->get();

        $refused = Auction::translatedIn($locale)
            ->where( 'user_id' , Auth::user()->id )
            ->where( 'status_id', 1 )
            ->orderBy( 'end_date','DESC' )
            ->get();

        $active = Auction::translatedIn($locale)
            ->where( 'user_id' , Auth::user()->id )
            ->where( 'status_id', 2 )
            ->orderBy( 'end_date','DESC' )
            ->get();

        $expired = Auction::translatedIn($locale)
            ->where( 'user_id' , Auth::user()->id )
            ->where( 'status_id', 3 )
            ->orderBy( 'end_date','DESC' )
            ->get();

        $sold = Auction::translatedIn($locale)
            ->where( 'user_id' , Auth::user()->id )
            ->where( 'status_id', 4 )
            ->orderBy( 'end_date','DESC' )
            ->get();

        return view( 'my_auctions.index' , array(
            'pending'   => $pending,
            'refused'   => $refused,
            'active'    => $active,
            'expired'   => $expired,
            'sold'      => $sold,
            'newest'    => $newest ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        return view( 'my_auctions.create' , array( 'newest' => $newest ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locale = App::getLocale();

        $this->validate($request, [

            'style_id'          => 'required',
            'title'             => 'required|max:255',

            'year'              => 'required',
            'width'             => 'required|numeric',
            'height'            => 'required|numeric',

            'artist'            => 'required',
            'description'       => 'required',
            'condition'         => 'required',
            'origin'            => 'required',
            'image_artwork'     => 'required',
            'image_signature'   => 'required',

            'minimum_price'     => 'required',
            'maximum_price'     => 'required',
            'buyout_price'      => 'required',
            'end_date'          => 'required',
            'terms_conditions'  => 'accepted'
        ]);

        $data = $request->all();

        $auction = new Auction();

        $auction->user_id       = Auth::id();
        $auction->category_id   = 1;
        $auction->media_id      = 1;
        $auction->style_id      = $data['style_id'];
        $auction->color_id      = 1;
        $auction->artist        = $data['artist'];

        $auction->year          = $data['year'];
        $auction->width         = $data['width'];
        $auction->height        = $data['height'];
        $auction->depth         = $data['depth'];

        if($request->hasFile('image')) {
            return 'ksdfdsf';
        }

        if( $request->hasFile( 'image_artwork' ) ) {

            $file           = $request->file('image_artwork');
            $fileName       = time() . '.' . $file->getClientOriginalExtension();
            $fileNameThumb  = 'thumb-' . time() . '.' . $file->getClientOriginalExtension();
            $dir            = 'img/uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) );
            $path           = public_path($dir . '/' .  $fileName);
            $pathThumb      = public_path($dir . '/' .  $fileNameThumb);

            if(! \File::isDirectory($dir)) { File::makeDirectory($dir, $mode = 0777, true, true); }

            Image::make($file->getRealPath())->resize(768, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($pathThumb);

            Image::make($file->getRealPath())->resize(2000, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($path);

            $auction->image_artwork = 'uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) . '/' ) . '/' . $fileName;
        }

        if( $request->hasFile( 'image_signature' ) ) {

            $file           = $request->file('image_signature');
            $fileName       = time() . '.' . $file->getClientOriginalExtension();
            $fileNameThumb  = 'thumb-' . time() . '.' . $file->getClientOriginalExtension();
            $dir            = 'img/uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) );
            $path           = public_path($dir . '/' .  $fileName);
            $pathThumb      = public_path($dir . '/' .  $fileNameThumb);

            if(! \File::isDirectory($dir)) { File::makeDirectory($dir, $mode = 0777, true, true); }

            Image::make($file->getRealPath())->resize(768, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($pathThumb);

            Image::make($file->getRealPath())->resize(2000, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($path);

            $auction->image_signature = 'uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) ) . '/' . $fileName;
        }

        if( $request->hasFile( 'image_optional' ) ) {

            $file           = $request->file('image_optional');
            $fileName       = time() . '.' . $file->getClientOriginalExtension();
            $fileNameThumb  = 'thumb-' . time() . '.' . $file->getClientOriginalExtension();
            $dir            = 'img/uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) );
            $path           = public_path($dir . '/' .  $fileName);
            $pathThumb      = public_path($dir . '/' .  $fileNameThumb);

            if(! \File::isDirectory($dir)) { File::makeDirectory($dir, $mode = 0777, true, true); }

            Image::make($file->getRealPath())->resize(768, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($pathThumb);

            Image::make($file->getRealPath())->resize(2000, null, function($constraint) {
                $constraint->aspectRatio();
            })->save($path);

            $auction->image_optional = 'uploads/' . strtolower( str_slug( Auth::user()->name, '-' ) ) . '/' . $fileName;
        }

        //$auction->image_artwork = 'http://www.fillmurray.com/g/1920/800';
        //$auction->image_signature   = 'http://www.fillmurray.com/g/1920/700';
        //$auction->image_optional    = 'http://www.fillmurray.com/g/1920/600';

        $auction->minimum_price     = $data['minimum_price'];
        $auction->maximum_price     = $data['maximum_price'];
        $auction->buyout_price      = $data['buyout_price'];
        $auction->current_price     = '0';
        $auction->updated_at        = Carbon::now();
        $auction->end_date          = $data['end_date'];

        $auction->save();

        $auction->translateOrNew($locale)->title        = $data['title'];
        $auction->translateOrNew($locale)->slug         = str_slug( $data['title']);
        $auction->translateOrNew($locale)->description  = $data['description'];
        $auction->translateOrNew($locale)->condition    = $data['condition'];
        $auction->translateOrNew($locale)->origin       = $data['origin'];

        $auction->save();


        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
