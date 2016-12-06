<?php

Route::get('/', 'HomeController@index');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('portfolios/sport', 'PortfoliosController@sport');

Route::get('portfolios/nature', 'PortfoliosController@nature');

Route::get('portfolios/scenic', 'PortfoliosController@scenic');

Route::get('portfolios/people', 'PortfoliosController@people');

Route::get('portfolios/other', 'PortfoliosController@other');

Route::get('galleries', 'GalleriesController@index');


// Route::get('posts', 'PostsController@index');

// Route::get('posts/create', 'PostsController@create');

// Route::get('posts/{id}', 'PostsController@show');

// Route::post('posts', 'PostsController@store');

// Route::post('posts/{id}/edit', 'PostsController@store');

// ALL of above 'Route::post....' replaced by the Route below. 

Route::resource('posts', 'PostsController');



