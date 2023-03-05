<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Giornoallenamento>
 */
class GiornoallenamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'giorno' => \Arr::random(['lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdi'])
        ];
    }
}
