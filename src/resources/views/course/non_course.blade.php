@extends('welcome')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')

@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="card col s12">
                <h3 class="center-align">{{ $result_1['0']->course_name }}</h3>
            </div>
        </div>
        <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active indigo-text text-darken-3 " href="#course_content">Course Content</a></li>
                        <li class="tab col s3"><a class="indigo-text text-darken-3" href="#top_institute">Top Institutes</a></li>
                        <li class="tab col s3"><a class="indigo-text text-darken-3 " href="#future_scope">Future Scope</a></li>
                        <li class="tab col s3"><a class="indigo-text text-darken-3" href="#job_place_work">Job Place Work</a></li>
                    </ul>
                </div>
                    <div id="course_content" class="col s12">
                        <div class="card">
                           {{ $result_1['0']->course_content }}
                        </div>                        
                    </div>
                    <div id="top_institute" class="col s12">
                        <div class="card">
                            {{ $result_1['0']->top_institute }}
                        </div>                        
                    </div>
                    <div id="future_scope" class="col s12">
                        <div class="card">
                            {{ $result_1['0']->future_scope }}
                        </div>                        
                    </div>
                    <div id="job_place_work" class="col s12">
                        <div class="card">
                            {{ $result_1['0']->job_place_work }}
                        </div>                        
                    </div>
            </div>
            </div>
        </div>
        </div>
@stop