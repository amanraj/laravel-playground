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
	<form>
		<textarea id="ambs_intro" name="ambs_intro" class="materialize-textarea">
			<p>
	        {{  $result['0']->ambassadors_intro }}
	        </p>
	    </textarea>    
	</form>
</div>
@stop