<?php 
	namespace App\Http\Controllers;

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

		public function getServices(){
			return view('pages.services');
		}

		
	}
	
?>