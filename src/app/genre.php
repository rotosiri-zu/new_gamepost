<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = [
        'genre_id',
        'genre_name'
    ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
