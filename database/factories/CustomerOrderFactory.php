<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\CustomerOrder;

class CustomerOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'order_no' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'order_at' => $this->faker->dateTime(),
            'delivery_at' => $this->faker->dateTime(),
            'order_amount' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
