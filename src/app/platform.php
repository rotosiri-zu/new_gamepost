<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class platform extends Model
{
    protected $table = 'platform';

    protected $fillable = [
        'platform_id',
        'platform_name',
        'ancestry'
      ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }

}
