@extends('layouts.master')

@section('content')
	@include('pages.featured.yas-acres._yas-acres-navigation')

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_th_ma.png') }}"" data-heading="3 Bedroom Townhouse Mid Type A">
			
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_th.jpg') }}">
			
				
					<h2 class="headings_thumbnail">3 BR Townhouse Mid [A] </h2>
				
			
		</div>


		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_th_mb.png') }}" data-heading="3 Bedroom Townhouse Mid Type B">
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_th.jpg') }}">
				
			
					<h2 class="headings_thumbnail">3 BR Townhouse Mid [B]</h2>
				
			
		</div>	


		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_th_ea.png') }}" data-heading="3 Bedroom Townhouse End Type A">
			
				
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_th.jpg') }}">
				
				
					<h2 class="headings_thumbnail">3 BR Townhouse End [A]</h2>
			
					
		</div>
	

			

		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_th_eb.png') }}" data-heading="3 Bedroom Townhouse End Type B">
		
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_th.jpg') }}">
				
			
					<h2 class="headings_thumbnail">3 BR Townhouse End [B]</h2>
					
		</div>

		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_du_x.png') }}" data-heading="3 Bedroom Duplex X">
			
				
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_du_x.jpg') }}">
			
					<h2 class="headings_thumbnail">3 BR Duplex [X]</h2>
					
		</div>	

		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_3br_du_y.png') }}" data-heading="3 Bedroom Duplex Y">
			
				
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/3br_du_y.jpg') }}">
			
					<h2 class="headings_thumbnail">3 BR Duplex [Y]</h2>
						
		</div>
	
		<div class="clearfix"></div>
	

		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_4br_du_x.png') }}" data-heading="4 Bedroom Duplex X">
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/4br_du_x.jpg') }}">
				
					<h2 class="headings_thumbnail">4 BR Duplex [X]</h2>
					
		</div>

		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_4br_du_y.png') }}" data-heading="4 Bedroom Duplex Y">
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/4br_du_y.jpg') }}">
				
					<h2 class="headings_thumbnail ">4 BR Duplex [Y]</h2>
					
		</div>
		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_4br_vi_2r_a.png') }}" data-heading="4 Bedroom Villa Second Row Type A">
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/4br_vi_2r_a.jpg') }}">
				
					<h2 class="headings_thumbnail">4 BR Villa 2nd Row [A]</h2>
				
		</div>
	
	
		<div class="col-md-4 col-sm-6" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_4br_vi_2r_b.png') }}" data-heading="4 Bedroom Villa Second Row Type B">
			
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/4br_vi_2r_b.jpg') }}">
				
					<h2 class="headings_thumbnail">4 BR Villa 2nd Row [B]</h2>
						
		</div>


		<div class="col-md-4 col-sm-6"  data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_4br_vi_garden.png') }}" data-heading="4 Bedroom Villa Garden">
		
					<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/4br_vi_garden.jpg') }}">
				
					<h2 class="headings_thumbnail">4 BR Villa Garden</h2>
			
		</div>
		<div class="col-md-4"  data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_ro_4br_vi_gf.png') }}" data-heading="4 Bedroom Villa Golf Front">
				<img class="img-responsive"   src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/ro_4br_vi_gf.jpg') }}">
				<h2 class="headings_thumbnail">4 Bedroom Golf Front</h2>
		</div>
		<div class="col-md-4" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_ro_5br_vi_gf.png') }}" data-heading="5 Bedroom Villa Golf Front">
				<img class="img-responsive" data-content="ro_5br_vi_gf" src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/ro_5br_vi_gf.jpg') }}">
				<h2 class="headings_thumbnail">5 Bedroom Golf Front</h2>
		</div>
		<div class="col-md-4" data-toggle="modal" data-target=".modal_floorplan" data-img="{{ URL::asset('assets/images/featured-locations/yas-acres/floorplans/floorplan_ro_6br_vi_gf.png') }}" data-heading="6 Bedroom Villa Golf Front">
				<img class="img-responsive" data-content="ro_5br_vi_gf" src="{{ URL::asset('assets/images/featured-locations/yas-acres/properties/ro_6br_vi_gf.jpg') }}">
				<h2 class="headings_thumbnail">6 Bedroom Golf Front</h2>
		</div>	
		</div>
	</div>

	<div class="modal fade modal_floorplan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
	     		<div class="modal-header">
	        		<button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title " id="gridSystemModalLabel"></h4>
	      		</div>
		      	<div class="modal-body">
		      		<img class="img-responsive" src="http://www.purehome-re.ae/assets/images/gallery/floorplans/" alt="">
		      	</div>
    		</div>
  		</div>
  	</div>


@endsection


@section('scripts')
	<script>
		// Modal Floorplan
		( function(){
			$('.modal_floorplan').on('show.bs.modal', function (event) {
		  		var button = $(event.relatedTarget); 
		  		var heading = button.data('heading'); 
		  		var img_src = button.data('img');
		  		var modal = $(this);
		  		modal.find('.modal-title').text(heading);
		  		modal.find('.modal-body img').attr("src",img_src);
			})
		})();
	</script>
@endsection