@extends('plantilla')

@section('contenido')
	<div class="row">
		<div class="col-md-7">
			<table class="table">
				<tr>
					
					<th>id</th>
					<th>tipoOrden</th>
					<th>precioActividad</th>
					<th>estadoOrden</th>
					<th>idTrabajador</th>
					<th>Acciones</th>

				</tr>

				@foreach($ordenes as $item)

					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->tipoOrden}}</td>
						<td>{{$item->precioActividad}}</td>
						<td>{{$item->estadoOrden}}</td>
						<td>{{$item->idTrabajador}}</td>
						<td>
							<a href="{{route('editarOrden', $item->id)}}" class="btn btn-warning">Editar</a>
							<form action="{{route('eliminarOrden', $item->id)}}" method="POST" class="d-inline">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-danger">Eliminar</button>
							</form>
						</td>
					</tr>


				@endforeach


			</table>

		@if(session('eliminarOrden'))
			<div class="alert alert-success mt-3">
				{{session('eliminarOrden')}}
			</div>

		@endif
			{{$ordenes->links()}}


		</div>
		<div clas="col-md-5">
			<h3 class="text-center mb-4">Agregar Orden </h3>
		

		<form action="{{route('agregarOrden')}}" method="POST">
			@csrf
			<div class="form-group">
				<input type="text" name="tipoOrden" id="tipoOrden" class="form-control" placeholder="Tipo de Orden" required>
			</div>
			@error('tipoOrden')
			<div class="alert alert-danger">
				El tipo de orden es requerido
			</div>

			@enderror

		<div class="form-group">
				<input type="text" name="precioActividad" id="precioActividad" class="form-control" placeholder="Precio de la actividad" required>
			</div>

						@error('precioActividad')
			<div class="alert alert-danger">
				El precio de la actividad es requerido
			</div>
			@enderror


					<div class="form-group">
				<input type="text" name="estadoOrden" id="estadoOrden" class="form-control" placeholder="Estado de la orden" required>
			</div>

						@error('estadoOrden')
			<div class="alert alert-danger">
				El estado de la orden es requerido
			</div>
			@enderror




			<div class="form-group">
				<input type="text" name="idTrabajador" id="idTrabajador" class="form-control" placeholder="Id del Trabajador" required>
			</div>

						@error('idTrabajador')
			<div class="alert alert-danger">
				EL id del trabajador es requerido
			</div>
			@enderror

			<button type="submit" class="btn btn-success btn-block">Agregar Orden </button>

		</form>

		@if(session('agregarOrden'))
			<div class="alert alert-success mt-3">
				{{session('agregarOrden')}}
			</div>

		@endif
		</div>
	</div>	
@endsection