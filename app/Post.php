<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'intro',
    	'body',
    	'post_type',
    	'post_status',
    	'published_at'
    ];
}
