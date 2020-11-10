<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['movie_id','episode','title'];
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
