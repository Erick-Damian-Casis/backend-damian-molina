<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Travel;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::factory(10)->create();
        Driver::factory(10)->create();
        Address::factory(10)->create();
        Travel::factory(10)->create();
    }
}
