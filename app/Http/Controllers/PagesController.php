<?php
	namespace App\Http\Controllers;

	use App\Listing;

	use DB;

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

		public function getSearchResults(Request $request){
			$search_term 	= 	$request->search_term;
			$listings 		=	Listing::where('community','like', $search_term)->orWhere('property_name','like',$search_term)->paginate(9);

			foreach ($listings as $listing){
				$featured = array_first($listing->my_images);
				$listing['featured'] 	= array_first($listing->my_images)[0]['image_name'];
			}

			return view('pages.listings')->with('listings', $listings)->with('ad_type', $search_term);
		}
	}

?>
