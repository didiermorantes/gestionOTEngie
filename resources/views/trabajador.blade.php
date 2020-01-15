@extends('plantilla')

@section('contenido')
	<div class="row">
		<div class="col-md-7">
			<table class="table">
				<tr>
					
					<th>id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Profesi&oacute;n</th>
					<th>Acciones</th>

				</tr>

				@foreach($trabajadores as $item)

					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->nombreTrabajador}}</td>
						<td>{{$item->apellidoTrabajador}}</td>
						<td>{{$item->profesionTrabajador}}</td>
						<td>
							<a href="{{route('editar', $item->id)}}" class="btn btn-warning">Editar</a>
							<form action="{{route('eliminar', $item->id)}}" method="POST" class="d-inline">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-danger">Eliminar</button>
							</form>
						</td>
					</tr>


				@endforeach


			</table>

		@if(session('eliminar'))
			<div class="alert alert-success mt-3">
				{{session('eliminar')}}
			</div>

		@endif
			{{$trabajadores->links()}}


		</div>
		<div clas="col-md-5">
			<h3 class="text-center mb-4">Agregar trabajador </h3>
		

		<form action="{{route('agregar')}}" method="POST">
			@csrf
			<div class="form-group">
				<input type="text" name="nombreTrabajador" id="nombreTrabajador" class="form-control" placeholder="Nombre del Trabajador" required>
			</div>
			@error('nombreTrabajador')
			<div class="alert alert-danger">
				El nombre es requerido
			</div>

			@enderror

		<div class="form-group">
				<input type="text" name="apellidoTrabajador" id="apellidoTrabajador" class="form-control" placeholder="Apellido del Trabajador" required>
			</div>

						@error('apellidoTrabajador')
			<div class="alert alert-danger">
				El apellido es requerido
			</div>
			@enderror

			<div class="form-group">
				<input type="text" name="profesionTrabajador" id="profesionTrabajador" class="form-control" placeholder="Profesión del Trabajador" required>
			</div>

						@error('profesionTrabajador')
			<div class="alert alert-danger">
				La profesión es requerida
			</div>
			@enderror

			<button type="submit" class="btn btn-success btn-block">Agregar Trabajador </button>

		</form>

		@if(session('agregar'))
			<div class="alert alert-success mt-3">
				{{session('agregar')}}
			</div>

		@endif
		</div>
	</div>	
@endsection