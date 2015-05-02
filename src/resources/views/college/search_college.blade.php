@extends('app')

@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/find-college.css') }}">
<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}">
<script src="{{ asset('/js/search_college_js.js') }}"></script>
<script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>


@stop


@section('content')

<div class="container">
		<div id="find-main-panel" class="panel panel-default panel-top-find">
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-sm-3">
		  			

		  			<div class="panel panel-default">
		  				<div class="panel-body">
		  					<form role="form">
		  					  <div class="form-group">
		  					    <label for="stream">Select Stream</label>
		  					    <select class="form-control selectpicker" id="stream" multiple="multiple">
									<option value="Engineering">Engineering</option>
									<option value="Management">Management</option>
									<option value="Medical">Medical</option>
									<option value="Law">Law</option>
		  					    </select>
		  					  </div>
		  					  
		  					</form>
		  				</div>
		  			</div>

					<div class="panel panel-default">
		  				<div class="panel-body">
		  					<form role="form">
		  					  <div class="form-group">
		  					    <label for="location">Location</label>
		  					    <select class="form-control selectpicker" id="location" multiple="multiple">
									<option value="Maharashtra">Maharashtra</option>
									<option value="Delhi">Delhi</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="West Bengal">West Bengal</option>
									<option value="Rajasthan">Rajasthan</option>
		  					    </select>
		  					  </div>
		  					  
		  					</form>
		  				</div>
		  			</div>


		  			<div class="panel panel-default">
		  				<div class="panel-body">
		  					<form role="form">
		  					  <div class="form-group">
		  					    <label for="exam">Exam</label>
		  					    <select class="form-control selectpicker" id="exam" multiple="multiple">
									<option value="IIT Mains">IIT Mains</option>
									<option value="IIT Advanced">IIT Advanced</option>
									<option value="UPTU">UPTU</option>
									<option value="BITS Pilani">BITS Pilani</option>
		  					    </select>
		  					  </div>
		  					  
		  					</form>
		  				</div>
		  			</div>

		  			<div class="panel panel-default">
		  				<div class="panel-body">
		  					<form role="form">
		  					  <div class="form-group">
		  					    <label for="fees">Fees</label>
		  					    <select class="form-control selectpicker" id="fees" multiple="multiple">
									<option value="23000','10000">Below Rs. 50,000 per semester</option>
									<option value="50000','65000">Rs 50,000 to Rs 1  Lakh per semester</option>
									<option value="110000','134000">Rs 1  Lakh to Rs 1.5  Lakh per semester</option>
									<option value="167000">Above Rs. 1.5  Lakh</option>
		  					    </select>
		  					  </div>
		  					  
		  					</form>
		  				</div>
		  			</div>

		  		</div>
		  		<div class="col-sm-9 data_div">
				<div class="row">
		  				<div class="col-sm-8">
		  					<ul class="nav nav-tabs college-tabs">
								
							</ul>
		  				</div>
		  				<div class="col-sm-4 pull-right">
		  					<form class="form-horizontal pull-right" role="form">
		  					  
		  					  <div class="form-group">
		  					    <label for="sortby" class="col-sm-4 control-label" style="padding-right:0px;">Sort By</label>
		  					    <div class="col-sm-8">
		  					      <select class="form-control" id="sortby">
		  					      	<option value="">Popularity</option>
		  					      	<option value="">Fee</option>
		  					      	<option value="">Alphabetically</option>
		  					      </select>
		  					    </div>
		  					  </div>
		  					  
		  					</form>
		  				</div>
		  			</div>
					
					<div class="row separator mbot15"></div>
						<div class="tab-content">
						<div class="tab-pane active page_div" id="1">
							
						</div>
						</div>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>
	<form class="college_target" style="display:none;" method="POST" action="college.php">
		<input type="text" class="college_info" name="id" value="" />
	</form>


<script>
$(document).ready(function(){
	$('.selectpicker').selectpicker();
	
});
</script>


@stop