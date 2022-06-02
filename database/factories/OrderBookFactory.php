<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\CustomerOrder;
use App\Models\OrderBook;

class OrderBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => CustomerOrder::factory(),
            'book_id' => Book::factory(),
            'book_name' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'count' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
