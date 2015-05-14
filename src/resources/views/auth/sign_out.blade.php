@extends ('app')

@section('head')
    
        <style type="text/css">
            
            p{
                margin-left: 15px;
            }  


        </style>
@stop

@section('content')
    <div class="container">
            <div class="card col s12 m12 l4">
                <p>You have successfully logged out</p>
                <a href="{{ action('LandingController@index') }}" class="light-blue-text text-darken-4"><p>Click here</a> to login again</p>
            </div>
        </div> 
@stop