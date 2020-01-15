@extends('plantilla')
@section('contenido')
	<h3 class="text-center mb-3 pt-3">Editar Orden {{$ordenActualizar->id}}</h3>

	<form action="{{route('updateOrden',$ordenActualizar->id)}}"
	 method="POST">
	 @method('PUT')
		@csrf

		<div class="form-group">
			<input type="text" name="tipoOrden" id="tipoOrden" value="{{$ordenActualizar->tipoOrden}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="precioActividad" id="precioActividad" value="{{$ordenActualizar->precioActividad}}" class="form-control">

		</div>

		<div class="form-group">
			<input type="text" name="estadoOrden" id="estadoOrden" value="{{$ordenActualizar->estadoOrden}}" class="form-control">

		</div>


		<div class="form-group">
			<input type="text" name="idTrabajador" id="idTrabajador" value="{{$ordenActualizar->idTrabajador}}" class="form-control">

		</div>

		<button type="submit" class="btn btn-warning btn-block">Editar Orden</button>

		


	</form>


			@if(session('updateOrden'))
			<div class="alert alert-success mt-3">
				{{session('updateOrden')}}
			</div>
			<a href="{{route('orden')}}" class="btn btn-success btn-block">Regresar</a>
		@endif


@endsection