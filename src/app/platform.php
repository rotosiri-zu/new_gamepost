<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class platform extends Model
{
    public function platform()
    {
        return $this->hasMany('App\Post');
    }
}
