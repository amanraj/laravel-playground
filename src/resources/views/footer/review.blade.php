@extends('welcome')

@section('head')

@stop

@section('content')

{!! Form::open() !!}
<div class="container" style="border: 1px solid grey;padding:20px;margin-bottom:20px;margin-top:20px;">
		<div class="row">
			<div class="input-field col s5 offset-s1">
		        <input id="name" type="text" class="validate">
		        <label for="name">Name</label>
		    </div>
			<div class="input-field col s5">
				<input id="branch" type="text" class="validate" required>
		        <label for="branch">Branch</label>
		    </div>
		</div>
		<div class="row">
			<div class="input-field col s5 offset-s1">
				<input id="college" type="text" class="validate" required>
		        <label for="college">College</label>		        
			</div>
			<div class="input-field col s5">
		        <input id="year" type="text" class="validate" required>
		        <label for="year">Year of Study (<small>in 2014-2015</small>)</label>
		    </div>
		</div>        
		<h4 class="grey-text text-darken-1">Rate Your College</h4>
			<div class="row">
				<div class="col s5 offset-1">
					<p>
					Campus Life
						<p>
							<input name="group1" type="radio" id="campuslife1" />
				        	<label for="campuslife1">1</label>
							<input name="group1" type="radio" id="campuslife2" />
				        	<label for="campuslife2">2</label>
				        	<input name="group1" type="radio" id="campuslife3" />
				        	<label for="campuslife3">3</label>
				        	<input name="group1" type="radio" id="campuslife4" />
				        	<label for="campuslife4">4</label>
				        	<input name="group1" type="radio" id="campuslife5" />
				        	<label for="campuslife5">5</label>
						</p>
					</p>
				</div>
				<div class="col s5">	
					<p>
					Hostel Life
						<p>
							<input name="group2" type="radio" id="hostel1" />
				        	<label for="hostel1">1</label>
							<input name="group2" type="radio" id="hostel2" />
				        	<label for="hostel2">2</label>
				        	<input name="group2" type="radio" id="hostel3" />
				        	<label for="hostel3">3</label>
				        	<input name="group2" type="radio" id="hostel4" />
				        	<label for="hostel4">4</label>
				        	<input name="group2" type="radio" id="hostel5" />
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
							<input name="group3" type="radio" id="location1" />
				        	<label for="location1">1</label>
							<input name="group3" type="radio" id="location2" />
				        	<label for="location2">2</label>
				        	<input name="group3" type="radio" id="location3" />
				        	<label for="location3">3</label>
				        	<input name="group3" type="radio" id="location4" />
				        	<label for="location4">4</label>
				        	<input name="group3" type="radio" id="location5" />
				        	<label for="location5">5</label>
						</p>
					</p>
					</div>
					<div class="col s5">
					<p>
					Facilities
						<p>
							<input name="group4" type="radio" id="facilities1" />
				        	<label for="facilities1">1</label>
							<input name="group4" type="radio" id="facilities2" />
				        	<label for="facilities2">2</label>
				        	<input name="group4" type="radio" id="facilities3" />
				        	<label for="facilities3">3</label>
				        	<input name="group4" type="radio" id="facilities4" />
				        	<label for="facilities4">4</label>
				        	<input name="group4" type="radio" id="facilities5" />
				        	<label for="facilities5">5</label>
						</p>
					</p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="college_merits" class="materialize-textarea" required></textarea>
          				<label for="college_merits">Admirable Things about your college</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="college_demerits" class="materialize-textarea" required></textarea>
          				<label for="college_demerits">Not so good things about your college</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="college_comments" class="materialize-textarea"></textarea>
          				<label for="college_comments">Comments</label>
        			</div>
				</div>
		<h4 class="grey-text text-darken-1">Rate Your Course</h4><br/>(only for those who have completed 2 years or more in college)
			<div class="row">
				<div class="col s5 offset-1">
					<p>
					Course Content
						<p>
							<input name="group5" type="radio" id="course_content1" />
				        	<label for="course_content1">1</label>
							<input name="group5" type="radio" id="course_content2" />
				        	<label for="course_content2">2</label>
				        	<input name="group5" type="radio" id="course_content3" />
				        	<label for="course_content3">3</label>
				        	<input name="group5" type="radio" id="course_content4" />
				        	<label for="course_content4">4</label>
				        	<input name="group5" type="radio" id="course_content5" />
				        	<label for="course_content5">5</label>
						</p>
					</p>
				</div>
				<div class="col s5">	
					<p>
					Faculty
						<p>
							<input name="group6" type="radio" id="faculty1" />
				        	<label for="faculty1">1</label>
							<input name="group6" type="radio" id="faculty2" />
				        	<label for="faculty2">2</label>
				        	<input name="group6" type="radio" id="faculty3" />
				        	<label for="faculty3">3</label>
				        	<input name="group6" type="radio" id="faculty4" />
				        	<label for="faculty4">4</label>
				        	<input name="group6" type="radio" id="faculty5" />
				        	<label for="faculty5">5</label>
						</p>
					</p>
					</div>
				</div>
				<div class="row">
					<div class="col s5 offset-1">
					<p>
					Placements
						<p>
							<input name="group7" type="radio" id="placement1" />
				        	<label for="placement1">1</label>
							<input name="group7" type="radio" id="placement2" />
				        	<label for="placement2">2</label>
				        	<input name="group7" type="radio" id="placement3" />
				        	<label for="placement3">3</label>
				        	<input name="group7" type="radio" id="placement4" />
				        	<label for="placement4">4</label>
				        	<input name="group7" type="radio" id="placement5" />
				        	<label for="placement5">5</label>
						</p>
					</p>
					</div>
					<div class="col s5">
					<p>
					Future Scope
						<p>
							<input name="group8" type="radio" id="future_scope1" />
				        	<label for="future_scope1">1</label>
							<input name="group8" type="radio" id="future_scope2" />
				        	<label for="future_scope2">2</label>
				        	<input name="group8" type="radio" id="future_scope3" />
				        	<label for="future_scope3">3</label>
				        	<input name="group8" type="radio" id="future_scope4" />
				        	<label for="future_scope4">4</label>
				        	<input name="group8" type="radio" id="future_scope5" />
				        	<label for="future_scope5">5</label>
						</p>
					</p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="course_merits" class="materialize-textarea" required></textarea>
          				<label for="course_merits">Admirable Things about your course</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="course_demerits" class="materialize-textarea" required></textarea>
          				<label for="course_demerits">Not so good things about your course</label>
        			</div>
				</div>
				<div class="row">
					<div class="input-field col s8">
          				<textarea id="course_comments" class="materialize-textarea"></textarea>
          				<label for="course_comments">Comments</label>
        			</div>
				</div>
				<button class="btn waves-effect waves-light grey darken-1" type="submit" name="action">Submit</button>
</div>
{!! Form::close() !!}

@stop