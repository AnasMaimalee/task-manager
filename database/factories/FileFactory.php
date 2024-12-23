<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => $this->faker->word() . '.jpg', // Example file name
            'file_path' => 'uploads/' . $this->faker->uuid() . '.jpg', // Example file path
            'user_id' => User::factory(), // Assign a user to the file
        ];
    }
}
