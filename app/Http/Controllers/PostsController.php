<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
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
        // dd($post->published_at);


    	return view('posts.show', compact('post'));	
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function create()
    {
    	return view('posts.create'); 
    }

    public function store(PostRequest $request)
    {
        // Create a new gallery and get the ID
        
        // Gallery::create($request->all());
        // $insertedId = $gallery->id;
        // dd($insertedId);
        


        // Create and save a post and redirect to posts ie blogroll
        Post::create($request->all());

        // Loop over all images and upload with Intervention Image
        // Each loop will need a query to run (insert image file name and gallery ID)

        return redirect('posts');

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');

    }

}
