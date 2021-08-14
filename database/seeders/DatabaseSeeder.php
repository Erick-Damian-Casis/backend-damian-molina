<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Driver;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        

                Driver::insert(array(
                    'availabled' => 1,
                    'city' => "Quito",
                    'date' => $request->input('date'),
                    'driverLicense' => $request->input('driverLicense'),
                    'gmail' => $request->input('gmail'),
                    'lastName' => $request->input('lastName'),
                    'names' => $request->input('names'),
                    'password' => $request->input('password'),
                    'phone' => $request->input('phone'),
                    'created_at' => new \DateTime()
                ));

    }
}
