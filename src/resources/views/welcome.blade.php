<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet/less" href="{{ asset('/css/style.less') }}">
	<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/landing_css.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/find-college.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}">
	<script src="{{ asset('/js/less-1.6.1.min.js') }}"></script> 
	<style type="text/css">
	</style>

</head>
<body>

<script src="{{ asset('/js/jquery.js') }}"></script>
<script>
function statusChangeCallback(response) {
console.log('statusChangeCallback');
console.log(response);
if (response.status === 'connected') {
  testAPI();
} else if (response.status === 'not_authorized') {
} else {
}
}

function checkLoginState() {
FB.getLoginStatus(function(response) {
  statusChangeCallback(response);
});
}

window.fbAsyncInit = function() {
FB.init({
appId      : '1475185769418123',
cookie     : true,   
					
xfbml      : true,  
version    : 'v2.1' 
});

FB.getLoginStatus(function(response) {
statusChangeCallback(response);
});

};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "http://connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function testAPI() {
console.log('Welcome!  Fetching your information.... ');
FB.api('/me', function(response) {
if((response.email)&&(response.name)&&(response.id))
{
$.post('fblogin.php',{email:response.email, name:response.name, password:response.id}, function (data) {
 $('.error').html(data);
 $('.error_trigger').click();
});
}
else logout();
 
});
}

function logout() {
 FB.logout(function(response) {
  $('.error').html('Please provide us with the information asked for to login through facebook.');
 $('.error_trigger').click();
});
}
</script>
<button class="error_trigger" data-toggle="modal" data-target="#myModal_error" style="display:hidden; z-index:3;"></button>
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
	</div>
<header>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<a class="navbar-brand" href="#"><img src="{{ asset('/images/logo.png') }}" /></a>
		
		<form class="navbar-form pull-left visible-lg visible-md">
			<div class="form-group">
				<input id="main-search-input" style="width:450px" type="text" class="form-control" placeholder="Search this site..." id="searchInput">
			</div
			><button type="submit" class="btn btn-search main-search-btn"><span class="glyphicon glyphicon-search"></span></button>
		</form>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active" id="home-gly"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span> Browse <strong class="caret"></strong></a>
					
					<ul class="dropdown-menu">
						
						<li><a href="search_college.php"><span class="glyphicon glyphicon-flag"></span> Colleges</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-book"></span> Courses</a></li>
						<li class="divider"></li>
						<li><a href="#"><span class="glyphicon glyphicon-flash"></span> AppetiteHunt</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Ambassdor</a></li>
						
					</ul>
				</li>
				<!--
				
				-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
					
					<ul class="dropdown-menu">
						
						<li>
							<a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications
								 <span class="badge">42</span>
							</a>
						</li>
						
						<li>
							<a href="#"><span class="glyphicon glyphicon-refresh"></span> Profile</a>
						</li>
						
						<li>
							<a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
						</li>

						<li class="divider"></li>
						
						<li>
							<a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
</header>
<div id="bg_container">
	<div class="slider1_container"  id="college-slider-div">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		  <!-- Wrapper for slides -->
		<div class="carousel-inner" style="height:300px;">
			<div class="item active">
				<img src="{{ asset('/images/colleges/iit_kgp_lg_1.jpg') }}" alt="" class="img-responsive">
				<div class="carousel-caption"></div>
			</div>
			
			<div class="item">
				<img src="{{ asset('/images/colleges/iit_kgp_lg_2.jpg') }}" alt=""  class="img-responsive">
				<div class="carousel-caption"></div>
			</div>

			<div class="item">
				<img src="{{ asset('/images/colleges/iit_kgp_lg_3.jpg') }}" alt="" class="img-responsive">
				<div class="carousel-caption"></div>
			</div>

		</div>

	


		  <!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
		</div>
		</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h3 class="modal-title" id="myModalLabel">Register Now!</h3>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="siform2">
		<form id="login_form" action="{{ url('/login') }}" method ="POST">

			<p><b>Email-ID:</b>&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Password:</b>&nbsp;&nbsp;&nbsp; <input type="password" name="password" value="" /></p>
			<p><input style="font-weight:bold; margin-top:5px; margin-left:220px;" type="submit"  name="submit" class="btn btn-primary submit_si" value="Sign In" />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<fb:login-button scope="public_profile,email" size="large" style="position:absolute; top:67px;" onlogin="checkLoginState();" class="login">
			</fb:login-button>
			</p>
		</form>		
	</div>
	<div id="sign-up-box">
		<form id="sign_up_form" action="/register" method="POST">
			<div class="form_element">
				<b>First Name:</b>&nbsp;
				<input type="text" name="fname" id="fname" />
			</div>
			<div class="form_element1">
				<b>Last Name:</b>&nbsp;&nbsp;
				<input type="text" name="lname" id="lname" />
			</div>
			<div class="form_element2">
				<b>Email ID:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="email" id="email" maxlength="45" />
			</div>
			<div class="form_element3">	
				<b>Password:</b>&nbsp;&nbsp;&nbsp;
				<input type="password" name="password" id="password" maxlength="45" />
			</div>
			<div class="form_element4">
				<b>Mobile No:</b>&nbsp;&nbsp;&nbsp;
				<input type="text" name="mobile" id="mobile" maxlength="13" />
			</div>
			<button class="btn btn-primary" style="font-weight:bold;">Register Now!</button>
		</form>
	</div>

	<div class="flip_cover c_1">
		<div class="flip_container">
			<div class="siform1" style="background-image:url('assets/images/icons/Briefcase.png'); background-size:100% 100%; width:30%; height:30%;">
			</div>
			<div class="data_div_icon"><font color="black" size="5">Briefcase</font><br/>
			<font color="black"> Some data here! </font>
			</div>
		</div>
		</div>
		<div class="flip_cover c_a">
		<div class="flip_container">
			<div class="siform1" style="background-image:url("{{ asset('/images/icons/Globe.png')}} "); background-size:100% 100%; width:30%; height:30%;">
			</div>
			<div class="data_div_icon"><font color="black" size="5">Globe</font><br/>
			<font color="black"> Some data here! </font>
			</div>
		</div>
		</div>
		<div class="flip_cover c_b">
		<div class="flip_container">
			<div class="siform1" style="background-image:url('assets/images/icons/Book.png'); background-size:100% 100%; width:30%; height:30%;">
			</div>
			<div class="data_div_icon"><font color="black" size="5">Book</font><br/>
			<font color="black"> Some data here! </font>
			</div>
		</div>
		</div>
		<div class="flip_cover c_c">
		<div class="flip_container">
			<div class="siform1" style="background-image:url('assets/images/icons/hat.png'); background-size:100% 100%; width:30%; height:30%;">
			</div>
			<div class="data_div_icon"><font color="black" size="5">Degree</font><br/>
			<font color="black"> Some data here! </font>
			</div>
		</div>
	</div>
	</div>
	
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom footer">
<div class="container">
<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">Copyright &copy; 2014</a></p></div>
<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">All rights reserved</a></p></div>
<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">Contact Us</a></p></div>

</div>
</nav>
</footer>


	<script src="{{ asset('/js/jquery.validate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/jquery.form.js') }}"></script>
	<script src="{{ asset('/js/landing_js.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
</div>
</body>
</html>