<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome | PickPrime</title>

	<link rel="stylesheet/less" href="{{ asset('/css/style.less') }}">
	<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/landing_css.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/find-college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
	<script src="{{ asset('/js/less-1.6.1.min.js') }}"></script> 
	<style type="text/css">
	</style>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<a class="navbar-brand" href="#"><img src="{{asset('/images/logo.png') }}" /></a>

				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active" id="home-gly"><a href="http://localhost/laravel/src/public/dashboard"><span class="glyphicon glyphicon-home"></span></a></li>
						<!-- <li class="active" id="search-gly"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Search <strong class="caret"></strong></a>
							
							<div class=" dropdown-menu search-menu">
								<div class="row search-row">
									<div class="menu-div">
										<form method="get" action="/index.php">
											<input type="text" name="s" placeholder="Enter search terms" required="">
											<button type="submit" value="Search" id="searchsubmit" name="submit" class="submit"><span class="glyphicon glyphicon-search"></span></button>
										</form>
									</div>
								</div>
							</div>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span> Browse <strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								
								<li><a href="http://localhost/laravel/src/public/college"><span class="glyphicon glyphicon-flag pull-right"></span> Colleges</a></li>
								<li><a href="http://localhost/laravel/src/public/course"><span class="glyphicon glyphicon-book pull-right"></span> Courses</a></li>
								<li class="divider"></li>
								<li><a href="#"><span class="glyphicon glyphicon-flash pull-right"></span> AppetiteHunt</a></li>
								<li><a href="http://localhost/laravel/src/public/ambassador"><span class="glyphicon glyphicon-briefcase pull-right"></span> Ambassdor</a></li>
								
							</ul>
						</li>
						<!--
						
						-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>My Account<strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								
								<li>
									<a href="#notifications-modal" data-toggle="modal"><span class="glyphicon glyphicon-bell pull-right"></span> Notifications
										 <span class="badge">42</span>
									</a>
								</li>
								
								<li >
									<a href="#profile-modal" data-toggle="modal"><span class="glyphicon glyphicon-refresh  pull-right"></span> Profile</a>
								</li>

								
								
								<li>
									<a href="#"><span class="glyphicon glyphicon-wrench pull-right"></span> Settings</a>
								</li>

								<li class="divider"></li>
								
								<li>
									<a href="http://localhost/laravel/src/public/logout"><span class="glyphicon glyphicon-off pull-right"></span> Sign out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	


	@yield('content')

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
