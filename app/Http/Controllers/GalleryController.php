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
        $this->middleware('auth', ['except' => ['viewGalleryPortfolioAll', 'viewGalleryPortfolioSport', 'viewGalleryPortfolioNature', 'viewGalleryPortfolioScenic', 'viewGalleryPortfolioPeople', 'viewGalleryPortfolioPeople', 'viewGalleryPortfolioOther', 'viewGalleryPortfolioBlogpost', 'viewGalleryPicsOnly']]);
    }

    // This is just to view a Portfolio (All galleries) only with no admin
    public function viewGalleryPortfolioAll()
    {
        $galleries = Gallery::orderBy('id', 'desc')->paginate(8);

        $galleries->portfolioCat = 'All Galleries';

        // $portfolioName = 'All Galleries for Shaun';

        // $galleries = Gallery::where('created_by', Auth::user()->id)->get();

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);
    }

    // This is just to view the Sports Portfolio only with no admin
    public function viewGalleryPortfolioSport()
    {
    
        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'Sport')->paginate(8);

        $galleries->portfolioCat = 'Sport Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

        // This is just to view the Nature Portfolio only with no admin
    public function viewGalleryPortfolioNature()
    {

        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'Nature')->paginate(8);

        $galleries->portfolioCat = 'Nature Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the Scenic Portfolio only with no admin
    public function viewGalleryPortfolioScenic()
    {

        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'Scenic')->paginate(8);

        $galleries->portfolioCat = 'Scenic Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the People Portfolio only with no admin
    public function viewGalleryPortfolioPeople()
    {  
        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'People')->paginate(8);

        $galleries->portfolioCat = 'People Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the Sports Portfolio only with no admin
    public function viewGalleryPortfolioOther()
    {
        $galleries = Gallery::where('gallery_cat', 'Other')->paginate(8);

        $galleries->portfolioCat = 'Other Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }

    // This is just to view the Blog Portfolio only with no admin
    public function viewGalleryPortfolioBlogpost()
    {
        $galleries = Gallery::orderBy('id', 'desc')->where('gallery_cat', 'Blogpost')->paginate(8);

        $galleries->portfolioCat = 'Blog Galleries';

        return view('gallery.gallery-portfolio')
        ->with('galleries', $galleries);   
    }



    public function viewGalleryList()
    {

        $galleries = Gallery::where('created_by', Auth::user()->id)
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
                        

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

        $LastInsertId = $gallery->id;
        $galleries = Gallery::where('created_by', Auth::user()->id)->get();


    	return redirect()->back()
        ->with('data', $LastInsertId)
        ->with('galleries', $galleries)
        ->withInput();

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

    public function deleteImage($id)
    {
        $currentImage = \App\Image::findOrFail($id);

        $galleryData = $currentImage->gallery()->get();

        // check ownership as get ID from URL
        if ($galleryData[0]->created_by != Auth::user()->id) {
            abort('403', 'You are not allowed to delete this gallery');
        }

        $currentImage->delete();

        unlink(public_path($currentImage->file_path));
        unlink(public_path('gallery/images/thumbs/' . $currentImage->file_name));

        return redirect()->back();    
    }


}


