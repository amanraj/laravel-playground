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
				{{ $result_2['0']->college_name }},
				{{ $result_2['0']->college_location }}
				</h5>
				<br>
				<img class="responsive-img" style="width:100%;height:260px;" src="{{ asset( $result_2['0']->college_image_1 ) }}">
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
      							<div class="determinate light-blue darken-2" style="width: 70%"></div>
  							</div>
  						</td style="padding:5px 5px;">
						<td>{{ $result_1['0']->college_overall_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Campus Life</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: 50%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $result_1['0']->college_campuslife_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Hostel Life</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: 90%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $result_1['0']->college_hostel_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Location</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: 20%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $result_1['0']->college_location_rating }}</td>
					</tr>
					<tr>
						<td style="padding:5px 5px;">Facilities</td>
						<td style="padding:5px 5px;">
							<div class="progress">
      							<div class="determinate light-blue darken-2" style="width: 50%"></div>
  							</div>
  						</td>
						<td style="padding:5px 5px;">{{ $result_1['0']->college_facilities_rating }}</td>
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
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#college-review">College Review</a></li>
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#course-review">Course Review</a></li>
				<li class="tab col s3 "><a class="indigo-text text-darken-3" href="#forum">Forum</a></li>
			</ul>
	    </div>
	    <!--====================================
	    Overview Tab
	    =====================================-->
	    <div id="overview" class="col s12">
			<ul class="collapsible" data-collapsible="expandable">
				<li>
					<div class="collapsible-header active"><i class="mdi-image-filter-drama"></i><b>General Information</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_overview }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-maps-place"></i><b>Fee</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_fees }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Exams/Admission Procedure</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_entrance_exam }}<br/>{{ $result_2['0']->college_addmision_process }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Hostels</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_hostels }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Fests</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_fests }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Other Facilites</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_other_facilities }}</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Placements</b></div>
					<div class="collapsible-body"><p>{{ $result_2['0']->college_placement }}</p></div>
				</li>
			</ul>
	    </div>
	    <!--====================================
	    college Review Tab
	    =====================================-->
	    <div id="college-review" class="col s12 ">
	    	@if ( count($result)==0 )
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
	    	@foreach ( $result_1 as $results_1 )
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
								Overall Rating : {{ $results_1->college_overall_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Hostel Life : {{ $results_1->college_hostel_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Campus Life : {{ $results_1->college_campuslife_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Location : {{ $results_1->college_location_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item" style="padding: 5px 25px;">
			  					Facilities : {{ $results_1->college_facilities_rating }}
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  				</li>
	  					</ul>
		    		</div>
		    		<div class="col s9">
		    			<p>
		    				<b>{{ $results_1->reviewer_name }},<br/>{{ $results_1->reviewer_college }}</b>
		    			</p>
		    			<p>
		    				{{ $results_1->review }}
		    			</p>
		    		</div>
	    		</div>
	    	</div>
	    	@endforeach
	    	@endif
	    </div>	
	    <!--====================================
	    Course Review Tab
	    =====================================-->
	    <div id="course-review" class="col s12">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Course Name</div>
					<div class="collapsible-body">
						<div class="row">
							<div class="col s3">
								<table>
									<tr>
										<td>Course Content</td>
										<td>3.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Placements</td>
										<td>1.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Future Scope</td>
										<td>2.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Faculty</td>
										<td>4.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
				@if ( count($result)==0 )
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
				<div class="card  valign-wraper medium grey lighten-2">
				<div class="col s12">
				<div class="row"><p><b>Reviewer Name, Description</b></p></div>
		    	<div class="row">
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Course Content</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>	
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Placements</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Future Scope</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Faculty</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>
			  		</div>		
		    		<div class="col s9">
		    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat ducimus, earum. Explicabo repudiandae ratione, tempore! Esse necessitatibus, eos consequatur laboriosam perspiciatis nostrum nulla suscipit pariatur adipisci rem, neque deserunt.<br>
		    			<b>Pros : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam quisquam inventore fugiat? Dolore dolor odit laborum. Dolores tempore laudantium, aut facilis cupiditate expedita, commodi accusantium facere, aliquam veritatis numquam.<br>
		    			<b>Cons : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae unde optio similique dolores non quis deserunt. Et nisi quod repellendus quis doloremque esse laboriosam quam numquam molestias, nemo magni!<br>
		    			<b>Comments : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos totam neque enim, vero, a possimus temporibus cum harum dolore officia tenetur dolorum quo sapiente voluptatem corporis distinctio ducimus ab ut!<br>
		    		</div>
	    		</div>
	    	</div>
	    	@endif
		</div>
		</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Course Name</div>
					<div class="collapsible-body">
						<div class="row">
							<div class="col s3">
								<table>
									<tr>
										<td>Course Content</td>
										<td>3.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Placements</td>
										<td>1.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Future Scope</td>
										<td>2.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Faculty</td>
										<td>4.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
				@if ( count($result)==0 )
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
				<div class="card  valign-wraper medium grey lighten-2">
				<div class="col s12">
				<div class="row"><p><b>Reviewer Name, Description</b></p></div>
		    	<div class="row">
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Course Content</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>	
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Placements</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Future Scope</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Faculty</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>
			  		</div>		
		    		<div class="col s9">
		    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat ducimus, earum. Explicabo repudiandae ratione, tempore! Esse necessitatibus, eos consequatur laboriosam perspiciatis nostrum nulla suscipit pariatur adipisci rem, neque deserunt.<br>
		    			<b>Pros : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam quisquam inventore fugiat? Dolore dolor odit laborum. Dolores tempore laudantium, aut facilis cupiditate expedita, commodi accusantium facere, aliquam veritatis numquam.<br>
		    			<b>Cons : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae unde optio similique dolores non quis deserunt. Et nisi quod repellendus quis doloremque esse laboriosam quam numquam molestias, nemo magni!<br>
		    			<b>Comments : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos totam neque enim, vero, a possimus temporibus cum harum dolore officia tenetur dolorum quo sapiente voluptatem corporis distinctio ducimus ab ut!<br>
		    		</div>
	    		</div>
	    	</div>
	    	@endif
		</div>
		</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i>Course Name</div>
					<div class="collapsible-body">
						<div class="row">
							<div class="col s3">
								<table>
									<tr>
										<td>Course Content</td>
										<td>3.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Placements</td>
										<td>1.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Future Scope</td>
										<td>2.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
							<div class="col s3">
								<table>
									<tr>
										<td>Faculty</td>
										<td>4.4</td>
									</tr>
									<tr>
										<div class="progress">
			      							<div class="determinate light-blue darken-2" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
				@if ( count($result)==0 )
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
				<div class="card  valign-wraper medium grey lighten-2">
				<div class="col s12">
				<div class="row"><p><b>Reviewer Name, Description</b></p></div>
		    	<div class="row">
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Course Content</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>	
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Placements</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
			  		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Future Scope</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>		
		    		<div class="col s3 ">
		    			<table>
							<tr>
								<td>Faculty</td>
								<td>4.5</td>
							</tr>
							<tr>	
								<td>
								<div class="progress">
			      					<div class="determinate light-blue darken-2" style="width: 50%"></div>
			  					</div>
			  					</td>
			  				</tr>
			  			</table>
			  		</div>
			  		</div>		
		    		<div class="col s9">
		    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat ducimus, earum. Explicabo repudiandae ratione, tempore! Esse necessitatibus, eos consequatur laboriosam perspiciatis nostrum nulla suscipit pariatur adipisci rem, neque deserunt.<br>
		    			<b>Pros : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam quisquam inventore fugiat? Dolore dolor odit laborum. Dolores tempore laudantium, aut facilis cupiditate expedita, commodi accusantium facere, aliquam veritatis numquam.<br>
		    			<b>Cons : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae unde optio similique dolores non quis deserunt. Et nisi quod repellendus quis doloremque esse laboriosam quam numquam molestias, nemo magni!<br>
		    			<b>Comments : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos totam neque enim, vero, a possimus temporibus cum harum dolore officia tenetur dolorum quo sapiente voluptatem corporis distinctio ducimus ab ut!<br>
		    		</div>
	    		</div>
	    	</div>
	    	@endif
		</div>
		</div>
				</li>
			</ul>
	    </div>
	    <!--====================================
	    forum Tab
	    =====================================-->
	    <div id="forum" class="col s12">
        <div class="row">
            <div class="card s12">
                <div class="col s4">
                <p ><img class="responsive-img" src="{{ asset( $result['0']->profile_pic ) }}" width="100%"></p>
                <span class="light-blue-text text-darken-4"><b>{{ $result['0']->ambassadors_name }}</b><br/>Campus Ambassador,<br/>{{ $result['0']->ambassadors_college_id }}</span>
                </div>
                <div class="card grey lighten-2" style="width:600px;">
                    <div class="col s12">
                     	<p>
                        <div class="ambs_speaks" style="height:300px;margin:10px;">
                        <p class="light-blue-text text-darken-4"><b>Campus Ambassador Speaks....</b></p>
                        <p>
                        {{  $result['0']->ambassadors_intro }}
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