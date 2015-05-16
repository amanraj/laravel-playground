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
            <li class="tab col s3"><a href="#engineering" class="indigo-text text-darken-3">Engineering</a></li>
            <li class="tab col s3"><a href="#medical" class="indigo-text text-darken-3">Medical</a></li>
            <li class="tab col s3"><a href="#law" class="indigo-text text-darken-3">Law</a></li>
            <li class="tab col s3"><a href="#management" class="indigo-text text-darken-3">Management</a></li>
            </ul>
            <div id="engineering" class="col s12">
                <div class="row">
                @foreach ($result as $results)
                @if($results->course_stream == 'engineering')                
                <div class="col s12 m4">
                    <div class="card" style="height:500px">
                        <div class="card-image">
                        <img class="responsive-img" alt="course" src="{{ asset( $results->course_image_1 ) }}">
                        </div>
                        <p>
                        <div class="card-header center-align" >
                            <a href="{{ action('CourseController@course' , [ $results->course_id ] ) }}" class="light-blue-text text-darken-4">{{ $results->course_name }}</a>
                        </div>
                        </p>
                        <div class="card-content" >
                        <p>
                            {{ $results->course_content }}
                        </p>
                        </div>
                        
                    </div>
                </div>
                @endif
                @endforeach
                </div>
            </div>
            

            <div id="medical" class="col s12">
                <div class="row">
                @foreach ($result as $results)
                @if($results->course_stream == 'medical')                

                <div class="col s12 m4">
                    <div class="card" style="height:500px">
                        <div class="card-image">
                        <img class="responsive-img" alt="course" src="{{ asset( $results->course_image_1 ) }}">
                        </div>
                        <p>
                        <div class="card-header center-align" >
                            <a href="{{ action('CourseController@course' , [ $results->course_id ] ) }}" class="light-blue-text text-darken-4">{{ $results->course_name }}</a>
                        </div>
                        </p>
                        <div class="card-content" >
                        <p>
                            {{ $results->course_content }}
                        </p>
                        </div>
                        
                    </div>
                </div>
                @endif
                @endforeach
                </div>
            </div>

            <div id="law" class="col s12">
                <div class="row">
                @foreach ($result as $results)
                @if($results->course_stream == 'law')                
                <div class="col s12 m4">
                    <div class="card" style="height:500px">
                        <div class="card-image">
                        <img class="responsive-img" alt="course" src="{{ asset( $results->course_image_1 ) }}">
                        </div>
                        <p>
                        <div class="card-header center-align" >
                            <a href="{{ action('CourseController@course' , [ $results->course_id ] ) }}" class="light-blue-text text-darken-4">{{ $results->course_name }}</a>
                        </div>
                        </p>
                        <div class="card-content" >
                        <p>
                            {{ $results->course_content }}
                        </p>
                        </div>
                        
                    </div>
                </div>
                @endif
                @endforeach
                </div>
            </div>

            <div id="management" class="col s12">
                <div class="row">
                @foreach ($result as $results)                
                @if($results->course_stream == 'management')                
                <div class="col s12 m4">
                    <div class="card" style="height:500px">
                        <div class="card-image">
                        <img class="responsive-img" alt="course" src="{{ asset( $results->course_image_1 ) }}">
                        </div>
                        <p>
                        <div class="card-header center-align" >
                            <a href="{{ action('CourseController@course' , [ $results->course_id ] ) }}" class="light-blue-text text-darken-4">{{ $results->course_name }}</a>
                        </div>
                        </p>
                        <div class="card-content" >
                        <p>
                            {{ $results->course_content }}
                        </p>
                        </div>
                        
                    </div>
                </div>
                @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@stop