<?php

namespace Database\Seeders;

use App\Models\job;
use Illuminate\Database\Seeder;

class jobseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        job::factory(200)->create();
    }
}
