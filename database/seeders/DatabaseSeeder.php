<?php

namespace Database\Seeders;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(CarTypesSeeder::class);
        User::factory(10)->create();
        Cars::factory(10)->create();
    }
}
