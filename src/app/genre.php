<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'code',
        'genre_name'
    ];

    public function getGenerLists()
    {
        $genres = \App\Genre::orderBy('id')->pluck('genre_name', 'id');

        return $genres;
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
