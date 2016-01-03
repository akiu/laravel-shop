@extends('layouts.mainHome')

@section('content')
	@if(!$profile)
		@include('profile.form')
	@else
		@include('profile.show')
	@endif
@endsection