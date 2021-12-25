<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $faker->sentence(3),
            'description' => $faker->paragraph(3),
            'done' => false
        ];
    }
}
