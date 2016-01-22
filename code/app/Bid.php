<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $table = 'bids';

    protected $fillable = ['user_id', 'auction_id', 'amount'];

    public function auction()
    {
        return $this->belongsTo('App\Auction');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
