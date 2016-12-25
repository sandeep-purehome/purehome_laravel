@extends('layouts.master') 

@section('content')
<div class="container section listing">
	<div class="row">

		<div class="col-md-12 headings-main">
			<h1>Hydra Avenue Tower, Reem Island, 1BR Apartment for Rent</h1>	
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
	<div class="row">
		<div class="col-md-8">
			<h2>Description</h2>
			<p>
				Hydra Avenue is located on the waterfront in the City of Lights district on Reem Island. Reem Island itself is less than a kilometre away from downtown Abu Dhabi, with multiple bridges connecting it to central Abu Dhabi via Sowwah Island, in addition to the bridge from Salam Street
			</p>
			<p>
				This impressive development boasts 6 sky rise towers interconnected with an extensive retail podium. Within the podium, lay 39 Townhouses with a variety of 4 typical floor plans.
			</p>

			<br>
			<h2>Property Features & Details</h2>
			<br>

			<table class="table table-striped">
				<tr>
					<td><strong>Reference No</strong></td>
					<td>PUR-R-1261</td>
				</tr>
				<tr>
					<td><strong>Property Type</strong></td>
					<td>Apartment</td>
				</tr>
				<tr>
					<td><strong>Community</strong></td>
					<td>Al Reem Island</td>
				</tr>
				<tr>
					<td><strong>Property</strong></td>
					<td>Hydra Avene Tower</td>
				</tr>
				<tr>
					<td><strong>Features</strong></td>
					<td>Study, Central A/C & Heating, Balcony, Shared Pool, Built in Wardrobes, Covered Parking</td>
				</tr>
				<tr>
					<td><strong>Area</strong></td>
					<td>600 Sqft.</td>
				</tr>
				<tr>
					<td><strong>Bedrooms</strong></td>
					<td>1</td>
				</tr>
				<tr>
					<td><strong>Bathrooms</strong></td>
					<td>2</td>
				</tr>
				<tr>
					<td><strong>Parking</strong></td>
					<td>1</td>
				</tr>
			</table>
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