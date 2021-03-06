<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    
    public function ads()
    {
        return $this->belongsToMany(Ad::class);
    }
}
