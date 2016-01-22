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



    /*
     * Get count of bids per auction
     */
    public function scopeCount($id)
    {
        $bidCount = Bid::where( 'auction_id', $id )->get();

        return count($bidCount);
    }

    public function scopeActive($query)
    {
        $query->where('start_date' , '<' , Carbon::now() )->where('end_date' , '>' , Carbon::now() );
    }
}
