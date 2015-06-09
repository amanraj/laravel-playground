@extends('welcome')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/owl.transitions.css') }}">
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript">

    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    });
</script>
<style type="text/css">
           
#notification.modal img{
    width:100px;
    height:100px;
} 
#notification.modal{
    max-width:30%;
    max-height: 60%;
    border-radius: 5px;
    box-shadow:0 3px 7px rgba(0,0,0,.25); 
}
p{
    word-wrap:break-word;
}
</style>    
@stop


@section('content')

	
    <!--===============================
    Including the Main Body
    ===============================-->



        <div class="container">
            <div class="row">
                <div class="card s12" style="padding:5px">
                    <div class="card grey lighten-2">
                        <p>
                            <b>Question Description :-</b> {{ $question->question_description }}
                        </p>
                    </div>
                    <div class="card grey lighten-2">
                        <div class="col s1">
                            <img src="{{ asset('images/avatar-lg.png') }}" class="responsive-img" style="margin-top:10px">
                        </div>    
                        <form class="col s11" action="{{ url('forum/threads/reply/') }}/{{ $question->question_id }}" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" name="reply" class="materialize-textarea" length="200" required></textarea>
                                    <label for="textarea1">Reply</label>
                                </div>
                            </div>
                        
                            <div class="col offset-s8">
                                 <button data-target="sign_in" class="modal-trigger waves-effect waves-light blue btn">Send</button>
                                    <html xmlns="http://www.w3.org/1999/xhtml"
                                      xmlns:fb="https://www.facebook.com/2008/fbml">
                                     <span id="fb-root"></span>
                                     <script src="http://connect.facebook.net/en_US/all.js"></script>


                                     <img id="invite" class="col offset-s4" src="fb_invite.png" style="position:relative;bottom:33px">

                                     <script>
                                        FB.init({
                                        appId  : '1442557729392371',
                                        frictionlessRequests: true
                                        });

                                        function sendRequestToRecipients() {
                                        var user_ids = document.getElementsByName("user_ids")[0].value;
                                        FB.ui({method: 'apprequests',
                                        message: 'Awesome Application try it once',
                                        to: user_ids
                                        }, requestCallback);
                                        }

                                        function sendRequestViaMultiFriendSelector() {
                                        FB.ui({method: 'apprequests',
                                        message: 'Awesome application try it once'
                                        }, requestCallback);
                                          }
                                        $("#invite").click(sendRequestViaMultiFriendSelector);
                                        function requestCallback(response) {
                                       // Handle callback here
                                       }
                                  </script>
                            </div>
                        </form>
                    </div>
                
                <div class="card s12" style="padding:5px">
                    <h4>Previous chat</h4>
                        <table class="striped bordred col s12">
                        @if(count($replies) > 0)
                          @foreach($replies as $reply)
                              <tr>
                                 <td>
                                    <div class="col s1">
                                           <img src="{{ asset('images/avatar-lg.png') }}" class="responsive-img" style="margin-top:10px">
                                    </div>    
                                    <div class="col s11">
                                           <p>Posted by, <b>{{ $reply->user_name }}</b> on <b>{{ $reply->date }}</b></p>
                                          <p>{{ $reply->reply }}</p>
                                          <p>
                                            <a data-target="sign_in" class="modal-trigger waves-effect waves-light blue btn">Up Vote</a> Up Vote - <b>{{ $reply->up_vote }}</b>
                                          </p>
                                    </div>
                                </td>
                              </tr>  
                          @endforeach
                        @else
                          <h5>No replies yet, Be the first one to reply.</h5>
                        @endif
                        </table>
                    
                </div>
           </div>

@stop