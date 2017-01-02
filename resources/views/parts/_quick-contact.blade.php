<div class="row">
	<form action="{{ url('/contact/submit') }}" method="post">
	 {!! Form::token(); !!}
		<div class="col-md-12">
			<h1 class="headings-main">Get in Touch</h1>
		</div>
		<div class="col-md-6">
			<input class="form-control input-lg" name="first_name" type="text" placeholder="First Name">
		</div>
		<div class="col-md-6">
			<input class="form-control input-lg" name="last_name" type="text" placeholder="Last Name">
		</div>
		<div class="col-md-6">
			<input class="form-control input-lg" name="phone" type="text" placeholder="Phone">
		</div>
		<div class="col-md-6">
			<input class="form-control input-lg" name="email" type="text" placeholder="Email">
		</div>
		<div class="col-md-12">
			<textarea class="form-control" rows="10" name="message" placeholder="Message :"></textarea>
		</div>
		<div class="col-md-12">
			<button type="submit" class="btn btn-warning btn-lg center-block" >Send Message</button>
		</div>

	</form>
</div>