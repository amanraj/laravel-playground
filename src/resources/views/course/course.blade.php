@extends('app')

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
            <div class="card s12">
                <div class="col s12">
                    <ul class="tabs">
                    <li class="tab col s3"><a class="active indigo-text text-darken-3 " href="#general">General</a></li>
                    <li class="tab col s3"><a class="indigo-text text-darken-3" href="#course_desc">Course Description</a></li>
                    </ul>
                </div>
                    <div id="general" class="col s12">
                        <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">Course Content</div>
                            <div class="collapsible-body"><p>{{ $result_1['0']->course_content }}</p></div>
                        </li>
                        <li>                        
                            <div class="collapsible-header">Top Institutes</div>
                            <div class="collapsible-body"><p>{{ $result_1['0']->top_institute }}</p></div>
                        </li>
                        <li>
                            <div class="collapsible-header">Future Scope</div>
                            <div class="collapsible-body"><p>{{ $result_1['0']->future_scope }}</p></div>
                        </li>
                        <li>
                            <div class="collapsible-header">Job Place Work</div>
                            <div class="collapsible-body"><p>{{ $result_1['0']->job_place_work }}</p></div>
                        </li>
                        </ul>
                    </div>
                    <div id="course_desc" class="col s12">
                        <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header">Course Content</div>
                                <div class="collapsible-body">
                                @if ( count($result_2)== 0 )

                                    <p>
                                    <div class="card col s10 grey lighten-2 ">
                                    <p>No content yet.</p>
                                    </div>
                                    </p>
                                @else
                                   
                                @foreach ($result_2 as $results_2)
                                <p>
                                    @if ( ($results_2->course_review_id)%2 == 0 )
                                    <div class="card col s10 grey lighten-2 left-align">
                                    @else
                                    <div class="card col s10 grey lighten-2 right-align">
                                    @endif
                                    {{ $results_2->reviewer_name }} , {{ $results_2->reviewer_college }}<br/>
                                    {{ $results_2->reviewer_description }}<br/>
                                    Reviewer Rating - {{ $results_2->reviewer_rating }}
                                    <p>
                                    {{ $results_2->review }}
                                    </p>    
                                    </div>
                                </p>
                                @endforeach
                                @endif
                                </div>
                        </li>    
                        <li>
                            <div class="collapsible-header">Top Institutes</div>
                                <div class="collapsible-body">
                                @if ( count($result_2)==0 )

                                    <p>
                                    <div class="card col s10 grey lighten-2 ">
                                    <p>Nothing here yet.</p>
                                    </div>
                                    </p>
                                @else
                                   
                                @foreach ($result_2 as $results_2)
                                <p>
                                    @if ( ($results_2->course_review_id)%2 == 0 )
                                    <div class="card col s10 grey lighten-2 left-align">
                                    @else
                                    <div class="card col s10 grey lighten-2 right-align">
                                    @endif
                                    {{ $results_2->reviewer_name }} , {{ $results_2->reviewer_college }}<br/>
                                    {{ $results_2->reviewer_description }}<br/>
                                    Reviewer Rating - {{ $results_2->reviewer_rating }}
                                    <p>
                                    {{ $results_2->review }}
                                    </p>    
                                    </div>
                                </p>
                                @endforeach
                                @endif
                                </div>
                        </li>    
                        <li>
                            <div class="collapsible-header">Future Scope</div>
                                <div class="collapsible-body">
                                @if ( count($result_2)==0 )

                                    <p>
                                    <div class="card col s10 grey lighten-2 ">
                                    <p>Nothing here yet.</p>
                                    </div>
                                    </p>
                                @else
                                   
                                @foreach ($result_2 as $results_2)
                                <p>
                                    @if ( ($results_2->course_review_id)%2 == 0 )
                                    <div class="card col s10 grey lighten-2 left-align">
                                    @else
                                    <div class="card col s10 grey lighten-2 right-align">
                                    @endif
                                    {{ $results_2->reviewer_name }} , {{ $results_2->reviewer_college }}<br/>
                                    {{ $results_2->reviewer_description }}<br/>
                                    Reviewer Rating - {{ $results_2->reviewer_rating }}
                                    <p>
                                    {{ $results_2->review }}
                                    </p>    
                                    </div>
                                </p>
                                @endforeach
                                @endif
                                </div>
                        </li>    
                        <li>
                            <div class="collapsible-header">Job Place Work</div>
                                <div class="collapsible-body">
                                @if ( count($result_2)==0 )

                                    <p>
                                    <div class="card col s10 grey lighten-2 ">
                                    <p>Nothing here yet.</p>
                                    </div>
                                    </p>
                                @else
                                   
                                @foreach ($result_2 as $results_2)
                                <p>
                                    @if ( ($results_2->course_review_id)%2 == 0 )
                                    <div class="card col s10 grey lighten-2 left-align">
                                    @else
                                    <div class="card col s10 grey lighten-2 right-align">
                                    @endif
                                    {{ $results_2->reviewer_name }} , {{ $results_2->reviewer_college }}<br/>
                                    {{ $results_2->reviewer_description }}<br/>
                                    Reviewer Rating - {{ $results_2->reviewer_rating }}
                                    <p>
                                    {{ $results_2->review }}
                                    </p>    
                                    </div>
                                </p>
                                @endforeach
                                @endif
                                </div>
                        </li>    
                        </ul>
                    </div>
            </div>
        </div>
        </div>
@stop