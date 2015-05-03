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
                <div class="col s4">
                    <p>
                    <img src="{{ asset('images/colleges/iit_kgp.jpg') }}" alt="iit kgp" width="100%">
                    </p>
                    <p>Course 1</p>
                </div>
                <div class="col s8">
                    <p>
                    <img src="{{ asset('images/colleges/iit_kgp_lg_2.jpg') }}" alt="iit kgp lg" width="100%">                    
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card s12">
                <div class="col s12">
                    <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#general">General</a></li>
                    <li class="tab col s3"><a href="#course_desc">Course Description</a></li>
                    </ul>
                </div>
                    <div id="general" class="col s12">
                        <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">Course Content</div>
                            <div class="collapsible-body"><p>Sample funda 1</p></div>
                        </li>
                        <li>
                            <div class="collapsible-header">Future Scope</div>
                            <div class="collapsible-body"><p>Sample funda 2</p></div>
                        </li>
                        <li>
                            <div class="collapsible-header">Job Place Work</div>
                            <div class="collapsible-body"><p>Sample funda 3</p></div>
                        </li>
                        <li>
                            <div class="collapsible-header">Top Institutes</div>
                            <div class="collapsible-body"><p>Sample funda 4</p></div>
                        </li>
                        </ul>
                    </div>
                    <div id="course_desc" class="col s12">
                        <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">Course Content</div>
                                <div class="collapsible-body">
                                <p>
                                    <div class="card col s10 grey lighten-2">
                                    <p>Anonymous Final Year Student</p>
                                    <p>
                                    I worked at Mahindra Satyam full time for 3 years.
                                    </p>
                                    <p>
                                    Yaha funde bahut milte hain.Dimag kharab ho jaega funde sun sun kar.Jise dekho funda deta h.Outside campus everywhere are slums and villages.Entries into societies are controlled.And hell lot of politics is prevalent.
                                    </p>    
                                    </div>
                                </p>
                                <p>
                                    <div class="card col s10 right grey lighten-2">
                                    <p>Anonymous Final Year Student</p>
                                    <p>
                                    I worked at Mahindra Satyam full time for 3 years.
                                    </p>
                                    <p>
                                    Yaha funde bahut milte hain.Dimag kharab ho jaega funde sun sun kar.Jise dekho funda deta h.Outside campus everywhere are slums and villages.Entries into societies are controlled.And hell lot of politics is prevalent.
                                    </p>    
                                    </div>
                                </p>
                                </div>
                        </li>
                        <li>
                            <div class="collapsible-header">Future Scope</div>
                                <div class="collapsible-body">
                                <p>
                                    <div class="card col s10 grey lighten-2">
                                    Sample description 2a
                                    </div>
                                </p>
                                <p>    
                                    <div class="card col s10 right grey lighten-2">
                                    Sample description 2b
                                    </div>
                                </p>
                                </div>
                        </li>
                        <li>
                            <div class="collapsible-header">Job Place Work</div>
                                <div class="collapsible-body">
                                <p>
                                    <div class="card col s10 grey lighten-2">
                                    Sample description 3a
                                    </div>
                                </p>
                                <p>    
                                    <div class="card col s10 right grey lighten-2">
                                    Sample description 3b
                                    </div>
                                </p>
                                </div>                           
                        </li>
                        <li>
                            <div class="collapsible-header">Top Institutes</div>
                                <div class="collapsible-body">
                                <p>
                                    <div class="card col s10 grey lighten-2">
                                    Sample description 4a
                                    </div>
                                </p>
                                <p>
                                    <div class="card col s10 right grey lighten-2">
                                    Sample description 4b
                                    </div>
                                </p>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>


@stop