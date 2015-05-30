@extends('ambs_app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col s4">
            <h5>{{ $college }} Forum</h5>
            </div>
        </div>
        <div class="row">
            <div class="card s12">
                <div class="col s4">
                <p><img class="responsive-img" src="{{ asset( $result['0']->profile_pic ) }}" width="100%"></p>
                <span >{{ $result['0']->ambassadors_name }}<br/>Campus Ambassador,<br/>{{ $college }}</span>
                </div>
                <div class="card grey lighten-2" style="height:300px;margin:10px;">
                    <div class="col s12">
                        
                        <div class="ambs_speaks">
                        <p><b>Campus Ambassador Speaks....</b></p>
                        <p>
                        {{  $result['0']->ambassadors_intro }}
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="col s12">
                    <ul class="tabs">
                    <li class="tab col s3"><a class="active light-blue-text text-darken-4" href="#general">General</a></li>
                    <li class="tab col s3"><a class="light-blue-text text-darken-4" href="#admission_related">Admission Related</a></li>
                    <li class="tab col s3"><a class="light-blue-text text-darken-4" href="#campus_related">Campus Related</a></li>
                    <li class="tab col s3"><a class="light-blue-text text-darken-4" href="#placement_related">Placement Related</a></li>
                    </ul>
                </div>
                <div id="general" class="col s12">
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($general_question) == 0 )
                         <tr>
                            <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                        </tr>
                        @else
                            
                        @foreach ($general_question as $general)
                            <tr>
                                <td><div><a href="{{ url('forum/threads/') }}/{{ $general->question_id }}" class="blue-text">{{ $general->question_title }}</a><br/><span class="grey-text"><small>{{ $general->date }}</small></span><br/><i class="mdi-action-thumb-up blue-text"></i> 54<a href="#!" class="secondary-content grey-text">by {{ $general->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                            </tr>
                        @endforeach
                        
                        @endif
                    </table>
                </div>
                <div id="admission_related" class="col s12">
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($admission_question) == 0 )
                            <tr>
                                <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                            </tr>
                        @else
                            
                        @foreach ($admission_question as $admission)
                        <tr>
                            <td><div><a href="{{ url('forum/threads/') }}/{{ $admission->question_id }}" class="blue-text">{{ $admission->question_title }}</a><br/><span class="grey-text"><small>{{ $admission->date }}</small></span><br/><i class="mdi-action-thumb-up blue-text"></i> 54<a href="#!" class="secondary-content grey-text">by {{ $admission->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                <div id="campus_related" class="col s12">
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($campus_question) == 0 )
                            <tr>
                                <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                            </tr>
                        @else
                            
                        @foreach ($campus_question as $campus)
                        <tr>
                            <td><div><a href="{{ url('forum/threads/') }}/{{ $campus->question_id }}" class="blue-text">{{ $campus->question_title }}</a><br/><span class="grey-text"><small>{{ $campus->date }}</small></span><br/><i class="mdi-action-thumb-up blue-text"></i> 54<a href="#!" class="secondary-content grey-text">by {{ $campus->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                <div id="placement_related" class="col s12">
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($placement_question) == 0 )
                        <tr>
                            <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                        </tr>>
                        @else
                            
                        @foreach ($placement_question as $placement)
                        <tr>
                            <td><div><a href="{{ url('forum/threads/') }}/{{ $placement->question_id }}" class="blue-text">{{ $placement->question_title }}</a><br/><span class="grey-text"><small>{{ $placement->date }}</small></span><br/><i class="mdi-action-thumb-up blue-text"></i> 54<a href="#!" class="secondary-content grey-text">by {{ $placement->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                
            </div>
        </div>
</div>
@stop
<!-- add the two icons for new and old acc. to the functionality!-->
