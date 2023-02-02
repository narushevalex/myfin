<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class TeacherFactory extends Factory
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
            'start_work' => $this->faker->date(),
            'cash'=> rand(8000, 10000),
            'method_room' => rand(0, 1),
            'notepad_015' => rand(0, 1),
            'notepad_01' => rand(0, 1),
            'classroom_teacher' => rand(0, 1),
            'methodist' => rand(0, 1),
            'qualification' => rand(0, 3),
            'achieve' => rand(1,4),
            'remember_token' => rand(),
        ];
    }
}
