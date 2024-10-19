<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\User;
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
        User::factory()->create([
            'first_name'=> 'John',
            'last_name'=> 'Doe',
            'email'=> 'test@example.com'
        ]);

        $this->call(jobseeder::class);
    }
}
