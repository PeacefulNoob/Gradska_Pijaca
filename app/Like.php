<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id','ad_id'];

    public function ad()
    {
        return $this->belongsTo('App\Ad');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
