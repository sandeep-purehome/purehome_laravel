<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use DB;

	class Image extends Model{

    public function listing(){
      return $this->belongsTo('App\Listing','unit_reference_no','unit_reference_no');
    }

	}
?>
