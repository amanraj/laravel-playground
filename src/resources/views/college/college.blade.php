@extends('app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')

@stop

@section('content')
<div class="container">
	
	<div class="row">
		<!--====================================
		College Image Name and Location
		=====================================-->
     	 <div class="col s12 m12 l6">
        	<div class="card-panel grey lighten-2">
          
				<h5>College Name, ID = {{ $college_id }}, Location</h5><br>
				<img class="responsive-img" width="100%" src="{{ asset('images/colleges/iit_kgp.jpg') }}">
			
        	</div>
      	</div>
      	<!--====================================
      	College Ratings and Options
      	=====================================-->
       	<div class="col s12 m12 l6">
        	<div class="card-panel grey lighten-2">
          		<table class="striped responsive-table">
					<tr>
						<td><b>PPR</b></td>
						<td>
							##########
  						</td>
						<td>5.8</td>
					</tr>
					<tr>
						<td><b>Overall Rating</b></td>
						<td>
							<div class="progress">
      							<div class="determinate" style="width: 70%"></div>
  							</div>
  						</td>
						<td>4.0</td>
					</tr>
					<tr>
						<td><b>Campus Life</b></td>
						<td>
							<div class="progress">
      							<div class="determinate" style="width: 50%"></div>
  							</div>
  						</td>
						<td>4.0</td>
					</tr>
					<tr>
						<td><b>Hostel Life</b></td>
						<td>
							<div class="progress">
      							<div class="determinate" style="width: 90%"></div>
  							</div>
  						</td>
						<td>4.0</td>
					</tr>
					<tr>
						<td><b>Location</b></td>
						<td>
							<div class="progress">
      							<div class="determinate" style="width: 20%"></div>
  							</div>
  						</td>
						<td>4.0</td>
					</tr>
					<tr>
						<td><b>Facilities</b></td>
						<td>
							<div class="progress">
      							<div class="determinate" style="width: 50%"></div>
  							</div>
  						</td>
						<td>4.0</td>
					</tr>
				</table>
				<div class="center-align">
					<a class="btn waves-effect waves-light">Notes</a>
					<a class="btn waves-effect waves-light">Take Test</a>
					<a class="btn waves-effect waves-light">Add</a>
				</div>
        	</div>
      	</div>
    </div>


    <div class="row">
    	<!--====================================
    	Tabs
    	=====================================-->
	    <div class="col s12">
			<ul class="tabs">
				<li class="tab col s3 grey darken-4"><a class="active" href="#overview">Overview</a></li>
				<li class="tab col s3 grey darken-4"><a href="#college-review">College Review</a></li>
				<li class="tab col s3 grey darken-4"><a href="#course-review">Course Review</a></li>
				<li class="tab col s3 grey darken-4"><a href="#forum">Forum</a></li>
			</ul>
	    </div>
	    <!--====================================
	    Overview Tab
	    =====================================-->
	    <div id="overview" class="col s12">
			<ul class="collapsible" data-collapsible="expandable">
				<li>
					<div class="collapsible-header active"><i class="mdi-image-filter-drama"></i><b>General Information</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-maps-place"></i><b>Fee</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Exams/Admission Procedure</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Hostels</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Fests</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Other Facilites</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="mdi-social-whatshot"></i><b>Placements</b></div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
			</ul>
	    </div>
	    <!--====================================
	    college Review Tab
	    =====================================-->
	    <div id="college-review" class="col s12 ">
	    	<div class="card  valign-wraper medium grey lighten-2">
		    	<div class="row">
		    		<div class="col s3 ">
		    			<ul class="collection valign">
		    				<li class="collection-item">
				    			May 2, 2015
				    		</li>
				    		<li class="collection-item">
								#############
							</li>
							<li class="collection-item">
								Overall Rating
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Hostel Life
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Fests (if any)
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Facilities
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
	  					</ul>
		    		</div>
		    		<div class="col s9">
		    			<p>
		    			<b>Reviewer Name, Description</b><br><br>
		    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat ducimus, earum. Explicabo repudiandae ratione, tempore! Esse necessitatibus, eos consequatur laboriosam perspiciatis nostrum nulla suscipit pariatur adipisci rem, neque deserunt.<br>
		    			<b>Pros : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam quisquam inventore fugiat? Dolore dolor odit laborum. Dolores tempore laudantium, aut facilis cupiditate expedita, commodi accusantium facere, aliquam veritatis numquam.<br>
		    			<b>Cons : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae unde optio similique dolores non quis deserunt. Et nisi quod repellendus quis doloremque esse laboriosam quam numquam molestias, nemo magni!<br>
		    			<b>Comments : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos totam neque enim, vero, a possimus temporibus cum harum dolore officia tenetur dolorum quo sapiente voluptatem corporis distinctio ducimus ab ut!<br>
		    			</p>
		    		</div>
	    		</div>
	    	</div>
	    	<div class="card  valign-wraper medium grey lighten-2">
		    	<div class="row">
		    		<div class="col s3 ">
		    			<ul class="collection valign">
		    				<li class="collection-item">
				    			May 2, 2015
				    		</li>
				    		<li class="collection-item">
								#############
							</li>
							<li class="collection-item">
								Overall Rating
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Hostel Life
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Fests (if any)
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
			  				<li class="collection-item">
			  					Facilities
								<div class="progress">
			      					<div class="determinate" style="width: 50%"></div>
			  					</div>
			  				</li>
	  					</ul>
		    		</div>
		    		<div class="col s9">
		    			<p>
		    			<b>Reviewer Name, Description</b><br><br>
		    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat ducimus, earum. Explicabo repudiandae ratione, tempore! Esse necessitatibus, eos consequatur laboriosam perspiciatis nostrum nulla suscipit pariatur adipisci rem, neque deserunt.<br>
		    			<b>Pros : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, totam quisquam inventore fugiat? Dolore dolor odit laborum. Dolores tempore laudantium, aut facilis cupiditate expedita, commodi accusantium facere, aliquam veritatis numquam.<br>
		    			<b>Cons : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque molestiae unde optio similique dolores non quis deserunt. Et nisi quod repellendus quis doloremque esse laboriosam quam numquam molestias, nemo magni!<br>
		    			<b>Comments : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos totam neque enim, vero, a possimus temporibus cum harum dolore officia tenetur dolorum quo sapiente voluptatem corporis distinctio ducimus ab ut!<br>
		    			</p>
		    		</div>
	    		</div>
	    	</div>
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
							<ul class="collection">
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
							</ul>
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
							<ul class="collection">
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
							</ul>
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
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
			      							<div class="determinate" style="width: 50%"></div>											
										</div>
									</tr>
								</table>
							</div>
						</div>
						
						<div>
							<h4>User Reviews</h4>
							<ul class="collection">
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
								<li class="collection-item">
									<div>
										<b>User Name, Description</b>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quis fugiat praesentium consequuntur, deserunt autem. Est commodi in, iste tenetur fugiat ducimus voluptates sequi quia, minus cum maxime. Vel, rem.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
	    </div>
	    <!--====================================
	    forum Tab
	    =====================================-->
	    <div id="forum" class="col s12">
	    	<form>
		    	<div class="col s10">	    		
					<div class="row">
						<div class="input-field col s9">
							<input id="question_title" type="text" class="validate" required>
							<label for="question_title">Got a question? Please ask.</label>
						</div>
						<div class="input-field col s3">
							<select class="browser-default">
								<option value="general" selected>General</option>
								<option value="addmision">Addmission Related</option>
								<option value="placement">Placement Related</option>
								<option value="campus">Campus Related</option>
							</select>
						</div>
					</div>
					<div class="input-field col s12">
						<textarea id="question_description" class="materialize-textarea"></textarea>
          				<label for="textarea1">Question Description</label>
					</div>
		    	</div>	
		    	<div class="col s2 valign-wrapper">
		    		<a href="#!" class="btn valign">Ask ?</a>
		    	</div>
	    	</form>
	    	<!--====================================
	    	Sub Tabs for Forum
	    	=====================================-->
	    	<div class="row">
		    	<!--====================================
		    	Tabs
		    	=====================================-->
			    <div class="col s12">
					<ul id="forum-subtab" class="tabs">
						<li class="tab col s3 grey lighten-2"><a class="active" href="#general">General</a></li>
						<li class="tab col s3 grey lighten-2"><a href="#addmission">Addmission Related</a></li>
						<li class="tab col s3 grey lighten-2"><a href="#campus">Campus Related</a></li>
						<li class="tab col s3 grey lighten-2"><a href="#placement">Placement Related</a></li>
					</ul>
					<!--====================================
					general tab content
					=====================================-->
					<div id="general" class="col s12"> 
						<h5>Recent Questions</h5>
						<div class="col s12">
							<ul class="collection">
								<li class="collection-item">
									<a href="#">This is a General question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a General question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a General question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>

							</ul>
						</div>
					</div>
					<!--====================================
					general tab content
					=====================================-->
					<div id="addmission" class="col s12"> 
						<h5>Recent Questions</h5>
						<div class="col s12">
							<ul class="collection">
								<li class="collection-item">
									<a href="#">This is a Admission Related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Admission Related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Admission Related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>

							</ul>
						</div>
					</div>
					<!--====================================
					general tab content
					=====================================-->
					<div id="campus" class="col s12"> 
						<h5>Recent Questions</h5>
						<div class="col s12">
							<ul class="collection">
								<li class="collection-item">
									<a href="#">This is a Campus related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Campus related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Campus related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>

							</ul>
						</div>
					</div>
					<!--====================================
					general tab content
					=====================================-->
					<div id="placement" class="col s12"> 
						<h5>Recent Questions</h5>
						<div class="col s12">
							<ul class="collection">
								<li class="collection-item">
									<a href="#">This is a Placement related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Placement related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>
								<li class="collection-item">
									<a href="#">This is a Placement related question?</a>
									<span class="badge">by <b >User Name</b></span>
									<p>posted 10mins ago</p>
								</li>

							</ul>
						</div>
					</div>
			    </div>
			</div>
	    </div>
    </div>
</div>

@stop