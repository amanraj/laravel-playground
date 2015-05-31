@extends('app')

@extends('ambs_app')
@section('title')
PICKPRIME - Your College Picker
@stop

@section('head')
<link rel="stylesheet" href="{{ asset('/css/ambassdors.css')}}">
@stop

@section('content')
<div class="container">
	<form action="{{ url('ambassador/{ambassador_id}/settings') }}" method="post"> <!--url to be changed acc. to the path !-->
		<textarea id="ambs_intro" name="ambs_intro" class="materialize-textarea">
			<p>
	        {{  $result['0']->ambassadors_intro }}
	        </p>
	    </textarea> 
		<button type="submit" class="modal-action modal-close waves-effect waves-grey btn-large grey darken-2" style="border-radius:5px" name="submit">Save</button>
	</form>
</div>
@stop