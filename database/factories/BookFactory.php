<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Category;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->randomNumber(),
            'category_id' => Category::factory(),
            'name' => $this->faker->name,
            'author' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'publisher' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
