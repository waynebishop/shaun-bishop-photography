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

    	$posts = Post::latest('published_at')->get();

    	return view('posts.index', compact('posts'));

		return view('posts.index');    	  	
    }

    public function show($id)
    {

    	$post = Post::findOrFail($id);

    	return view('posts.show', compact('post'));	
    }

    public function create()
    {
    	return view('posts.create'); 
    }

    public function store()
    {
        Post::create(Request::all());

        return redirect('posts');

    }


}
