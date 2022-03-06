<?php

namespace Database\Seeders;

use App\Constants\EnumTipoUsuario;
use App\Models\Aula;
use App\Models\Curso;
use App\Models\Topico;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::factory(5)->has(
            Curso::factory(rand(3, 10))->has(
                Aula::factory(rand(3, 10))->has(
                    Topico::factory(rand(3, 10))
                )
            )
        )->create(['tipo' => EnumTipoUsuario::PROFESSOR()->getCodigo()]);
    }
}
