@extends('layouts.master')


@section('content')
	<!-- Main Content -->
	@include('parts._carousel')

	<!-- Featured Locations -->
	<div class="">
		<div class="row">
			<div class="col-md-12 headings-main">
				<h1>Featured Locations</h1>
			</div>
			<div class="col-md-3">
				<div class="featured">
					<img class="img-responsive" src="assets/images/featured-locations/yas-acres.jpg" alt="Yas Acres, Yas Island, Abu Dhabi">
					<h2>YAS ACRES</h2>
				</div>
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

			@foreach ($data['recent_listings'] as $listing)

				@include('parts.listings._listing-card',['listing' => $listing ])

			@endforeach
			

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
