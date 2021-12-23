<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->sentence(2),
            'completed' => $faker->TRUE 
        ];
    }
}
