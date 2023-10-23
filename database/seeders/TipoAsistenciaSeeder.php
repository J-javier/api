<?php

namespace Database\Seeders;

use App\Models\TipoAsistencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoAsistencia::factory(3)->create();
    }
}
