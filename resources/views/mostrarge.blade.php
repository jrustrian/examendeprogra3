@extends('layouts.planilla')

@section('titulo', 'Consulta de genero')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Genero
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo de Genero</th>
            <th scope="col">Nombre del Genero</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($generos as $genero )
            <tr>
                <td>{{$genero->idgenero}}</td>
                <td>{{$genero->genero}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('registrarge')}}" class="btn btn-primary">Ingresar Genero</a>
@endsection
