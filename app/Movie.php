<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
