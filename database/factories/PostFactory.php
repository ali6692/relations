<?php 
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;
 class PostFactory extends Factory
 {
    public function definition()
    {
        return[
            'title'=>$this->faker->paragraph(1),
            'description'=>$this->faker->paragraph(6),
            'user_id'=>\App\Models\User::all()->random()->id,
        ];
    }
 }
