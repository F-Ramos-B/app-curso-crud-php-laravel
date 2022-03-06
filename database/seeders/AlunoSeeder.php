<?php

namespace Database\Seeders;

use App\Constants\EnumTipoUsuario;
use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = Curso::all();

        Usuario::factory(200)->create([
            'tipo' => EnumTipoUsuario::ALUNO()->getCodigo()
        ])->each(function ($aluno) use ($cursos) {
            $aluno->cursosInscritos()->attach($cursos->random(10));
        });
    }
}
