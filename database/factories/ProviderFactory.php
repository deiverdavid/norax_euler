<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nit' => rand(1,100),
            'cedula' => rand(1, 1000),
            'business_name' => $this->faker->company(),
            'property_name' => $this->faker->sentence(),
            'name' => $this->faker->name(),
            'lastname1' => $this->faker->lastname(),
            'lastname2' => $this->faker->lastname(),
            'address' => $this->faker->address(),
            'phone_number1' => $this->faker->phoneNumber(),
            'phone_number2' => $this->faker->phoneNumber(),
            'fax' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
