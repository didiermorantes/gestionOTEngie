@extends('plantilla')
@section('contenido')
	<h3 class="text-center mb-3 pt-3">Editar Trabajador {{$trabajadorActualizar->id}}</h3>

	<form action="{{route('update',$trabajadorActualizar->id)}}"
	 method="POST">
	 @method('PUT')
		@csrf

		<div class="form-group">
			<input type="text" name="nombreTrabajador" id="nombreTrabajador" value="{{$trabajadorActualizar->nombreTrabajador}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="apellidoTrabajador" id="apellidoTrabajador" value="{{$trabajadorActualizar->apellidoTrabajador}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="profesionTrabajador" id="profesionTrabajador" value="{{$trabajadorActualizar->profesionTrabajador}}" class="form-control">

		</div>

		<button type="submit" class="btn btn-warning btn-block">Editar Trabajador</button>

		


	</form>


			@if(session('update'))
			<div class="alert alert-success mt-3">
				{{session('update')}}
			</div>
			<a href="{{route('trabajador')}}" class="btn btn-success btn-block">Regresar</a>
		@endif


@endsection