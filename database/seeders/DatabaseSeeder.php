<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

         User::factory()->create([
            'name' => 'Administrator',
             'email' => 'test@admin.com',
             'phone' => '237675066919',
             'user_type' => 0,
             'sold' => 0,
             'password' => bcrypt("123456789"),
         ]);
    }
}
