<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Replie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Replie::factory(5)->create();
    }
}
