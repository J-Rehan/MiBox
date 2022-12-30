<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZipCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'initial_delivery' => $this->faker->randomDigit(),
            'initial_pickup' => $this->faker->randomDigit(),
            'final_delivery' => $this->faker->randomDigit(),
            'final_pick' => $this->faker->randomDigit(),
        ];
    }
}
