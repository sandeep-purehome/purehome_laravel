<div class="container section">
	<ul class="nav nav-tabs">
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres') ? "active" : "" }}"><a href="{{ url('locations/yas-acres') }}">Yas Acres Overview</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/gallery') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/gallery') }}">Gallery</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/video') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/video') }}">Video</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/map') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/map')}}">Map Location</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/floor-plans') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/floor-plans')}}">Floor Plans</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/brochure') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/brochure')}}">Brochure</a></li>
	  	<li role="presentation" class="{{ Request::is('locations/yas-acres/register') ? "active" : "" }}"><a href="{{ url('locations/yas-acres/register')}}">Register</a></li>
	</ul>
</div>