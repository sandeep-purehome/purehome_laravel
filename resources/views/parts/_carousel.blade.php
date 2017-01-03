<!-- Carousel -->
<div class="container-fluid">
	<div class="row">
		<div id="carousel-main" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
		    <!-- <li data-target="#carousel-main" data-slide-to="1"></li>
		    <li data-target="#carousel-main" data-slide-to="2"></li> -->
		  </ol>

		  <div class="carousel-jumbotron">

		  	<h1 class="headings-main">Professional realtor works for you</h1>

		  	<form action="{{ url('/listing/search') }}" method="get">
		  	 {!! Form::token(); !!}
			  	<div class="input-group">
					
						<div class="input-group-addon btn-info"><i class="fa fa-location-arrow"></i></div>
				      	<input type="text" data-provide="typeahead" class="form-control typeahead input-lg" name="search_term" spellcheck="false" autocomplete="off" id="search_term" placeholder="Enter Location, Community, Property Name">
				      	<span class="input-group-btn">
			    			<button class="btn btn-warning btn-lg" type="submit">SEARCH</button>
			  			</span>
					
		    	</div>
			</form>

		  </div>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="{{ URL::asset('assets/images/carousel/abu-dhabi-slide-1.jpg') }}" alt="Apartments in Abu Dhabi">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
		   <!--  <div class="item">
		      <img src="..." alt="...">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div> -->
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!-- Carousel Ends -->