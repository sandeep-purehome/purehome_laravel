<?php
	namespace App\Http\Controllers;



	use Illuminate\Http\Request;
	use Mail;




	class ContactController extends Controller{


		public function processForm(Request $request){
			$this->validate($request, [
					'first_name' 	=> 'max:255', 
					'last_name'  	=> 'max:255', 
					'email'      	=> 'bail|required|email|max:255', 
					'message' 		=> 'required|max:5000'	
				]);
			
		}


	}
?>

	