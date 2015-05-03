@extends('app')

@section('head')

@endsection

@section('content')
<div class="container">
		<div class="row">
			<div class="card col s12">
				<div class="col s6">
				<p><img class="responsive-img" src="{{ asset('images/colleges/iit_kgp.jpg') }}" alt="iit_kgp" width="100%"></p>
				</div>	
					<div class="card">
						<div class="card-content center-align">
						<span class="card-title black-text">Sign In</span>
								{!! Form::open(['url' => 'login', 'method' => 'POST']) !!}
				<p>
									<div class="input-field col s6">
          							<input id="email" name="email" type="email" class="validate" required>
         							<label for="email">Email-ID</label>
       								</div>
       			</p>

				<p>
									<div class="input-field col s6">
          							<input id="password" name="password" type="password" class="validate" required>
          							<label for="password">Password</label>
        							</div>
        		</p>
        							<div>
        							<button class="btn waves-effect waves-light " type="submit" name="action">Sign In</button>
        							<button class="btn waves-effect waves-light " type="submit" name="action">Facebook</button>
        							</div>
        						{!! Form::close() !!}
        	
        				</div>
        			</div>
				<p>
					<div class="card">
						<div class="card-content center-align">
						<span class="card-title black-text center-align">Register</span>
        					{!! Form::open(['url' => 'register', 'method' => 'POST']) !!}
        						<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="first_name" name="first_name" type="text" class="validate" required>
         							<label for="first_name">First Name</label>
       								</div>
       			</p>
        		
        		<p>
        							<div class="input-field col s6">
          							<input id="email" name="email" type="email" class="validate" required>
         							<label for="email">Email-ID</label>
       								</div>
       			</p>
								</div>
								<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="last_name" name="last_name" type="text" class="validate" required>
         							<label for="last_name">Last Name</label>
       								</div>
       			</p>

       			<p>
       								<div class="input-field col s6">
          							<input id="password" name="password" type="password" class="validate" required>
          							<label for="password">Password</label>
        							</div>
        		</p>
       							</div>
								<div class="row">
        		<p>
        							<div class="input-field col s6">
          							<input id="mobile" name="mobile" type="text" class="validate" required>
         							<label for="mobile">Mobile No.</label>
       								</div>
       			</p>
        							<button class="btn  waves-effect waves-light" type="submit" name="action">Register Now!</button>
       							</div>
        					{!! Form::close() !!}
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
