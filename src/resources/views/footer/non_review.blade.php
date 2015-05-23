@extends('welcome')

@section('head')

@stop

@section('content')

<div class="container" style="border: 1px solid grey;padding:20px;margin-bottom:20px;margin-top:20px;">
	<form action="{{ url('/submit_review') }}" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
		<div class="row">
			<div class="input-field col s5 offset-s1">
		        <input id="name" type="text" name="name" class="validate">
		        <label for="name">Name</label>
		    </div>
			<div class="input-field col s5">
				<input id="branch" type="text" name="branch" class="validate" required>
		        <label for="branch">Branch</label>
		    </div>
		</div>
		<div class="row">
			<div class="col s5 offset-s1">
    			<select class="browser-default" name="college">
				    <option value="" disabled selected>College</option>
				    @foreach ($results as $result)
				    <option value="{{ $result->college_id }}">{{ $result->college_name }}</option>
				    @endforeach
   				</select>
			</div>
			<div class="col s5">
    			<select class="browser-default" name="year">
				    <option value="" disabled selected>Year of Study</option>
				    <option value="First Year">First Year</option>
				    <option value="Second Year">Second Year</option>
				    <option value="Third Year">Third Year</option>
				    <option value="Fourth Year">Fourth Year</option>
				    <option value="Fifth Year">Fifth Year</option>
   				</select>
   			</div>	
   		</div>     
		<h4 class="grey-text text-darken-1">Rate Your College</h4>
			<div class="row">
				<div class="col s5 offset-1">
					<p>
					Overall
						<p>
							<input name="overall" type="radio" value="1" id="overall1" />
				        	<label for="overall1">1</label>
							<input name="overall" type="radio" value="2" id="overall2" />
				        	<label for="overall2">2</label>
				        	<input name="overall" type="radio" value="3" id="overall3" />
				        	<label for="overall3">3</label>
				        	<input name="overall" type="radio" value="4" id="overall4" />
				        	<label for="overall4">4</label>
				        	<input name="overall" type="radio" value="5" id="overall5" />
				        	<label for="overall5">5</label>
						</p>
					</p>
				</div>
			</div>	
			<div class="row">
				<div class="col s5 offset-1">
					<p>
					Campus Life
						<p>
							<input name="campuslife" type="radio" value="1" id="campuslife1" />
				        	<label for="campuslife1">1</label>
							<input name="campuslife" type="radio" value="2" id="campuslife2" />
				        	<label for="campuslife2">2</label>
				        	<input name="campuslife" type="radio" value="3" id="campuslife3" />
				        	<label for="campuslife3">3</label>
				        	<input name="campuslife" type="radio" value="4" id="campuslife4" />
				        	<label for="campuslife4">4</label>
				        	<input name="campuslife" type="radio" value="5" id="campuslife5" />
				        	<label for="campuslife5">5</label>
						</p>
					</p>
				</div>
				<div class="col s5">	
					<p>
					Hostel Life
						<p>
							<input name="hostel" type="radio" value="1" id="hostel1" />
				        	<label for="hostel1">1</label>
							<input name="hostel" type="radio" value="2" id="hostel2" />
				        	<label for="hostel2">2</label>
				        	<input name="hostel" type="radio" value="3" id="hostel3" />
				        	<label for="hostel3">3</label>
				        	<input name="hostel" type="radio" value="4" id="hostel4" />
				        	<label for="hostel4">4</label>
				        	<input name="hostel" type="radio" value="5" id="hostel5" />
				        	<label for="hostel5">5</label>
						</p>
					</p>
					</div>
				</div>
				<div class="row">
					<div class="col s5 offset-1">
					<p>
					Location
						<p>
							<input name="location" type="radio" value="1" id="location1" />
				        	<label for="location1">1</label>
							<input name="location" type="radio" value="2" id="location2" />
				        	<label for="location2">2</label>
				        	<input name="location" type="radio" value="3" id="location3" />
				        	<label for="location3">3</label>
				        	<input name="location" type="radio" value="4" id="location4" />
				        	<label for="location4">4</label>
				        	<input name="location" type="radio" value="5" id="location5" />
				        	<label for="location5">5</label>
						</p>
					</p>
					</div>
					<div class="col s5">
					<p>
					Facilities
						<p>
							<input name="facilities" type="radio" value="1" id="facilities1" />
				        	<label for="facilities1">1</label>
							<input name="facilities" type="radio" value="2" id="facilities2" />
				        	<label for="facilities2">2</label>
				        	<input name="facilities" type="radio" value="3" id="facilities3" />
				        	<label for="facilities3">3</label>
				        	<input name="facilities" type="radio" value="4" id="facilities4" />
				        	<label for="facilities4">4</label>
				        	<input name="facilities" type="radio" value="5" id="facilities5" />
				        	<label for="facilities5">5</label>
						</p>
					</p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="merits" name="merits" class="materialize-textarea" required></textarea>
          				<label for="merits">Admirable Things about your college</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="demerits" name="demerits" class="materialize-textarea" required></textarea>
          				<label for="demerits">Not so good things about your college</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="comments" name="comments" class="materialize-textarea"></textarea>
          				<label for="comments">Comments</label>
        			</div>
				</div>
				<button class="btn waves-effect waves-light grey darken-1" type="submit" name="action">Submit</button>
	</form>
</div>

@stop