<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'body', 'area_id', 'location', 'budget', 'category_id'];
    public function author()
    {
        return $this->belongsTo('App\User');
    }
    
    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function replies()
    {
        return $this->hasMany('App\PostReply');
    }
}
