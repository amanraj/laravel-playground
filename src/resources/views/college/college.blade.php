@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')

<style>
.progress{
	
	height: 10px;
	border-radius: 5px;
}


</style>

@stop

@section('content')
<div class="container">
<div class="row">
		<!--====================================
		College Image Name and Location
		=====================================-->
     	 <div class="col s12 m12 l8">
        	<div class="card-panel grey lighten-2">          
				<h5 class="light-blue-text text-darken-4">
				{{ $college_details['0']->college_name }},
				{{ $college_details['0']->college_location }}
				</h5>
				<br>
				<img class="responsive-img" style="width:100%;height:260px;" src="{{ asset( $college_details['0']->college_image_1 ) }}">
	    	</div>
      	</div>
      	<!--====================================
      	College Ratings and Options
      	=====================================-->
       	<div class="col s12 m12 l4">
        	<div class="card-panel grey lighten-2">
          		<table class="striped responsive-table">
					<tr>
						<td style="padding:5px 5px;">PPR</td>
						<td style="padding:5px 5px;">
							##########
  						</td>
						<td style="padding:5px 5px;">5.8</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Overall Rating</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: {{ $college_rating['0']->college_overall_rating * 10 }}%"></div>
  							</div>
  						</td style="padding:5px 5px;">
						<td>{{ $college_rating['0']->college_overall_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Campus Life</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: {{ $college_rating['0']->college_campuslife_rating * 10 }}%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $college_rating['0']->college_campuslife_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Hostel Life</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: {{ $college_rating['0']->college_hostel_rating * 10 }}%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $college_rating['0']->college_hostel_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Location</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: {{ $college_rating['0']->college_location_rating * 10 }}%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $college_rating['0']->college_location_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Facilities</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: {{ $college_rating['0']->college_facilities_rating * 10 }}%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $college_rating['0']->college_facilities_rating }}</td>
					</tr>
					<tr class="grey lighten-2">
						<td style="padding:5px 5px;"><br/><a class="btn-floating btn tooltipped light-blue darken-2 data-position="bottom" data-delay="25" data-tooltip="Notes" btn- waves-effect waves-light"><i class="mdi-action-note-add"></i></a></td>
						<td style="padding:5px 5px;"><br/><a class="btn-floating btn tooltipped light-blue darken-2 data-position="bottom" data-delay="25" data-tooltip="Take Test" btn- waves-effect waves-light"><i class="mdi-editor-border-color"></i></a></td>
						<td style="padding:5px 5px;"><br/><a class="btn-floating btn tooltipped light-blue darken-2 data-position="bottom" data-delay="25" data-tooltip="Add" btn- waves-effect waves-light" ><i class="mdi-content-add"></i></a></td>
					</tr>	
				</table>
        	</div>
      	</div>
    </div>       
    <div class="row">
    	<!--====================================
    	Tabs
    	=====================================-->
	    <div class="col s12 light-blue-text text-darken-4">
			<ul class="tabs ">
				<li class="tab col s3 "><a class="active indigo-text text-darken-3" href="#overview">Overview</a></li>
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#college-review">College Review & FAQs</a></li>
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#course-review">Course Review & FAQs</a></li>
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#forum">Forum</a></li>
			</ul>
	    </div>
	</div>    
	    <!--====================================
	    Overview Tab
	    =====================================-->
	    <div id="overview" class="col s12">
			<ul class="collapsible" data-collapsible="expandable">
				<li>
					<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>General Information</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_overview }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-maps-place"></i><b>Fee</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_fees }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Exams/Admission Procedure</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_entrance_exam }}<br/>{{ $college_details['0']->college_addmision_process }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Hostels</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_hostels }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Fests</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_fests }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Other Facilites</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_other_facilities }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Placements</b></div>
					<div class="collapsible-body"><p>{{ $college_details['0']->college_placement }}</p></div>
				</li>
			</ul>
	    </div>
	    <!--====================================
	    college Review Tab
	    =====================================-->
	    <div id="college-review" class="col s12 ">
<<<<<<< HEAD
	    	@if ( count($ambassadors)==0 )
	    	<div class="card  valign-wraper medium grey lighten-2">
		    	<div class="row">
		    		<div class="col s3 ">
		    			<ul class="collection valign">
		    				<li class="collection-item" style="padding: 5px 25px;">
				    			Nothing here yet.
				    		</li>
				    	</ul>
				    </div>
				</div>
			</div>
			@else	    		
	    	@foreach ( $college_reviews as $college_review )
	    	<div class="card  valign-wraper medium grey lighten-2">
		    	<div class="row">
		    		<div class="col s3 ">
		    			<ul class="collection valign">
		    				<li class="collection-item" style="padding: 5px 25px;">
				    			May 2, 2015
				    		</li>
				    		<li class="collection-item" style="padding: 5px 25px;">
								#############
							</li>
							<li class="collection-item" style="padding: 5px 25px;">
								Overall Rating : {{ $college_review->college_overall_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: {{ $college_review->college_overall_rating * 10 }}%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Hostel Life : {{ $college_review->college_hostel_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: {{ $college_review->college_hostel_rating * 10 }}%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Campus Life : {{ $college_review->college_campuslife_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: {{ $college_review->college_campuslife_rating * 10 }}%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Location : {{ $college_review->college_location_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: {{ $college_review->college_location_rating * 10 }}%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Facilities : {{ $college_review->college_facilities_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: {{ $college_review->college_facilities_rating * 10 }}%"></div>
			  					</div>
			  				</li>
	  					</ul>
		    		</div>
		    		<div class="col s9">
		    			<p>
		    				<b>{{ $college_review->reviewer_name }},<br/>{{ $college_review->reviewer_college }}</b>
		    			</p>
		    			<p>
		    				{{ $college_review->review }}
		    			</p>
		    		</div>
	    		</div>
	    	</div>
	    	@endforeach
	    	@endif
	    </div>	
=======
	    	<ul class="collapsible" data-collapsible="expandable">
				<li>
					<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Campus Life</b></div>
					<div class="collapsible-body">
					@foreach ($college_reviews as $college_review)
					@if ( ($college_review->college_review_id)%2 == 0 )
						<div class="card right-align">
					@else
						<div class="card left-align">
					@endif
							{{ $college_review->review }}		
						</div>
					@endforeach	
					</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Hostel Life</b></div>
					<div class="collapsible-body">
					@foreach ($college_reviews as $college_review)
					@if ( ($college_review->college_review_id)%2 == 0 )
						<div class="card right-align">
					@else
						<div class="card left-align">
					@endif
							{{ $college_review->review }}		
						</div>
					@endforeach	
					</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Facilities</b></div>
					<div class="collapsible-body">
					@foreach ($college_reviews as $college_review)
					@if ( ($college_review->college_review_id)%2 == 0 )
						<div class="card right-align">
					@else
						<div class="card left-align">
					@endif
							{{ $college_review->review }}		
						</div>
					@endforeach	
					</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Location</b></div>
					<div class="collapsible-body">
					@foreach ($college_reviews as $college_review)
					@if ( ($college_review->college_review_id)%2 == 0 )
						<div class="card right-align">
					@else
						<div class="card left-align">
					@endif
							{{ $college_review->review }}		
						</div>
					@endforeach	
					</div>
				</li>
			</ul>		
		</div>
>>>>>>> f8f12e34110c9f34292fccd91daa4370f9b10d6d
	    <!--====================================
	    Course Review Tab
	    =====================================-->
	    <div id="course-review" class="col s12">
			<ul class="collapsible" data-collapsible="accordion">
			@foreach ($courses as $course)
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i>{{ $course->course_name }}</div>
					<div class="collapsible-body">
<<<<<<< HEAD
						
                            
						<h4>Users Review</h4>
						@foreach ($course_reviews as $course_review)
							@if ($course->course_id == $course_review->course_reference_id)
								<div class="card  valign-wraper medium grey lighten-2">
								<div class="col s12">
								<div class="row">
									<p class="card"><b>{{ $course_review->reviewer_name }}, {{ $course_review->reviewer_description }}</b></p>
								</div>
						    	<div class="row">
						    		<div class="col s3 ">
						    			<table>
											<tr>
												<td>Rating</td>
												<td>{{ $course_review->reviewer_rating }}</td>
											</tr>
											<tr>	
												<td>
												<div class="progress">
							      					<div class="determinate light-blue darken-2" style="width: {{ $course_review->reviewer_rating * 10 }}%"></div>
							  					</div>
							  					</td>
							  				</tr>
							  			</table>
							  		</div>	
							  		<div class="col s9 card">
						    			<p>{{ $course_review->review }}</p>
						    		</div>
							  	</div>		
						    		
=======
					<div class="row">
	    		<div class="col s3 ">	
					<table>
						<tr>
							<td colspan="2">
								<div class="progress">
				   					<div class="determinate light-blue darken-2" style="width: {{ $course_rating['0']->course_content_rating * 10 }}%"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Course Content</td>
							<td>{{ $course_rating['0']->course_content_rating }}</td>
						</tr>
					</table>
				</div>
				<div class="col s3 ">	
					<table>
						<tr>
							<td colspan="2">
								<div class="progress">
				   					<div class="determinate light-blue darken-2" style="width: {{ $course_rating['0']->course_placement_rating * 10 }}%"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Placement</td>
							<td>{{ $course_rating['0']->course_placement_rating }}</td>
						</tr>
					</table>
				</div>
				<div class="col s3 ">	
					<table>
						<tr>
							<td colspan="2">
								<div class="progress">
				   					<div class="determinate light-blue darken-2" style="width: {{ $course_rating['0']->course_future_scope_rating * 10 }}%"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Future Scope</td>
							<td>{{ $course_rating['0']->course_future_scope_rating }}</td>
						</tr>
					</table>
				</div>
				<div class="col s3 ">	
					<table>
						<tr>
							<td colspan="2">
								<div class="progress">
				   					<div class="determinate light-blue darken-2" style="width: {{ $course_rating['0']->course_faculty_rating * 10 }}%"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>Faculty</td>
							<td>{{ $course_rating['0']->course_faculty_rating }}</td>
						</tr>
					</table>
				</div>
			</div>                            
						<h4>User Reviews</h4>
						<ul class="collapsible" data-collapsible="expandable">
							<li>
								<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Future Scope</b></div>
								<div class="collapsible-body">
								@foreach ($course_reviews as $course_review)
								@if ($course->course_id == $course_review->course_reference_id)
									@if ( ($course_review->course_college_review_id)%2 == 0 )
										<div class="card right-align">
									@else
										<div class="card left-align">
									@endif
										{{ $course_review->future_scope }}		
									</div>
								@endif	
								@endforeach	
								</div>
							</li>
							<li>
								<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Faculty</b></div>
								<div class="collapsible-body">
								@foreach ($course_reviews as $course_review)
								@if ($course->course_id == $course_review->course_reference_id)
									@if ( ($course_review->course_college_review_id)%2 == 0 )
										<div class="card right-align">
									@else
										<div class="card left-align">
									@endif
										{{ $course_review->faculty }}		
									</div>
								@endif
								@endforeach	
								</div>
							</li>
							<li>
								<div class="collapsible-header"><i class="mdi-image-filter-drama"></i><b>Placements</b></div>
								<div class="collapsible-body">
								@foreach ($course_reviews as $course_review)
								@if ($course->course_id == $course_review->course_reference_id)
									@if ( ($course_review->course_college_review_id)%2 == 0 )
										<div class="card right-align">
									@else
										<div class="card left-align">
									@endif
										{{ $course_review->placement }}		
									</div>
								@endif
								@endforeach	
								</div>
							</li>
						</ul>	
			    		
>>>>>>> f8f12e34110c9f34292fccd91daa4370f9b10d6d
					    		</div>
					    		</div>
					    						
					</div>
				</li>
			@endforeach
			
			</ul>
	    </div>
	    <!--====================================
	    forum Tab
	    =====================================-->
	    <div id="forum" class="col s12">
        <div class="row">
            <div class="card s12">
                <div class="col s4">
                <p ><img class="responsive-img" src="{{ asset( $ambassadors['0']->profile_pic ) }}" width="100%"></p>
                <span class="light-blue-text text-darken-4"><b>{{ $ambassadors['0']->ambassadors_name }}</b><br/>Campus Ambassador,<br/>{{ $ambassadors['0']->ambassadors_college_id }}</span>
                </div>
                <div class="card grey lighten-2" style="width:600px;">
                    <div class="col s12">
                     	<p>
                        <div class="ambs_speaks" style="height:300px;margin:10px;">
                        <p class="light-blue-text text-darken-4"><b>Campus Ambassador Speaks....</b></p>
                        <p>
                        {{  $ambassadors['0']->ambassadors_intro }}
                        </p>
                        </div>
                    </div>
                    	</p>
                </div>
            </div>
        </div>
	    	<div class="row">
            <div class="card">
                <div class="col s12">
                    <ul class="tabs">
                    <li class="tab col s3"><a class="active indigo-text text-darken-3" href="#general">General</a></li>
                    <li class="tab col s3"><a class="indigo-text text-darken-3" href="#admission_related">Admission Related</a></li>
                    <li class="tab col s3"><a class="indigo-text text-darken-3" href="#campus_related">Campus Related</a></li>
                    <li class="tab col s3"><a class="indigo-text text-darken-3" href="#placement_related">Placement Related</a></li>
                    </ul>
                </div>
                <div id="general" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn light-blue darken-2 waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($general_question) == 0 )
                         <tr>
                            <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                        </tr>
                        @else
                            
                        @foreach ($general_question as $general)
                            <td><div><a href="#" class="light-blue-text text-darken-4">{{ $general->question_title }}</a><br/><span class="grey-text"><small>{{ $general->date }}</small></span><br/><i class="mdi-action-thumb-up blue-text"></i> 54<a href="#!" class="secondary-content grey-text">by {{ $general->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        @endforeach
                        
                        @endif
                    </table>
                </div>
                <div id="admission_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn light-blue darken-2 waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($admission_question) == 0 )
                            <tr>
                                <td><div><a href="#" class="blue-text">No questions here yet.</a></div></li></td>
                            </tr>
                        @else
                            
                        @foreach ($admission_question as $admission)
                        <tr>
                            <td><div><a href="#" class="blue-text">{{ $admission->question_title }}</a><br/><span class="grey-text"><small>{{ $admission->date }}</small></span><a href="#!" class="secondary-content grey-text">by {{ $admission->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                <div id="campus_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn light-blue darken-2 waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($campus_question) == 0 )
                            <tr>
                                <td><div><a href="#" class="blue-text">No questions here yet.</a></div></li></td>
                            </tr>
                        @else
                            
                        @foreach ($campus_question as $campus)
                        <tr>
                            <td><div><a href="#" class="blue-text">{{ $campus->question_title }}</a><br/><span class="grey-text"><small>{{ $campus->date }}</small></span><a href="#!" class="secondary-content grey-text">by {{ $campus->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                <div id="placement_related" class="col s12">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                            <input placeholder="Got any question? Please ask" id="ques" type="text" class="validate">
                            </div>
                            <div class="input-field col s9">
                            <textarea placeholder="Please enter your question's description." id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                            <div class="right col s3">
                                <button class="btn light-blue darken-2  waves-effect waves-light" type="submit" name="action">Ask</button>
                            </div>
                        </div>
                    </form>
                    <h4>Recent Questions</h4>
                    <table class="bordered striped">
                        @if ( count($placement_question) == 0 )
                        <tr>
                            <td><div><a href="#" class="blue-text">No questions here yet.</a></div></td>
                        </tr>
                        @else
                            
                        @foreach ($placement_question as $placement)
                        <tr>
                            <td><div><a href="#" class="blue-text">{{ $placement->question_title }}</a><br/><span class="grey-text"><small>{{ $placement->date }}</small></span><a href="#!" class="secondary-content grey-text">by {{ $placement->user_reference_id }} <i class="mdi-social-person"></i></a></div></td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                
            </div>
        </div>
	    </div>
    </div>
    </div>
@stop