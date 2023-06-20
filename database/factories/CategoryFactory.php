<?php 
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;
 class CategoryFactory extends Factory
 {
    public function definition()
    {
        return[
            'name'=>$this->faker->sentence,
        ];
    }
 }
