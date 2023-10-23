<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    
    public function index()
    {
        $docente = new Docente();
        return $docente->all(); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre =$request->nombre;
        $docente->apellido =$request->apellido;
        $docente->correo =$request->correo;
        $docente->direccion =$request->direccion;
        $docente->telefono =$request->telefono;
        $docente->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Docente::where('id',$id)->get();
    }

    public function edit(Docente $docente)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $docentes = Docente::all();
        $docente = $docentes->find($id);
        $docente->nombre =$request->nombre;
        $docente->apellido =$request->apellido;
        $docente->correo =$request->correo;
        $docente->direccion =$request->direccion;
        $docente->telefono =$request->telefono;
        $docente->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function destroy(string $id)
    {
        $docentes = Docente::all();
        $docente = $docentes->find($id);
        $docente->delete();
        return " El docente ha sido eliminado exitosamente";
    }
}
