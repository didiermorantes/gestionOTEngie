@extends('plantilla')
@section('contenido')
	<h3 class="text-center mb-3 pt-3">Editar Orden {{$ordenActualizarAsignacion->id}}</h3>

	<form action="{{route('updateOrdenAsignacion',$ordenActualizarAsignacion->id)}}"
	 method="POST">
	 @method('PUT')
		@csrf

		<div class="form-group">
			<input type="text" name="tipoOrden" id="tipoOrden" value="{{$ordenActualizarAsignacion->tipoOrden}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="precioActividad" id="precioActividad" value="{{$ordenActualizarAsignacion->precioActividad}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="estadoOrden" id="estadoOrden" value="{{$ordenActualizarAsignacion->estadoOrden}}" class="form-control">

		</div>


		<div class="form-group">
			<input type="text" name="idTrabajador" id="idTrabajador" value="{{$ordenActualizarAsignacion->idTrabajador}}" class="form-control">

		</div>

		<button type="submit" class="btn btn-warning btn-block">Editar Orden</button>

		


	</form>


			@if(session('updateOrdenAsignacion'))
			<div class="alert alert-success mt-3">
				{{session('updateOrdenAsignacion')}}
			</div>
			<a href="{{route('asignacion')}}" class="btn btn-success btn-block">Regresar</a>
		@endif


@endsection