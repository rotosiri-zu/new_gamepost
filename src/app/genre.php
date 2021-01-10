<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = [
        'genre_name',
    ];

    public function genre()
    {
        return $this->hasMany('App\Post');
    }
}
