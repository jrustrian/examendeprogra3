@extends('layouts.planilla')

@section('titulo', 'Resgistro de Estudiante')
@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Registro de Estudiante
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{ route('guardar') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>No. de Carnet</label>
                            <input type="number" name="carnet" id="carnet" maxlength="10" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number"  name="telefono" class="form-control" >
                        </div>
                    </div>
                </div>



                <!-- Mostrar las marcas de productos que están alamacenadas en la BD  -->
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Genero</label>
                            <select name="genero" class="form-control" >
                                <option value="">--Seleccione--</option>
                                @foreach( $generos as $genero)
                                    <option value="{{$genero->idgenero}}"> {{$genero->genero}}  </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" id="fecha" name="fecha" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route('mostrar')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
