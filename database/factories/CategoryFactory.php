<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'group' => 'restaurant',
        ];
    }
    public function suspended()
    {
        return $this->state(function (array $attributes) {
            return [
                'group' => 'food',
            ];
        });
    }
}
