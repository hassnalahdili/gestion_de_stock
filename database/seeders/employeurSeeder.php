<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;

class employeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::factory(200)->create();
    }
}
