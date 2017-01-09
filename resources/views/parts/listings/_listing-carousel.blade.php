<!-- Carousel -->
<div class="container-fluid">
	<div class="row">
		<div id="listing-carousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		 

		  		@foreach ( $listing->my_images as $index_key => $image )
						@if ( $index_key==0 )
							<li data-target="#listing-carousel" data-slide-to="{{ $index_key }}" class="active"></li>	

						@else
							<li data-target="#listing-carousel" data-slide-to="{{ $index_key }}"></li>	
						@endif

		  		@endforeach
		
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">

			@foreach ($listing->my_images as $index_key => $image)

				@if ($index_key==0)
					
					<div class="item active">
							<img class="img-responsive" src="{{ $image->image_name }}" style="width:100%;" alt="Apartments in Abu Dhabi">
					</div>

				@else

					<div class="item">

			      		<img class="img-responsive" src="{{ $image->image_name }}" style="width:100%;" alt="Apartments in Abu Dhabi">

			    	</div>

				@endif

			@endforeach

		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#listing-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#listing-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!-- Carousel Ends -->