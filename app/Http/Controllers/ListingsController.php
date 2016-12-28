<?php
	namespace App\Http\Controllers;

	use App\Listing;

	class ListingsController extends Controller{

		public function getIndex(){
			$url 	= 	"http://xml.propspace.com/feed/xml.php?cl=1946&pid=8245&acc=8807";
			$xml 	=	simplexml_load_file($url);
			$listing_model  = new Listing();
			$listing_model->syncData($xml);
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
	}

?>