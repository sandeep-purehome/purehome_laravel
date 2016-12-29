@extends('layouts.master') 

@section('content')

<?php
	$listing 		= 	$data['listing'];
	$image 			= 	$data['images'];
	$facilities 	= 	$data['facilities'];
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
				<h1>{{ $listing->property_title }}</h1>	
			</div>

			<div class="col-md-8">

				@include('parts.listings._listing-carousel')

			</div>

			<div class="col-md-4 ">
				<p class="date-icon"><i class="fa fa-calendar fa-lg " aria-hidden="true"></i>&nbsp; {{ $listing->listing_date }}</p>

				<div class="row listing-specs">
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->unit_builtup_area }} sq.ft.</h3>
					</div>
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->bedrooms }} bedrooms</h3>
					</div>
					<div class="col-md-4 col-xs-4">
						<h3 class="specs">{{ $listing->no_of_bathroom }} bathrooms</h3>
					</div>
				</div>

				<div class="row">
					<span class="price"><span class="currency">AED</span> {{ $listing->price }}</span>
				</div>

				<div class="row section">
					<button type="button" class="btn my-btn-lg btn-warning"><span class="" style="font-weight : 700; font-size : 20px;">SEND INQUIRY</span></button>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<br>
				<h2 class="headings-sub">Property Features & Details</h2>
				<br>

				<table class="table table-striped" id="features_table">
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
						<td>AED {{ $listing->price }}</td>
					</tr>
					<tr>
						<td><strong>Cheques</strong></td>
						<td>{{ $listing->cheques }}</td>
					</tr>
					<tr>
						<td><strong>Features</strong></td>
						<td> 

						@foreach ($data['facilities'] as $facility)
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
				</table>

				<h2 class="headings-sub">Description</h2>

				{!! $listing->web_remarks !!}
				
			</div>

			<div class="col-md-4">
				<div class="listing-map">
					<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41075.592363940865!2d54.38473341734271!3d24.499183140362142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDI5JzU3LjkiTiA1NMKwMjQnMjAuOCJF!5e0!3m2!1sen!2sae!4v1454925843112" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
			<div class="col-md-4">
				<div class="card-property">
					<a href="#"><img src="{{ URL::asset('assets/images/properties/property1-tn.jpg') }}" alt=""></a>
					<h2 class="title">Hydra Avenue, Reem Island</h2>
					<h2 class="price">AED 90,000</h2>
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">1200 sq.ft.</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">4 bedrooms</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">2 bathrooms</h3>
						</div>
					</div>
					<p class="description">
						Hydra Avenue is located on the waterfront in the City of Lights district on Reem Island. Reem Island itself is less than a kilometre away from downtown Abu Dhabi, with multiple bridges connecting it to central Abu Dhabi via Sowwah Island, in addition to the bridge from Salam Street
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-property">
					<a href="#"><img src="{{ URL::asset('assets/images/properties/property2-tn.jpg') }}" alt=""></a>
					<h2 class="title">Hydra Avenue, Reem Island</h2>
					<h2 class="price">AED 100,000</h2>
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">1200 sq.ft.</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">4 bedrooms</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">2 bathrooms</h3>
						</div>
					</div>
					<p class="description">
						Hydra Avenue is located on the waterfront in the City of Lights district on Reem Island. Reem Island itself is less than a kilometre away from downtown Abu Dhabi, with multiple bridges connecting it to central Abu Dhabi via Sowwah Island, in addition to the bridge from Salam Street
					</p>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="card-property">
					<a href="#"><img src="{{ URL::asset('assets/images/properties/property3-tn.jpg') }}" alt=""></a>
					<h2 class="title">Hydra Avenue, Reem Island</h2>
					<h2 class="price">AED 110,000</h2>
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">1200 sq.ft.</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">4 bedrooms</h3>
						</div>
						<div class="col-md-4 col-xs-4">
							<h3 class="specs">2 bathrooms</h3>
						</div>
					</div>
					<p class="description">
						Hydra Avenue is located on the waterfront in the City of Lights district on Reem Island. Reem Island itself is less than a kilometre away from downtown Abu Dhabi, with multiple bridges connecting it to central Abu Dhabi via Sowwah Island, in addition to the bridge from Salam Street
					</p>
				</div>
			</div>
		</div>
	</div>		

@endif

@endsection