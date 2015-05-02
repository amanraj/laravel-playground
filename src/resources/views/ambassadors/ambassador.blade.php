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
                <p><img class="responsive-img" src="{{ asset('images/ambassdors/candice.jpg') }}" width="100%"></p>
                <span >Ambs one<br/>Campus Ambassador,<br/>College Name</span>
                </div>
                <div class="card grey lighten-2">
                    <div class="col s12">
                        
                        <div class="ambs_speaks">
                        <p><b>Campus Ambassador Speaks....</b></p>
                        <p>
                        Hi everyone! Welcome to pickprime. This is Candice Swanepoel, Campus Ambassador of IIT Kharagpur. I am a third year student of the department of Computer Science studying in BIT MESRA.
                        </p>
                        <p>
                        Well, IIT Kgp is a very nice place to spend your college life. It has at par facilities and excellent infrastructure. Most relaxing part of iit kgp is very less number of rules and regulations are here so you will your new found freedom here. It has has its unique culture and senior-junior interaction is very healthy.Well you may be overwhelmed by the amount of funda you wll get here.
                        </p>
                        <p>
                        I will be helping you clear your doubts about IIT Kharagpur. You can drop your doubts here. I will try my best to reply asap. Below are the topics related to IIT Kharagpur which have been asked by users. Feel free to browse them.
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
                </div>
                <ul class="collection with-header">
                    <li class="collection-header"><h4>Recent Questions</h4></li>
                    <li class="collection-item"><div><a href="#" class="blue-text">question 1</a><br/><span class="grey-text">5 minutes ago</span><a href="#!" class="secondary-content grey-text">by User 1 <i class="mdi-social-person"></i></a></div></li>
                    <li class="collection-item"><div><a href="#" class="blue-text">question 2</a><br/><span class="grey-text">15 minutes ago</span><a href="#!" class="secondary-content grey-text">by User 2 <i class="mdi-social-person"></i></a></div></li>
                    <li class="collection-item"><div><a href="#" class="blue-text">question 3</a><br/><span class="grey-text">25 minutes ago</span><a href="#!" class="secondary-content grey-text">by User 3 <i class="mdi-social-person"></i></a></div></li>
                    <li class="collection-item"><div><a href="#" class="blue-text">question 4</a><br/><span class="grey-text">35 minutes ago</span><a href="#!" class="secondary-content grey-text">by User 4 <i class="mdi-social-person"></i></a></div></li>
                </ul>
            </div>
        </div>
    </div>

@stop