<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(),
            'content' => fake()->text(2048),
            'author' => fake()->name(),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
