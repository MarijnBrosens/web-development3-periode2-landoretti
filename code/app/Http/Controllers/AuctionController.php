<?php

namespace App\Http\Controllers;

use App\Auction;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class AuctionController extends Controller
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
         * Return all acutions
         */
        $auctions = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->where( 'status_id' , 1)
            ->orderBy( 'end_date','DESC' )
            ->paginate(8);

        return view( 'art.index' , array( 'auctions' => $auctions , 'newest' => $newest ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $slug )
    {
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        /*
        * Return current auction
        */
        $auction = Auction::translatedIn( $locale )
            ->whereTranslation( 'slug', $slug )
            ->first();

        return view( 'art.show' , array( 'auction' => $auction , 'newest' => $newest ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buyout(Request $request)
    {
        $this->validate($request, [
            'id'          => 'required'
        ]);

        $data = $request->all();

        $auction = Auction::where('id', $data['id'] )
            ->first();

        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        /*
         * if active auction
         */

        if($auction->end_date < Carbon::now())
        {
            return Redirect::back()->withErrors([' This auction is expired']);
        }
        elseif ( $auction->status_id != 1 )
        {
            return Redirect::back()->withErrors([' This auction is not active']);
        }
        else
        {
            $auction->status_id = 4;
            $auction->save();

            return view( 'art.sold' , array( 'auction' => $auction , 'newest' => $newest ) );
        }


    }



}
