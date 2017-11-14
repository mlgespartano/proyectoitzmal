    @extends('layouts.adminadmin')
    @section('contenido')
<div class="container">

    <div class="row">
        <div class="col-md-6">
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


<div class="row">
    <div class="col-md-6">
    {!!Form::model($restaurante,['method'=>'PUT','route'=>['restaurante.registro.update',$restaurante->id_restaurante]])!!}

        {{Form::token()}}



<div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre_resta" class="form-control" value="{{$restaurante->nombre_resta}}">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
                <label>Propietario</label>
                <input type="text" name="nombre_propietario" class="form-control" value="{{$restaurante->nombre_propietario}}">
             </div>

        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
             <label>Telefono</label>
            <input type="text" name="telefono_resta" class="form-control" value="{{$restaurante->telefono_resta}}">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
            <label>Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{$restaurante->direccion}}">
            </div>
        </div>
    
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
             <label>Correo</label>
             <input type="text" name="correo_resta" class="form-control" value="{{$restaurante->correo_resta}}">
             </div>

        </div>
    
    <div class="form-group">
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-warning" type="reset">Cancelar</button>
    </div>
    {!!Form::close()!!}
</div>
</div>
</div>

@endsection