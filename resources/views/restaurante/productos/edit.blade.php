@extends ('layouts.adminadmin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{ $producto->nombre_prod}}</h3>
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
			{!!Form::model($producto,['method'=>'PATCH','route'=>['restaurante.productos.update',$producto->id_prod],'files'=>'true'])!!}
            {{Form::token()}}

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if (($producto->imagen)!="")
                    <img src="{{asset('imagenes/productos/'.$producto->imagen)}}" height="300px" width="300px">
                @endif
            </div>
        </div>


    <div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre_prod">Nombre</label>
            	<input type="text" name="nombre_prod" required value="{{$producto->nombre_prod}}" class="form-control">
            </div>
    	</div>
    
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control" placeholder="Descripción del producto...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" value="{{$producto->precio}}" class="form-control" placeholder="Precio del producto...">
            </div>
        </div>

    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
    			<label>Categoría</label>
    			<select name="id cat" class="form-control">
    				@foreach ($categoria as $cat)
    					@if ($cat->id_cat==$producto->id_cat)
                       <option value="{{$cat->id_cat}}" selected>{{$cat->nombre_cat}}</option>
                       @else
                       <option value="{{$cat->id_cat}}">{{$cat->nombre_cat}}</option>
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