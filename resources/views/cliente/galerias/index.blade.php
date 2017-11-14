@extends ('layouts.admininicio')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista en Galeria </h3>
		@include('cliente.galeria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<center>
				<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				
					
					
				</thead>
               @foreach ($galeria as $gale)

			
					<tr>
					
				<!--<p>{{ $gale->id_gal}}</p>-->
					<p>
						<img src="{{asset('imagenes/galeria/'.$gale->imagen_gal)}}" alt="{{ $gale->imagen_gal}}" height="300px" width="300px" class="img-thumbnail">
					</p>
					
					<h3>{{ $gale->descripcion_gal}}</h3>
				

					
					<br>
					<br>
					<br>
				</tr>
				
			</table></center>
		</div>
		{{$galeria->render()}}
	</div>
</div>

@endsection