@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')

<br><br><h1>This is Course reviews page  of college ID = {{ $college_id }}</h1>

@stop