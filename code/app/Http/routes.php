<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::get('/art', ['as' => 'art', 'uses' => 'AuctionController@index'] );
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
        $auction->translateOrNew($locale)->description = "Description {$locale}";
        $auction->translateOrNew($locale)->condition = "condition {$locale}";
        $auction->translateOrNew($locale)->origin = "origin {$locale}";
    }

    $auction->save();

    echo 'Created an auction with some translations!';
});