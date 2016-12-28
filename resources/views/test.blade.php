<ul>
	@if (empty($listings))
		<p>There are no listings</p>
	@endif

	@foreach($listings as $listing)
		<li>{{ $listing }}</li>
	@endforeach
</ul>

