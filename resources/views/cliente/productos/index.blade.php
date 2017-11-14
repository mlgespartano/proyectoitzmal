@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos</h3>
		@include('vista cliente.productos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
	
				</thead>
               @foreach ($productos as $prod)
				<tr>
					
					<td>{{ $prod->imagen}}</td>
					<td>{{ $prod->nombre_prod}}</td>
					<td>{{ $prod->descripcion}}</td>
					<td>{{ $prod->precio}}</td>
				
						
					</td>
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>

@endsection