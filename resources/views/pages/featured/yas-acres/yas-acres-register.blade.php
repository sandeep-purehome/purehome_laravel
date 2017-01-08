@extends('layouts.master')

<style>	
	input.form-control{ height 	: 	60px;}

	.form-control{
		margin-top 			: 	15px;
		margin-bottom 		: 	15px;
	}
</style>

@section('content')

	@include('pages.featured.yas-acres._yas-acres-navigation')

	<div class="container">
		<div class="row section">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">	
					<div class="col-md-12">	
						<h1 class="headings-main">Customer Details</h1>	
					</div>
					<div class="col-md-12">	
						<input type="text" class="form-control input-lg" id="register_name" placeholder="Enter your Name">
					</div>
					<div class="col-md-6">	
						<input type="text" name="register_phone" id="register_phone" class="form-control input-lg" placeholder="Enter your Telephone Number">
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control input-lg" id="register_email" name="register_email" placeholder="Enter your Email Address">
					</div>
					<div class="form-group form-inline">
				    	<div class="col-sm-offset-3 col-sm-9">
				      		<div class="checkbox">
				      	 		<label>
				      	 	  		<input id="register_chk_villa" value="villa" type="checkbox"> Villa
				      	 		</label>
				      		</div>
				      		<div class="checkbox">
				      	  		<label>
				      	  	  		<input id="register_chk_townhouse" value="townhouse" type="checkbox"> Townhouse
				      	  		</label>
				      		</div>
					      	<div class="checkbox">
					      	  	<label>
					      	  	  	<input id="register_chk_duplex" value="duplex" type="checkbox"> Duplex
					      	  	</label>
					      	</div>
					      	<div class="form-group form-inline">
							    <div class="col-sm-8">
							    	<select class="form-control" id="register_bedrooms" name="register_bedroom">
										<option value="" disabled selected>Bedrooms</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
							    </div>
						    </div>
				  		</div>
					</div>
					<button type="submit"  id="register_submit" class="btn btn-lg primary_background text_secondary center-block">Register</button>
				</div>
				
					
					<div id="register_form" class="text-center">
			
						<div id="message" class=""></div>
						<div class="">
				  			
						  	<div class="form-group">
{{-- 						    	<label for="register_number" class="col-sm-2 control-label">Contact Number</label>
 --}}						    	<div class="col-sm-8">
						      		
						    	</div>
						  	</div>
						   	<div class="form-group">
{{-- 						    	<label for="register_email" class="col-sm-2 control-label">Email</label>
 --}}						    	<div class="col-sm-8">
						      		
						    	</div>
						  	</div>
						  	
							
						</div>
					</div>	
			</div>
		</div>
	</div>

@endsection


@section('scripts')

@endsection