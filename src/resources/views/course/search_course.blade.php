@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/find-college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}">
<script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
@stop



@section('content')

	<div class="container center-align">
	<div class="row">	
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="responsive-img" alt="course" src="{{ asset('images/colleges/iit_kgp.jpg') }}">
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">COURSE NAME</a>
            </div>
          </div>
        </div>


        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="responsive-img" alt="course" src="{{ asset('images/colleges/iit_kgp.jpg') }}">
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">COURSE NAME</a>
            </div>
          </div>
        </div>


        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="responsive-img" alt="course" src="{{ asset('images/colleges/iit_kgp.jpg') }}">
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">COURSE NAME</a>
            </div>
          </div>
        </div>


        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="responsive-img" alt="course" src="{{ asset('images/colleges/iit_kgp.jpg') }}">
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">COURSE NAME</a>
            </div>
          </div>
        </div>

      </div>
	</div>


@stop