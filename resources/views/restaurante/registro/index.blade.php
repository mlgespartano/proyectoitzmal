@extends ('layouts.adminadmin')
@section ('contenido')
<div class="row">
	<div class="">
		
<center><h3>Datos publicos</h3></center>
		
	</div>
	<br>
	<br>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Nombre</th>
					<th>Propietario</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Correo</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
               @foreach ($restaurante as $resta)
				<tr>
					
					<td>{{ $resta->nombre_resta}}</td>
					<td>{{ $resta->nombre_propietario}}</td>
					<td>{{ $resta->telefono_resta}}</td>
					<td>{{ $resta->direccion}}</td>
					<td>{{ $resta->correo_resta}}</td>
					<td>{{ $resta->estado_res}}</td>
					<td>
						<a href="{{URL::action('RestauranteController@edit',$resta->id_restaurante)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$resta->id_restaurante}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
					
				</tr>

				
@include('restaurante.registro.modal')
	@endforeach
			</table>
		</div>
		{{$restaurante->render()}}

	</div>
</div>

@endsection
