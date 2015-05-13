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
       </script>
       <style type="text/css">
            #profile.modal img {
                background-repeat: no-repeat;
                background-position: 50%;
                border-radius: 50%;
                width:150px;
                height: 150px;
            } 
            #profile.modal{
                max-width:230px;
                border-radius: 5px; 
                margin-bottom: 0px;
            }
            #profile.modal-content{padding-bottom: 0px;}
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
              body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
        </style>    
	@yield('head')
	
</head>
<body class="grey lighten-4">
<!--===============================
Including the Header body
===============================-->
<header>
<ul id="search-menu" class="dropdown-content">
  <li>
      <form>
        <div class="input-field">
          <input id="search" type="search" placeholder="Search..." required>
          <label for="search"><i class="mdi-action-search right"></i></label>
          <i class="mdi-navigation-close"></i>
        </div>
      </form>
  </li>
</ul>

<ul id="browse-menu" class="dropdown-content">
    <li><a href="colleges"  class="light-blue-text text-darken-4">Colleges</a></li>
    <li><a href="courses"  class="light-blue-text text-darken-4">Courses</a></li>
    <li><a href="#!"  class="light-blue-text text-darken-4">Appetite Hunt</a></li>
    <li><a href="ambassador"  class="light-blue-text text-darken-4">Ambassadors</a></li>
</ul>

<ul id="my-account" class="dropdown-content">
  <li><a data-target="notification"  class="modal-trigger light-blue-text text-darken-4">Notifications</a></li>
  <li><a data-target="profile"  class="modal-trigger light-blue-text text-darken-4">Profile</a></li>
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
            <li>
                <form>
                    <div class="input-field">
                        <input id="search" type="search" placeholder="Search..." required>
                        <label for="search"><i class="mdi-action-search right"></i></label>
                        <i class="mdi-navigation-close"></i>
                    </div>
                </form>
            </li>
            <li><a href="#"><i class="mdi-action-home"></i></a></li>
            <li><a class="dropdown-browse" href="#!" data-activates="browse-menu"><b>Browse Site</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
            <li><a class="dropdown-account" href="#!" data-activates="my-account"><b>My Account</b><i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        </ul>
        <!--================================
        Menu for Mobile and Tablets
        =================================-->
        <ul class="side-nav" id="mobile-menu">
            <li><a href="#"><b>Home</b></a></li>
            <li class="divider"></li>
            <li>
                <form>
                    <div class="input-field">
                        <input id="search" type="search" placeholder="Search..." required>
                        <label for="search"><i class="mdi-action-search right"></i></label>
                        <i class="mdi-navigation-close"></i>
                    </div>
                </form>
            </li>
            <li class="divider"></li>
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header">Browse<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul>
                      <li><a href="#!">College</a></li>
                      <li><a href="#!">Course</a></li>
                      <li><a href="#!">Appetite Hunt</a></li>
                      <li><a href="#!">Ambassadors</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header">My Account<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul>
                      <li><a data-target="notification" class=" modal-trigger black-text">Notification</a></li>
                      <li><a data-target="profile" class=" modal-trigger black-text">Profile</a></li>
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
        $(".dropdown-browse").dropdown({ hover: false });
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
	@yield('content')

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
      <div class="modal-footer" style="margin-bottom:0px;padding-bottom:0px;"><a href="#!" class="modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:50%;border-radius:0px">Cancel</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-large blue darken-4" style="width:50%;border-radius:0px">Edit</a></div>
    </div>
    </b>
</div> 
<!--===============================
Including the Notification body
===============================-->
<div id="notification" class="modal" >
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
</div>                <main></main>
	 <footer class="footer grey darken-4">
                <div  class="container">
                  
                <table>
                    <tr>
                    
                     <div style="font-size=4px">
                    <td class="grey-text text-lighten-4 left" >© 2015<br>Copyrights Reserved</td>
                    <td><a class="grey-text text-lighten-4 right" href="#!">Be a Ambassador</a></td>
                    <td><a class="grey-text text-lighten-4 right" href="#!">Forms for Reviews</a></td>
                    <td><a class="grey-text text-lighten-4 right" href="#!">Team</a></td>
                    <td><a class="grey-text text-lighten-4 right" href="#!">Terms & Conditions</a></td>
                    <td><a class="grey-text text-lighten-4 right" href="#!">Privacy Policy</a></td></div>
                    </tr>
                    </table>
                </div>
            </footer>

</body>
</html>
