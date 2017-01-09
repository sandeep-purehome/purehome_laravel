<?php
	namespace App\Http\Controllers;

	use App\Listing;

	use DB;
	use URL;

	use Illuminate\Support\Facades\Input;
	use Illuminate\Http\Request;

	

	class FeaturedController extends Controller{

		public function getIndex($location){
			switch($location){
				case 'yas-acres':{
					$data['home_view_path'] 	=	'pages.featured.yas-acres.yas-acres-home';

					$homeview = FeaturedController::home_page($data);
					return $homeview;
					break;
				}
				case 'ansam' :{
					$data['home_view_path'] 	=	'pages.featured.ansam.ansam-home';
					$homeview 					= 	FeaturedController::home_page($data); 
					return $homeview;
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		public function getGallery($location){
			switch($location){
				case 'yas-acres':{
					$data['gallery_view_path'] 	=	'pages.featured.yas-acres.yas-acres-gallery';

					$gallery = FeaturedController::gallery($data);
					return $gallery;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		public function getVideo($location){
			switch($location){
				case 'yas-acres':{
					$data['video_view_path'] 	=	'pages.featured.yas-acres.yas-acres-video';

					$video = FeaturedController::video($data);
					return $video;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		public function getfloorPlans($location){
			switch($location){
				case 'yas-acres':{
					$data['floorplans_view_path'] 	=	'pages.featured.yas-acres.yas-acres-floorplans';

					$floorplans = FeaturedController::floorplans($data);
					return $floorplans;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		

		public function getMap($location){
			switch($location){
				case 'yas-acres':{
					$data['map_view_path'] 	=	'pages.featured.yas-acres.yas-acres-map';

					$video = FeaturedController::map($data);
					return $video;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}


		public function getBrochure($location){
			switch($location){
				case 'yas-acres':{
					$data['brochure_view_path'] 	=	'pages.featured.yas-acres.yas-acres-brochure';

					$brochure = FeaturedController::brochure($data);
					return $brochure;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		public function getRegister($location){
			switch($location){
				case 'yas-acres':{
					$data['register_view_path'] 	=	'pages.featured.yas-acres.yas-acres-register';

					$register = FeaturedController::register($data);
					return $register;
					break;
				}
				case 'ansam' :{
					
					break;
				}
				case 'west-yas' :{
					echo 'West Yas';
					break;
				}
				case 'mayan' :{
					echo 'Mayan';
					break;
				}
			}
		}

		public function register($data){
			return view($data['register_view_path'])->with('data', $data);
		}

		public function brochure($data){
			return view($data['brochure_view_path'])->with('data', $data);
		}

		public function floorplans($data){
			return view($data['floorplans_view_path'])->with('data',$data);
		}

		public function map($data){
			return view($data['map_view_path'])->with('data',$data);
		}

		public function video($data){
			return view($data['video_view_path'])->with('data',$data);
		}

		public function gallery($data){
			return view($data['gallery_view_path'])->with('data',$data);
		}

		public function home_page($data){
			return view($data['home_view_path'])->with('data',$data);
		}

	}
?>