@extends('layouts.adminrecepcionista')
@section('contenido')

	<div class="container">
	<div class="row">
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
	
			{!!Form::model($solicitudes,['method'=>'PUT','route'=>['recepcionista.solicitud.update',$solicitudes->id_reserva]])!!}

			{{Form::token()}}
<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="tipo_reser">Tipo</label>
            	<input type="text" name="tipo_reser" required value="{{$solicitudes->tipo_reser}}" class="form-control">
            </div>
    	</div>
    	
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_cliente">Cliente</label>
                <input type="text" name="nombre_cliente" required value="{{$solicitudes->nombre_cliente}}" class="form-control">
            </div>
        </div>
        
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="tel">Telefono</label>
                <input type="text" name="tel" required value="{{$solicitudes->tel}}" class="form-control">
            </div>
        </div>
        
    	   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" name="correo" required value="{{$solicitudes->correo}}" class="form-control">
            </div>
        </div>
        
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" required value="{{$solicitudes->fecha}}" class="form-control">
            </div>
        </div>
        
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" required value="{{$solicitudes->hora}}" class="form-control">
            </div>
        </div>
        
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="num_pax">Personas</label>
                <input type="text" name="num_pax" required value="{{$solicitudes->num_pax}}" class="form-control">
            </div>
        </div>
        
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="direccion_banquete">Direccion</label>
                <input type="text" name="direccion_banquete" required value="{{$solicitudes->direccion_banquete}}" class="form-control">
            </div>
        </div>
        


				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-warning" type="reset">Cancelar</button>
				</div>

		
		</div>
	</div>

    {!!Form::Close()!!}
@endsection
