@extends('app')

@section('head')

@endsection

@section('content')
<div class="container">
		<div class="row">
			<div class="card col s12">
				<div class="col s6">
				<p><img class="responsive-img" src="images/colleges/iit_kgp.jpg" alt="iit_kgp" width="100%"></p>
				</div>	
					<div class="card">
						<div class="card-content center-align">
						<span class="card-title black-text">Sign In</span>
								<form class="sigin col s12 center-align">
				<p>
									<div class="input-field col s6">
          							<input id="email" type="text" class="validate">
         							<label for="email">Email-ID</label>
       								</div>
       			</p>

				<p>
									<div class="input-field col s6">
          							<input id="password" type="password" class="validate">
          							<label for="password">Password</label>
        							</div>
        		</p>
        							<div>
        							<button class="btn waves-effect waves-light " type="submit" name="action">Sign In</button>
        							<button class="btn waves-effect waves-light " type="submit" name="action">Facebook</button>
        							</div>
        						</form>
        	
        				</div>
        			</div>
				<p>
					<div class="card">
						<div class="card-content center-align">
						<span class="card-title black-text center-align">Register</span>
        					<form class="reg col s12">
        						<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="fname" type="text" class="validate">
         							<label for="fname">First Name</label>
       								</div>
       			</p>
        		
        		<p>
        							<div class="input-field col s6">
          							<input id="reg_email" type="text" class="validate">
         							<label for="reg_email">Email-ID</label>
       								</div>
       			</p>
								</div>
								<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="lname" type="text" class="validate">
         							<label for="lname">Last Name</label>
       								</div>
       			</p>

       			<p>
       								<div class="input-field col s6">
          							<input id="reg_password" type="password" class="validate">
          							<label for="reg_password">Password</label>
        							</div>
        		</p>
       							</div>
								<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="mobile" type="text" class="validate">
         							<label for="mobile">Mobile No.</label>
       								</div>
       			</p>
        							<button class="btn  waves-effect waves-light" type="submit" name="action">Register Now!</button>
       							</div>
        					</form>
        				</div>
        			</div>
        	</p>
			</div>
		</div>
			
 		<div class="row">

      		<div class="col s3">
      			<div class="card">
      				<div class="card-content center-align">
       				<span class="card-title black-text">Briefacse</span>
        			<p>Some Data Here</p>
      				</div>
      			</div>
      		</div>
     		<div class="col s3">
      			<div class="card">
      				<div class="card-content center-align">
       				<span class="card-title black-text">Globe</span>
        			<p>Some Data Here</p>
      				</div>
      			</div>
      		</div>
      		<div class="col s3">
      			<div class="card">
      				<div class="card-content center-align">
       				<span class="card-title black-text">Book</span>
        			<p>Some Data Here</p>
      				</div>
      			</div>
      		</div>

	  		<div class="col s3">
      			<div class="card">
      				<div class="card-content center-align">
       				<span class="card-title black-text">Degree</span>
        			<p>Some Data Here</p>
      				</div>
      			</div>
      		</div>
      	</div>
   	</div>	
@endsection
