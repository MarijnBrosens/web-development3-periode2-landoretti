<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = [
        'title',
    ];

    public function faq()
    {
        return $this->belongsToMany('App\Faq', 'faq_tag', 'faq_id');
    }
}
