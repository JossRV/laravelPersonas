@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Crud con Laravel 8</h1>
                <a href="{{route('personas.create')}}" class="btn btn-outline-dark">Agregar persona</a>
                <table class="table mt-5 ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $item)
                            <tr>
                                <td>{{$item -> id}}</td>
                                <td>{{$item -> paterno}}</td>
                                <td>{{$item -> materno}}</td>
                                <td>{{$item -> nombre}}</td>
                                <td>
                                    <a href="{{ route('personas.edit',$item->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                                <td>
                                    <form action="{{route('personas.destroy',$item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection     