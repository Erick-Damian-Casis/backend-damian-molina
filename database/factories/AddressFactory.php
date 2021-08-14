<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'endAddress' => $this->faker->latitude($min = -90, $max = 90),
            'startAddress' => $this->faker->latitude($min = -90, $max = 90),
        ];
    }
}
