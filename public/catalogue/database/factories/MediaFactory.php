<?php

namespace Database\Factories;
use Faker\Generator as FakerGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
            'category_id'=>rand(1,7),
          

            
        ];
    }
}