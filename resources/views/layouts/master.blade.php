@include('parts._head')
<body id="">

	@include('parts._navigation')

	<section>
		@yield('content')
	</section>

	{{-- Quick Contact --}}
	<section class="container-fluid quick-contact-img ">
			<div class="row quick-contact container-section">
				<div class="col-md-8 col-md-offset-2">
					@include('parts._quick-contact')
				</div>
			</div>
	</section>
	{{-- Quick Contact Ends --}}

	<!-- Footer -->
	@include('parts._footer')
	<!-- Footer Ends -->

</body>
	<script src="assets/js/bootstrap.js"></script>
</html>