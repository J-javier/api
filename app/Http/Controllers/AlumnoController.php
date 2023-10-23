<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumno = new Alumno();
        return $alumno->all(); 
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre =$request->nombre;
        $alumno->apellido =$request->apellido;
        $alumno->correo =$request->correo;
        $alumno->direccion =$request->direccion;
        $alumno->telefono =$request->telefono;
        $alumno->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Alumno::where('id',$id)->get();
    }

    public function edit(Alumno $alumno)
    {
        //
    }
   
    public function update(Request $request, string $id)
    {
        $alumnos = Alumno::all();
        $alumno = $alumnos->find($id);
        $alumno->nombre =$request->nombre;
        $alumno->apellido =$request->apellido;
        $alumno->correo =$request->correo;
        $alumno->direccion =$request->direccion;
        $alumno->telefono =$request->telefono;
        $alumno->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function destroy(string $id)
    {
        $alumnos = Alumno::all();
        $alumno = $alumnos->find($id);
        $alumno->delete();
        return " El usuario ha sido eliminado exitosamente";
    }
}
