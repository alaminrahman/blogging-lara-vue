<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{
    User,
    Category
};
use Str;

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
    public function definition()
    {
        return [
            'user_id' =>  User::factory(),
            'category_id' =>  Category::factory(),
            'title' => Str::random(),
            'description' => $this->faker->paragraph,
            'thumbnail' => $this->faker->imageUrl,
            'meta_title' => Str::random(),
            'meta_description' => $this->faker->paragraph,
        ];
    }
}
