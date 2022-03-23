<?php

namespace Database\Seeders;

use App\Models\CarTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarTypes::create([
            'name' => 'PickUp'
        ]);
        CarTypes::create([
            'name' => 'Open Truck'
        ]);
        CarTypes::create([
            'name' => 'Refrigerated Truck'
        ]);
    }
}
