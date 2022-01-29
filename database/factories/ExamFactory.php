<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $semester = $this->faker->numberBetween(1, 8);
        return [
            'name' => $this->faker->word(),
            'semester' =>  $semester,
            'espb' => $this->faker->numberBetween(3, 9),
            'mandatory' => $this->faker->boolean(95 - 6 * $semester)
        ];
    }
}
