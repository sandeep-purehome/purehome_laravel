<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::get('listing', 'PagesController@getSingleListing');

// Route::get('properties/{title?}', function ($title = null ) {
// 	if ($title == null){
// 		return view('hello');
// 	}
// 	else{
// 		return $title.' Property';
// 	}
// });


