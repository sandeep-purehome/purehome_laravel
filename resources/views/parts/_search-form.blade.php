<?php 
	use App\Listing;
?>


<form action="{{ url('/listing/search') }}" method="get">
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
		<div class="col-md-3">
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
		<div class="col-md-3">
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
		<div class="col-md-3">
			<div class="input-group">
				<label for="property_type">Property Type</label>
				<?php 
					$property_types = Listing::distinct('unit_type')->pluck('unit_type');
				?>
				<select class="form-control" name="property_type" id="property_type">
					@foreach ($property_types as $type)
						<option value="{{$type}}">{{$type}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group">
				<label for="price_range">Price Range</label>
				<select class="form-control" name="" id="">
					<option value="">> 100,000</option>
					<option value="">> 500,000</option>
					<option value="">> 1,000,000</option>
					<option value="">> 5,000,000</option>
				</select>
			</div>
		</div>
	</div>

	

	

	@endunless

</form>