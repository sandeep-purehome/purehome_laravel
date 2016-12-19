@include('parts._head')
<body id="">

	@include('parts._navigation')

	<section>
		@yield('content')
	</section>

	<!-- Footer -->
	@include('parts._footer')
	<!-- Footer Ends -->

</body>
	<script src="assets/js/bootstrap.js"></script>
</html>