<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use DB;

	class Listing extends Model{

		public $primaryKey 		= 'unit_reference_no';
		public $incrementing 	= false;

		public function syncDatabase($xml_listings){

			ini_set('max_execution_time', 10000);

			DB::table('listings')->truncate();
			DB::table('images')->truncate();
			DB::table('facilities')->truncate();

			foreach($xml_listings as $listing ){

				DB::table('listings')->insert([
						'property_title' 		=> $listing->Property_Title,
						'unit_reference_no'		=> $listing->Unit_Reference_No,
						'web_remarks' 			=> $listing->Web_Remarks,
						'unit_type' 			=> $listing->Unit_Type,
						'emirate' 				=> $listing->Emirate,
						'community' 			=> $listing->Community,
						'property_name' 		=> $listing->Property_Name,
						'price' 				=> $listing->Price,
						'bedrooms' 				=> $listing->Bedrooms,
						'no_of_bathroom' 		=> $listing->No_of_Bathroom,
						'unit_model' 			=> $listing->Unit_Model,
						'unit_builtup_area' 	=> $listing->Unit_Builtup_Area,
						'ad_type' 				=> $listing->Ad_Type,
						'featured' 				=> $listing->Featured,
						'latitude' 				=> $listing->Latitude,
						'longitude' 			=> $listing->Longitude,
						'cheques'				=> $listing->Cheques,
						'frequency' 			=> $listing->Frequency,
						'no_of_rooms' 			=> $listing->No_of_Rooms,
						'parking' 				=> $listing->Parking,
						'listing_date' 			=> $listing->Listing_Date,
						'last_updated' 			=> $listing->Last_Updated
					]);

				foreach($listing->Images->image as $image){

					DB::table('images')->insert([
						'image_name' 		=> $image,
						'unit_reference_no' => $listing->Unit_Reference_No
					]);

				}

				foreach($listing->Facilities->facility as $facility){

					DB::table('facilities')->insert([
						'facility' 			=> $facility,
						'unit_reference_no' => $listing->Unit_Reference_No
					]);

				}
			}
		}

		public function my_images(){

			return $this->hasMany('App\Image','unit_reference_no', 'unit_reference_no');

		}

		public function my_facilities(){

      		return $this->hasMany('App\Facility','unit_reference_no','unit_reference_no');

    	}

    	protected $dateFormat = 'F'; 

    	
	}

?>
