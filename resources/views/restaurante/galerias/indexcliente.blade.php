@extends ('layouts.admincliente')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h2>Imagenes de lugar</h2></center>  
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
               @foreach ($galeria as $gale)

			
					<tr>
					
				<!--<p>{{ $gale->id_gal}}</p>-->
					<p>
						<img src="{{asset('imagenes/galeria/'.$gale->imagen_gal)}}" alt="{{ $gale->imagen_gal}}" height="700px" width="700px" class="img-thumbnail">
					</p>
					
					
				
<font face="Comic Sans MS,arial" size="5">{{ $gale->descripcion_gal}}</font>
					
					<br>
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