@extends('layouts.master')

<style>
	.yas-overview h2{
		margin-top: 30px;
		margin-bottom : 30px;
	}
</style>

@section('content')
	
	@include('pages.featured.yas-acres._yas-acres-banner')

	@include('pages.featured.yas-acres._yas-acres-navigation')

	@include('pages.featured.yas-acres._yas-acres-overview')

@endsection



@section('scripts')

@endsection