@extends('plantilla')

@section('contenido')
	<div class="row">
		<div class="col-md-10">
			<table class="table">
				<tr>
					
					<th>id</th>
					<th>tipoOrden</th>
					<th>precioActividad</th>
					<th>estadoOrden</th>
					<th>idTrabajador</th>
					<th>Acciones</th>

				</tr>

				@foreach($asignacion as $item)

					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->tipoOrden}}</td>
						<td>{{$item->precioActividad}}</td>
						<td>{{$item->estadoOrden}}</td>
						<td>{{$item->idTrabajador}}</td>
						<td>
							<a href="{{route('editarOrdenAsignacion', $item->id)}}" class="btn btn-warning">Editar</a>

						</td>
					</tr>


				@endforeach


			</table>

			{{$asignacion->links()}}


		</div>
		<div clas="col-md-2">
			

			<a href="{{route('home')}}" class="btn btn-success btn-block">Regresar</a>


		</div>
	</div>	
@endsection