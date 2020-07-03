<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_post extends Model
{
    protected $fillable = array('title');
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
