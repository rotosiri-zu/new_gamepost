<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class platform extends Model
{
    use NodeTrait;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'depth',
      ];
      
    public function platform()
    {
        return $this->hasMany('App\Post');
    }
}
