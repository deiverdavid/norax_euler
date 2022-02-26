<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_product' => rand(1, 15),
            'id_user' => rand(1, 10),
            'quantity' => rand(1, 200),
            'price' => rand(1, 1500),
            'total' => rand(1, 200000),
            'discount' => rand(1, 50),

        ];
    }
}
