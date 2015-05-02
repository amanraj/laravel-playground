<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Including the title-->
	<title>@yield('title')</title>


	<!--Common CSS Files-->
	<link rel="stylesheet/less" href="{{ asset('/css/style.less') }}">
	<link rel="stylesheet/less" href="{{ asset('/materialize/css/materialize.min.css') }}">
	<!--Common JS Scripts -->	
	<script src="{{ asset('/js/less-1.6.1.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.js') }}"></script> 
	<script src="{{ asset('/materialize/js/materialize.min.js') }}"></script>


	<!--===============================
	Including the head consisting of css and js files
	=================================-->
	@yield('head')
	
</head>
<body>
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
    <li><a href="#!">Colleges</a></li>
    <li><a href="#!">Courses</a></li>
    <li><a href="#!">Appetite Hunt</a></li>
    <li><a href="#!">Ambassadors</a></li>
</ul>

<ul id="my-account" class="dropdown-content">
  <li><a href="#!">Notifications</a></li>
  <li><a href="#!">Profile</a></li>
  <li><a href="#!">Settings</a></li>
  <li><a href="#!">Sign Out</a></li>
</ul>

<nav>
    <div class="nav-wrapper">

        <a href="#!" class="brand-logo"><img class="responsive-img" src="{{ asset('/images/logo.png') }}"></a>
        <!--Mobile Sidebar button-->
        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <!--================================
        Menu for Desktops
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
                      <li><a href="#!">Notification</a></li>
                      <li><a href="#!">Profile</a></li>
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

</header>
	

	<!--===============================
	Including the Main Body
	===============================-->
	@yield('content')

<!--===============================
Including the Profile body
===============================-->
<div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	  	
	    <div class="modal-content">
	    	<div class="modal-header">
	    	       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    	</div>
	    	<div class="modal-body">
	    		<div class="row" style="margin-top:10px;">
	    			<div class="col-sm-12">
	    				<img src="{{ asset('/images/ambassdors/candice.jpg') }}" class="img-circle profile-img center-block">
	    			</div>
	    		</div>

	    		<div class="row">
	    			<div class="col-sm-12" id="profile-details">
	    				<table class="table" id="profile-details-tbl">
	    					<tr>
	    						<td><div id="profile-name"><?php /*echo $profile['name']; */?></div></td>
	    					</tr>
	    					<tr>
	    						<td><div id="profile-email"><span class="glyphicon glyphicon-envelope profile-glyph"></span><span class="email"><?php /*echo $profile['email']; */?></span></div></td>
	    					</tr>
	    					<tr>
	    						<td><div id="profile-phone"><span class="glyphicon glyphicon-earphone profile-glyph"></span><span>  +91 <span class="mobile"><?php/* echo $profile['mobile_no']; */?></span></span></div></td>
	    					</tr>
	    				</table>
	    			</div>	
	    		</div>

	    		<div class="row" id="profile-footer">
	    			<div class="col-sm-6"><button class="btn-profile-footer edit" style="border-right:1px solid #142537;">Edit</button></div>
	    			<div class="col-sm-6"><button class="btn-profile-footer close_down" data-dismiss="modal">Cancel</button></div>	
	    		</div>
	    	</div>
	    </div>
	  </div>
	</div>
<!--===============================
Including the Notification body
===============================-->
<div class="modal fade" id="notifications-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-notifications">
	  	
	    <div class="modal-content">
	    	<div class="modal-header">
	    	       <button type="button" class="close close-notification" data-dismiss="modal" aria-hidden="true">&times;</button>
	    	       <h4>NOTIFICATIONS</h4>
	    	</div>
	    	<div class="modal-body scroll-style-3">
	    		<table class="table table-striped" id="notifications-tbl">
	    			<tr>
	    				<td><img src="{{ asset('/images/ambassdors/candice.jpg') }}" class="notifications-img"></td>
	    				<td>
	    					<div class="notifications-name">Candice Swanepoel</div>
	    					<div class="notification-post">Campus Ambassdor, IIT KGP</div>
	    					<div class="notification-msg">accepted your connection</div>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td><img src="{{ asset('/images/ambassdors/candice.jpg') }}" class="notifications-img"></td>
	    				<td>
	    					<div class="notifications-name">Candice Swanepoel</div>
	    					<div class="notification-post">Campus Ambassdor, IIT KGP</div>
	    					<div class="notification-msg">accepted your connection</div>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td><img src="{{ asset('/images/ambassdors/candice.jpg') }}" class="notifications-img"></td>
	    				<td>
	    					<div class="notifications-name">Candice Swanepoel</div>
	    					<div class="notification-post">Campus Ambassdor, IIT KGP</div>
	    					<div class="notification-msg">accepted your connection</div>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td><img src="{{ asset('/images/ambassdors/candice.jpg') }}" class="notifications-img"></td>
	    				<td>
	    					<div class="notifications-name">Candice Swanepoel</div>
	    					<div class="notification-post">Campus Ambassdor, IIT KGP</div>
	    					<div class="notification-msg">accepted your connection</div>
	    				</td>
	    			</tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	</div>

	
	<button class="error_trigger" data-toggle="modal" data-target="#myModal_error" style="display:none;"></button>
	<div class="modal fade" id="myModal_error"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:350px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="myModalLabel">Alert!</h3>
			</div>
			<div class="modal-body error">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
			</div>
			</form>
			</div>
		</div>
	</div>
	

</body>
</html>
