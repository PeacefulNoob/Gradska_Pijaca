<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    protected $fillable = array('cat_id','user_id', 'title', 'desription', 'views', 'likes','location','image');


    public function categories()
    {
        return $this->belongsTo('App\Categories', 'cat_id');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'ad_tag');
    }
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function likes()
    {
    
        DB::table('ads')->where('id', $ad->id)->increment('likes');
    }

    
}
