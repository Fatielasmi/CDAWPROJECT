<?php

namespace Database\Factories;
use Faker\Generator as FakerGenerator;
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
            'id'=>rand(1,10),
            'name' => $this->faker->unique()->word, // A single unique word
            'category_id'=>rand(1,5),
            'path'=>'Your/Custom/Path/To/Factories',
            'director'=>$this->faker->name(),

            
        ];
    }
}