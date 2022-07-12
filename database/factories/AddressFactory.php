<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lat' => $this->faker->latitude(-90, 90),
            'lang' => $this->faker->latitude(),
            'textAddress' => $this->faker->text,
            'defaultAddress' => false,
        ];
    }
}
