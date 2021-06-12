<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function registrar(){
        $generos = Genero::all();
        return view('formulario', compact('generos'));
    }
    public function guardar(Request $request){
        $data = request()->validate([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'carnet' => 'required|max:13',
            'direccion' => 'required|max:100',
            'telefono' => 'required|max:8',
            'genero' => 'required',
            'fecha' => 'required',
        ], [
            'nombre.required' => 'El campo nombre no debe estar vacio.',
            'apellido.required' => 'El campo apellido no debe estar vacio.',
            'carnet.required' => 'El campo carnet no debe estar vacio.',
            'direccion.required' => 'El campo direccion no debe estar vacio.',
            'telefono.required' => 'El campo telefono no debe estar vacio.',
            'genero.required' => 'El campo genero no debe estar vacio.',
            'fecha.required' => 'El campo fehca no debe estar vacio.',

            'carnet.max' => 'El carnet no puede tener más 13 caracteres.',
            'nombre.max' => 'El nombre no puede tener más 100 caracteres.',
            'apellido.max' => 'El apellido no puede tener más 100 caracteres.',
            'direccion.max' => 'La direccion no puede tener más 100 caracteres.',
            'telefono.max' => 'El telefono no puede tener más 8 caracteres.',
        ]);
        try{
            $estudiante= Estudiante::create([
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'carnet' => $data['carnet'],
                'direccion' => $data['direccion'],
                'telefono' => $data['telefono'],
                'genero' => $data['genero'],
                'fecha' => $data['fecha'],
            ]);
        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('registrar')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }
        return redirect()->route('registrar')->with('success', 'Registro realizado exitosamente');
    }

public function mostrar(){
        $estudiantes = DB::table('estudiante')
            ->join('genero','genero.idgenero','=','estudiante.genero')
            ->select('estudiante.*','genero.genero as genero')
            ->get();
        return view('consultaestudiante', compact('estudiantes'));

}

}
