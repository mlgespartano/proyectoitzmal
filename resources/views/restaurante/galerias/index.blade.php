@extends ('layouts.adminadmin')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h3>Galeria del Restaurante</h3></center>

       
		@include('restaurante.galerias.search')
	</div>
	<center><a href="galerias/create"><button class="btn btn-success">Nuevo</button></a></center>
</div>
<br><br><br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<center>
				<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				
					
					
				</thead>
               @foreach ($galeria as $gale)

			
					<tr>
					
				
					<p>
						<img src="{{asset('imagenes/galeria/'.$gale->imagen_gal)}}" alt="{{ $gale->imagen_gal}}" height="600px" width="600px" class="img-thumbnail">
					</p>
					
					<h4>{{ $gale->descripcion_gal}}</h4>
				

					<p>
						<a href="{{URL::action('GaleriaController@edit',$gale->id_gal)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$gale->id_gal}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</p>
					<br>
					<br>
					<br>
				</tr>
				@include('restaurante.galerias.modal')
				@endforeach
			</table></center>
		</div>
		{{$galeria->render()}}
	</div>
</div>

@endsection