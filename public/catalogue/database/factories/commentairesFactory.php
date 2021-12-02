<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class commentairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            
            'user-id' => rand(1, 10),
            'media-id' => rand(1, 10),
            'text'=>$this->faker->text(),
            
            

        ];
    }
}
