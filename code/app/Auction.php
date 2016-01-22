<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'auctions';
    public $timestamps = true;
    public $translatedAttributes = [ 'title', 'slug', 'description', 'condition', 'origin' ];

    protected $fillable = [
        'end_date',
        'slug'
    ];

    protected $guarded = ['id'];

    /*
     * An auction has an artist
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    /*
     * An auction belongs to an user
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /*
     * An auction has many bids
     */
    public function bids()
    {
        return $this->hasMany('App\Bid');
    }
}