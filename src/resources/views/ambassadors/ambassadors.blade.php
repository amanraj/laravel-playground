@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')

<div class="container">
		<ul class="nav nav-tabs title-div">
		  <li class="active"><a href="#college-tab" data-toggle="tab">Home</a></li>
		  <li><a href="#course-tab" data-toggle="tab">Profile</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="college-tab">
		  	<div class="panel panel-default panel-amb">
		  	  <div class="panel-body">
		  	   <?php
			   /*foreach($result as $i){
				echo '<div class="col-sm-3">
		  	    		<a href="" class="thumbnail">
			  	    		<table class="table">
			  	    			<tr><th class="text-center remove-btop" colspan="2"><img class="img-responsive amb-thumb" src="../../'.$i['ambs_image'].'" alt=""></th></tr>
			  	    			<tr><td class="text-center" colspan="2"><a class="forum_link" href="'.$i['ambs_id'].'">'.$i['ambs_name'].'</a></td></tr>
			  	    			<tr><td class="text-center" colspan="2"><a class="college_link" href="'.$i['ambs_college_id'].'">'.$i['ambs_college_name'].'</a></td></tr>
			  	    		</table>
		  	    		</a>
		  	    	</div>';
			   
			   }*/
			   ?>
		  	  </div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="course-tab"><h4>Nothing is Here.</h4></div>
		</div>
	</div>
	<form class="college_target" style="display:none;" method="POST" action="#">
		<input type="text" class="college_info" name="id" value="" />
	</form>
	

	<form class="forum_target" style="display:none;" method="POST" action="#">
		<input type="text" class="forum_info" name="id" value="" />
	</form>
	
			<!-- JS   -->
	<script>
	$(document).ready(function(){
		$('.thumbnail').mouseenter(function(){
			// alert('entered');
			$(this).css({'position':'relative','transform':'scale(1.05)','-webkit-transform':'scale(1.05)','-moz-transform':'scale(1.05)','-o-transform':'scale(1.05)'});
			
		});

		$('.thumbnail').mouseleave(function(){
			
			$(this).css({'postion':'','transform':'scale(1)','-webkit-transform':'scale(1)','-moz-transform':'scale(1)','-o-transform':'scale(1)'});
			
		});

		

	});
	</script>
	<script>
	$(document).on("click",'.college_link', function () {
	var college= $(this).attr('href');
	$('.college_info').val(college);
	$('.college_target').submit();
	return false;
	});
	
	$(document).on("click",'.forum_link', function () {
	var forum= $(this).attr('href');
	$('.forum_info').val(forum);
	$('.forum_target').submit();
	return false;
	});
	</script>

@stop