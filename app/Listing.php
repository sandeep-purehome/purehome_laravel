<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use DB;

	class Listing extends Model{

		public $primaryKey = 'unit_reference_no';
		public $incrementing 	= false;

		public function syncData($xml_listings){

			ini_set('max_execution_time', 5000);

			DB::table('listings')->truncate();
			DB::table('images')->truncate();
			DB::table('facilities')->truncate();

			foreach($xml_listings as $listing ){
				DB::table('listings')->insert([
						'property_title' 	=> $listing->Property_Title,
						'unit_reference_no'	=> $listing->Unit_Reference_No,
						'web_remarks' 		=> $listing->Web_Remarks,
						'unit_type' 		=> $listing->Unit_Type,
						'emirate' 			=> $listing->Emirate,
						'community' 		=> $listing->Community,
						'property_name' 	=> $listing->Property_Name,
						'price' 			=> $listing->Price,
						'bedrooms' 			=> $listing->Bedrooms,
						'no_of_bathroom' 	=> $listing->No_of_Bathroom
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


}

?>
