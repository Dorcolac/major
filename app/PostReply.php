<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReply extends Model
{

    public $fillable = ['body', 'price', 'post_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

}
