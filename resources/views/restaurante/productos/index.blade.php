@extends ('layouts.adminadmin')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h3>Listado de Productos </h3></center>
		
		@include('restaurante/productos.search')
		<br>
	</div>
	<center><a href="productos/create"><button class="btn btn-success">Nuevo</button></a></center>
		<br>
		<br>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<center>
				<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				
					
					
				</thead>
               @foreach ($producto as $prod)

			
					<tr>
					
				
					<p>
						<img src="{{asset('imagenes/productos/'.$prod->imagen)}}" alt="{{ $prod->imagen}}" height="600px" width="600px" class="img-thumbnail">
					</p>
					<h4>{{ $prod->nombre_prod}}</h4>
					<h4>{{ $prod->descripcion}}</h4>
					<h4>${{ $prod->precio}}</h4>

				

						<a href="{{URL::action('ProductoController@edit',$prod->id_prod)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$prod->id_prod}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                     <br>
					<br>
					<br>
					</td>
				</tr>
				@include('restaurante.productos.modal')
				@endforeach
			</table>
		</div>
		{{$producto->render()}}
	</div>
</div>

@endsection