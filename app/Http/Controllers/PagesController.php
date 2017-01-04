<?php
	namespace App\Http\Controllers;

	use App\Listing;

	use DB;
	use URL;

	use Illuminate\Http\Request;
	

	class PagesController extends Controller{

		public function getIndex(){
			$data['firstname'] 	= 	"Sandeep";
			$data['lastname'] 	= 	"Chandran";

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
			echo URL::previous();
			$search_term 		= 	$request->search_term;
			$bedrooms 			=	$request->bedrooms;
			$bathrooms 			=	$request->bathrooms;
			$bedcond = '=';
			$bathcond = '=';
			if($bedrooms == null){
				$bedrooms = 0;
				$bedcond = '>=';
			}
			if($bathrooms == null){
				$bathrooms = 0;
				$bathcond = '>=';
			}
			
			//echo $bedrooms;

			
			
			$listings 			=	Listing::where([
											['community','like', $search_term],
											['bedrooms',$bedcond,$bedrooms],
											['no_of_bathroom' , $bathcond, $bathrooms]
											])
										->orWhere([
											['property_name','like',$search_term],
											['bedrooms', $bedcond, $bedrooms],
											['no_of_bathroom', $bathcond, $bathrooms]
											])
										->paginate(9);	
			

			foreach ($listings as $listing){

				$featured 				= 	array_first($listing->my_images);
				$listing['featured'] 	= 	array_first($listing->my_images)[0]['image_name'];

			}

			return view('pages.listings')->with('listings', $listings)->with('search_term', $search_term);
		}
	}

?>
