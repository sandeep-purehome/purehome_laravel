<?php 
	use App\Listing;
?>


<form action="{{ url('/listing/search') }}" id="search_form" method="get">
	{{--  {!! Form::token(); !!} --}}
  	<div class="input-group">
		
		<div class="input-group-addon btn-info"><i class="fa fa-location-arrow"></i></div>
      	<input type="text" data-provide="typeahead" class="form-control typeahead input-lg" name="search_term" spellcheck="false" autocomplete="off" id="search_term" value="{{ $search_term or "" }}" placeholder="Enter Location, Community, Property Name">
      	<span class="input-group-btn">
			<button class="btn btn-warning btn-lg" type="submit">SEARCH</button>
		</span>
		
	</div>

	
	@unless (Request::is('/'))

	<div class="row" style="margin-top: 20px;">
		<div class="col-md-2">
			<div class="input-group">
				<label for="bedrooms">Bedrooms</label>
				<select class="form-control" name="bedrooms" id="bedrooms" >
					<option value="" <?php if($bedrooms == ""){ echo "selected";} ?> >Please Select</option>	
					@for ($i = 0; $i < 11; $i++)
		    			@if($i==0)
		    				<option value="{{ $i }}" <?php if($i == $bedrooms && $bedrooms != ""){echo "selected";} ?> >Studio</option>
		    			@else
		    				<option value="{{ $i }}" <?php if($i == $bedrooms){echo "selected";} ?> >{{ $i }} </option>
		    			@endif
					@endfor
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="input-group">
				<label for="bathrooms">Bathrooms</label>
				<select class="form-control" name="bathrooms" id="bathrooms" >
					<option value="" <?php if($bathrooms == 0){ echo "selected"; } ?> >Please Select</option>
				   	@for ($i = 1; $i < 11; $i++)
						<option value="{{ $i }}" <?php if($i == $bathrooms){echo "selected";} ?>>{{ $i }}</option>
				   	@endfor
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="input-group">
				<label for="property_type">Property Type</label>
				<?php 
					$property_types = Listing::distinct('unit_type')->pluck('unit_type');
				?>
				<select class="form-control" name="property_type" id="property_type">
					<option value="" <?php if ( $property_type=="" ) { echo "selected"; } ?> >Please Select</option>
					@foreach ($property_types as $type)
						<option value="{{$type}}" <?php if( $property_type == $type ) { echo "selected"; } ?>  >{{$type}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="input-group">
				<label for="ad_type">Ad Type</label>
				<select class="form-control" name="ad_type" id="ad_type">

					<option value="" <?php if( $ad_type=="" ) { echo "selected"; } ?> >Please Select</option>
					<option value="Sale" <?php if ($ad_type == 'Sale' ) { echo "selected"; }  ?> >Sale</option>
					<option value="Rent" <?php if ($ad_type == 'Rent') { echo "selected"; } ?> >Rent</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="input-group">
				<label for="price_range">Price Range</label>
				@if($ad_type == "Sale")
					<select class="form-control" name="price_range" id="price_range">
						<option value="" selected>Please Select</option>
						<option value="0">Upto 500,000</option>
						<option value="1">500,000 - 1,000,000</option>
						<option value="2">1,000,000 - 2,000,000</option>
						<option value="3">3,000,000 - 4,000,000</option>
						<option value="4">3,000,000 - 4,000,000</option>
						<option value="5">4,000,000 - 5,000,000</option>
						<option value="6">5,000,000 - 6,000,000</option>
						<option value="7">6,000,000 - 7,000,000</option>
						<option value="8">7,000,000 - 8,000,000</option>
						<option value="9">8,000,000 - 9,000,000</option>
						<option value="10">9,000,000 - 10,000,000</option>
						<option value="11"> Above 10,000,000</option>
					</select>	
				@else
					<select class="form-control" name="price_range" id="price_range">
						<option value="" <?php if ($price_range == ""){ echo "selected"; } ?> >Please Select</option>
						<option value="20" <?php if ($price_range == "11"){ echo "selected"; } ?> > Upto 100,000</option>
						<option value="21" <?php if ($price_range == "12"){ echo "selected"; } ?> > 100,000 - 200,000</option>
						<option value="22" <?php if ($price_range == "13"){ echo "selected"; } ?> > 200,000 - 300,000</option>
						<option value="23" <?php if ($price_range == "14"){ echo "selected"; } ?> > 300,000 - 400,000</option>
						<option value="24" <?php if ($price_range == "15"){ echo "selected"; } ?> > 400,000 - 500,000</option>
						<option value="25" <?php if ($price_range == "16"){ echo "selected"; } ?> > 500,000 - 600,000</option>
						<option value="26" <?php if ($price_range == "17"){ echo "selected"; } ?> > 600,000 - 700,000</option>
						<option value="27" <?php if ($price_range == "18"){ echo "selected"; } ?> > 700,000 - 800,000</option>
						<option value="28" <?php if ($price_range == "19"){ echo "selected"; } ?> > 800,000 - 900,000</option>
						<option value="29" <?php if ($price_range == "20"){ echo "selected"; } ?> > 900,000 - 1,000,000</option>
					</select>
				@endif
			</div>
		</div>
		<div class="col-md-2">
			<div class="input-group">
				<label for="price_range">Area (Sqft)</label>
				<select class="form-control" name="area" id="area" >
					<option value="" <?php if ($area == ""){ echo "selected"; } ?> >Please Select</option>
					<option value="1" <?php if ($area == "1"){ echo "selected"; } ?> >Upto 500 </option>
					<option value="2" <?php if ($area == "2"){ echo "selected"; } ?>  >500 - 1000</option>
					<option value="3" <?php if ($area == "3"){ echo "selected"; } ?>  >1000 - 2000</option>
					<option value="4" <?php if ($area == "4"){ echo "selected"; } ?>  >2000 - 3000</option>
					<option value="5" <?php if ($area == "5"){ echo "selected"; } ?>  >3000 - 4000</option>
					<option value="6" <?php if ($area == "6"){ echo "selected"; } ?>  >4000 - 5000</option>
					<option value="7" <?php if ($area == "7"){ echo "selected"; } ?>  >5000 - 6000</option>
					<option value="8" <?php if ($area == "8"){ echo "selected"; } ?>  >6000 - 7000</option>
					<option value="9" <?php if ($area == "9"){ echo "selected"; } ?>  >7000 - 8000</option>
					<option value="10" <?php if ($area == "10"){ echo "selected"; } ?>  >8000 - 9000</option>
					<option value="11" <?php if ($area == "11"){ echo "selected"; } ?>  >9000 - 10,000</option>
					<option value="12" <?php if ($area == "12"){ echo "selected"; } ?>  > > 10,000 </option>
				</select>
			</div>
			<div id="reset_filter" class="text-right" style="padding-top: 15px; color: #333; cursor:pointer;">
				<p>Reset Filter</p>
			</div>
			
		</div>
	</div>

	

	

	@endunless

</form>