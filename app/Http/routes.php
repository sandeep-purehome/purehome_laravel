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

Route::get('db_test', function(){
	$listing 	= 	DB::table('listings')->where('id', 2)->get();
	var_dump($listing);
});

Route::get('/listing/details/{ref_no}', 'PagesController@getListing');

Route::get('/listing/sync' , 'ListingsController@syncListings');

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::get('test', function(){
	$listings = ['Hydra','Al Reem', 'Al Raha'];

	return view('test')->with('listings',$listings);
});

// Route::get('properties/{title?}', function ($title = null ) {
// 	if ($title == null){
// 		return view('hello');
// 	}
// 	else{
// 		return $title.' Property';
// 	}
// });
