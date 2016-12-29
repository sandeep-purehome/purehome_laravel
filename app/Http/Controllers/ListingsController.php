<?php
	namespace App\Http\Controllers;

	use App\Listing;

	class ListingsController extends Controller{

		public function getIndex(){
			
			// //var_dump($xml);
			// //print_r((string) $listings->Listing[0]->Property_Title);
		 // 	foreach ($xml as $listing){
		 // 		echo "<h1>$listing->count</h1>";
		 // 		echo $listing->Property_Title;
		 // 		echo "<br>";
		 // 		echo $listing->Ad_Type;
		 // 		echo "<br>";
		 // 		echo $listing->Unit_Type;
		 // 		echo "<br>";
		 // 		echo $listing->Unit_Builtup_Area;
		 // 		echo "<br>";
		 // 		echo $listing->No_of_Bathroom;
		 // 		echo "<br>";
		 // 		echo $listing->Bedrooms;
		 // 		echo "<br>";
		 // 		echo "<h3>$listing->Price</h3>";
		 // 		echo "<br>";
		 // 		echo $listing->Cheques;
		 // 		echo "<br>";
		 // 		echo $listing->Emirate;
		 // 		echo "<br>";
		 // 		echo $listing->Community;
		 // 		echo "<br>";
		 // 		echo $listing->Property_Name;
		 // 		echo "<br>";
		 // 		echo "<br>";
		 // 		foreach ($listing->Images->image as $image){
		 // 			echo $image;
		 // 			echo "<br>";
		 // 		}
		 // 		echo "<br>";
		 // 		foreach ($listing->Facilities->facility as $facility){
		 // 			echo $facility;
		 // 			echo "<br>";
		 // 		}
		 // 		echo $listing->Web_Remarks;
		 // 		echo "<br>";
		 // 		echo "<br>";
		 // 		echo "<br>";
		 // 		echo "<br>";
		 // 	}
		}

		public function getListing($ref_no){
  	 		$data['listing'] 	= Listing::find($ref_no);
				if(!empty($data['listing'])){
					$data['images'] 	= Listing::find($ref_no)->my_images;
					$data['facilities'] = Listing::find($ref_no)->my_facilities;
						echo $data['listing'];
						echo '<br>';
					foreach($data['images'] as $image){
						echo $image->image_name;
						echo '<br>';
					}
					foreach($data['facilities'] as $facility){
						echo $facility->facility;
						echo '<br>';
					}
				}
				else{
					echo "Invalid Reference No";
				}
		}

		public function syncListings(){
			
			$url 	= 	"http://xml.propspace.com/feed/xml.php?cl=1946&pid=8245&acc=8807";
			$xml 	=	simplexml_load_file($url);

			$listing_model  = new Listing();

			$listing_model->syncDatabase($xml);
			
		}
	}



?>
