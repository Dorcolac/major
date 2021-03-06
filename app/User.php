<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar', 'name', 'lastname', 'nickname', 'email', 'password', 'phone1', 'phone2', 'area_id', 'location', 'bio', 'confirmation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function replies()
    {
        return $this->hasMany('App\PostReply');
    }

}
