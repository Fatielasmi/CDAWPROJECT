<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class playListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'id'=>rand(1,10),
            'name' => $this->faker->unique()->word,
            'user_id' => rand(1, 10),
        ];
    }
}
