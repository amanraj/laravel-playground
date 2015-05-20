@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/find-college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}">
<script src="{{ asset('/js/search_college_js.js') }}"></script>
<script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>

<style type="text/css">
    #card.item{
        box-shadow:0px 1px 8px #999999;
        -webkit-box-shadow:0px 1px 8px #999999;
        -moz-box-shadow:0px 1px 8px #999999;
        -o-box-shadow:0px 1px 8px #999999;
        -ms-box-shadow:0px 1px 8px #999999;
        box-shadow:0px 1px 8px #999999;
        padding: 10px 0px;
        margin: 10px;
          
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;  
        padding-bottom: 0;
}

    .card-image{
          
        margin: 0px -22px 0 -22px;
}

    #college table td{
        padding: 3px;  
}


</style>


@stop


@section('content')
<div class="container">
<div class="row center-align">   
    <div class="col s12">
        <div class="card center-align">
            <div class="col s3 center-align">
            <p>      
            <div class="card center-align" style="height:545px">             
                <p style="margin-top:10px">
                <b>Select Stream</b>
                    <!-- Dropdown Trigger -->
                <a class="btn dropdown-button light-blue darken-3" href="#!" data-activates="dropdown1"><small><i class="mdi-navigation-arrow-drop-down right"></i>Select</a></small>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Engineering</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Management</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Medical</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Law</small></a></li> 
                    </ul> 
                </p>                                
                <p style="margin-top:30px">
                <b>Select Location</b>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button light-blue darken-3" href="#!" data-activates="dropdown2"><small><i class="mdi-navigation-arrow-drop-down right"></i>Select</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content'>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Maharashtra</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Delhi</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Uttar Pradesh</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Andhra Pradesh</small></a></li> 
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>West Bengal</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Rajasthan</small></a></li>
                    </ul>
                </p>                                    
                <p style="margin-top:30px">
                <b>Select Exam</b>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button light-blue darken-3" href="#!" data-activates="dropdown3"><small><i class="mdi-navigation-arrow-drop-down right"></i>Select</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown3' class='dropdown-content'>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>IIT Mains</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>IIT Advanced</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>UPTU</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>BITS</small></a></li> 
                    </ul>
                </p>                                 
                <p style="margin-top:30px">
                <b>Select Fees</b>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button light-blue darken-3" href="#!" data-activates="dropdown4"><small><i class="mdi-navigation-arrow-drop-down right"></i>Select</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown4' class='dropdown-content'>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Below Rs 50,000</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Rs 50,000 - 1 Lac</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Rs 1 Lac - 1.5 Lacs</small></a></li>
                        <li><a href="#!"  class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>Above Rs 1.5 Lacs</small></a></li> 
                    </ul>
                </p>    
            </div>        </div></p>               
            <div class="col s9">
                <div class="col offset-s7">
                        <p >
                        <small><b>Sort By</b></small> 
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button light-blue darken-3" href="#!" data-activates="dropdown5"><small>Popularity</small><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown5' class='dropdown-content'>
                        <li><a href="#!" class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>random1</small></a></li>
                        <li><a href="#!" class="light-blue-text text-darken-4" style="padding: 5px 15px;"><small>random2</small></a></li>
                    </ul>
                        </p>
                </div>
                        @foreach( $result as $results )
                        @if ( ($results->college_id)%3 == 1 )
                        <div class="row">
                        @endif
                            <div class="col s4">
                            <div class="card" id="college">
                                <div class="card-image">
                                    <img src="{{ asset( $results->college_image_1 ) }}" alt="college image">
                                </div>
                                <li class="divider"></li>
                                <div class="card-content" style="height:280px">
                                    <table class="bordered">
                                        <tr>
                                            <td class="center-align" colspan="2"><a href="{{ action('CollegeController@college' , [ $results->college_id ]) }}" class="light-blue-text text-darken-4"><b>{{ $results->college_name }}</b></a></td>
                                        </tr>    
                                        <tr>
                                            <td class="left-align ">Stream:</td>
                                            <td>{{ $results->college_type }}</td>
                                        </tr>
                                        <tr >
                                            <td class="left-align ">Location:</td>
                                            <td class="right-align">{{ $results->college_location }}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="left-align ">Exam:</td>
                                            <td class="right-align">{{ $results->college_entrance_exam }}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="left-align ">Fees:<br/><small>(per semester)</small></td>
                                            <td class="right-align">{{ $results->college_fees }}</td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2" class="center-align"><a href='#' class="light-blue-text text-darken-4"><b>Reviews</b></a></td>
                                        </tr> 
                                    </table>
                                </div>
                            </div>
                            </div>    
                        @if ( ($results->college_id)%3 == 0 )    
                        </div>    
                        @endif
                        @endforeach                      
                    </div>
                </div>
        </div>               
    </div>
    </div>
@stop