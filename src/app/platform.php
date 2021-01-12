<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class platform extends Model
{
    use NodeTrait;
    protected $table = 'platform';

    protected $fillable = [
        'code',
        'platform_name'
      ];

    public function post()
    {
        return $this->hasMany('App\Post');
    }

}
