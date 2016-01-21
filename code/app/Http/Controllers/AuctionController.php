<?php

namespace App\Http\Controllers;

use App\Auction;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

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
            ->orderBy( 'end_date','DESC' )
            ->paginate(9);

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

        /*
        * Return current auction
        */
        $auction = Auction::translatedIn( $locale )
            ->whereTranslation( 'slug', $slug )
            ->first();

        return view( 'art.show' , array( 'auction' => $auction ) );
    }
}
