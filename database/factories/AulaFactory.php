<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends BaseFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return array_merge(parent::definition(), [
            'nome' => $this->faker->text(),
            'duracao' => $this->faker->numberBetween(4, 80)
        ]);
    }
}
