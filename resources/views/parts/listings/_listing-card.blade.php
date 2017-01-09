<style>
	.grow { transition: all .9s ease-in-out; }
	.grow:hover { transform: scale(1.5); }

</style>

<div class=" listings col-md-4 ">
	<div class=" card-property shadow" style="padding: 10px; ">
		<?php 
			$title_url 	= 	str_replace(' ' , '-' , $listing->property_title);
			$title_url 	= 	preg_replace('/[^A-Za-z0-9\-]/', '', $title_url);
			$title_url 	= 	urlencode($title_url);
		?>
		<div style="overflow: hidden;">
			<a href="{{ url('listing/details/'.$listing->unit_reference_no.'/'.$title_url) }}">	
				<img class="grow" src="{{ $listing->featured }}" alt="">
			</a>
		</div>
		
		<a href="{{ url('listing/details/'.$listing->unit_reference_no.'/'.$title_url) }}" style="text-decoration: none;"><h2 class="title">{{ $listing->property_title }}</h2></a>
		<h2 class="price">AED {{ number_format($listing->price) }}</h2>
		<div class="row">
			<div class="col-md-4 col-xs-4">
				<h3 class="specs">{{ $listing->unit_builtup_area }} Sqft.</h3>
			</div>
			<div class="col-md-4 col-xs-4">
				@if($listing->bedrooms > 0)
					<h3 class="specs"><span class="fa fa-bed fa-lg"></span> &nbsp; {{ $listing->bedrooms }} Beds</h3>
				@else
					<h3 class="specs"><span class="fa fa-bed fa-lg"></span> &nbsp; Studio</h3>
				@endif	
			</div>
			<div class="col-md-4 col-xs-4">
				<h3 class="specs"><span class="fa fa-bath fa-lg"></span> &nbsp; {{ $listing->no_of_bathroom }} Baths</h3>
			</div>
		</div>
		<p class="description">
			{{ str_limit( strip_tags($listing->web_remarks),$limit=180, $end="..." ) }}
		</p>
	</div>
</div>

