@extends('layouts.master')


@section('content')
	<!-- Main Content -->
	@include('parts._carousel')
	
	{{-- Apartment Types --}}
	<div class="container section">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="row">
					<div class="col-md-12">
						<h1 class="headings-main">Property Types</h1>
					</div>
					<div class="col-md-4">
						<img src="{{ URL::asset('assets/images/property_type/studio.jpg') }}" alt="">
					</div>
					<div class="col-md-4">
						<img src="{{ URL::asset('assets/images/property_type/townhouse.jpg') }}" alt="">
					</div>
					<div class="col-md-4">
						<img src="{{ URL::asset('assets/images/property_type/villa.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Apartment Types Ends --}}


	<!-- Featured Locations -->
	<div class=" container-fluid section">
		<div class="row">
			<div class="col-md-12 headings-main">
				<h1>Featured Locations</h1>
			</div>
			<div class="col-md-3">
				<a href="{{ url('locations/yas-acres') }}">
					<div class="featured">
						<img class="img-responsive" src="assets/images/featured-locations/yas-acres.jpg" alt="Yas Acres, Yas Island, Abu Dhabi">
						<h2>YAS ACRES</h2>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<div class="featured">
				<img class="img-responsive" src="assets/images/featured-locations/ansam.jpg" alt="Ansam, Yas Island, Abu Dhabi">
					<h2>ANSAM</h2>
				</div>
			</div>
			<div class="col-md-3">
				<div class="featured">
				<img class="img-responsive" src="assets/images/featured-locations/mayan.jpg" alt="Mayan, Yas Island, Abu Dhabi">
					<h2>MAYAN</h2>
				</div>
			</div>
			<div class="col-md-3">
				<div class="featured">
				<img class="img-responsive" src="assets/images/featured-locations/west-yas.jpg" alt="West Yas, Yas Island, Abu Dhabi">
					<h2>WEST YAS</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured Locations Ends -->

	<div class="container ">
		<div class="row">
			<div class="col-md-12 headings-main">
				<h1>Recent Properties</h1>
			</div>

			@foreach($data['recent_listings']->chunk(3) as $row)
				<div class="row">
					@foreach($row as $listing)
						@include('parts.listings._listing-card',['listing' => $listing])
					@endforeach
				</div>
			@endforeach

			{{-- @foreach ($data['recent_listings'] as $listing)

				@include('parts.listings._listing-card',['listing' => $listing ])

			@endforeach --}}
			

		</div>
	</div>
	<!-- Main Content Ends -->
@endsection

@section('scripts')
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
@endsection
