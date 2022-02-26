<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'unit_measurement' => $this->faker->firstName(),
            'unit_measur_value' => rand(1, 1000),
            'id_category' => rand(1, 5),
            'trademark' => $this->faker->firstName(),
            'iva' => rand(0, 1),
            'value_iva' => rand(1, 50),
            'last_price' => rand(1, 2000),
            'utility' => rand(1, 50),
            'final_price' => rand(1, 2500),

        ];
    }
}
