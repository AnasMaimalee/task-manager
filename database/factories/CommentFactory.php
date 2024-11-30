<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_text' => $this->faker->sentence(),
            'user_id' => User::factory(), // Assign a user to the comment
            'file_id' => File::factory(), // Assign a file to the comment
        ];
    }
}
