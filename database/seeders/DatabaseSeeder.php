<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // php artisan make:seed (nome do seeder)
        // php artisan migrate:fresh --seed

        User::factory()->create([
            'first_name' => 'Lucas',
            'last_name' => 'Santos',
            'email' => 'test@example.com',
        ]);

        $this->call([
            JobSeeder::class,
            // Chama outros seeders aqui
        ]);
    }
}
