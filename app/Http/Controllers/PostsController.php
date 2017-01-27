<?php

namespace App\Http\Controllers;
use DB;

// use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

use App\Gallery;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

use Session;

class PostsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'blogType']]);
    }


    public function index()
    {
        // Only get Posts where published_at date is <= today. See Post.php model for the special scope "published"
        // $posts = Post::latest('published_at')->published()->get();

        $posts = Post::latest('published_at')->published()->paginate(5);

        $galleries = Gallery::where('gallery_cat', 'Blogpost')->get();

        $userList = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->get();

        $users = [];

        foreach($userList as $user){
            $users[$user->id] = $user->name;
        }

        // dd($users);   

    	return view('posts.index', compact('posts', 'users'))
            ->with('galleries', $galleries);
  	  	
    }

    public function show($id)
    {
        // Use findOrFail so that if no post for that ID then fail
    	$post = Post::findOrFail($id);

        $blog_gallery = "$post->gallery_id";    

        $galleries = Gallery::where('id', "$blog_gallery")->get();

        // Fun with Carbon show how can do "1 week from now" etc
        // dd($post->created_at->addDays(8)->diffForHumans());
        
        // See model Post.php to see "protected $dates" re how we make published_at date Carbon compatible
        
    	return view('posts.show', compact('post'))
        ->with('galleries', $galleries);	
    }


        public function blogType($id)
    {
        // Only get Posts where published_at date is <= today. See Post.php model for the special scope "published"
        // $posts = Post::latest('published_at')->published()->get();

        $posts = Post::latest('published_at')->published()->where('post_type', "$id")->paginate(5);

        $galleries = Gallery::where('gallery_cat', 'Blogpost')->get();

        $userList = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->get();

        $users = [];

        foreach($userList as $user){
            $users[$user->id] = $user->name;
        }  

        return view('posts.index', compact('posts', 'users'))
            ->with('galleries', $galleries);
    }


    public function create()
    {
    	
        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'Blogpost')->get();
        // return $galleries;

        $gallery_array = [];

        foreach($galleries as $gallery){
            $gallery_array[$gallery->id] = $gallery->name;
        }

        return view('posts.create')
        ->with('galleries', $gallery_array);
  
    }

    public function store(PostRequest $request)
    {

        // Create and save a post and redirect to posts ie blogroll
        Post::create($request->all());

        return redirect('posts');

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $galleryList = Gallery::where('gallery_cat', 'Blogpost')->get();

        $galleries = [];

        foreach($galleryList as $gallery){
            $galleries[$gallery->id] = $gallery->name;
        }

        return view('posts.edit', compact('post', 'galleries'));
    }

    public function update($id, PostRequest $request)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');

    }

    public function destroy($id)
    {
        // Load the post
        $post = Post::findOrFail($id);

        // check ownership as get ID from URL
        if ($post->user_id != Auth::user()->id) {
            abort('403', 'You are not allowed to delete this post');
        }

        $post->delete();

        // Session::flash('success', 'The post was successfully deleted.');
        return redirect('posts');
   
    }

}
