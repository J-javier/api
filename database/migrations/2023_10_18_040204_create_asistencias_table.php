<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_tipo_asistencia');
            $table->foreign('id_alumno')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_curso')->references('id')->on('cursos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_tipo_asistencia')->references('id')->on('tipo_asistencias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
