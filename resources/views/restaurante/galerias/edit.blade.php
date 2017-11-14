@extends ('layouts.adminadmin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Imagen: {{ $galeria->imagen_gal}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
{!!Form::model($galeria,['method'=>'PATCH','route'=>['restaurante.galerias.update',$galeria->id_gal],'files'=>'true'])!!}
            {{Form::token()}}




    <div class="row">

    
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen_gal">Imagen</label>
                <input type="file" name="imagen_gal" class="form-control">
                @if (($galeria->imagen)!="")
                    <img src="{{asset('imagenes/galeria/'.$galeria->imagen_gal)}}" height="300px" width="300px">
                @endif
            </div>
        </div>

    	

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion_gal">Descripción</label>
                <input type="text" name="descripcion_gal" value="{{$galeria ->descripcion_gal  }}" class="form-control" placeholder="Descripción de la imagen...">
            </div>
        </div>
        
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Restaurante</label>
                <select name="id_restaurante" class="form-control">
                    @foreach ($restaurante as $resta)
                        @if ($resta->id_restaurante==$galeria->id_resta)
                       <option value="{{$resta->id_resta}}" selected>{{$resta->nombre_resta}}</option>
                       @else
                       <option value="{{$resta->id_restaurante}}">{{$resta->nombre_resta}}</option>
                       @endif
                    @endforeach
                </select>
            </div>
        </div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>
			{!!Form::close()!!}		
            

@endsection