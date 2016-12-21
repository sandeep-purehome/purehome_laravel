<?php 
	namespace App\Http\Controllers;

	class PagesController extends Controller{

		public function getIndex(){
			$firstname 	= 	"Sandeep";
			$lastname 	= 	"Chandran";

			$fullname 	=	$firstname.' '.$lastname;

			return view('pages.home');
		}

		public function getContact(){
			return view('pages.contact');
		}
	}
	
?>