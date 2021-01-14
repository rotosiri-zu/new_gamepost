<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'image',
        'price',
        'text',
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function platform()
    {
        return $this->belongsTo('App\Platform');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
