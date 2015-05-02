@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.transitions.css') }}">
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
@stop


@section('content')

	<br><br><h1>This a Thread Page {{ $thread_id }}</h1>

@stop