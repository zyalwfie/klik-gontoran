<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl(),
            'title' => fake()->sentence(),
            'category_id' => Category::factory(),
            'content' => fake()->paragraph(),
            'owner' => fake()->name()
        ];
    }
}
