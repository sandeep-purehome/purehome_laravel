<div class=" listings col-md-4">
	<div class=" card-property">
		<a href="{{ url('listing/details/'.$listing->unit_reference_no) }}">	
			<img src="{{ $listing->featured }}" alt="">
		</a>
		<h2 class="title">{{ $listing->property_title }}</h2>
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

