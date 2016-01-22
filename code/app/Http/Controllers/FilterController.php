<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\Auction;
use Carbon\Carbon;

class FilterController extends Controller
{
    public function filterStyle(Request $request){
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $data = $request->all();

        $auctions = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->where( 'status_id' , 1)
            ->where( 'style_id' , $data['id'])
            ->orderBy( 'end_date','DESC' )
            ->paginate(8);

        return view( 'art.index' , array( 'auctions' => $auctions , 'newest' => $newest ) );
    }


    public function filterMedia(Request $request){
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $data = $request->all();

        $auctions = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->where( 'status_id' , 1)
            ->where( 'media_id' , $data['id'])
            ->orderBy( 'end_date','DESC' )
            ->paginate(8);

        return view( 'art.index' , array( 'auctions' => $auctions , 'newest' => $newest ) );
    }

    public function filterEra(Request $request){
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $data = $request->all();

        if($data['id'] == 1)
        {
            $query = Auction::where('year', '<=', 1940);
        }
        elseif($data['id'] == 2)
        {
            $query = Auction::where('year', '>', 1940)->where('year', '<=', 1960);
        }
        elseif($data['id'] == 3)
        {
            $query = Auction::where('year', '>', 1960)->where('year', '<=', 1980);
        }
        else
        {
            $query = Auction::where('year', '>', 1980);
        }

        $auctions = $query->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->paginate(8);

        return view( 'art.index' , array( 'auctions' => $auctions , 'newest' => $newest ) );
    }


    public function filterPrice(Request $request)
    {
        $locale = App::getLocale();

        $newest = Auction::translatedIn($locale)
            ->where( 'end_date' , '>=', Carbon::now() )
            ->orderBy( 'created_at','DESC' )
            ->first();

        $data = $request->all();

        if($data['id'] == 1)
        {
            $query = Auction::where('buyout_price', '<=', 5000);
        }
        elseif($data['id'] == 2)
        {
            $query = Auction::where('buyout_price', '>', 5000)->where('buyout_price', '<=', 10000);
        }
        elseif($data['id'] == 3)
        {
            $query = Auction::where('buyout_price', '>', 10000)->where('buyout_price', '<=', 25000);
        }
        elseif($data['id'] == 4)
        {
            $query = Auction::where('buyout_price', '>', 2500)->where('buyout_price', '<=', 50000);
        }
        elseif($data['id'] == 5)
        {
            $query = Auction::where('buyout_price', '>', 50000)->where('buyout_price', '<=', 100000);
        }
        else
        {
            $query = Auction::where('buyout_price', '>', 10000);
        }

        $auctions = $query->where( 'end_date' , '>=', Carbon::now() )
                            ->orderBy( 'created_at','DESC' )
                            ->paginate(8);

        return view( 'art.index' , array( 'auctions' => $auctions , 'newest' => $newest ) );

    }

}
