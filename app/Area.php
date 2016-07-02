<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
