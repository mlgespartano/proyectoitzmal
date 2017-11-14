@extends ('layouts.adminadmin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Restaurante</h3>
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
			{!!Form::open(array('url'=>'restaurante/registro','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}


            
    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre_restaurante">Nombre</label>
            	<input type="text" name="nombre_resta" required value="{{old('nombre_resta')}}" class="form-control" placeholder="Nombre del Restaurante">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre_propietario">Propietario</label>
            	<input type="text" name="nombre_propietario" required value="{{old('nombre_propietario')}}" class="form-control" placeholder="Nombre del Propietario...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="telefono_resta">Telefono</label>
            	<input type="text" name="telefono_resta" required value="{{old('telefono_resta')}}" class="form-control" placeholder="Telefono del restaurante...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Direccion del Restaurante...">
            </div>
    	</div>
    
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="correo_resta">Correo</label>
                <input type="text" name="correo_resta" value="{{old('correo_resta')}}" class="form-control" placeholder="Correo del Restaurante...">
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