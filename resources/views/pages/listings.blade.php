@extends('layouts.master')

@section('content')
	
	<div class="container section">
		<div class="row">
			<div class="col-md-12">
				@include ('parts._search-form')
			</div>
		</div>

		<div class="row">

		
			<div class="col-md-12">

				@if(isset($ad_type))
					<h1 class="headings-main">{{ $listings->total() }} Properties for {{ $ad_type }} in Abu Dhabi</h1>

				@elseif (isset($search_term))
					<h1 class="headings-main">{{ $listings->total() }} Properties in {{$search_term}}</h1>
				@endif
				
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
					@if (isset($ad_type))
						{{ $listings->appends(['ad_type' => $ad_type])->links() }}	

					@elseif (isset($search_term))
						{{ $listings->appends(['search_term' => $search_term])->links() }} 
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
	<script>
		var myvalue = $("#search_term").val();
		console.log(myvalue);
		console.log("Hello");
	</script>
@endsection

