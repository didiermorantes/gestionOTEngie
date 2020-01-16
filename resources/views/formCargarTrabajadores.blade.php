@extends('plantilla')

@section('contenido')

<div class="row">
    <form method="POST" action="{{route('cargarTrabajadores')}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <br><br>
        <input type="submit" value="Enviar &Oacute;rden" style="padding: 10px 20px;">
    </form>
</div>

		@if(session('cargarTrabajadorMasiva'))
			<div class="alert alert-success mt-3">
				{{session('cargarTrabajadorMasiva')}}
			</div>
			<a href="{{route('home')}}" class="btn btn-success btn-block">Regresar</a>
		@endif

@endsection