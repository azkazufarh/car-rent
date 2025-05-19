<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImages;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Create 10 States
        State::factory(10)->create();

        // Create 20 Cities
        City::factory(20)->create();

        // Create 5 Fuel Types
        FuelType::factory()->create(['name' => 'Petrol']);
        FuelType::factory()->create(['name' => 'Diesel']);
        FuelType::factory()->create(['name' => 'Electric']);
        FuelType::factory()->create(['name' => 'Hybrid']);
        FuelType::factory()->create(['name' => 'Gas']);

        // Create 10 Makers and Models
        Maker::factory(10)->create()->each(function ($maker) {
            Model::factory(5)->create(['maker_id' => $maker->id]);
        });

        // Create 100 Cars
        Car::factory(100)->create()->each(function ($car) {
            CarImages::factory(5)->create([
                'car_id' => $car->id
            ]);
        });
    }
}
