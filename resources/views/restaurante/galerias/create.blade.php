@extends ('layouts.adminadmin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Agregar en Galeria</h3>
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
			{!!Form::open(array('url'=>'restaurante/galerias','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
    

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen_gal">Imagen</label>
                <input type="file" name="imagen_gal" class="form-control">
            </div>
        </div>

       
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion_gal">Descripción</label>
                <input type="text" name="descripcion_gal" value="{{old('descripcion_gal')}}" class="form-control" placeholder="Descripción de la imagen...">
            </div>
        </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Restaurante</label>
                <select name="id_restaurante" class="form-control">
                    @foreach ($restaurante as $resta)
                       <option value="{{$resta->id_restaurante}}">{{$resta->nombre_resta}}</option>
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