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

Route::get('/listing/generate','ListingsController@generateLocations');

Route::get('listing/locations','ListingsController@getLocations');

// Route::get('/listing/show-listings/{ad_type}' , 'PagesController@getAllListings');

Route::get('/listing/search/{ad_type}', 'PagesController@getSearchResults');

Route::get('/listing/search' , 'PagesController@getSearchResults');

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::get('feedback','PagesController@getFeedback');

Route::get('calculator','PagesController@getCalculator');

Route::get('test', function(){
	$listings = ['Hydra','Al Reem', 'Al Raha'];

	return view('test')->with('listings',$listings);
});

Route::post('/contact/submit', 'ContactController@processForm');


// Featured Locations

Route::get('/locations/{location}', 'FeaturedController@getIndex');
Route::get('/locations/{location}/gallery', 'FeaturedController@getGallery');
Route::get('/locations/{location}/video', 'FeaturedController@getVideo');
Route::get('/locations/{location}/map', 'FeaturedController@getMap');
Route::get('/locations/{location}/floor-plans', 'FeaturedController@getFloorplans');
Route::get('/locations/{location}/brochure' , 'FeaturedController@getBrochure');
Route::get('/locations/{location}/register','FeaturedController@getRegister');
// Featured Locations Ends

// Route::get('properties/{title?}', function ($title = null ) {
// 	if ($title == null){
// 		return view('hello');
// 	}
// 	else{
// 		return $title.' Property';
// 	}
// });
