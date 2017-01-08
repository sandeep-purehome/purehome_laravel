@extends('layouts.master')



@section('content')
	
	

	@include('pages.featured.yas-acres._yas-acres-navigation')

	<div class="container-section">
		<div class="row">
			<div class="col-md-12">
				<h1 class="headings-main">Yas Acres Location</h1>
				<div id="map_canvas" class="center-block text-center" style="">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29046.026179530625!2d54.596491439796125!3d24.49400419598912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e4f8606588173%3A0x3b65dc845c408b9f!2sYas+Island!5e0!3m2!1sen!2sae!4v1461824063016"  width="75%" height="500"  frameborder="0" style="border:0"></iframe>
				</div>	
			</div>
		</div>
	</div>
	
@endsection



@section('scripts')

@endsection