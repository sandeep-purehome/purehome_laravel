@extends('layouts.master')

@section('content')

	

	@include('pages.featured.yas-acres._yas-acres-navigation')

	<div class="container section">
		
    	<div class="row">
			<div class="col-md-6" id="yas_gallery">
				<h2>Exterior</h2>
				<!-- Carousel Exterior -->
				<div id="carousel_gallery_exterior" class="carousel slide" data-ride="carousel">
		  			<ol class="carousel-indicators">
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="0" class="active"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="1"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="2"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="3"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="4"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="5"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="6"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="7"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="8"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="9"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="10"></li>
				    	<li data-target="#carousel_gallery_exterior" data-slide-to="11"></li>
				  	</ol>


		  			<!-- Wrapper for slides -->


		  			<div class="carousel-inner" role="listbox">
		    			<div class="item active">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/3_bed_duplex_x.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/3_bed_duplex_y.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/3_bed_townhouse.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_duplex_x.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_duplex_y.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_villa_garden.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_villa_golf.jpg') }}" alt="">
    					</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_villa_second_row_a.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/4_bed_villa_second_row_b.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/5_bed_villa_golf_back.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/5_bed_villa_golf_front.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/6_bed_villa_golf_back.jpg') }}" alt="">
		    			</div>
		    			<div class="item ">
		      				<img  src="{{ URL::asset('assets/images/featured-locations/yas-acres/exterior/6_bed_villa_golf_front.jpg') }}" alt="">
		    			</div>
    				</div>
		  			<!-- Controls -->
		  			<a class="left carousel-control" href="#carousel_gallery_exterior" role="button" data-slide="prev">
		    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    			<span class="sr-only">Previous</span>
		  			</a>
		  			<a class="right carousel-control" href="#carousel_gallery_exterior" role="button" data-slide="next">
		    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    			<span class="sr-only">Next</span>
		  			</a>
				</div>
				<!-- Carousel Exterior Ends -->			
			</div>

			<div class="col-md-6">
				<h2>Interior</h2>
				<!-- Carousel Exterior -->
							<div id="carousel_gallery_interior" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators">
						    	<li data-target="#carousel_gallery_interior" data-slide-to="0" class="active"></li>
						    	<li data-target="#carousel_gallery_interior" data-slide-to="1"></li>
						    	<li data-target="#carousel_gallery_interior" data-slide-to="2"></li>
						    	<li data-target="#carousel_gallery_interior" data-slide-to="3"></li>
						    	<li data-target="#carousel_gallery_interior" data-slide-to="4"></li>
						  	</ol>							

							  	<!-- Wrapper for slides -->
							  	<div class="carousel-inner" role="listbox">
					    			<div class="item active">
					      				<img class="gallery_interior_image" src="{{ URL::asset('assets/images/featured-locations/yas-acres/interior/large_1.jpg') }}" alt="">
					      				<div class="carousel-caption">
					      				</div>
					    			</div>
					    			<div class="item ">
					      				<img class="gallery_interior_image" src="{{ URL::asset('assets/images/featured-locations/yas-acres/interior/large_2.jpg') }}" alt="">
					      				<div class="carousel-caption">
					      				</div>
					    			</div>
					    			<div class="item ">
					      				<img class="gallery_interior_image" src="{{ URL::asset('assets/images/featured-locations/yas-acres/interior/large_3.jpg') }}" alt="">
					      				<div class="carousel-caption">
					      				</div>
					    			</div>
					    			<div class="item ">
					      				<img class="gallery_interior_image" src="{{ URL::asset('assets/images/featured-locations/yas-acres/interior/large_4.jpg') }}" alt="">
					      				<div class="carousel-caption">
					      				</div>
					    			</div>
					    			<div class="item ">
					      				<img class="gallery_interior_image" src="{{ URL::asset('assets/images/featured-locations/yas-acres/interior/large_5.jpg') }}" alt="">
					      				<div class="carousel-caption">
					      				</div>
					    			</div>
					    		</div>
	  		

					  			<!-- Controls -->
					  			<a class="left carousel-control" href="#carousel_gallery_interior" role="button" data-slide="prev">
					    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    			<span class="sr-only">Previous</span>
					  			</a>
					  			<a class="right carousel-control" href="#carousel_gallery_interior" role="button" data-slide="next">
					    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    			<span class="sr-only">Next</span>
					  			</a>
							</div>
							<!-- Carousel Exterior Ends -->	
			</div>

			
	  		
			
  		</div>

  		
	</div>
	
@endsection



@section('scripts')
	<script>
		// Gallery Carousel Improved
		( function(){
			var img_array = [];
			$('#gallery_carousel img').each(function(){
				img_array.push($(this).attr('src'));
			});
			var indicator_content_array = [];
			var inner_array = [];
			$.each(img_array, function(key,value){
				var inner_content ="";
				var indicator_content ="";
				var active="";
				if (key ==0 ){
					active = "active";
				}

				indicator_content = '<li data-target="#gallery_carousel" data-slide-to='+key+
				' class="' + active + '"><img class="img-responsive"  src=' + value +'>';

				indicator_content_array.push(indicator_content);
				 inner_content = 
				'<div class="item ' + active + '"' +
				   '><img style="width:100%;" src='+ value + '></div>';
				inner_array.push(inner_content);
				 
			});
			 $("#gallery_carousel_inner").html(inner_array);
				  $('#indicator_thumbnail').html(indicator_content_array);
			
			$('#gallery_carousel').carousel({
				pause: true,
				interval: false
			});
		})();
		// Gallery Carousel Improved
	</script>
@endsection