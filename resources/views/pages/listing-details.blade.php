@extends('layouts.master') 

@section('content')
<div class="container section listing">
	<div class="row">

		<div class="col-md-12 headings-main">

			<h1>Listing Title</h1>	
		</div>

		<div class="col-md-8">

			@include('parts.listings._listing-carousel')

		</div>

		<div class="col-md-4 ">
			<p class="date-icon"><i class="fa fa-calendar fa-lg " aria-hidden="true"></i>&nbsp; December 12, 2016</p>

			<div class="row listing-specs">
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

			<div class="row">
				<span class="price"><span class="currency">AED</span> 100,000</span>
			</div>

			<div class="row section">
				<button type="button" class="btn my-btn-lg btn-warning"><span class="" style="font-weight : 700; font-size : 20px;">SEND INQUIRY</span></button>
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

@endsection