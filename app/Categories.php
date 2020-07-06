<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = array('title');
    
    public function ad()
    {
        return $this->hasMany('App\Ad');
    }
}
