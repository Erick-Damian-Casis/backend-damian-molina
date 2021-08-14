<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'available' => $this->faker->randomElement([true,false]),
            'city' => $this->faker->city(),
            'date' => $this->faker->date(),
            'driverLicense' => $this->faker->uuid(),
            'gmail' => $this->faker->email(),
            'lastName' => $this->faker->lastName(),
            'names' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
