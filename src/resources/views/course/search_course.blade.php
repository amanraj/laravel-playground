@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
@stop



@section('content')

	<div class="container center-align">
	<div class="row">
        <div class="card col s12">
            <ul class="tabs">
            <li class="tab col s3"><a href="#engineering">Engineering</a></li>
            <li class="tab col s3"><a href="#law">Law</a></li>
            <li class="tab col s3"><a href="#commerce">Commerce</a></li>
            <li class="tab col s3"><a href="#arts">Arts</a></li>
            </ul>
                <div id="engineering" class="col s12">
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
                            <a href="courses/{{ $results->course_id }}">{{ $results->course_name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div id="law" class="col s12">
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
                            <a href="courses/{{ $results->course_id }}">{{ $results->course_name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div> 
            <div id="commerce" class="col s12">
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
                            <a href="courses/{{ $results->course_id }}">{{ $results->course_name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div> 
            <div id="arts" class="col s12">
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
                            <a href="courses/{{ $results->course_id }}">{{ $results->course_name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>  
        </div>
    </div>
	</div>
@stop