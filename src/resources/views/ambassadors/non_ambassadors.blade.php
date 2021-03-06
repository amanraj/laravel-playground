@extends('welcome')
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
             @foreach ($result as $results)
                <div class="col s3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset( $results->profile_pic ) }}" alt="profile picture">
                    </div>
                    <div class="card-content">
                        <div class="col s12 ">
                            <div class="center-align">
                                <a href="{{ action( 'AmbassadorController@ambassador' , [$results->ambassadors_id] ) }}" class="light-blue-text text-darken-4">{{ $results->ambassadors_name }}</a><br><br>
                                <a href='#' class="light-blue-text text-darken-4">{{ $results->college_name }}</a>
                            </div>
                        </div>
                    </div>
            </div> 
            </div>
            @endforeach
            </div>
            </div>      
        </div>              
@stop