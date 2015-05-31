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
					<textarea id="ambs_intro" name="ambs_intro" class="materialize-textarea" required>					
				        {{  $ambassador->ambassadors_intro }}				        
				    </textarea>
				    <label for="ambs_intro"></label> 
					<button type="submit" class="modal-action modal-close waves-effect waves-grey btn-large grey darken-2" style="border-radius:5px" name="submit">Save</button>
				</form>
			</div>	
		</div>		
	</div>	
</div>
@stop

                    
                        
                        