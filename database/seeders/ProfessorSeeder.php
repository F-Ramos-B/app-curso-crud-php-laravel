<?php

namespace Database\Seeders;

use App\Constants\EnumTipoUsuario;
use App\Models\Curso;
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
        /* $cursos = Curso::factory(1000)->make(); */
        Usuario::factory(50)->create([
            'tipo' => EnumTipoUsuario::PROFESSOR()->getCodigo()
        ])->each(function ($usuario) {
            $usuario->cursos()->saveMany(Curso::factory(rand(3, 10))->make());
        });

        /* foreach ($cursos as $curso) {
            $curso['usuario_id'] = $usuarios->random()->id;
            $curso->save();
        } */
    }
}
