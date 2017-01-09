@extends('layouts.master') 

@section('content')

<?php
	$listing 		= 	$data['listing'];
	//$image 			= 	$data['images'];
	//$facilities 	= 	$data['facilities'];
?>

@if ($data['invalid'])
	
	<div class="container section listing">
		<div class="row">
			<div class="col-md-12">
				<h1>Sorry ! Invalid Property ID</h1>
			</div>
		</div>
	</div>

@else

	<div class="container section listing">
		<div class="row">

			<div class="col-md-12 headings-main">
				<h1 class="text-left">{{ $listing->property_title }}</h1>	
			</div>

			<div class="col-md-8">

				@include('parts.listings._listing-carousel')

			</div>

			<div class="col-md-4 ">
		
				{{-- <p class="date-icon"><i class="fa fa-calendar fa-lg " aria-hidden="true"></i>&nbsp; {{ date('j F, Y' , strtotime($listing->listing_date)) }}</p> --}}

				<table class="table table-striped" id="features_table">
					<tr>
						<td><strong>Listing Added</strong></td>
						<td><i class="fa fa-calendar fa-lg " aria-hidden="true"></i>  {{ date('j F, Y' , strtotime($listing->listing_date)) }}</td>
					</tr>
					<tr>
						<td><strong>Reference No</strong></td>
						<td>{{ $listing->unit_reference_no }}</td>
					</tr>
					<tr>
						<td><strong>Price</strong></td>
						<td><span style="background-color: #3CAF18; padding: 10px;"><span style="color: #fff; font-weight: 700">AED</span> <span style="color: #fff; font-size: 25px; font-weight: 700;">{{ number_format($listing->price) }}</span></span></td>
					</tr>
					<tr>
						<td><strong>Cheques</strong></td>
						<td>{{ $listing->cheques }}</td>
					</tr>
					<tr>
						<td><strong>Property Type</strong></td>
						<td>{{ $listing->unit_type }}</td>
					</tr>
					<tr>
						<td><strong>Sale / Rent</strong></td>
						<td>{{ $listing->ad_type }}</td>
					</tr>
					<tr>
						<td><strong>Community</strong></td>
						<td>{{ $listing->community }}</td>
					</tr>
					<tr>
						<td><strong>Property</strong></td>
						<td>{{ $listing->property_name }}</td>
					</tr>
					
					
					
					<tr>
						<td><strong>Area</strong></td>
						<td>{{ $listing->unit_builtup_area }} Sqft.</td>
					</tr>
					<tr>
						<td><strong>Bedrooms</strong></td>
						@if($listing->bedrooms>0)
							<td>{{ $listing->bedrooms }}</td>
						@else
							<td>{{ "Studio" }}</td>
						@endif
					</tr>
					<tr>
						<td><strong>Bathrooms</strong></td>
						<td>{{ $listing->no_of_bathroom }}</td>
					</tr>
					<tr>
						<td><strong>Parking</strong></td>
						<td>{{ $listing->parking }}</td>
					</tr>
				</table>

				{{-- <div class="row listing-specs">
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->unit_builtup_area }} sq.ft.</h3>
					</div>
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->bedrooms }} bedrooms</h3>
					</div>
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->no_of_bathroom }} bathrooms</h3>
					</div>
				</div> --}}

				{{-- <div class="row">
					<span class="price"><span class="currency">AED</span> {{ number_format($listing->price) }}</span>
				</div> --}}

				{{-- <div class="row section">
					<button type="button" class="btn my-btn-lg btn-warning"><span class="" style="font-weight : 700; font-size : 20px;">SEND INQUIRY</span></button>
				</div> --}}
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				{{-- <br>
				<h2 class="headings-sub">Property Features & Details</h2>
				<br> --}}

				{{-- <table class="table table-striped" id="features_table">
					<tr>
						<td><strong>Reference No</strong></td>
						<td>{{ $listing->unit_reference_no }}</td>
					</tr>
					<tr>
						<td><strong>Property Type</strong></td>
						<td>{{ $listing->unit_type }}</td>
					</tr>
					<tr>
						<td><strong>Sale / Rent</strong></td>
						<td>{{ $listing->ad_type }}</td>
					</tr>
					<tr>
						<td><strong>Community</strong></td>
						<td>{{ $listing->community }}</td>
					</tr>
					<tr>
						<td><strong>Property</strong></td>
						<td>{{ $listing->property_name }}</td>
					</tr>
					<tr>
						<td><strong>Price</strong></td>
						<td>AED {{ number_format($listing->price) }}</td>
					</tr>
					<tr>
						<td><strong>Cheques</strong></td>
						<td>{{ $listing->cheques }}</td>
					</tr>
					<tr>
						<td><strong>Features</strong></td>
						<td> 

						@foreach ($listing->my_facilities as $facility)
							{{ $facility->facility}} ,
						@endforeach

						</td>
					</tr>
					<tr>
						<td><strong>Area</strong></td>
						<td>{{ $listing->unit_builtup_area }} Sqft.</td>
					</tr>
					<tr>
						<td><strong>Bedrooms</strong></td>
						<td>{{ $listing->bedrooms }}</td>
					</tr>
					<tr>
						<td><strong>Bathrooms</strong></td>
						<td>{{ $listing->no_of_bathroom }}</td>
					</tr>
					<tr>
						<td><strong>Parking</strong></td>
						<td>{{ $listing->parking }}</td>
					</tr>
				</table> --}}

				<h2 class="headings-sub">Description</h2>

				{!! $listing->web_remarks !!}
				
			</div>

			<div class="col-md-4">
				<div class="listing-map">
					<iframe class="" src="https://www.google.com/maps/embed/v1/place
					?key=AIzaSyAy8gygEx0dY-_9CiWaHa2wv4j3BNbIN5U
					&q={{ $listing->latitude }}, {{ $listing->longitude }}
					&center={{ $listing->latitude }}, {{ $listing->longitude }}
					&zoom=13" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="container section">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12 headings-main">
					<h1>Similar Properties</h1>
				</div>
			</div>
			@foreach($data['similar_listings'] as $listing)
				@include('parts.listings._listing-card',['listing' => $listing])
			@endforeach
			
		</div>
	</div>		

@endif

@endsection