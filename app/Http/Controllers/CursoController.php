<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $curso = new Curso();
        return $curso->all();
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->save();
        return 'Tu curso ha sido creado';
    }

    public function show(Curso $curso)
    {
        return ' from show curso';
    }

    public function edit(Curso $curso)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $cursos = Curso::all();
        $curso = $cursos->find($id);
        $curso->nombre =$request->nombre;
        $curso->save();
        return 'El curso ha sido actualizado correctamente';
    }

    public function destroy(string $id)
    {
        $cursos = Curso::all();
        $curso = $cursos->find($id);
        $curso->delete();
        return ' El curso ha sido eliminado correctamente';
    }
}
