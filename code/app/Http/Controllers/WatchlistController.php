<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Watchlist;
use Illuminate\Support\Facades\Auth;
use App;
use App\Auction;
use Carbon\Carbon;

class WatchlistController extends Controller
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


        $watchlist = Auction::join( 'watchlist','watchlist.auction_id', '=', 'auctions.id'  )
            ->where( 'watchlist.user_id', Auth::User()->id )
            ->translatedIn($locale)
            ->get();


        /**
         * Return all acutions
         */

        return view( 'watchlist.index' , array( 'auctions' => $watchlist , 'newest' => $newest ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required'
        ]);

        $data = $request->all();

        $existing = Watchlist::where( 'user_id', Auth::user()->id )->where( 'auction_id', $data['id'] )->first();

        if (!$existing)
        {
            $watchlist = new Watchlist();

            $watchlist->user_id = Auth::user()->id;
            $watchlist->auction_id = $data['id'];

            $watchlist->save();
        }

        $locale = App::getLocale();

        $watchlists = Auction::join( 'watchlist','watchlist.auction_id', '=', 'auctions.id'  )
            ->where( 'watchlist.user_id', Auth::User()->id )
            ->translatedIn($locale)
            ->get();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        return view( 'watchlist.index' , array(
            'auctions'   => $watchlists,
            'newest'    => $newest ) );
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
