<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matricula = new Matricula();
        return $matricula->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->id_alumno = $request->id_alumno;
        $matricula->id_curso = $request->id_curso;
        $matricula->save();
        return 'El alumno ha sido asociado a un curso';
    }

    public function show(Matricula $matricula)
    {
        return ' from show matricula';
    }

    public function edit(Matricula $matricula)
    {
        //
    }

    public function update(Request $request, Matricula $matricula)
    {
        return ' hola desde el update de matricula';
    }

    public function destroy(Matricula $matricula)
    {
        return ' from destroy matricula';
    }
}
