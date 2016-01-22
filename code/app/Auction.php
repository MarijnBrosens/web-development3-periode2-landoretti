<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Auction extends Model
{
    use \Dimsav\Translatable\Translatable;
    use SearchableTrait;

    protected $table = 'auctions';
    public $timestamps = true;
    public $translatedAttributes = [ 'title', 'slug', 'description', 'condition', 'origin' ];

    protected $searchable = [
        'columns' => [
            'auctions.artist'                   => 10,
            'auctions.year'                     => 8,
            'auction_translations.title'        => 10,
            'auction_translations.description'  => 7,
            'auction_translations.condition'    => 1,
            'auction_translations.origin'       => 5,
        ]
        ,
        'joins' => [
            'auction_translations' => ['auctions.id','auction_translations.auction_id'],
        ],
    ];

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