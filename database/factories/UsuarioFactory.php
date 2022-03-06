<?php

namespace Database\Factories;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsuarioFactory extends BaseFactory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return array_merge(parent::definition(), [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'data_verificacao_email' => now(),
            'tipo' => $this->faker->numberBetween(1, 2),
            'idade' => $this->faker->numberBetween(18, 70),
            'formacao' => $this->faker->text(),
            'senha' => $this->faker->password(),
            'remember_token' => Str::random(10),
        ]);
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'data_verificacao_email' => null,
            ];
        });
    }
}
