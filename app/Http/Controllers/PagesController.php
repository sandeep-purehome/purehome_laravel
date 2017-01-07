<?php
	namespace App\Http\Controllers;

	use App\Listing;

	use DB;
	use URL;

	use Illuminate\Support\Facades\Input;
	use Illuminate\Http\Request;
	

	class PagesController extends Controller{

		public function getIndex(){
			
			$data['recent_listings'] 	=	Listing::orderBy('last_updated','desc')->take(6)->get();
			foreach ($data['recent_listings'] as $listing){
				$listing['featured'] 	= array_first($listing->my_images)[0]['image_name'];
			}

			return view('pages.home')->with("data", $data);
		}

		public function getContact(){
			return view('pages.contact');
		}

		public function getAbout(){
			return view('pages.about');
		}

		public function getCalculator(){
			return view('pages.calculator');
		}

		public function getFeedback(){
			return view('pages.feedback');
		}

		public function getServices(){
			return view('pages.services');
		}

		public function getListing($ref_no){

			$data['invalid'] 	=	false;
			$data['listing'] 	= 	Listing::find($ref_no);

			if(!empty($data['listing'])){
			
				$data['images'] 	= Listing::find($ref_no)->my_images;
				$data['facilities'] = Listing::find($ref_no)->my_facilities;

			}

			else{

				$data['invalid'] = true;

			}
			
			return view('pages.listing-details')->with('data', $data);
			
		}

		public function getAllListings($ad_type){

			$listings 	= 	Listing::where('ad_type', $ad_type)->paginate(9);

			foreach ($listings as $listing){
				$listing['featured'] 	= array_first($listing->my_images)[0]['image_name'];
			}
			
			return view('pages.listings')->with('listings', $listings)
										->with('ad_type', $ad_type);
		}

		

		public function getSearchResults(Request $request){

			$search_term 	= $request->search_term;
			$bedrooms 		= $request->bedrooms;
			$bathrooms 		= $request->bathrooms;
			$property_type 	= $request->property_type;
			$ad_type 		= $request->ad_type;
			$price_range 	= $request->price_range;
			$area 			= $request->area;
			
			if ( $search_term == "" ){
				$search_term = 'Abu Dhabi';
			}
			
			$query = Listing::where('community','like',$search_term);

			if(!$query->first()){
				$query = Listing::where('property_name','like',$search_term);
				if(!$query->first()){
					$query = Listing::where('emirate','like',$search_term);
				}
			}
			if($bedrooms != ""){
				$query = $query->where('bedrooms','=',$bedrooms);
			}
			if($bathrooms != ""){
				$query = $query->where('no_of_bathroom','=',$bathrooms);
			}
			if($property_type !=""){
				$query = $query->where('unit_type','=',$property_type);
			}
			if($ad_type != ""){
				$query = $query->where('ad_type', '=', $ad_type);
			}
			if($price_range != ""){
				$price_ranges = PagesController::setPriceRange($price_range);
				$query = $query->where([
						['price', '>' , $price_ranges['min']],
						['price', '<' , $price_ranges['max']]
					]);
			}
			if($area != ""){
				$area_ranges = PagesController::setAreaRange($area);
				$query = $query->where([
						['unit_builtup_area', '>' , $area_ranges['min']],
						['unit_builtup_area', '<' , $area_ranges['max']]
					]);
			}

			$listings= $query->paginate(9);
			
			foreach ($listings as $listing){
				$featured 				= 	array_first($listing->my_images);
				$listing['featured'] 	= 	array_first($listing->my_images)[0]['image_name'];
			}

			return view('pages.listings')
					->with('listings', $listings)
					->with('search_term', $search_term)
					->with('bedrooms', $bedrooms)
					->with('bathrooms', $bathrooms)
					->with('property_type', $property_type)
					->with('ad_type', $ad_type)
					->with('price_range', $price_range)
					->with('area', $area);
		}

		public function setAreaRange($area){
			switch($area){
				case '1' : {
					$min = 0;
					$max = 500;
					break;
				}
				case '2' : {
					$min = 500;
					$max = 1000;
					break;
				}
				case '3' : {
					$min = 1000;
					$max = 2000;
					break;
				}
				case '4' : {
					$min = 2000;
					$max = 3000;
					break;
				}
				case '5' : {
					$min = 3000;
					$max = 4000;
					break;
				}
				case '6' : {
					$min = 4000;
					$max = 5000;
					break;
				}
				case '7' : {
					$min = 5000;
					$max = 6000;
					break;
				}
				case '8' : {
					$min = 6000;
					$max = 7000;
					break;
				}
				case '9' : {
					$min = 7000;
					$max = 8000;
					break;
				}
				case '10' : {
					$min = 8000;
					$max = 9000;
					break;
				}
				case '11' : {
					$min = 9000;
					$max = 10000;
					break;
				}
				case '12' : {
					$min = 10000;
					$max = 99000;
					break;
				}
			}
			$ranges['min'] = $min;
			$ranges['max'] = $max;
			return $ranges;
		}

		public function setPriceRange($price_range){
			switch($price_range){
				case '0' :{
					$min = 0;
					$max = 500000;
					break;
				}
				case '1' :{
					$min = 500000;
					$max = 1000000;
					break;
				}
				case '2' :{
					$min = 1000000;
					$max = 2000000;
					break;
				}
				case '3' :{
					$min = 2000000;
					$max = 3000000;
					break;
				}
				case '4' :{
					$min = 3000000;
					$max = 4000000;
					break;
				}
				case '5' :{
					$min = 4000000;
					$max = 5000000;
					break;
				}
				case '6' :{
					$min = 5000000;
					$max = 6000000;
					break;
				}
				case '7' :{
					$min = 6000000;
					$max = 7000000;
					break;
				}
				case '8' :{
					$min = 7000000;
					$max = 8000000;
					break;
				}
				case '9' :{
					$min = 8000000;
					$max = 9000000;
					break;
				}
				case '10' :{
					$min = 9000000;
					$max = 10000000;
					break;
				}
				case '11' :{
					$min = 10000000;
					$max = 99000000;
				}
				case '20' :{
					$min = 0;
					$max = 100000;
					break;
				}
				case '21' :{
					$min = 100000;
					$max = 200000;
					break;
				}
				case '22' :{
					$min = 200000;
					$max = 300000;
					break;
				}
				case '23' :{
					$min = 300000;
					$max = 400000;
					break;
				}
				case '24' :{
					$min = 400000;
					$max = 500000;
					break;
				}
				case '25' :{
					$min = 500000;
					$max = 600000;
					break;
				}
				case '26' :{
					$min = 600000;
					$max = 700000;
					break;
				}
				case '27' :{
					$min = 700000;
					$max = 800000;
					break;
				}
				case '28' :{
					$min = 800000;
					$max = 900000;
					break;
				}
				case '29' :{
					$min = 900000;
					$max = 1000000;
					break;
				}
				// default:{
				// 	$min = 0;
				// 	$max = 0;
				// }

			}
			$range['min'] = $min;
			$range['max'] = $max;
			return $range;
		}

	}

?>
