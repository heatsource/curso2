@extends('master')
@section('title','crearticket')
 
@section('content')
<form class="container col-md-8 col-md-offset-2" method="post" >
		@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{ $error}}</p>
		@endforeach

		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>

		@endif

	<input type="hidden" name="_token" value="{!!csrf_token() !!}">

	<div class="form-group">
		<label class="control-label col-sm-2" >Título:</label>
		<div class="col-sm-10">
			<input  class="form-control" id="title" placeholder="Título del ticket" name="title">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Contenido:</label>
		<div class="col-sm-10"> 
			<input type="text" class="form-control" id="content" placeholder="Ingresa el contenido" name="content">
		</div>
	</div>

	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Enviar</button>
		</div>
	</div>
</form>
@endsection