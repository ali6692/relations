<?php 
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;
 class ImageFactory extends Factory
 {
    public function definition()
    {
        $noteable=[
            \App\Models\User::class,
            \App\Models\Post::class,
        ];
        return [
            'url'=>$this->faker->imageUrl($width=640, $height=480),
            'imageable_id'=>$this->faker->numberBetween(1,10),
            'imageable_type'=>$this->faker->randomElement($noteable),
        ];
    }
 }    
