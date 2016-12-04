<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

use App\Post;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        // Only get Posts where published_at date is <= today. See Post.php model for the special scope "published"
    	$posts = Post::latest('published_at')->published()->get();

    	return view('posts.index', compact('posts'));

		return view('posts.index');    	  	
    }

    public function show($id)
    {
        // Use findOrFail so that if no post for that ID then fail
    	$post = Post::findOrFail($id);

        // Fun with Carbon show how can do "1 week from now" etc
        // dd($post->created_at->addDays(8)->diffForHumans());
        
        // See model Post.php to see "protected $dates" re how we make published_at date Carbon compatible
        dd($post->published_at);


    	return view('posts.show', compact('post'));	
    }

    public function create()
    {
    	return view('posts.create'); 
    }

    public function store()
    {
        // Create and save a post and redirect to posts ie blogroll
        Post::create(Request::all());

        return redirect('posts');

    }


}
