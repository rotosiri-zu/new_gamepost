<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    protected $fillable = [
        'code',
        'platform_name',
        'ancestry'
      ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
