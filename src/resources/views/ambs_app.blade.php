<!DOCTYPE html>
<html lang="en">
    <head>
	      <meta charset="utf-8">
	      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      <!--Including the title-->
	      <title>@yield('title')</title>

 
      	<!--Common CSS Files-->
	
	      <link rel="stylesheet/less" href="{{ asset('/materialize/css/materialize.min.css') }}">
	      <!--Common JS Scripts -->	
	      <script src="{{ asset('/js/less-1.6.1.min.js') }}"></script>
	      <script src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script> 
	      <script src="{{ asset('/materialize/js/materialize.min.js') }}"></script>


	      <!--===============================
	      Including the head consisting of css and js files
	      =================================-->
	      <script type="text/javascript">

            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
            });
            
            $(document).ready(function(){
                //dropdown code
                $(".dropdown-browse").dropdown({ hover: false });
                $(".dropdown-account").dropdown({ hover: false });
                $(".button-collapse").sideNav({
                    menuWidth: 300, // Default is 240
                    edge: 'left', // Choose the horizontal origin
                    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
                });
            });

       </script>

       <style type="text/css">

            #profile.modal img, #edit_profile.modal img {
                background-repeat: no-repeat;
                background-position: 50%;
                border-radius: 50%;
                width:150px;
                height: 150px;
            }

            #profile.modal, #edit_profile.modal{
                max-width:270px;
                border-radius: 5px;
                margin-bottom: 0px;
            }

            #profile.modal-content, #edit_profile.modal-content{
                padding-bottom: 0px;
            }

            #notification.modal img{
                width:50px;
                height:50px;
            }

            #notification.modal{
                max-width:30%;
                max-height: 60%;
                border-radius: 5px;
                box-shadow:0 3px 7px rgba(0,0,0,.25); 
            }

            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }

            p{
    word-wrap:break-word;
}
        </style> 
	  @yield('head')
	
    </head>

    <body class="grey lighten-4">
        <!--===============================
        Including the Header body
        ===============================-->
        <header>
           <ul id="my-account" class="dropdown-content">
                <li><a data-target="notification"  class="modal-trigger light-blue-text text-darken-4">Notifications<span class="new badge light-blue darken-4">1</span></a></li>
                <li><a data-target="profile"  class="modal-trigger light-blue-text text-darken-4">Profile<span class="badge light-blue-text text-darken-4"><i class="mdi-action-account-circle" style="position:relative;bottom:20px"></i></span></a></li>               
                <li><a href="{{ action('AmbassadorController@settings') }}"  class="light-blue-text text-darken-4">Settings<span class="badge light-blue-text text-darken-4"><i class="mdi-action-settings" style="position:relative;bottom:20px"></i></span></a></li>
                <li><a href="home"  class="light-blue-text text-darken-4">Sign Out<span class="badge light-blue-text text-darken-4"><img src="{{ asset('images/logout.png') }}" style="width:30px;height:30px;position:relative;bottom:5px;right:-3px;"></span></a></li>
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
            
                        <li><a class="dropdown-account" href="#!" data-activates="my-account" style="width:200px;"><b>{{ $ambassador->ambassadors_name }}</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    </ul>
                    <!--================================
                    Menu for Mobile and Tablets
                    =================================-->
                   <ul class="side-nav" id="mobile-menu">
                        
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header" style="width:300px;">{{ $ambassador->ambassadors_name }}<i class="mdi-navigation-arrow-drop-down"></i></a>
                                    <div class="collapsible-body">
                                    <ul>
                                        <li><a data-target="notification" class=" modal-trigger black-text">Notification<span class="new badge">4</span></a></li>
                                        <li><a data-target="profile" class=" modal-trigger black-text">Profile<span class="badge light-blue-text text-darken-4"><i class="mdi-action-account-circle" style="position:relative;bottom:20px"></i></span></a></li>                                    
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
        </header>
	

      	<!--===============================
	       Including the Main Body
	      ===============================-->
    
      	    @yield('content')
    

        <!--===============================
        Including the Profile body
        ===============================-->
        <div id="profile" class="modal" style="border:2px solid grey">
            <div class="modal-content center-align s12 m12">
                <img src="http://1.bp.blogspot.com/_rZNj4rQyCn8/SBeGRWDecbI/AAAAAAAAKLc/SXD7W2UZuCI/s400/snap049.jpg" class="responsive-img">
                <div class="center-align">
                    <span class="grey-text text-darken-3">
                        <p><b>{{ $ambassador->ambassadors_name }}</b></p>
                        <p><i class="mdi-communication-email"></i> {{ $ambassador->ambassadors_email }}</p>
                        <p><i class="mdi-communication-call"></i> {{ $ambassador->mobile_number }}</p>
                    </span>
                </div>  
            </div>
        
                <div class="modal-footer no-padding"><a href="#!" class="modal-action modal-close waves-effect waves-grey btn-large grey darken-2" style="width:50%;border-radius-left-bottom:5px">Cancel</a>
                <a href="#edit_profile" class="modal-trigger waves-effect waves-grey btn-large grey darken-2" style="width:50%;border-radius:0px">Edit</a></div>
        
        </div>
        <div id="edit_profile" class="modal" style="border:2px solid grey">
            <div class="modal-content center-align">
                <img src="http://1.bp.blogspot.com/_rZNj4rQyCn8/SBeGRWDecbI/AAAAAAAAKLc/SXD7W2UZuCI/s400/snap049.jpg" class="responsive-img">
                <div class="center-align">
                    <form class="grey-text text-darken-3" action="{{ url('ambs/profile/edit') }}" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="input-field col s5 offset-s1">
                            <input id="name" type="text" name="name" value="{{ $ambassador->ambassadors_name }}" class="validate">
                            <label for="name"></label>
                        </div>
                            <div class="input-field col s5 offset-s1">
                                <input id="email" type="email" name="email" value="{{ $ambassador->ambassadors_email }}" class="validate">
                                <label for="email"><i class="mdi-communication-email right"></i></label>
                            </div>
                            <div class="input-field col s5 offset-s1">
                                <input id="mobile" type="text" name="mobile" value="{{ $ambassador->mobile_number }}" class="validate">
                                <label for="phone"><i class="mdi-communication-call right"></i></label>
                            </div>
                            <div class="modal-footer col s3 no-padding"><button type="submit" class="modal-action modal-close waves-effect waves-grey btn-large grey darken-2" style="border-radius:5px">Save</button>
                            </div>
                    </form>
                </div>  
            </div> 
        </div>

        <!--===============================
        Including the Notification body
        ===============================-->
        <div id="notification" class="modal" >
            <div class="modal-header grey darken-3" style=" padding:4px;position:fixed;width:100%">
                <h5 class="white-text" style="margin-left:20px">Notifications</h5>
            </div>
            <div class="modal-content no-padding" style="overflow-y:auto;border:solid 5px #424242;margin-top:40px">
                <table class="bordered striped responsive-table">
                    <tr class="no-padding">
                        <td style="padding:2px 0px 2px 10px"><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                        <td style="padding:2px 2px 2px -10px" ><b>Candice Swanepoel</b><br><span class="grey-text text-darken-2"><small>Campus Ambassador,IIT Kgp</small></span><br>Accepted Your Invitation</td>
                    </tr>
                    <tr class="no-padding">
                        <td style="padding:2px 0px 2px 10px"><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                        <td style="padding:2px 2px 2px -10px" ><b>Candice Swanepoel</b><br><span class="grey-text text-darken-2"><small>Campus Ambassador,IIT Kgp</small></span><br>Accepted Your Invitation</td>
                    </tr>
                     <tr class="no-padding">
                        <td style="padding:2px 0px 2px 10px"><img src="http://www.hdwallpapersimages.com/wp-content/uploads/2014/01/Winter-Tiger-Wild-Cat-Images.jpg" class="responsive-img"></td>
                        <td style="padding:2px 2px 2px -10px" ><b>Candice Swanepoel</b><br><span class="grey-text text-darken-2"><small>Campus Ambassador,IIT Kgp</small></span><br>Accepted Your Invitation</td>
                    </tr>
                </table>    
            </div>
        </div>   

        <main>  </main>

	      <footer class="footer grey darken-4">
            <table >
                <tr>
                    <td class="grey-text text-lighten-4 left-align"><small>© 2015 Copyrights Reserved</small></td>
                    <td class="grey-text text-lighten-4 right-align">
                        <ul>
                            <li style="display:inline"><a class="grey-text text-lighten-4 r" href="{{ action('footerController@be_ambassador') }}">Be a Ambassador</a></li>
                            <li style="display:inline;margin-left:20px"><a class="grey-text text-lighten-4 " href="{{ action('footerController@review') }}">Form for Reviews</a></li>
                            <li style="display:inline;margin-left:20px"><a  class="grey-text text-lighten-4 " href="{{ action('footerController@team') }}">About Us</a></li>
                            <li style="display:inline;margin-left:20px"><a class="grey-text text-lighten-4 " href="{{ action('footerController@privacy_policy') }}">Privacy Policy</a></li>
                            <li style="display:inline ;margin-left:20px"><a class="grey-text text-lighten-4 " href="{{ action('footerController@term_condition') }}">Terms & Conditions</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </footer>

    </body>
</html>
