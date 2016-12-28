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

Route::get('listing', function(){
	$listing = App\Listing::find(1);
	var_dump($listing);
});

Route::get('images', function(){
		//$listing = App\Listing::find('PUR-R-1261');
		// $myImages = App\Image::all();
		// foreach($myImages as $image){
		// 	var_dump($image->listing->community);
		// }
		$ref = 'PUR-R-1261';
		$images = App\Listing::find($ref)->my_images;
		foreach($images as $image){
			var_dump($image->image_name);
		}
		//var_dump($listing);
	//	$myImages = $listing->images;
		//var_dump($listing);
});

Route::get('facilities',function(){
	$ref = 'PUR-R-1261';
	$facilities = App\Listing::find($ref)->my_facilities;
	foreach($facilities as $facility){
		var_dump($facility->facility);
	}
});

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

//Route::get('listing', 'PagesController@getSingleListing');

//Route::get('listing', 'ListingsController@getIndex');

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
