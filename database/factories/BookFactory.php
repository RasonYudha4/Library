<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Book::class;

        public function definition(): array
        {
            return [
                'title' => $this->faker->title,
                'content' => $this->faker->content,
                'published_at' => $this->faker->published_at,
                'created_at' => $this->faker->created_at,
                'updated_at' => $this->faker->updated_at
            ];
        }
}
