@extends('layouts.master')


@section('content')
	<!-- Main Content -->
	@include('parts._carousel')

	<!-- Featured Locations -->
	<div class="">
		<div class="row">
			<div class="col-md-12 headings-main">
				<h1>{{ $data['firstname'] }} {{ $data['lastname'] }}</h1>
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
			<div class="col-md-4">
				<div class="card-property">
					<a href="#"><img src="assets/images/properties/property1-tn.jpg" alt=""></a>
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
					<a href="#"><img src="assets/images/properties/property2-tn.jpg" alt=""></a>
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
					<a href="#"><img src="assets/images/properties/property3-tn.jpg" alt=""></a>
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
