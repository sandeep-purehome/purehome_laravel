@extends('layouts.master')



@section('content')
	<div class="section">
		<div class="row">
			<div class="col-md-12">
				<img class="img-responsive" src="{{ URL::asset("assets/images/featured-locations/$data['banner-img'].jpeg") }}" alt="Yas Acres, Residential Project in Yas Island by Aldar, Abu Dhabi">
			</div>
		</div>
	</div>


@endsection



@section('scripts')

@endsection