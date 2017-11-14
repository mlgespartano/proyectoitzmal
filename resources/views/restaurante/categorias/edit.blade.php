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
    {!!Form::model($categoria,['method'=>'PUT','route'=>['restaurante.categorias.update',$categoria->id_cat]])!!}

        {{Form::token()}}



<div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre_cat" class="form-control" value="{{$categoria->nombre_cat}}">
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