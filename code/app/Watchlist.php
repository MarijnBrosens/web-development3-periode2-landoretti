<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $table = 'watchlist';

    protected $fillable = [
        'user_id',
        'auction_id'
    ];

    /*
     * A bid belongs to an auctin
     */
    public function auction()
    {
        return $this->belongsTo('App\Auction');
    }

    /*
     * A bid belongs to a user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}