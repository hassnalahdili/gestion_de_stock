<?php

namespace Database\Seeders;

use App\Models\composant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class composantseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        composant::factory(200)->create();

    }
}
