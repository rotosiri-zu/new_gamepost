<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'code',
        'genre_name'
    ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
