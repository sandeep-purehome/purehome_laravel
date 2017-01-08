@extends('layouts.master')

@section('content')
	
	@include('pages.featured.yas-acres._yas-acres-navigation')

	<div class="container section">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div style="margin-top: 25px;">
					<a style="text-decoration: none;" href="{{ URL::asset('assets/files/brochures/yas-brochure.pdf') }}" target="_blank" >
						<img class="img-responsive" src="{{ URL::asset('assets/images/featured-locations/yas-acres/brochures.png') }}">
						<h2  class="headings_thumbnail text-center">YAS ACRES BROCHURE</h2>
					</a>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection