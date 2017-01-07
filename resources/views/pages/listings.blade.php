@extends('layouts.master')

@section('content')
	
	<div class="container section">
		<div class="row">
			<div class="col-md-12">
				@include ('parts._search-form')
			</div>
		</div>

		<br>
		<br>
		<hr>
		<br>

		<div class="row">
		
			<div class="col-md-12">

				
					<h1 class="headings-main">
					
						{{ $listings->total() }} 
						
	<?php 
		if ($property_type != "") {
		 	if($listings->total() > 1){
		 	 	echo "$property_type"."s"; 
		 	 }  
		 	else{
			 	echo $property_type; 
		 	} 
		 }
		 else{ 
			 echo "Properties"; 
		}  
	?>

						<?php if($ad_type != "") { echo "for $ad_type"; } ?>

						in 

						<?php if($search_term != ""){echo $search_term;}else{echo "Abu Dhabi";} ?> 

						({{ $listings->firstItem() }} - {{ $listings->lastItem() }})
					</h1>

			{{-- 	@elseif (isset($search_term))
					<h1 class="headings-main">{{ $listings->total() }} Properties in {{$search_term}} ({{ $listings->firstItem() }} - {{ $listings->lastItem() }})</h1>
				@endif --}}

				

			</div>

			@foreach ($listings as $listing)
				@include('parts.listings._listing-card',['listing' => $listing])
			@endforeach

		</div>
	</div>

	<div class="container section">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 ">
				<div class="center-block text-center">
						{{ $listings->appends([
							'bathrooms' 		=> $bathrooms,
							'bedrooms' 			=> $bedrooms,
							'search_term' 		=> $search_term,
							'property_type' 	=> $property_type,
							'ad_type' 			=> $ad_type,
							'price_range' 		=> $price_range,
							'area' 				=> $area
							])->links() }}
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
	<script>
		var myvalue = $("#search_term").val();
		console.log(myvalue);
		console.log("Hello");
	</script>


	<script>
		var url = "{{url('listing/locations')}}";
	</script>
	<script>
		// Locations for Type Ahead
		$.get(url, function(data){
			    $(".typeahead").typeahead({ source:data });
			},'json');
		// Locations for Type Ahead Ends
	</script>

	<script>
		// Form Submit upon Select Field Change
		$('#ad_type').on('change',function(){
     		$('#search_form').submit();
 		});
 		$('#bedrooms').on('change',function(){
     		$('#search_form').submit();
 		});
 		$('#bathrooms').on('change',function(){
     		$('#search_form').submit();
 		});
 		$('#property_type').on('change',function(){
     		$('#search_form').submit();
 		});
 		$('#price_range').on('change',function(){
     		$('#search_form').submit();
 		});
 		$('#area').on('change',function(){
     		$('#search_form').submit();
 		});

		// Form Submit upon Select Field Change
	</script>

	<script>
		// Reset Filters
		$('#reset_filter p').on('click',function(){

			$('#bedrooms').prop('selectedIndex',0);
			$('#bathrooms').prop('selectedIndex',0);
			$('#property_type').prop('selectedIndex',0);
			$('#ad_type').prop('selectedIndex',0);
			$('#price_range').prop('selectedIndex',0);
			$('#area').prop('selectedIndex',0);

			$('#search_form').submit();
			
		});
		// Reset Filters
	</script>

@endsection

