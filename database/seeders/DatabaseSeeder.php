<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'is_admin' => 1,
            'fullname' => 'Prince Matungulu',
            'email' => 'philippe.mbambi@groupmcsit.fr',
            'password' => bcrypt('1234'),
            'phone' => "+243826686661",
        ]);
    }
}
