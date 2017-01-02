@extends('layouts.master')

@section('content')
	
	<div class="container section">
		<div class="row">
		
			<div class="col-md-12">

				<h1 class="headings-main">{{ $listings->total() }} Properties for {{ $ad_type }} in Abu Dhabi</h1>

				<h2 class="text-center headings-sub">({{ $listings->firstItem() }} - {{ $listings->lastItem() }})</h2>

			</div>

			@foreach ($listings as $listing)
				
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

								<h3 class="specs"><span class="fa fa-bed fa-lg"></span> &nbsp; {{ $listing->bedrooms }} Beds</h3>

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

			@endforeach

		</div>
	</div>

	<div class="container section">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 ">
				<div class="center-block text-center">
					{{ $listings->links() }}	
				</div>
			</div>
		</div>
	</div>

@endsection
