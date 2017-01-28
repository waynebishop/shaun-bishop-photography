<?php

// These are here for search
use App\Post;
use Illuminate\Support\Facades\Input;

Route::get('/', 'HomeController@index');

Route::get('users/login', function () {
	return view('users/login');
});

Route::post('user/do-login', 'Auth\AuthController@doLogin');

Route::get('users/logout', function() {
	Auth::logout();
	return redirect('/');
});


// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('portfolios/sport', 'PortfoliosController@sport');

Route::get('portfolios/nature', 'PortfoliosController@nature');

Route::get('portfolios/scenic', 'PortfoliosController@scenic');

Route::get('portfolios/people', 'PortfoliosController@people');

Route::get('portfolios/other', 'PortfoliosController@other');


Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::Post('image/do-upload', 'GalleryController@doImageUpload');

Route::get('gallery/portfolioall', 'GalleryController@viewGalleryPortfolioAll');
Route::get('gallery/portfoliosport', 'GalleryController@viewGalleryPortfolioSport');

Route::get('gallery/portfolionature', 'GalleryController@viewGalleryPortfolioNature');
Route::get('gallery/portfolioscenic', 'GalleryController@viewGalleryPortfolioScenic');
Route::get('gallery/portfoliopeople', 'GalleryController@viewGalleryPortfolioPeople');
Route::get('gallery/portfolioother', 'GalleryController@viewGalleryPortfolioOther');
Route::get('gallery/portfolioblogpost', 'GalleryController@viewGalleryPortfolioBlogpost');

Route::get('gallery/viewonly/{id}', 'GalleryController@viewGalleryPicsOnly');

Route::get('gallery/delete-image/{id}', 'GalleryController@deleteImage');


Route::get('galleries', 'GalleriesController@index');


// Route::get('posts', 'PostsController@index');

// Route::get('posts/create', 'PostsController@create');

// Route::get('posts/{id}', 'PostsController@show');

// Route::post('posts', 'PostsController@store');

// Route::post('posts/{id}/edit', 'PostsController@store');

// ALL of above 'Route::post....' replaced by the Route below.


// Search function
Route::any('/search', function(){
	$q = Input::get ( 'q' );
	$post = Post::where('title', 'LIKE', '%' .$q. '%')->orWhere('intro', 'LIKE', '%' .$q. '%')->orWhere('body', 'LIKE', '%' .$q. '%')->get();
	
	// return($post);
	if(count($post) > 0)
        return view('posts/searchResults')->withDetails($post)->withQuery ( $q );
    else return view ('posts/searchResults')
    	->withMessage('No matching Posts found. Please try a different key word.')
    	->withQuery ( $q );
});

Route::get('posts/type/{id}', 'PostsController@blogType');

Route::resource('posts', 'PostsController');



