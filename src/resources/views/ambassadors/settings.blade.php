@extends('ambs_app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card card grey lighten-2">
				<p><b>Campus Ambassador Speaks....</b></p>	
				<form action="{{ url('ambs/settings/save') }}" method="post" class="col s12" style="padding:10px;">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<textarea id="ambs_intro" name="ambs_intro" class="materialize-textarea" required>{{  $ambassador->ambassadors_intro }}</textarea>
				    <label for="ambs_intro"></label> 
					<button type="submit" class="waves-effect waves-grey btn-large grey darken-2" style="border-radius:5px" name="submit">Save</button>
				</form>
			</div>	
		</div>		
	</div>
	<div class="row">
		<div class="col s12">
			<div class="card card grey lighten-2" style="padding:10px;">
			@if(Session::has('message'))
				<div class="flash" style="padding:10px;border:1px solid grey">
					{{ Session::get('message') }}
				</div>
			@endif	
				<h3>Change Password</h3>
				<form action="{{ url('ambs/settings/password') }}" method="post" class="col s12" style="padding:10px;">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div class="row">
						<div class="input-field col s6">
							<input type="password" name="old_password" id="old_password" class="validate" required />
							<label for="old_password">Current Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input type="password" name="new_password" id="new_password" class="validate" required />
							<label for="new_password">New Password</label>
						</div>
						<div class="input-field col s6">
							<input type="password" name="confirm_password" id="confirm_password" class="validate" required />
							<label for="confirm_password">Confirm Password</label>
						</div>
					</div>
					<button type="submit" class="waves-effect waves-grey btn-large grey darken-2" style="border-radius:5px;">Change Password</button>
				</form>
			</div>
		</div>
	</div>				
</div>
@stop

                    
                        
                        