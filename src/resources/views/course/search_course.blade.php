@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
@stop



@section('content')
    <div class="row">
        <div class="card col s12">
            <ul class="tabs">
            <li class="tab col s3"><a href="#engineering" class="indigo-text text-darken-3">Engineering</a></li>
            <li class="tab col s3"><a href="#law" class="indigo-text text-darken-3">Medical</a></li>
            <li class="tab col s3"><a href="#commerce" class="indigo-text text-darken-3">Law</a></li>
            <li class="tab col s3"><a href="#arts" class="indigo-text text-darken-3">Management</a></li>
            </ul>
                <div id="engineering" class="col s12">
                @foreach ($result as $results)
                @if ( $results->course_stream == 'Engineering')
                @if ( ($results->course_id)%3 == 1 )
                <div class="row">
                @endif
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
                @if ( ($results->course_id)%3 == 0 )
                </div>
                @endif  
                @endif             
                @endforeach
            </div>
            <div id="Medical" class="col s12">
                @foreach ($result as $results)
                @if ( $results->course_stream == 'Medical' )
                @if ( ($results->course_id)%3 == 1 )
                <div class="row">
                @endif             
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
                @if ( ($results->course_id)%3 == 0 )
                </div>
                @endif  
                @endif               
                @endforeach
            </div> 
            <div id="Law" class="col s12">
                @foreach ($result as $results)
                @if ( $results->course_stream == 'Law')
                @if ( ($results->course_id)%3 == 1 )
                <div class="row">
                @endif               
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
                @if ( ($results->course_id)%3 == 0 )
                </div>
                @endif    
                @endif            
                @endforeach
            </div> 
            <div id="Management" class="col s12">
                @foreach ($result as $results) 
                @if ( $results->course_stream == 'Management') 
                @if ( ($results->course_id)%3 == 1 )
                <div class="row">
                @endif              
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
                @if ( ($results->course_id)%3 == 0 )
                </div>
                @endif      
                @endif         
                @endforeach
            </div>  
        </div>
    </div>
@stop