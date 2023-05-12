<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        static $id = 1;
        $category = Category::find($id);
        $id++;

        return [
            'category_id'   => $category->id,
            'author'        => fake()->name(),
            'title'         => fake()->word(),
            'content'       => fake()->sentences()
        ];
    }
}
