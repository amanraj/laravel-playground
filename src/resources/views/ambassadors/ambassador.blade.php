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
            <div class="col s4">
            <h5>IIT Kharagpur Forum</h5>
            </div>
        </div>
        <div class="row">
            <div class="card s12">
                <div class="col s4">
                <p><img class="responsive-img" src="{{ asset( $result['0']->profile_pic ) }}" width="100%"></p>
                <span >{{ $result['0']->ambassadors_name }}<br/>Campus Ambassador,<br/>{{ $result['0']->ambassadors_college_id }}</span>
                </div>
                <div class="card grey lighten-2">
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
                    <li class="tab col s3"><a class="active" href="#general">General</a></li>
                    <li class="tab col s3"><a href="#admission_related">Admission Related</a></li>
                    <li class="tab col s3"><a href="#campus_related">Campus Related</a></li>
                    <li class="tab col s3"><a href="#placement_related">Placement Related</a></li>
                    </ul>
                </div>
                <div id="general" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="col s3">
                                <select class="browser-default">
                                    <option value="1" selected>General</option>
                                    <option value="2">Admission Related</option>
                                    <option value="3">Campus Related</option>
                                    <option value="4">Placement Related</option>
                                </select>
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Recent Questions</h4></li>
                        @if ( count($general_question) == 0 )
                         
                            <li class="collection-item"><div><a href="#" class="blue-text">No questions here yet.</a></div></li>
                        @else
                            
                        @foreach ($general_question as $general)
                            <li class="collection-item"><div><a href="#" class="blue-text">{{ $general->question_title }}</a><br/><span class="grey-text">{{ $general->date }}</span><a href="#!" class="secondary-content grey-text">by {{ $general->user_reference_id }} <i class="mdi-social-person"></i></a></div></li>
                        @endforeach
                        
                        @endif
                    </ul>
                </div>
                <div id="admission_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="col s3">
                                <select class="browser-default">
                                    <option value="1">General</option>
                                    <option value="2" selected>Admission Related</option>
                                    <option value="3">Campus Related</option>
                                    <option value="4">Placement Related</option>
                                </select>
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Recent Questions</h4></li>
                        @if ( count($admission_question) == 0 )
                         
                            <li class="collection-item"><div><a href="#" class="blue-text">No questions here yet.</a></div></li>
                        @else
                            
                        @foreach ($admission_question as $admission)
                            <li class="collection-item"><div><a href="#" class="blue-text">{{ $admission->question_title }}</a><br/><span class="grey-text">{{ $admission->date }}</span><a href="#!" class="secondary-content grey-text">by {{ $admission->user_reference_id }} <i class="mdi-social-person"></i></a></div></li>
                        @endforeach

                        @endif
                    </ul>
                </div>
                <div id="campus_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="col s3">
                                <select class="browser-default">
                                    <option value="1">General</option>
                                    <option value="2">Admission Related</option>
                                    <option value="3" selected>Campus Related</option>
                                    <option value="4">Placement Related</option>
                                </select>
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Recent Questions</h4></li>
                        @if ( count($campus_question) == 0 )
                         
                            <li class="collection-item"><div><a href="#" class="blue-text">No questions here yet.</a></div></li>
                        @else
                            
                        @foreach ($campus_question as $campus)
                            <li class="collection-item"><div><a href="#" class="blue-text">{{ $campus->question_title }}</a><br/><span class="grey-text">{{ $campus->date }}</span><a href="#!" class="secondary-content grey-text">by {{ $campus->user_reference_id }} <i class="mdi-social-person"></i></a></div></li>
                        @endforeach

                        @endif
                    </ul>
                </div>
                <div id="placement_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="col s3">
                                <select class="browser-default">
                                    <option value="1">General</option>
                                    <option value="2">Admission Related</option>
                                    <option value="3">Campus Related</option>
                                    <option value="4" selected>Placement Related</option>
                                </select>
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Recent Questions</h4></li>
                        @if ( count($placement_question) == 0 )
                         
                            <li class="collection-item"><div><a href="#" class="blue-text">No questions here yet.</a></div></li>
                        @else
                            
                        @foreach ($placement_question as $placement)
                            <li class="collection-item"><div><a href="#" class="blue-text">{{ $placement->question_title }}</a><br/><span class="grey-text">{{ $placement->date }}</span><a href="#!" class="secondary-content grey-text">by {{ $placement->user_reference_id }} <i class="mdi-social-person"></i></a></div></li>
                        @endforeach

                        @endif
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

@stop