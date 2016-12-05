<?php

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('posts', 'PostsController@index');

Route::get('posts/create', 'PostsController@create');

Route::get('posts/{id}', 'PostsController@show');

Route::post('posts', 'PostsController@store');



