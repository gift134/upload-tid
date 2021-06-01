<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model
{
    //
    public function tags()
    {
    	return $this->belongsToMany('App\Tag','post_tags')->groupBy('post_tags.post_id')->groupBy('post_tags.tag_id')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category','category_posts')->groupBy('category_posts.post_id')->groupBy('category_posts.category_id')->withTimestamps();;
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->toDayDateTimeString();
    }


    public function getSlugAttribute($value)
    {
        return route('blogdetails',$value);
    }
}
