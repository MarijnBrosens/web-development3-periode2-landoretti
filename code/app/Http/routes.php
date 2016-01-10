<?php

/**
 * Prefixed routes
 */
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/art', ['as' => 'art', 'uses' => 'AuctionController@index'] );

    Route::get('/art/{slug}', ['as' => 'show', 'uses' => 'AuctionController@show'] );

    /**
     * Authentication routes
     */
    Route::post('auth/login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin' ]);
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    /**
     * Registration routes
     */
    Route::get('register', ['as' => 'getRegister', 'uses' =>  'Auth\AuthController@getRegister' ]);
    Route::post('auth/register', 'Auth\AuthController@postRegister');

});




/*
Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);

    return view('home/index');
});
*/

Route::get('create', function() {
    $auction = new \App\Auction();
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