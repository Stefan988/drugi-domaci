<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 12),
            'exam_id' => $this->faker->numberBetween(1, 30),
            'grade' => $this->faker->biasedNumberBetween(5, 10)
        ];
    }
}
