<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'name'=> fake()->sentence(),
            'description'=> fake()->paragraph(),
            'price'=> fake()->randomFloat(2,10000,3000000),
            'category_id'=> category::inRandomOrder()->first()->id,

            'url_image'=> fake()->imageUrl(600,400,'products',true)

        ];
    }
}
