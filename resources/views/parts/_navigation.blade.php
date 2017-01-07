<!-- Navbar Section -->
<nav class="navbar navbar-default navbar-fixed-top ">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('assets/images/logo_purehome.png') }}" alt="Pure Home Real Estate Logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-content-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">About</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('about') }}">About Us</a></li>
            <li class="{{ Request::is('services') ? "active" : "" }}"><a href="{{ url('services') }}">Our Services</a></li>
            <!-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properties <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="{{ Request::is('properties-for-sale') ? "active" : "" }}"><a href="{{ url('listing/search/Sale') }}">Properties for Sale</a></li>
            <li class="{{ Request::is('properties-for-rent') ? "active" : "" }}"><a href="{{ url('listing/search/Rent') }}">Properties for Rent</a></li>
            <li role="separator" class="divider"></li>
            <li class="{{ Request::is('list-property') ? "active" : "" }}"><a href="{{ url('list-property') }}">Submit Property</a></li>
            <!-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
        <li class="{{ Request::is('careers') ? "active" : "" }}"><a href="{{ url('careers') }}">Careers</a></li>
        <li class="{{ Request::is('feedback') ? "active" : "" }}"><a href="{{ url('feedback') }}">Feedback</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('contact') }}">Contact</a></li>
        <li class="{{ Request::is('calculator') ? "active" : "" }}"><a href="{{ url('calculator') }}"><i class="fa fa-calculator fa-lg"></i> Calculator</a></li>
      </ul>

      {{-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> --}}
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
	</div>	
</nav>
<!-- Navbar Section Ends -->

<div class="clearfix"></div>

<!-- Contact Info Bar -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-6 col-md-6 contact-info-bar ">
			<p class="contact-item pull-right"><span class="fa fa-envelope" aria-hidden="true"></span>&nbsp; inquiry@purehome-re.ae</p>
			<p class="contact-item pull-right"><span class="fa fa-phone fa-lg" aria-hidden="true"></span>&nbsp; 02 4466 775</p>
			<p class="contact-item pull-right"><span class="fa fa-mobile fa-lg" aria-hidden="true"></span>&nbsp; 055 808 2380</p>
		</div>
	</div>
</div>

<!-- Contact Info Bar Ends -->

