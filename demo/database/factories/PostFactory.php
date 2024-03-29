<?php

namespace Database\Factories;

use Database\Seeders\WithTextFixtures;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    use WithTextFixtures;

    public function definition()
    {
        return [
            'title' => [
                'fr' => $this->faker->unique()->randomElement(static::$titlesFR),
                'en' => $this->faker->unique()->randomElement(static::$titlesEN),
            ],
            'content' => [
                'fr' => collect($this->faker->randomElements(static::$paragraphsFR, rand(1, 3)))->map(fn ($paragraph) => "<p>$paragraph</p>")->implode(''),
                'en' => collect($this->faker->randomElements(static::$paragraphsEN, rand(1, 3)))->map(fn ($paragraph) => "<p>$paragraph</p>")->implode(''),
            ],
            'state' => 'online',
            'published_at' => $this->faker->boolean(90)
                ? now()->subMinutes($this->faker->numberBetween(1, 60 * 24 * 50))
                : now()->addMinutes($this->faker->numberBetween(1, 60 * 24 * 50)),
        ];
    }
}
