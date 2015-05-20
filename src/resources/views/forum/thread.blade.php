@extends('app')

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

	<header>

            <ul id="my-account" class="dropdown-content">
                <li><a data-target="notification"  class="modal-trigger light-blue-text text-darken-4">Notifications</a></li>
                <li><a href="#!"  class="light-blue-text text-darken-4">Settings</a></li>
                <li><a href="home"  class="light-blue-text text-darken-4">Sign Out</a></li>
            </ul>

            <nav>
                <div class="nav-wrapper   grey darken-3">

                    <a href="#!" class="brand-logo"><img class="responsive-img" src="{{ asset('/images/logo.png') }}"></a>
                    <!--Mobile Sidebar button-->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <!--================================
                    Menu for Desktops purple
                    =================================-->
                    <ul class="right hide-on-med-and-down">
            
                        <li><a class="dropdown-account" href="#!" data-activates="my-account"><b>Candice Swanepoel</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    </ul>
                    <!--================================
                    Menu for Mobile and Tablets
                    =================================-->
                   <ul class="side-nav" id="mobile-menu">
                        
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header">Candice Swanepoel<i class="mdi-navigation-arrow-drop-down"></i></a>
                                    <div class="collapsible-body">
                                    <ul>
                                        <li><a data-target="notification" class=" modal-trigger black-text">Notification<span class="new badge">4</span></a></li>
                                        <li><a href="#!">Settings</a></li>
                                        <li><a href="#!">Sign Out</a></li>
                                    </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

<script type="text/javascript">

    $(document).ready(function(){
        //dropdown code
        
        $(".dropdown-account").dropdown({ hover: false });
        $(".button-collapse").sideNav({
            menuWidth: 300, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        });
    });

</script>

<script>
            $(document).ready(function() {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
            });
</script>

</header>

    <!--===============================
    Including the Main Body
    ===============================-->

<!--===============================
Including the Profile body
===============================-->
<div id="profile" class="modal">
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
    <div class="row">
      <div class="col s6 left-align"><a href="#!" class="modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:100%">Edit</a></div>
      <div class="col s6 right-align"><a href="#!" class="modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:100%">Cancel</a></div>
    </div>
    </b>
</div> 
<!--===============================
Including the Notification body
===============================-->
<div id="notification" class="modal ">
    <div class="modal-header blue darken-3" style=" padding:4px">
        <h5 class="white-text" style="margin-left:20px">Notifications</h5>
    </div>
    <div class="modal-content ">
        <table class="bordered striped responsive-table">
            <tr >
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
            <tr>
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
            <tr>
                <td><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                <td class="blue-text text-darken-4"><b>Candice Swanepoel</b><br><span class="blue-text text-darken-4">Campus Ambassador,IIT Kgp</span><br>Accepted Your Invitation</td>
            </tr>
        </table>    
    </div>
</div>
        <div class="container">
            <div class="row">
                <div class="card s12" style="padding:5px">
                    <div class="card grey lighten-2">
                        <div class="col s1">
                            <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                        </div>    
                        <form class="col s11">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" length="200"></textarea>
                                    <label for="textarea1">Reply</label>
                                </div>
                            </div>
                        </form>
                        <div class="col offset-s8">
                             <a class="waves-effect waves-light blue btn">Send</a>
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
                    </div></div>
                
                <div class="card s12" style="padding:5px">
                    <h4>Previous chat</h4>
                        <table class="striped bordred col s12">
                            <tr>
                               <td>
                                   <div class="col s1">
                                         <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                                  </div>    
                                  <div class="col s11">
                                         <p><b>Campus Ambassador Speaks.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg...</b></p>
                                        <p>gnzxcfnvfcxzn</p>
                                  </div>
                              </td>
                            </tr>  
                             <tr>
                               <td>
                                   <div class="col s1">
                                         <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                                  </div>    
                                  <div class="col s11">
                                         <p><b>Campus Ambassador Speaks.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg...</b></p>
                                        <p>gnzxcfnvfcxzn</p>
                                  </div>
                              </td>
                            </tr>  
                             <tr>
                               <td>
                                   <div class="col s1">
                                         <img src="avatar-lg.png" class="responsive-img" style="margin-top:10px">
                                  </div>    
                                  <div class="col s11">
                                         <p><b>Campus Ambassador Speaks.ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg...</b></p>
                                        <p>gnzxcfnvfcxzn</p>
                                  </div>
                              </td>
                            </tr>  
                        </table>
                    
                </div>
           </div>

@stop