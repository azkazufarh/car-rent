<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id'      => Maker::factory(),
            'model_id'      => Model::factory(),
            'year'          => $this->faker->year(),
            'price'         => $this->faker->numberBetween(10000, 50000),
            'vin'           => strtoupper($this->faker->bothify('??#####??###')),
            'mileage'       => $this->faker->numberBetween(5000, 100000),
            'car_type_id'   => CarType::factory(),
            'fuel_type_id'  => FuelType::factory(),
            'user_id'       => User::factory(),
            'city_id'       => City::factory(),
            'address'       => $this->faker->address,
            'phone'         => $this->faker->phoneNumber,
            'description'   => $this->faker->paragraph(3),
            'published_at'  => $this->faker->dateTimeThisYear()
        ];
    }
}
