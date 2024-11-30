<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\File;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\TaskFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RolesAndPermissionsSeeder::class);

        // Create an admin user
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole('admin'); // Assign admin role

        // Create a manager user
        $manager = User::factory()->create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
        ]);
        $manager->assignRole('manager'); // Assign manager role

        // Create a regular user
        $user = User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
        ]);
        $user->assignRole('user'); //user

        $this->call([TasksSeeder::class]);

        $files = File::factory()->count(5)->create(); // Create 5 files
        $files->each(function ($file) {
            Comment::factory()->count(3)->create([
                'file_id' => $file->id, // Attach comments to this file
            ]);
        });
    }
}
