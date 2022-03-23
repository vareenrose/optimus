<?php

namespace Database\Factories;

use App\Models\Cars;
use App\Models\User;
use App\Models\CarTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
    protected $model = Cars::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $usersIDs = User::all()->pluck('id')->toArray();
        $cartypesIDs = CarTypes::all()->pluck('id')->toArray();

        return [
            'reg_no' => $this->faker->bothify('*******'),
            'year_of_manufacture' => $this->faker->year(),
            'car_types_id' => $this->faker->randomElement($cartypesIDs),
            'tonnage' => $this->faker->numberBetween(0,10000),
            'user_id' => $this->faker->randomElement($usersIDs)

        ];
    }
}
