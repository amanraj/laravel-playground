@extends('app')
@section('content')

<div class="container">
		<div id="find-main-panel" class="panel panel-default panel-top-find">
		  <div class="panel-body">
		  		<div class="col-sm-15 data_div">
						<div class="tab-content">
						<div class="tab-pane active page_div" id="1">
							<?php
							/* foreach($result as $i): */?>
							
							<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-body panel-colleges-list" >
									<img class="img-responsive byside-container col-thumb" src="<?php /* echo $i['course_pic1']; */?>" alt="">
									<div class="table-responsive">
										<table class="table table-college-list">
		  									<tr><td class="text-center" colspan="2"><a href="<?php /* echo $i['course_id']; */?>" class="course_link"><?php/* echo $i['course_name'] */?> </td></a></tr>
		  								</table>
		  							</div>
		  						</div>
		  					</div>
		  				</div>

						<?php /* endforeach;*/	?>
							</div>
						</div>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>
	<form class="college_target" style="display:none;" method="POST" action="course.php">
		<input type="text" class="college_info" name="id" value="<?php/* echo $i['course_id']; */?>" />
	</form>

	
	<script>
	$(document).on("click",'.course_link', function () {
	var college= $(this).attr('href');
	$('.college_info').val(college);
	$('.college_target').submit();
	return false;
	});
	</script>

@stop