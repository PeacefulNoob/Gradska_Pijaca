<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = array('ad_id', 'title');


    public function ads()
    {
        return $this->belongsTo('App\Ad');
    }
}
