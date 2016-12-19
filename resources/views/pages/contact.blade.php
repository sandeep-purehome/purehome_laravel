@extends('layouts/master-contact')

@section('content')
	<div class="container-fluid">
		<div class="row contact-banner">
			<h1 class="headings-main">Contact Us</h1>
		</div>
		<div class="row well well-lg">
			<div class="col-md-3">
				<h2 class="headings-medium">Phones</h2>
				<h4><span class="fa fa-phone fa-lg" aria-hidden="true"></span>&nbsp; &nbsp; 02 4466 775</h4>
				<h4><span class="fa fa-mobile fa-2x" aria-hidden="true"></span>&nbsp; &nbsp; 055 808 2380</h4>
			</div>
			<div class="col-md-3">
				<h2 class="headings-medium">Email</h2>
				<h4><span class="fa fa-envelope fa-lg" aria-hidden="true"></span>&nbsp; &nbsp; info@purehome-re.ae</h4>
			</div>
			<div class="col-md-3">
				<h2 class="headings-medium">Address</h2>
				<address>
					<h4><strong>Pure Home Real Estate LLC</strong></h4>
					<h4>Al Nahyan Camp, Delma St.</h4>
					<h4>P.O. Box: 110388, Abu Dhabi</h4>
				</address>
			</div>
			<div class="col-md-3">
				<h2 class="headings-medium">Open Hours</h2>
				<h4><span class="fa fa-clock-o fa-lg" aria-hidden="true"></span>&nbsp; &nbsp; 9:00 - 18:00 &nbsp;Sun to Thurs</h4>
				<h4><span class="fa fa-clock-o fa-lg" aria-hidden="true"></span>&nbsp; &nbsp; 10:00 - 15:00 &nbsp;Sat</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 contact-page">
				@include('parts._quick-contact')
			</div>
		</div>
	</div>
@endsection
