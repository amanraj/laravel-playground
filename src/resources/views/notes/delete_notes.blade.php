@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')

<br><br><h1>This is Delete Notes Page for ID = {{ $notes_id }}</h1>

@stop