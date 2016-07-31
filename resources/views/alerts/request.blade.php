@if(count($errors)>0)
	<div class="alert alert-danger fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{Session::get('message')}}
		<h4>Por favor, preste atención a los siguientes errores</h4>
		<ul>
			@foreach($errors->all() as $error)
				<li>{!!$error!!}</li>
			@endforeach
		</ul>
	</div>
@endif