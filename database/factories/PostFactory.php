<?php

namespace Database\Factories;

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
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'is_published' => $this->faker->boolean(80),
            'published_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
