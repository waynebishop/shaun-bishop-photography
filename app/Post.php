<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'intro',
    	'body',
    	'post_type',
    	'post_status',
    	'published_at',
        'user_id', // Temporary!!
        'gallery_id' // Temporary!!
    ];

    protected $dates =['published_at'];

    // Current posts : Make a new scope to show get posts published_at <= today 
    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    // Future posts: Make a new scope to show get posts published_at >today 
    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }


    // To make sure is in correct Date format: setNameAttribute
    public function setPublishedAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    // An article is owned by a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
