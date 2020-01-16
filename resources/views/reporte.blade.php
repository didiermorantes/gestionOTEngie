@extends('plantilla')

@section('contenido')
	<div class="row">
		<div class="col-md-10">
			<table class="table">
				<tr>
					
					<th>id</th>
					<th>estadoOrden</th>
					<th>tipoOrden</th>
					<th>idTrabajador</th>
					<th>precioActividad</th>
					<th>fechaEjecucion</th>
					
					
					
					

				</tr>
@php
$total=0;
@endphp
				@foreach($reporte as $item)

					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->estadoOrden}}</td>
						<td>{{$item->tipoOrden}}</td>
						<td>{{$item->idTrabajador}}</td>
						<td>{{$item->precioActividad}}</td>
						@php
						$total=$total+$item->precioActividad;
						@endphp
						<td>{{$item->updated_at}}</td>
						
						

					</tr>


				@endforeach


			</table>

			{{$reporte->links()}}

			<div><h2>Total Ejecutado: @php echo($total); @endphp</h2></div>


		</div>
		<div clas="col-md-2">
			

			<a href="{{route('home')}}" class="btn btn-success btn-block">Regresar</a>


		</div>
	</div>	
@endsection