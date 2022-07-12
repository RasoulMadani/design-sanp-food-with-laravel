<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::select('id')->get()->random()->id,
            'name' => $this->faker->word,
            'account_payment' => $this->faker->numberBetween(100, 200),
        ];

    }
}
