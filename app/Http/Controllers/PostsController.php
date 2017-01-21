<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

use App\Gallery;

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

        $galleries = Gallery::where('gallery_cat', 'Blogpost')->get();

        // dd("$galleries");

    	return view('posts.index', compact('posts'))
        ->with('galleries', $galleries);



		// return view('posts.index');    	  	
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
        // dd($post->published_at);


    	return view('posts.show', compact('post'))
        ->with('galleries', $galleries);	
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function create()
    {
    	
        $galleries = Gallery::where('gallery_cat', 'Blogpost')->get();

        foreach($galleries as $gallery){
            $gallery_array[$gallery->id] = $gallery->id . " - " . $gallery->name;
        }



        // dd($gallery_array);

        // $galleryOptions = [

        //     '18' => 'Blogpost gallery',
        //     '57' => 'Blogpost 2 gallery',
        //     '58' => 'Blogpost 3 gallery',
        // ];

        return view('posts.create')
        ->with('galleries', $galleries);
  

        // ->with('galleryOptions', $galleryOptions);
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

    public function delete($id)
    {
        // Load the post
        $post = Post::findOrFail($id);

        // check ownership as get ID from URL
        if ($post->created_by != Auth::user()->id) {
            abort('403', 'You are not allowed ot delete this post');
        }

        // get the images
        // $images = $currentGallery->images();

        // delete the images
        // foreach ($currentGallery->images as $image) {
        //     unlink(public_path($image->file_path));
        //     unlink(public_path('gallery/images/thumbs/' . $image->file_name));
        // }

        // delete the DB records
        // $currentGallery->images()->delete();

        // $post->delete();

        // redirect back
        return redirect('posts');
   
    }

}
