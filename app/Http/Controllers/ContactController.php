<?php
	namespace App\Http\Controllers;



	use Illuminate\Http\Request;
	use Mail;




	class ContactController extends Controller{


		public function processForm(Request $request){
			$this->validate($request, [
					'first_name' 	=> 'required|max:255', 
					'last_name'  	=> 'required|max:255', 
					'email'      	=> 'bail|required|email|max:255', 
					'message' 		=> 'required|max:5000'	
				]);

			Mail::send(['text' => 'emails.contact-email'], ['data' => $request],function($message){
				$message->from('sandeep.gsis@gmail.com','Sandeep Chandran');
				$message->to('it@purehome-re.ae');
			});
		}

		


	}
?>

	