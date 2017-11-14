@extends('layouts.adminrecepcionista')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h3>Solicitudes Procesadas</h3></center>
			<br>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('recepcionista.solicitud.search')
		</div>		
	</div>

	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Tipo</th>
					<th>Cliente</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Personas</th>
					<th>Direccion</th>
					<th>Estado</th>
				</thead>
               @foreach ($reserva as $sol)
				<tr>
					<td>{{ $sol->id_reserva}}</td>
					<td>{{ $sol->tipo_reser}}</td>
					<td>{{ $sol->nombre_cliente}}</td>
					<td>{{ $sol->tel}}</td>
					<td>{{ $sol->correo}}</td>
					<td>{{ $sol->fecha}}</td>
					<td>{{ $sol->hora}}</td>
					<td>{{ $sol->num_pax}}</td>
					<td>{{ $sol->direccion_banquete}}</td>
					<td>{{ $sol->estado}}</td>
					
					
				
				</tr>
						@include('recepcionista.solicitud.modal')
					@endforeach

				</table>
			</div>
			{{--Crea fichas con las paginas de registro--}}
			{{$reserva->render()}}

		</div>
	</div>
</div>

@endsection
