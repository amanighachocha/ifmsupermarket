<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'barcode'=> $this->faker->numberBetween(1000,100000),
            'price' => $this->faker->randomFloat(2,2000,50000),
            'quantity' => $this->faker->numberBetween(10,100),
            'category_id'=>$this->faker->numberBetween(1,5),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
