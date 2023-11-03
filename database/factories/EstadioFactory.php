<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estadio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estadio>
 */
class EstadioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}