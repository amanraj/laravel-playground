@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')
      
<div class="container">
    <div class="row">
        <div class="card col s12">
            <div class="row">
                <div class="col s4">
                    <ul class="tabs">
                        <li class="tab col s2"><a href="#colleges">Colleges</a></li>
                        <li class="tab col s2"><a href="#courses">Courses</a></li>
                    </ul>
                </div>
            </div>
            <div id="colleges">
             @foreach ($result as $results)
             @if( $results->ambassadors_type == 'college' )
            <div class="card col s3">
                <div class="col s12">
                    <div class="card-image">
                        <img src="{{asset( $results->profile_pic ) }}" alt="profile picture">
                    </div>
                    <div class="card-content">
                        <div class="col s12 ">
                            <div class="center-align">
                                <a href="#">{{ $results->ambassadors_name }}</a><br><br>
                                <a href='#'>{{ $results->ambassadors_college_id }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif    
            @endforeach
            </div>
            <div id="courses">
             @foreach ($result as $results)
             @if( $results->ambassadors_type == 'course' )
            <div class="card col s3">
                <div class="col s12">
                    <div class="card-image">
                        <img src="{{asset( $results->profile_pic ) }}" alt="profile picture">
                    </div>
                    <div class="card-content">
                        <div class="col s12 ">
                            <div class="center-align">
                                <a href="#">{{ $results->ambassadors_name }}</a><br><br>
                                <a href='#'>{{ $results->ambassadors_college_id }}</a>
                            </div>
                        </div>
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

@stop