<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Admin",
            'email' => "adminsampah@mail.com",
            'password' => Hash::make('adminsampahsalto098'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => "User1",
            'email' => "user1@mail.com",
            'password' => Hash::make('user'),
            'role' => 'user'
        ]);
        Article::factory(20)->create();
    }
}
