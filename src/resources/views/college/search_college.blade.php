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


@stop


@section('content')

<div class="container center-align">
    <div class="row">                
        <div class="card col s12">
            <div class="col s3">                   
                <p>Select Stream</p>
                    <!-- Dropdown Trigger -->
                <a class="btn dropdown-button" href="#!" data-activates="dropdown1"><small>Nothing Selected</a></small>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Engineering</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Management</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Medical</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Law</small></a></li> 
                    </ul>                             
                        <p >Select Location</p>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button" href="#!" data-activates="dropdown2"><small>Nothing Selected</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown2' class='dropdown-content'>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Maharashtra</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Delhi</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Uttar Pradesh</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Andhra Pradesh</small></a></li> 
                        <li><a href="#!" style="padding: 5px 15px;"><small>West Bengal</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Rajasthan</small></a></li>
                    </ul>                                
                        <p >Select Exam</p>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button" href="#!" data-activates="dropdown3"><small>Nothing Selected</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown3' class='dropdown-content'>
                        <li><a href="#!" style="padding: 5px 15px;"><small>IIT Mains</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>IIT Advanced</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>UPTU</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>BITS</small></a></li> 
                    </ul>                             
                        <p >Select Fees</p>
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button" href="#!" data-activates="dropdown4"><small>Nothing Selected</small></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown4' class='dropdown-content'>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Below Rs. 50,000 per semester</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Rs 50,000 to Rs 1  Lakh per semester</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Rs 1  Lakh to Rs 1.5  Lakh per semester</small></a></li>
                        <li><a href="#!" style="padding: 5px 15px;"><small>Above Rs. 1.5  Lakh</small></a></li> 
                    </ul>
            </div>                       
            <div class="col s9">
                <div class="col offset-s7">
                        <p >
                        <small><b>Sort By</b></small> 
                        <!-- Dropdown Trigger -->
                        <a class="btn dropdown-button" href="#!" data-activates="dropdown5"><small>Popularity</small><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <!-- Dropdown Structure -->
                    <ul id='dropdown5' class='dropdown-content'>
                        <li><a href="#!"><small>random1</small></a></li>
                        <li><a href="#!"><small>random2</small></a></li>
                    </ul>
                        </p>
                </div>
                        @foreach( $result as $results )
                        @if ( ($results->college_id)%3 == 1 )
                        <div class="row">
                        @endif
                            <div class="col s4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset( $results->college_image_1 ) }}" alt="college image">
                                </div>
                                <li class="divider"></li>
                                <div class="card-content">
                                    <table class="bordered">
                                        <tr>
                                            <td class="center-align" colspan="2"><a href='#'>{{ $results->college_name }}</a></td>
                                        </tr>    
                                        <tr>
                                            <td class="left-align ">Stream:</td>
                                            <td>{{ $results->college_type }}</td>
                                        </tr>
                                        <tr >
                                            <td class="left-align ">Location:</td>
                                            <td>{{ $results->college_location }}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="left-align ">Exam:</td>
                                            <td>{{ $results->college_entrance_exam }}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="left-align ">Fees:<br/><small>(per semester)</small></td>
                                            <td >{{ $results->college_fees }}</td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2"><a href='#'>Reviews</a></td>
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
@stop