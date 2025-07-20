<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => '$' . random_int(10, 99) . ',000',
            'location'=> 'Remote',
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Temporary']),
            'url' => fake()->url,
            'featured'=> false,
        ];
    }
}
