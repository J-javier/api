<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    
    public function index()
    {
        $asistencia = new Asistencia();
        return $asistencia->all();
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        $asistencia->fecha =$request->fecha;
        $asistencia->id_alumno = $request->id_alumno;
        $asistencia->id_curso = $request->id_curso;
        $asistencia->id_tipo_asistencia = $request->id_tipo_asistencia;
        $asistencia->save();
        return 'La asistencia ha sido registra';
    }

    public function show(Asistencia $asistencia)
    {
        return ' from show asistencia';
    }

    public function edit(Asistencia $asistencia)
    {
        //
    }

    public function update(Request $request, Asistencia $asistencia)
    {
        return ' from update asistencia';
    }

    public function destroy(Asistencia $asistencia)
    {
        return ' from destroy asistencia';
    }
}
