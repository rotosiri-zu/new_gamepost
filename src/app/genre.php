<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = [
        'code',
        'genre_name'
    ];

    public function genre()
    {
        return $this->hasMany('App\Post');
    }
}
