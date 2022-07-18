<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class GhazaFactory extends Factory
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
            'ingredient' => $this->faker->text,
            'price' => $this->faker->numberBetween(100, 200)
        ];
    }
}
