<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function form(){

        return view('genero');
    }
    public function save(Request $request){
        $data = request()->validate([
            'nombrege'=>'required|max:75',
        ],[

            'nombrege.required'=>'El campo Genero no debe estar vacio.',

            'nombrege.max'=>'El Genero no puede tener más 75 caracteres.',

        ]);
        try{
            $generos= Genero::create([
                'genero'=>$data['nombrege'],
            ]);

        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('registrarge')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }

        return redirect()->route('registrarge')->with('success', 'Registro realizado exitosamente');

    }

    public function mostrarge()
    {
        $datos['generos']=Genero::paginate(10);
        return view('mostrarge',$datos);
    }

}
