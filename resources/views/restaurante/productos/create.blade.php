@extends ('layouts.adminadmin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Producto</h3>
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
			{!!Form::open(array('url'=>'restaurante/productos','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}


    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
        </div>

    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre_prod">Nombre</label>
            	<input type="text" name="nombre_prod" required value="{{old('nombre_prod')}}" class="form-control" placeholder="Nombre...">
            </div>
    	</div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del artículo...">
            </div>
        </div>

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" value="{{old('precio')}}" class="form-control" placeholder="Precio...">
            </div>
        </div>

       
    	    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Categoria</label>
                <select name="id_cat" class="form-control">
                    @foreach ($categoria as $cat)
                       <option value="{{$cat->id_cat}}">{{$cat->nombre_cat}}</option>
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