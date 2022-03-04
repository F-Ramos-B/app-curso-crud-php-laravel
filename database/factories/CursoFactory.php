<?php

namespace Database\Factories;

use App\Models\User;
use App\Utils\EntityOrderedUUIDGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{

    protected $table = 'cursos';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => EntityOrderedUUIDGenerator::generate(),
            'nome' => $this->faker->text(),
            'descricao' => $this->faker->text(),
            /* 'usuario_id' => function () {
                return User::factory()->create();
            } */
        ];
    }
}
