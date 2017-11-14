@extends ('layouts.admincliente')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h2>Bebidas</h2></center>
	<br>
	<br>
	<br>
	</div>
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
					<h4>{{ $prod->precio}}</h4>

				
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