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
        <div class="card col s12">
            @foreach ($result as $results)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" alt="course" src="{{ asset( $results->course_image_1 ) }}">
                </div>
                <div class="card-content">
                  <p>
                    {{ $results->course_content }}
                  </p>
                </div>
                <div class="card-action">
                  <a href="#">{{ $results->course_name }}</a>
                </div>
              </div>
            </div>
        @endforeach 
        </div>
    </div>
	</div>
    
@stop