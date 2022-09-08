<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{
    User, 
    Post,
};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $noteable = [
            User::class,
            Post::class,
        ];

        return [
            'url' => $this->faker->imageUrl(),
            'imagable_id' => $this->faker->numberBetween(1, 10),
            'imagable_type' => $this->faker->randomElement($noteable),
        ];
    }
}
