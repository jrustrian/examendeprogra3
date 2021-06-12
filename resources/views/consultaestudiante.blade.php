@extends('layouts.planilla')

@section('titulo', 'Consulta de Estudiante')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Estudiante
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Carnet</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Genero</th>
            <th scope="col">Fecha de Nacimiento</th>

            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $estudiante )
            <tr>
                <td>{{$estudiante->idestudiante}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->apellido}}</td>
                <td>{{$estudiante->carnet}}</td>
                <td>{{$estudiante->direccion}}</td>
                <td>{{$estudiante->telefono}}</td>
                <td>{{$estudiante->genero}}</td>
                <td>{{$estudiante->fecha}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('registrar')}}" class="btn btn-primary">Ingresar Cliente</a>

@endsection
