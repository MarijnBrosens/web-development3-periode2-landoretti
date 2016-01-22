<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table="faq";

    protected $fillable = [
        'question',
        'answer'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
