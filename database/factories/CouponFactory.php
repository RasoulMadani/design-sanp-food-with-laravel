<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->word,
            'persent' => $this->faker->numberBetween(10,30),
            'price' => $this->faker->numberBetween(10,30),
        ];
    }
}
