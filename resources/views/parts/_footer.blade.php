<footer class="container-fluid container-section">
	<div class="row">
		<div class="col-md-4">
			<h1 class="headings-medium">Social Media</h1>
			<img class="center-block" src="{{ URL::asset('assets/images/logo_purehome.png') }}" alt="Pure Home Logo">
			<br>
			<a href="https://www.facebook.com/PureHomeRealEstateLLC/">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-facebook"></i>
				  <i class="fa fa-facebook fa-stack-1x social-icon "></i>
				</span>	
			</a>
			<a href="https://twitter.com/purehome2015">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-twitter"></i>
				  <i class="fa fa-twitter fa-stack-1x social-icon"></i>
				</span>	
			</a>
			<a href="">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-whatsapp"></i>
				  <i class="fa fa-whatsapp fa-stack-1x social-icon"></i>
				</span>	
			</a>
			<a href="https://www.youtube.com/channel/UCK8KUY3oq6wl6vSy0AaI0ng">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-youtube"></i>
				  <i class="fa fa-youtube fa-stack-1x social-icon"></i>
				</span>	
			</a>
			<a href="https://plus.google.com/108892812514637102927">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-youtube"></i>
				  <i class="fa fa-google-plus fa-stack-1x social-icon"></i>
				</span>	
			</a>
			<a href="https://www.linkedin.com/in/purehomerealestate">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-linkedin"></i>
				  <i class="fa fa-linkedin fa-stack-1x social-icon"></i>
				</span>	
			</a>
			<a href="https://www.instagram.com/pure.home.realestate/">
				<span class="fa-stack fa-2x">
				  <i class="fa fa-square fa-stack-2x bg-linkedin"></i>
				  <i class="fa fa-instagram fa-stack-1x social-icon"></i>
				</span>	
			</a>
		</div>
		<div class="col-md-3">
			<h1 class="headings-medium"><i class="fa fa-newspaper-o fa-lg"></i> Newsletter</h1>
			<p>Keep up with the latest company news and events. </p>
			<p>Enter your e-mail and subscribe to our newsletter.</p>
			<div class="input-group">
	      <div class="input-group-addon btn-info"><i class="fa fa-envelope"></i></div>
	      <input type="text" class="form-control" id="newletter-email" placeholder="Email">
	      <span class="input-group-btn">
    		<button class="btn btn-warning" type="button">SUBSCRIBE</button>
			</span>
	    </div>
		</div>
		<div class="col-md-5">
			<h1 class="headings-medium">Quick Links</h1>
			<div class="row">
				<div class="col-md-6">
					<ul class="quick-links">
					<li><a href="{{ url('listing/search?property_type=Apartment&ad_type=Sale') }}">Apartments for Sale</a></li>
					<li><a href="{{ url('listing/search?property_type=Apartment&ad_type=Rent') }}">Apartments for Rent</a></li>
					<li><a href="{{ url('listing/search?property_type=Villa&ad_type=Sale') }}">Villas for Sale</a></li>
					<li><a href="{{ url('listing/search?property_type=Villa&ad_type=Rent') }}">Villas for Rent</a></li>
				</ul>	
				</div>
				<div class="col-md-6">
					<ul class="quick-links">
						<li><a href="{{ url('listing/search?property_type=Townhouse&ad_type=Sale') }}">Townhouse for Sale</a></li>
						<li><a href="{{ url('listing/search?property_type=Townhouse&ad_type=Rent') }}">Townhouse for Rent</a></li>
						<li><a href="{{ url('listing/search?bedrooms=0&ad_type=Sale') }}">Studio for Sale</a></li>
						<li><a href="{{ url('listing/search?bedrooms=0&ad_type=Rent') }}">Studio for Rent</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="copyright-bar col-md-12 text-center">
			<p>Pure Home Real Estate &copy; 2016 </p>
		</div>
	</div>
</footer>