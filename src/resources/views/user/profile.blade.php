@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')

<div class="modal-content center-align">
                  <img src="http://1.bp.blogspot.com/_rZNj4rQyCn8/SBeGRWDecbI/AAAAAAAAKLc/SXD7W2UZuCI/s400/snap049.jpg" class="responsive-img">
                  <div class="center-align">
                      <span class="blue-text text-darken-4">
                          <p><b>Karan Singh Grover</b></p>
                          <p><i class="mdi-communication-email"></i> karan_grover@abc.com</p>
                          <p><i class="mdi-communication-call"></i> 0123456789</p>
                      </span>
                  </div>  
              </div>
                             

            

                <b>
                          <a href="#!" class="  modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:125px; border-radius:0px">Edit</a>
                           <a href="#!" class=" modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:125px; position:absolute; left:125px; border-radius:0px">Cancel</a>
                          </b>
                   

@stop