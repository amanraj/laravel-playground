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
@stop


@section('content')

<div class="container">
		
		<div id="top-main-panel" class="panel panel-default panel-top">
		  <div class="panel-body">
		  	<div class="row">
		  		<ol class="breadcrumb">
		  		  <li><a href="home.php">Home</a></li>
		  		  <li><a class="college_link" href="<?php echo $res['ambs_college_id']; ?>"><?php echo $res['ambs_college_name']; ?></a></li>
		  		  <li class="active">Forum</li>
		  		</ol>
		  	</div>
		  	<div class="row"><div class="col-sm-12"><h3 id="college-title"><?php echo $res['ambs_college_name']; ?> Forum</h3></div></div>
		  	<div class="row" style="margin-right:0px;">
		  			<div class="col-sm-4">
		  				<img id="ambassdor-pic" src="../../<?php echo $res['ambs_image']; ?>" />
		  				<br/>
		  				<br/>
		  				<?php echo $res['ambs_name']; ?><br/>
		  				Campus Ambassdor,<br/>
		  				<span style="font-weight:700;"><?php echo $res['ambs_college_name']; ?>.</span>
		  			</div>
		  			<div class="col-sm-8 well" id="amb-speaks">
		  				<h4>Campus Ambassdor Speaks....</h4>
		  				<?php echo $res['ambs_intro']; ?>
		  			</div>
		  	</div>	
		    
		  </div><!--panel-body-->
		</div><!--panel-main-top-->
	
	</div><!--container-->

<div class="container">
		<div id="" class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-tabs college-tabs">
				  <li class="active"><a href="#home" data-toggle="tab">General</a></li>
				  <li><a href="#profile" data-toggle="tab"> Admission Related</a></li>
				  <li><a href="#messages" data-toggle="tab">Campus Related</a></li>
				  <li><a href="#settings" data-toggle="tab">Placements Related</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<!-- Overview starts -->
						<div style="margin-top:20px;">
							<form class="form-inline ask_que" target="forum.php" method="POST" id="General">
								<div class="form-group">
								<label class="sr-only" for="ques_input">Ask Question</label>
								<input type="text" class="form-control" id="ques_input" placeholder="Got any question? Please ask" name="title" style="width:600px;">
								   <select class="form-control" name="type" id="" placeholder="Question Category">
									    
								    	    <option value="General">General</option>
								    	    <option value="Admission Related">Admission Related</option>
								    	    <option value="Placements Related">Placements Related</option>
								    	    <option value="Campus Related">Campus Related</option>
								    	    
									</select>
									<div>
									<input type="text" name="id" value="<?php echo $_POST['id'];?>" style="display:none;" />
									<textarea name="desc" style="width:775px; max-width:775px; margin-top:10px;" class="form-control" placeholder="Please enter you question's description."></textarea>
									</div>
								</div>
								<button type="submit" style="margin-left:40px;" class="btn btn-primary">Ask</button>
								<br/>
							</form>
						</div>
						<?php
							 $col_id=$res['ambs_college_id'];
							 $query="SELECT * FROM `questions` WHERE que_college_id=:col_id AND que_type='General'";
							 $query_run=$database->prepare($query);
							 $query_run->bindparam(':col_id',$col_id);
							 if(!$query_run->execute()) die('Sorry couldn\'t fetch the results right now. Please try again later...');
							 $res=$query_run->fetchAll(PDO::FETCH_ASSOC); 
							 $rows=$query_run->rowCount();
						?>
						<h4 style="margin-top:20px;margin-bottom:0;">Recent Questions</h4>
						<ul class="p pagination pull-right" style="margin-top:10px;">
						  <li><a class="left_a" href="#">&laquo;</a></li>
						  <li id="1" class="a active a1"><a  href="#">1 </a></li>
						  <?php 
							if($rows>5)
							echo '<li id="2"  class="b a2"><a  href="#">2 </span></a></li>';
							if($rows>10)
							echo ' <li id="3"  class="c a3"><a  href="#">3 </span></a></li>';
							if($rows>15)
							echo '<li id="4"  class="d a4"><a  href="#">4 </span></a></li>';
						  ?>
						  <li><a class="right_a" href="#">&raquo;</a></li>
						</ul>
						<script>
							var i=parseInt(<?php echo $rows; ?>);
							i=(i+(5-(i%5)))/5;
							page=1;
							$('.p .right_a').click(function () {
							 var t=parseInt($('.p .d a').html());
							 if(t+1<=i){
								$('.p .a a').html(t-2);
								$('.p .b a').html(t-1);
								$('.p .c a').html(t);
								$('.p .d a').html(t+1);
							 
							  if((t+1>page)&&(t-2<page)){
							var qor= parseInt($('.p .active').attr('id'));
							qor=qor-1;
							$('.p .a'+qor).addClass('temp');
							$('.p .a,.p .b,.p .c,.p .d').removeClass('active');
							$('.p .temp').addClass('active');
							$('.p .active').removeClass('temp');}
							
							else $('.p .a,.p .b,.p .c,.p .d').removeClass('active');
							
							if(t+1==page)
							$('.p .d').addClass('active');
							
							if(t-2==page)
							$('.p .a').addClass('active');
							 
							 }				
								return false;
							});
							$('.p .left_a').click(function () {
							 var t=parseInt($('.p .a a').html());
							 if(t-1>0){
								$('.p .a a').html(t-1);
								$('.p .b a').html(t);
								$('.p .c a').html(t+1);
								$('.p .d a').html(t+2);
							 
						 	 if((t+2>page)&&(t-1<page)){
							 var qor= parseInt($('.p .active').attr('id'));
							qor=qor+1;
							 $('.p .a'+qor).addClass('temp');
							$('.p .a,.p .b,.p .c,.p .d').removeClass('active');
							$('.p .temp').addClass('active');
							$('.p .active').removeClass('temp');}
							
							else $('.p .a,.p .b,.p .c,.p .d').removeClass('active');
							
							if(t+2==page)
							$('.p .d').addClass('active');
							
							if(t-1==page)
							$('.p .a').addClass('active');
							
							 
							 }
								return false;
							});
							
							$('.p .a,.p .b,.p .c,.p .d').click(function () {
								$('.p .a,.p .b,.p .c,.p .d').removeClass('active');
								$(this).addClass('active');
								page=parseInt($(this).text());
								$('.t_general').html('<br/><br/><br/><br/><br/>Please wait... Fetching results... <br/><br/><br/><br/><br/><br/><br/>');
								$.post('forum_que.php',{page:page,type:'General',id:<?php echo $col_id; ?>}, function (data) {
									$('.t_general').html(data);
								});
								return false;
							});
							
							$('.p .a1').click();
						</script>
						<div class="t_general"></div>

						<!-- overview ends -->


					</div>
					<div class="tab-pane" id="profile">
							<div style="margin-top:20px;">
							<form class="form-inline ask_que" target="forum.php" method="POST" id="Admission_Related">
								<div class="form-group">
								<label class="sr-only" for="ques_input">Ask Question</label>
								<input type="text" class="form-control" id="ques_input" placeholder="Got any question? Please ask" style="width:600px;">
								   <select class="form-control" name="" id="" placeholder="Question Category">
									    
								    	    <option value="General">General</option>
								    	    <option value="Admission Related">Admission Related</option>
								    	    <option value="Placements Related">Placements Related</option>
								    	    <option value="Campus Related">Campus Related</option>
								    	    
									</select>
									<div>
									<input type="text" name="id" value="<?php echo $_POST['id'];?>" style="display:none;" />
									<textarea style="width:775px; max-width:775px; margin-top:10px;" class="form-control" placeholder="Please enter you question's description."></textarea>
									</div>
								</div>
								<button type="submit" style="margin-left:40px;" class="btn btn-primary">Ask</button>
								<br/>
							</form>
						</div>
						<?php
							 $query="SELECT * FROM `questions` WHERE que_college_id=:col_id AND que_type='Admission Related'";
							 $query_run=$database->prepare($query);
							 $query_run->bindparam(':col_id',$col_id);
							 if(!$query_run->execute()) die('Sorry couldn\'t fetch the results right now. Please try again later...');
							 $res=$query_run->fetchAll(PDO::FETCH_ASSOC); 
							 $rows=$query_run->rowCount();
						?>
						<h4 style="margin-top:20px;margin-bottom:0;">Recent Questions</h4>
						<ul class="q pagination pull-right" style="margin-top:10px;">
						  <li><a class="left_a" href="#">&laquo;</a></li>
						  <li id="1" class="a active a1"><a  href="#">1 </a></li>
						  <?php 
							if($rows>5)
							echo '<li id="2"  class="b a2"><a  href="#">2 </span></a></li>';
							if($rows>10)
							echo ' <li id="3"  class="c a3"><a  href="#">3 </span></a></li>';
							if($rows>15)
							echo '<li id="4"  class="d a4"><a  href="#">4 </span></a></li>';
						  ?>
						  <li><a class="right_a" href="#">&raquo;</a></li>
						</ul>
						<script>
							var i1=parseInt(<?php echo $rows; ?>);
							i1=(i1+(5-(i1%5)))/5;
							page1=1;
							$('.q .right_a').click(function () {
							 var t=parseInt($('.q .d a').html());
							 if(t+1<=i1){
								$('.q .a a').html(t-2);
								$('.q .b a').html(t-1);
								$('.q .c a').html(t);
								$('.q .d a').html(t+1);
							 
							  if((t+1>page1)&&(t-2<page1)){
							var qor= parseInt($('.q .active').attr('id'));
							qor=qor-1;
							$('.q .a'+qor).addClass('temp');
							$('.q .a,.q .b,.q .c,.q .d').removeClass('active');
							$('.q .temp').addClass('active');
							$('.q .active').removeClass('temp');}
							
							else $('.q .a,.q .b,.q .c,.q .d').removeClass('active');
							
							if(t+1==page1)
							$('.q .d').addClass('active');
							
							if(t-2==page1)
							$('.q .a').addClass('active');
							 
							 }				
								return false;
							});
							$('.q .left_a').click(function () {
							 var t=parseInt($('.q .a a').html());
							 if(t-1>0){
								$('.q .a a').html(t-1);
								$('.q .b a').html(t);
								$('.q .c a').html(t+1);
								$('.q .d a').html(t+2);
							 
						 	 if((t+2>page1)&&(t-1<page1)){
							 var qor= parseInt($('.q .active').attr('id'));
							qor=qor+1;
							 $('.q .a'+qor).addClass('temp');
							$('.q .a,.q .b,.q .c,.q .d').removeClass('active');
							$('.q .temp').addClass('active');
							$('.q .active').removeClass('temp');}
							
							else $('.q .a,.q .b,.q .c,.q .d').removeClass('active');
							
							if(t+2==page1)
							$('.q .d').addClass('active');
							
							if(t-1==page1)
							$('.q .a').addClass('active');
							
							 
							 }
								return false;
							});
							
							$('.q .a,.q .b,.q .c,.q .d').click(function () {
								$('.q .a,.q .b,.q .c,.q .d').removeClass('active');
								$(this).addClass('active');
								page1=parseInt($(this).text());
								$('.t_ar').html('<br/><br/><br/><br/><br/>Please wait... Fetching results... <br/><br/><br/><br/><br/><br/><br/>');
								$.post('forum_que.php',{page:page1,type:'Admission Related',id:<?php echo $col_id; ?>}, function (data) {
									$('.t_ar').html(data);
								});
								return false;
							});
							
							$('.q .a1').click();
						</script>
						<div class="t_ar"></div>
					</div>
					<div class="tab-pane" id="messages">
							<div style="margin-top:20px;">
							<form class="form-inline ask_que" target="forum.php" method="POST" id="Campus_Related">
								<div class="form-group">
								<label class="sr-only" for="ques_input">Ask Question</label>
								<input type="text" class="form-control" id="ques_input" placeholder="Got any question? Please ask" style="width:600px;">
								   <select class="form-control" name="" id="" placeholder="Question Category">
									    
								    	    <option value="General">General</option>
								    	    <option value="Admission Related">Admission Related</option>
								    	    <option value="Placements Related">Placements Related</option>
								    	    <option value="Campus Related">Campus Related</option>
								    	    
									</select>
									<div>
									<input type="text" name="id" value="<?php echo $_POST['id'];?>" style="display:none;" />
									<textarea style="width:775px; max-width:775px; margin-top:10px;" class="form-control" placeholder="Please enter you question's description."></textarea>
									</div>
								</div>
								<button type="submit" style="margin-left:40px;" class="btn btn-primary">Ask</button>
								<br/>
							</form>
						</div>
						<?php
							 $query="SELECT * FROM `questions` WHERE que_college_id=:col_id AND que_type='Campus Related'";
							 $query_run=$database->prepare($query);
							 $query_run->bindparam(':col_id',$col_id);
							 if(!$query_run->execute()) die('Sorry couldn\'t fetch the results right now. Please try again later...');
							 $res=$query_run->fetchAll(PDO::FETCH_ASSOC); 
							 $rows=$query_run->rowCount();
						?>
						<h4 style="margin-top:20px;margin-bottom:0;">Recent Questions</h4>
						<ul class="r pagination pull-right" style="margin-top:10px;">
						  <li><a class="left_a" href="#">&laquo;</a></li>
						  <li id="1" class="a active a1"><a  href="#">1 </a></li>
						  <?php 
							if($rows>5)
							echo '<li id="2"  class="b a2"><a  href="#">2 </span></a></li>';
							if($rows>10)
							echo ' <li id="3"  class="c a3"><a  href="#">3 </span></a></li>';
							if($rows>15)
							echo '<li id="4"  class="d a4"><a  href="#">4 </span></a></li>';
						  ?>
						  <li><a class="right_a" href="#">&raquo;</a></li>
						</ul>
						<script>
							var i2=parseInt(<?php echo $rows; ?>);
							i2=(i2+(5-(i2%5)))/5;
							page2=1;
							$('.r .right_a').click(function () {
							 var t=parseInt($('.r .d a').html());
							 if(t+1<=i2){
								$('.r .a a').html(t-2);
								$('.r .b a').html(t-1);
								$('.r .c a').html(t);
								$('.r .d a').html(t+1);
							 
							  if((t+1>page2)&&(t-2<page2)){
							var qor= parseInt($('.r .active').attr('id'));
							qor=qor-1;
							$('.r .a'+qor).addClass('temp');
							$('.r .a,.r .b,.r .c,.r .d').removeClass('active');
							$('.r .temp').addClass('active');
							$('.r .active').removeClass('temp');}
							
							else $('.r .a,.r .b,.r .c,.r .d').removeClass('active');
							
							if(t+1==page2)
							$('.r .d').addClass('active');
							
							if(t-2==page2)
							$('.r .a').addClass('active');
							 
							 }				
								return false;
							});
							$('.r .left_a').click(function () {
							 var t=parseInt($('.r .a a').html());
							 if(t-1>0){
								$('.r .a a').html(t-1);
								$('.r .b a').html(t);
								$('.r .c a').html(t+1);
								$('.r .d a').html(t+2);
							 
						 	 if((t+2>page2)&&(t-1<page2)){
							 var qor= parseInt($('.r .active').attr('id'));
							qor=qor+1;
							 $('.r .a'+qor).addClass('temp');
							$('.r .a,.r .b,.r .c,.r .d').removeClass('active');
							$('.r .temp').addClass('active');
							$('.r .active').removeClass('temp');}
							
							else $('.r .a,.r .b,.r .c,.r .d').removeClass('active');
							
							if(t+2==page2)
							$('.r .d').addClass('active');
							
							if(t-1==page2)
							$('.r .a').addClass('active');
							
							 
							 }
								return false;
							});
							
							$('.r .a,.r .b,.r .c,.r .d').click(function () {
								$('.r .a,.r .b,.r .c,.r .d').removeClass('active');
								$(this).addClass('active');
								page2=parseInt($(this).text());
								$('.t_cr').html('<br/><br/><br/><br/><br/>Please wait... Fetching results... <br/><br/><br/><br/><br/><br/><br/>');
								$.post('forum_que.php',{page:page2,type:'Campus Related',id:<?php echo $col_id; ?>}, function (data) {
									$('.t_cr').html(data);
								});
								return false;
							});
							
							$('.r .a1').click();
						</script>
						<div class="t_cr"></div>
					
					</div>
					<div class="tab-pane" id="settings"><br/>
							<div style="margin-top:0px;">
							<form class="form-inline ask_que" target="forum.php" method="POST" id="Placements_Related">
								<div class="form-group">
								<label class="sr-only" for="ques_input">Ask Question</label>
								<input type="text" class="form-control" id="ques_input" placeholder="Got any question? Please ask" style="width:600px;">
								   <select class="form-control" name="" id="" placeholder="Question Category">
									    
								    	   <option value="General">General</option>
								    	    <option value="Admission Related">Admission Related</option>
								    	    <option value="Placements Related">Placements Related</option>
								    	    <option value="Campus Related">Campus Related</option>
								    	    
									</select>
									<div>
									<input type="text" name="id" value="<?php echo $_POST['id'];?>" style="display:none;" />
									<textarea style="width:775px; max-width:775px; margin-top:10px;" class="form-control" placeholder="Please enter you question's description."></textarea>
									</div>
								</div>
								<button type="submit" style="margin-left:40px;" class="btn btn-primary">Ask</button>
								<br/>
							</form>
						</div>
						<?php
							 $query="SELECT * FROM `questions` WHERE que_college_id=:col_id AND que_type='Placements Related'";
							 $query_run=$database->prepare($query);
							 $query_run->bindparam(':col_id',$col_id);
							 if(!$query_run->execute()) die('Sorry couldn\'t fetch the results right now. Please try again later...');
							 $res=$query_run->fetchAll(PDO::FETCH_ASSOC); 
							 $rows=$query_run->rowCount();
						?>
						<h4 style="margin-top:20px;margin-bottom:0;">Recent Questions</h4>
						<ul class="s pagination pull-right" style="margin-top:10px;">
						  <li><a class="left_a" href="#">&laquo;</a></li>
						  <li id="1" class="a active a1"><a  href="#">1 </a></li>
						  <?php 
							if($rows>5)
							echo '<li id="2"  class="b a2"><a  href="#">2 </span></a></li>';
							if($rows>10)
							echo ' <li id="3"  class="c a3"><a  href="#">3 </span></a></li>';
							if($rows>15)
							echo '<li id="4"  class="d a4"><a  href="#">4 </span></a></li>';
						  ?>
						  <li><a class="right_a" href="#">&raquo;</a></li>
						</ul>
						<script>
							var i3=parseInt(<?php echo $rows; ?>);
							i3=(i3+(5-(i3%5)))/5;
							page3=1;
							$('.s .right_a').click(function () {
							 var t=parseInt($('.s .d a').html());
							 if(t+1<=i3){
								$('.s .a a').html(t-2);
								$('.s .b a').html(t-1);
								$('.s .c a').html(t);
								$('.s .d a').html(t+1);
							 
							  if((t+1>page3)&&(t-2<page3)){
							var qor= parseInt($('.s .active').attr('id'));
							qor=qor-1;
							$('.s .a'+qor).addClass('temp');
							$('.s .a,.s .b,.s .c,.s .d').removeClass('active');
							$('.s .temp').addClass('active');
							$('.s .active').removeClass('temp');}
							
							else $('.s .a,.s .b,.s .c,.s .d').removeClass('active');
							
							if(t+1==page3)
							$('.s .d').addClass('active');
							
							if(t-2==page3)
							$('.s .a').addClass('active');
							 
							 }				
								return false;
							});
							$('.s .left_a').click(function () {
							 var t=parseInt($('.s .a a').html());
							 if(t-1>0){
								$('.s .a a').html(t-1);
								$('.s .b a').html(t);
								$('.s .c a').html(t+1);
								$('.s .d a').html(t+2);
							 
						 	 if((t+2>page3)&&(t-1<page3)){
							 var qor= parseInt($('.s .active').attr('id'));
							qor=qor+1;
							 $('.s .a'+qor).addClass('temp');
							$('.s .a,.s .b,.s .c,.s .d').removeClass('active');
							$('.s .temp').addClass('active');
							$('.s .active').removeClass('temp');}
							
							else $('.s .a,.s .b,.s .c,.s .d').removeClass('active');
							
							if(t+2==page3)
							$('.s .d').addClass('active');
							
							if(t-1==page3)
							$('.s .a').addClass('active');
							
							 
							 }
								return false;
							});
							
							$('.s .a,.s .b,.s .c,.s .d').click(function () {
								$('.s .a,.s .b,.s .c,.s .d').removeClass('active');
								$(this).addClass('active');
								page3=parseInt($(this).text());
								$('.t_pr').html('<br/><br/><br/><br/><br/>Please wait... Fetching results... <br/><br/><br/><br/><br/><br/><br/>');
								$.post('forum_que.php',{page:page3,type:'Placements Related',id:<?php echo $col_id; ?>}, function (data) {
									$('.t_pr').html(data);
								});
								return false;
							});
							
							$('.s .a1').click();
						</script>
						<div class="t_pr"></div>
	</div><!--container-->
	
	<script>
	 $('.ask_que').submit(function () {
		var id=$(this).attr('id');
		var input=$('#'+id+' input.form-control');
		var select=$('#'+id+' select');
		var text=$('#'+id+' textarea');
		
		if($.trim(input.val())==''){
		input.focus();
		}
		
		else if($.trim(text.val())==''){
		text.focus();
		}
		
		else{
		$.post('insert_que.php',{type:select.val(),title:input.val(),desc:text.val(),ambs:<?php echo $_SESSION['user_id'];?>,col:<?php echo $col_id;?>}, function (data) {
			});
		return true;
		}
		
		return false;
	 });
	</script>


<form class="college_target" style="display:none;" method="POST" action="college.php">
		<input type="text" class="college_info" name="id" value="" />
	</form>
	
	<form class="que_target" style="display:none;" method="POST" action="thread.php">
		<input type="text" class="que_info" name="id" value="" />
	</form>



	<?php include('../../html_includes/profile_notifications.php'); ?>
			<!-- JS   -->
	<script src="../../assets/js/jquery.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script>
		

		$(document).ready(function() {
			$('#forum-tbl td').click(function(){
			  $(this).find('.forum-answers').css({'display':'block'});
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
	
	$(document).on("click",'.que_link', function () {
	var que= $(this).attr('href');
	$('.que_info').val(que);
	$('.que_target').submit();
	return false;
	});
	</script>


@stop