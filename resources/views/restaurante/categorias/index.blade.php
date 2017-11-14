@extends ('layouts.adminadmin')
@section ('contenido')
<div class="row">
	<div class="">
		<center><h2>Categorias</h2></center>
	</div>
	<br>
	<br>

</div>

<div class="row">
	<div class="">
		<div class="table-responsive">
			<center>
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
				
				</thead>
               @foreach ($categoria as $cat)
				<tr>
					<td>{{ $cat->id_cat}}</td>
					<td>{{ $cat->nombre_cat}}</td>
		
					
				   <td>
						<a href="{{URL::action('CategoriaController@edit',$cat->id_cat)}}"><button class="btn btn-info">Editar</button></a>
                        
					</td>
				</tr>
			
				
@include('restaurante.categorias.modal')
	@endforeach
			</table></center>
		</div>
		{{$categoria->render()}}

	</div>
</div>

@endsection
