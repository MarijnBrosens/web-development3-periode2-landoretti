<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $table = 'bids';

    protected $fillable = [
        'user_id',
        'auction_id',
        'price'
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
