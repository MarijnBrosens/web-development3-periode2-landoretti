<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionTranslation extends Model
{
    protected $table = 'auction_translations';
    public $timestamps = false;

    protected $guarded = ['id'];
}
