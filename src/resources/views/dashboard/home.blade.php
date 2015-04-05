@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('/css/owl.transitions.css') }}">
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
@stop


@section('content')

<div class="row visible-sm visible-xs" style="margin-top:50px;" >
		<div class="col-sm-12">
			<div class="input-group input-group-lg">
			      <input id="xs-md-input" type="text" class="form-control" placeholder="Search the site..">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button" id="search-go-btn">Go!</button>
			      </span>
			    </div>
		</div>
	</div>

	<div class="container" style="margin-top:50px;">
		<div class="page-header">
		  <h3>Your Choices <small>2</small></h3>
		</div>
	</div>

<div class="container">
	<div class="panel panel-default">
	  <div class="panel-body">
	  	<div class="row">
			<div class="col-xs-1 college-choice-left-arrow" ></div>
			<div class="col-xs-9 col-sm-10 col-md-11 slider-middle">
				<div id="owl-college" class="owl-carousel owl-theme">
					  <div class="item">
					  	<img class="img-responsive byside-container col-thumb" src="{{ asset('/images/colleges/iit_kgp.jpg') }}" alt="">
					  	<div class="table-responsive">
					  		<table class="table table-choices">
					  			<tr><td class="text-center" colspan="2"><a href="#">IIT KHARAGPUR</td></a></tr>
					  			<tr><td class="text-center" colspan="2"><a href="#">Notes</td></a></tr>
					  			<tr><td>User Rating</td><td>8.1</td></tr>
					  			<tr><td>Ratings Website</td><td>8.1</td></tr>
					  			<tr><td class="text-center" colspan="2"><a href="#">Reviews <small>(81)</small></a></td></tr>
					  		</table>
					  	</div>
					  </div>
					  <div class="item">
					  	<img class="img-responsive byside-container col-thumb" src="{{ asset('/images/colleges/ism_dhn.jpg') }}" alt="">
					  	<div class="table-responsive">
					  		<table class="table table-choices">
					  			<tr><td class="text-center" colspan="2"><a href="#">ISM DHANBAD</td></a></tr>
					  			<tr><td class="text-center" colspan="2"><a href="#">Notes</td></td></tr>
					  			<tr><td>User Rating</td><td>7.9</td></tr>
					  			<tr><td>Ratings Website</td><td>6.8</td></tr>
					  			<tr><td class="text-center" colspan="2"><a href="#">Reviews <small>(31)</small></a></td></tr>
					  		</table>
					  	</div>
					  </div>
					  <div class="item"><h1>3</h1></div>
					  <div class="item"><h1>4</h1></div>
					  <div class="item"><h1>5</h1></div>
					  <div class="item"><h1>6</h1></div>
					  <div class="item"><h1>7</h1></div>
					  <!--
					  		<div class="item"><h1>8</h1></div>
					  		<div class="item"><h1>9</h1></div>
					  		<div class="item"><h1>10</h1></div>
					  		<div class="item"><h1>11</h1></div>
					  		<div class="item"><h1>12</h1></div>
					  		<div class="item"><h1>13</h1></div>
					  		<div class="item"><h1>14</h1></div>
					  		<div class="item"><h1>15</h1></div>
					  		<div class="item"><h1>16</h1></div>
					   -->
				</div>
			</div>
			<div class="col-xs-1 college-choice-right-arrow"></div>
		</div>
	 <!--
	<div class="customNavigation">
	  <a class="btn prev">Previous</a>
	  <a class="btn next">Next</a>
	  <a class="btn play">Autoplay</a>
	  <a class="btn stop">Stop</a>
	</div>-->
	</div>
	</div>
</div>


<div class="container" style="margin-top:20px;">
	<div class="page-header">
	  <h3>Your Course DNA <small>(7)</small></h3>
	</div>
</div>

<div class="container">
	<div class="panel panel-default">
	  <div class="panel-body">
	  	<div class="row">
			<div class="col-xs-1 course-choice-left-arrow" ></div>
			<div class="col-xs-9 col-sm-10 col-md-11 slider-middle">
				<div id="owl-course" class="owl-carousel owl-theme">
					  <div class="item">
					  	<img class="img-responsive byside-container col-thumb" src="{{ asset('/images/colleges/iit_kgp.jpg')}}" alt="">
					  	<div class="table-responsive">
					  		<table class="table table-choices">
					  			<tr><td class="text-center" colspan="2"><a href="#">Btech Mining Engineering</td></a></tr>
					  			<!--<tr><td class="text-center" colspan="2"><a href="#">Notes</td></a></tr>-->
					  			<tr><td>Course DNA</td><td>8.1</td></tr>
					  			<!--<tr><td class="text-center" colspan="2"><a href="#">Reviews <small>(81)</small></a></td></tr>-->
					  		</table>
					  	</div>
					  </div>
					  <div class="item">
					  	<img class="img-responsive byside-container col-thumb" src="{{ asset('/images/colleges/ism_dhn.jpg') }}" alt="">
					  	<div class="table-responsive">
					  		<table class="table table-choices">
					  			<tr><td class="text-center" colspan="2"><a href="#">MSc. Mathematics and computing</td></a></tr>
					  			<!--<tr><td class="text-center" colspan="2"><a href="#">Notes</td></td></tr>-->
					  			<tr><td>Course DNA</td><td>7.9</td></tr>					  		
					  			<!--<tr><td class="text-center" colspan="2"><a href="#">Reviews <small>(31)</small></a></td></tr>-->
					  		</table>
					  	</div>
					  </div>
					  <div class="item"><h1>3</h1></div>
					  <div class="item"><h1>4</h1></div>
					  <div class="item"><h1>5</h1></div>
					  <div class="item"><h1>6</h1></div>
					  <div class="item"><h1>7</h1></div>
				</div>
			</div>
			<div class="col-xs-1 course-choice-right-arrow"></div>
		</div>
	
	</div>
	</div>
</div>
<footer>
<nav class="navbar navbar-default navbar-static-bottom footer">
	<div class="container">
		<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">Copyright &copy; 2014</a></p></div>
		<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">All rights reserved</a></p></div>
		<div class="col-sm-4"><p class="text-center"><a class=" navbar-text" href="#">Contact Us</a></p></div>

	</div>
</nav>
</footer>		

<!-- JS   -->

<script>
$(document).ready(function() {
 
  var owl_college = $("#owl-college");
 
  owl_college.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  })
 
  // Custom Navigation Events
  $(".college-choice-right-arrow").click(function(){
    owl_college.trigger('owl.next');
  })
  $(".college-choice-left-arrow").click(function(){
    owl_college.trigger('owl.prev');
  })

  //course choices
  /*
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })*/
});
$(document).ready(function() {
  var owl_course = $("#owl-course");
  
  owl_course.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
  
  // Custom Navigation Events
  $(".course-choice-right-arrow").click(function(){
    owl_course.trigger('owl.next');
  })
  $(".course-choice-left-arrow").click(function(){
    owl_course.trigger('owl.prev');
  })

  //$(".owl-controls").hide();
});
</script>


@stop