<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    // This is just to view a Portfolio (All galleries) only with no admin
    public function viewGalleryPortfolioAll()
    {
        $galleries = Gallery::all();

        $galleries->portfolioCat = 'All Galleries';

        // $portfolioName = 'All Galleries for Shaun';

        // $galleries = Gallery::where('created_by', Auth::user()->id)->get();

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);
    }

    // This is just to view the Sports Portfolio only with no admin
    public function viewGalleryPortfolioSport()
    {
        // $galleries = Gallery::all();

        $galleries = Gallery::where('gallery_cat', 'Sport')->get();

        $galleries->portfolioCat = 'Sport Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

        // This is just to view the Nature Portfolio only with no admin
    public function viewGalleryPortfolioNature()
    {
        // $galleries = Gallery::all();

        $galleries = Gallery::where('gallery_cat', 'Nature')->get();

        $galleries->portfolioCat = 'Nature Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the Scenic Portfolio only with no admin
    public function viewGalleryPortfolioScenic()
    {
        // $galleries = Gallery::all();

        $galleries = Gallery::where('gallery_cat', 'Scenic')->get();

        $galleries->portfolioCat = 'Scenic Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the People Portfolio only with no admin
    public function viewGalleryPortfolioPeople()
    {
        // $galleries = Gallery::all();

        $galleries = Gallery::where('gallery_cat', 'People')->get();

        $galleries->portfolioCat = 'People Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the Sports Portfolio only with no admin
    public function viewGalleryPortfolioOther()
    {
        // $galleries = Gallery::all();

        $galleries = Gallery::where('gallery_cat', 'Other')->get();

        $galleries->portfolioCat = 'Other Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }





    public function viewGalleryList()
    {
    	// $galleries = Gallery::all();

        $galleries = Gallery::where('created_by', Auth::user()->id)->get();

    	return view('gallery.gallery')
    	->with('galleries', $galleries);
    }

	public function saveGallery(Request $request)
    {
    	// validate the Request through validation rules
        $validator = Validator::make($request->all(), [
            'gallery_name' => 'required|min:3',
        ]);            

        // take actions when validation fails
        if ($validator->fails()) {
            return redirect('gallery/list')
            ->withErrors($validator)
            ->withInput();
        }


        $gallery = new Gallery;

    	// Save a new Gallery
    	$gallery->name = $request->input('gallery_name');
        $gallery->gallery_cat = $request->input('gallery_cat');
    	$gallery->created_by = Auth::user()->id;
    	$gallery->published = 1;
    	$gallery->save();

    	return redirect()->back();

    }

    public function viewGalleryPics($id)
    {
    	$gallery = Gallery::findOrFail($id);

    	return view('gallery.gallery-view')
    	->with('gallery', $gallery);  
    }

    // This is to just view  a gallery with no admin
    public function viewGalleryPicsOnly($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('gallery.gallery-viewonly')
        ->with('gallery', $gallery);  
    }

    public function doImageUpload(Request $request)
    {
        // get the file form the post request
        $file = $request->file('file');
        
        // set my file name
        $filename = uniqid() . $file->getClientOriginalName();
        
        // move the file to correct location
        // check if images folder exists first and make one if not
        if (!file_exists('gallery/images')) {
            mkdir('gallery/images', 0777, true);     
        }

        // Now save image to images folder
        $file->move('gallery/images', $filename);

        // check if thumbs folder exists first and make one if not
        // if (!file_exists('gallery/images/thumbs')) {
        //     mkdir('gallery/images/thumbs', 0777, true);
        // }

        // Now save thumb sive image to thumbs folder
        $thumb = Image::make('gallery/images/' . $filename)->resize('240,160')->save('gallery/images/thumbs/' . $filename, 50);
        
        
        // save the image details into the database
        $gallery = Gallery::find($request->input('gallery_id'));
        $image = $gallery->images()->create([
            'gallery_id' => $request->input('gallery_id'),
            'file_name' => $filename,
            'file_size' => $file->getClientSize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'gallery/images/' . $filename,
            'created_by' => Auth::user()->id,
        ]);

        return $image;

    }

    public function deleteGallery($id)
    {
        // Load the gallery
        $currentGallery = Gallery::findOrFail($id);

        // check ownership as get ID from URL
        if ($currentGallery->created_by != Auth::user()->id) {
            abort('403', 'You are not allowed ot delete this gallery');
        }

        // get the images
        $images = $currentGallery->images();

        // delete the images
        foreach ($currentGallery->images as $image) {
            unlink(public_path($image->file_path));
            unlink(public_path('gallery/images/thumbs/' . $image->file_name));
        }

        // delete the DB records
        $currentGallery->images()->delete();

        $currentGallery->delete();

        // redirect back
        return redirect()->back();

    }    

}


