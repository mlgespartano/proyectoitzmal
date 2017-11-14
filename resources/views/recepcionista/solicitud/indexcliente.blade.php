@extends('layouts.admincliente')
@section('contenido')


	<div class="row">
		<div  class="">
            <center><h3>Solicitud de Reserva</h3></center>
            <br>
            <br>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>

			@endif
		</div>
		</div>
			{!!Form::open(array('url'=>'recepcionista/solicitud','method'=>'POST'))!!}

			{{Form::token()}}
<div class="row">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_reser">Tipo</label>
            	<input type="text" name="tipo_reser" required value="{{old('tipo_reser')}}" class="form-control" placeholder="Tipo..">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre_cliente">Nombre completo</label>
            	<input type="text" name="nombre_cliente" required value="{{old('nombre_cliente')}}" class="form-control" placeholder="Cliente...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tel">Telefono</label>
            	<input type="text" name="tel" required value="{{old('tel')}}" class="form-control" placeholder="Telefono del cliente...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="correo">Correo</label>
            	<input type="email" name="correo" value="{{old('correo')}}" class="form-control" placeholder="Correo...">
            </div>
    	</div>
    	
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" value="{{old('fecha')}}" class="form-control" placeholder="Fecha...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" value="{{old('hora')}}" class="form-control" placeholder="Hora...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="num_pax">Personas</label>
                <input type="text" name="num_pax" value="{{old('num_pax')}}" class="form-control" placeholder="Numero de Personas...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion_banquete">Direccion</label>
                <input type="text" name="direccion_banquete" value="{{old('direccion_banquete')}}" class="form-control" placeholder="Direccion...">
            </div>
        </div>
</div>
				<div class="form-group" align="center">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-warning" type="reset">Cancelar</button>
				</div>



		
		</div>
	</div>

    {!!Form::Close()!!}
@endsection

