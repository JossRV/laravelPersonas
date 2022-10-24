@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{ route('personas.update',$item->id)}}" method="POST" class="form-control" autocomplete="off">
                    @csrf
                    @method("PUT")
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" autofocus value="{{$item->paterno }}">
            
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM" id="apellidoM" value="{{$item->materno }}">
            
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$item-> nombre}}">
            
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="{{ route('personas.index')}}" class="btn btn-info mt-3">Regresar</a>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection