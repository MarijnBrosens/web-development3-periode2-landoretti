<?php

/**
 * Prefixed routes
 */
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/art', ['as' => 'art', 'uses' => 'AuctionController@index'] );

    Route::get('/art/{slug}', ['as' => 'show', 'uses' => 'AuctionController@show'] );

    Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index'] );

    Route::post('/contact' , ['as' => 'askAQuestion' , 'uses' => 'ContactController@ask']);

    Route::post('/mail', ['as' => 'sendMail', 'uses' => 'ContactController@sendMail'] );

    Route::post('/search', ['as' => 'search', 'uses' => 'SearchController@show'] );

    /**
     * Authentication routes
     */
    Route::get('login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin' ]);
    Route::post('login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin' ]);

    /**
     * Registration routes
     */
    Route::get('register', ['as' => 'getRegister', 'uses' =>  'Auth\AuthController@getRegister' ]);
    Route::post('auth/register', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);


    Route::group(['middleware' => 'auth'], function () {

        Route::post('art/buyout' , ['as' => 'buyOutAuction', 'uses' => 'AuctionController@buyOut'] );

        Route::post('art/bid' , ['as' => 'bid', 'uses' => 'AuctionController@bid'] );

        Route::get('my-bids' , ['as' => 'myBids', 'uses' => 'MyBidsController@index'] );

        Route::get('my-auctions' , ['as' => 'myAuctions', 'uses' => 'MyAuctionsController@index'] );

        Route::get('my-auctions/new' , ['as' => 'newAuction', 'uses' => 'MyAuctionsController@create']);

        Route::post('my-auctions/new' , ['as' => 'storeAuction', 'uses' => 'MyAuctionsController@store']);

        Route::get('watchlist' , ['as' => 'getWatchlist', 'uses' => 'WatchlistController@index'] );

        Route::post('watchlist' , ['as' => 'storeToWatchlist', 'uses' => 'WatchlistController@store'] );

        /**
         * Authentication logout
         */
        Route::get('auth/logout', ['as' => 'getLogout', 'uses' => 'Auth\AuthController@getLogout']);
    });

});




/*
Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);

    return view('home/index');
});
*/

Route::get('create', function() {
    $auction = new \App\Auction();

    $auction->user_id = 1;
    $auction->category_id = 1;
    $auction->media_id = 1;
    $auction->style_id = 1;
    $auction->color_id = 1;
    $auction->artist_id = 1;

    $auction->year = 1;
    $auction->width = 1;
    $auction->height = 1;
    $auction->depth = 1;

    $auction->image_artwork = 'http://www.fillmurray.com/g/1920/800';
    $auction->image_signature = 'http://www.fillmurray.com/g/1920/700';
    $auction->image_optional = 'http://www.fillmurray.com/g/1920/600';

    $auction->minimum_price = 1;
    $auction->maximum_price = 1;
    $auction->buyout_price = 1;
    $auction->current_price = 1;
    $auction->updated_at =  Carbon\Carbon::now()->addDays(20)->toDateTimeString();
    $auction->end_date = Carbon\Carbon::now()->addDays(20)->toDateTimeString();

    $auction->save();

    foreach (['en', 'nl'] as $locale) {
        $auction->translateOrNew($locale)->title = "Title {$locale}";
        $auction->translateOrNew($locale)->slug = "Slug-{$locale}";
        $auction->translateOrNew($locale)->description = "Description {$locale}";
        $auction->translateOrNew($locale)->condition = "condition {$locale}";
        $auction->translateOrNew($locale)->origin = "origin {$locale}";
    }

    $auction->save();

    echo 'Created an auction with some translations!';
});