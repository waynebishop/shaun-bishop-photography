<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function viewGalleryList()
    {
    	return view('gallery.gallery');
    }

	public function saveGallery(Request $request)
    {


    }

    public function viewGalleryPics()
    {


    }

    public function doImageUpload(Request $request)
    {


    }    

}
