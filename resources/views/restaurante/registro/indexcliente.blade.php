@extends ('layouts.admincliente')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h2><i> Datos del restaurante</i></h2></center>

		<br>
		<br>
	</div>
</div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				
				
               @foreach ($restaurante as $resta)
				

	                <td>
               			<tr>
               				<th>Nombre: </th><td>{{ $resta->nombre_resta}}</td>
					        <th>Propietario: </th><td>{{ $resta->nombre_propietario}}</td>
               			</tr>
               			<tr>
               				<th><br></th>
               				<th><br></th>
               				<th><br></th>
               				<br>
               			</tr>
               			<tr>
               				<th>Telefono: </th><td>{{ $resta->telefono_resta}}</td>
					        <th>Direccion: </th><td>{{ $resta->direccion}}</td>
               			</tr>
               			<tr>
               				<th><br></th>
               				<th><br></th>
               				<th><br></th>
               				<br>
               			</tr>
               			<tr>
               				 <th>Correo: </th><td>{{ $resta->correo_resta}}</td>
					         <th>Estado: </th><td>{{ $resta->estado_res}}</td>
               			</tr>
               		</td>

               		
					
				
@include('restaurante.registro.modal')
	@endforeach
			</table>
		</div>
		{{$restaurante->render()}}

	</div>
</div>

@endsection
