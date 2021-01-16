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

    public function users()
    {
        return $this->belongsTo('App\User');
    }
    
    public function genres()
    {
        return $this->belongsTo('App\Genre');
    }

    public function platforms()
    {
        return $this->belongsTo('App\Platform');
    }
}
